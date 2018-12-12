<?php
    header('Content-type: application/json');

    $email;
    $privacy;
    $success = false;

    $errors = array();
    $data = array();

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $email = $_POST['email'];
        $privacy = $_POST['checkbox'];

        //Comprobamos si ha aceptado el checkbox
        if(!$privacy){
            $errors['email'] = "Debe aceptar la política de privacidad";
        }

        //Lee los valores, los sanea y los valida
        if(empty($errors)){
            if(empty($email)){
                $errors['email'] = "Debe escribir una dirección de correo";
            }else{
                $email = filter_var($email, FILTER_SANITIZE_EMAIL);
                if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                    $errors['email'] = "Por favor, introduce una dirección de correo electrónico válida";
                }
            }
        }


        //Comprobamos si ese correo ya está en la base de datos
        if(empty($errors)){
            require_once 'conectar.php';

            try{
                $sql = "SELECT `email` FROM `emails` WHERE `email` = :email";
                $statement = $db->prepare($sql);
                $statement->bindParam(':email', $email);
                $statement->execute();

                $alreadyAdded;
                while ($fila = $statement->fetch()) {
                    $alreadyAdded = $fila['email'];
                }

                if(!empty($alreadyAdded)){
                    $errors['email'] = "Ya se encuentra suscrito a nuestro newsletter, no hace falta que lo haga de nuevo";
                }
            }catch(Exception $error) {
                echo "Fallo al insertar " . $error->getMessage();
            }
        }

        //Comprobamos si ya ha registrado algún email desde ese ordenador
        if(empty($errors)) {
            if (isset($_COOKIE["newsletter"])) {
                $errors['email'] = "Ya ha registrado un correo en nuestro newsletter. Hay una limitación de un suscriptor por ordenador";
            }
        }

        //Si ha habido algún error no añadimos nada, si no ha habido ninguno añadimos el email a la BBDD
        if(!empty($errors)){
            $data['success'] = false;
            $data['errors'] = $errors;
        }else{
            try {
                $sql_insert = "INSERT INTO `emails` (`id`, `email`) VALUES (NULL, :email)";
                $statement = $db->prepare($sql_insert);
                $statement->bindParam(':email', $email);
                $statement->execute();

                $nfilas = $statement->rowCount();
                if($nfilas > 0){
                    $data['success'] = true;

                    //Añadimos una cookie para que no se suscriba más veces. La cookie caduca en 5 meses
                    setcookie("newsletter","added", time() + 150 * 24 * 60 * 60);
                }else{
                    $data['success'] = false;
                    $errors['email'] = "Error al introducir en la base de datos, por favor inténtelo de nuevo";
                    $data['errors'] = $errors;
                }
            }catch(Exception $error) {
                echo "Fallo al insertar " . $error->getMessage();
            }
        }

        echo json_encode($data);
    }
?>