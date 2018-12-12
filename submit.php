<?php
    define('RECIPIENT_NAME', 'Saint Paolo MMXIV');
    define('RECIPIENT_ADDRESS', '****');

    function sanitazeEmail($email){
        if(empty($email)){
            return "";
        }
        $sanitized = filter_var($email, FILTER_SANITIZE_EMAIL);
        if(filter_var($sanitized, FILTER_VALIDATE_EMAIL)){
            return $sanitized;
        }
        return "";
    }

    function sanitazeString($str){
        if(empty($str)){
            return "";
        }
        return filter_var($str, FILTER_SANITIZE_STRING);
    };

    $recaptcha = $_POST["g-recaptcha-response"];

    $url = 'https://www.google.com/recaptcha/api/siteverify';
    $data = array(
        'secret' => '****',
        'response' => $recaptcha
    );
    $options = array(
        'http' => array (
            'method' => 'POST',
            'content' => http_build_query($data)
        )
    );
    $context  = stream_context_create($options);
    $verify = file_get_contents($url, false, $context);
    $captchaSuccess = json_decode($verify);

    $emailSuccess = false;
    if ($captchaSuccess->success) {
        //Recuperamos valores y los sanamos
        $senderName = sanitazeString($_POST['name']);
        $senderEmail = sanitazeEmail($_POST['email']);
        $messageTopic = sanitazeString($_POST['topic']);
        $messageBody = sanitazeString($_POST['message']);
        $privacy = $_POST['checkbox'];

        //Comprobamos si han escrito algún topic y si no ponemos uno por defecto
        if(empty($messageTopic)){
            $messageTopic = "Mensaje página web";
        }

        //Si existen los valores required y pasan las pruebas de saneo, enviamos el mensaje
        if(!empty($senderName) && !empty($senderEmail) && !empty($messageBody) && $privacy){
            require("PHPMailer/PHPMailerAutoload.php");

            //Ajustamos los parámetros para la autentificación SMTP
            $mail = new PHPMailer();
            $mail->CharSet    = 'UTF-8';
            $mail->isSMTP();
            $mail->Host       = "****";
            $mail->SMTPAuth   = true;
            $mail->SMTPSecure = "tls";
            $mail->Port       = 0;
            $mail->Username   = "****";
            $mail->Password   =  "****";
            $mail->isHTML(true);

            //Ajustamos los parámetros del correo
            $mail->setFrom(RECIPIENT_ADDRESS, RECIPIENT_NAME); //Tenemos que enviarlo desde un correo alojado en el servidor
            $mail->addAddress(RECIPIENT_ADDRESS, RECIPIENT_NAME);
            $mail->Subject = $messageTopic;
            $mail->Body = "<span style='color: red;'>Mensaje de $senderName < $senderEmail > </span> <br><br>" . $messageBody;

            //Enviamos
            $emailSuccess = $mail->Send();

            //Añadimos una cookie para que solo puedan enviar un mensaje cada 10 minutos
            if($emailSuccess){
                $expiry = time() + 10 * 60;
                $cookieData = (object) array( "data" => "sent", "expiry" => $expiry );
                setcookie("contact",json_encode($cookieData), $expiry);
            }
        }
    }else {
        //No hacemos nada, no se actualizará la varialbe $emailSucess y se cargará la página indicando que ha habido un error
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        include "template/head.php";
    ?>
    <link rel="canonical" href="https://saintpaolommxiv.es/submit">
</head>

<body style="height: auto;">
    <header>
        <?php
            include "template/navBar.php";
        ?>

        <!--
        <div class="portada centerBoth">
            <picture class="portadaImg">
                <source class="portadaImg img-fluid" srcset="images/portada/contacto/contacto-xl.jpg" media="(min-width: 1200px)">
                <source class="portadaImg img-fluid" srcset="images/portada/contacto/contacto-l.jpg" media="(min-width: 992px)">
                <source class="portadaImg img-fluid" srcset="images/portada/contacto/contacto-md.jpg" media="(min-width: 768px)">
                <source class="portadaImg img-fluid" srcset="images/portada/contacto/contacto-tablet.jpg" media="(min-width: 480px)">
                <img class="portadaImg img-fluid" src="images/portada/contacto/contacto-mobile.jpg" alt="Foto de portada"/>
            </picture>

            <div class="portadaLetras">
                Contacto
            </div>
        </div>
        -->
    </header>

    <main class="mb-4">
        <section class="mb-5">
            <?php
                if($emailSuccess && $captchaSuccess){
                    ?>
                        <div id="navFill" class="text-center mb-5 container">
                            <div class="row">
                                <div class="col-4 col-md-5 centerVertical">
                                    <div class="line"></div>
                                </div>
                                <div class="col-4 col-md-2">
                                    <img src="images/icons/tick.svg" alt="Icono sudadera" class="icon">
                                </div>
                                <div class="col-4 col-md-5 centerVertical">
                                    <div class="line"></div>
                                </div>
                            </div>
                        </div>
                        <div class="container text-center">
                            <p class="fontBig">¡Gracias por tu mensaje!</p>
                            <p>Nos pondremos en contacto contigo con la mayor brevedad posible.</p>
                        </div>
                    <?php
                }else{
                    ?>
                        <div id="navFill" class="text-center mb-5 container">
                            <div class="row">
                                <div class="col-4 col-md-5 centerVertical">
                                    <div class="line"></div>
                                </div>
                                <div class="col-4 col-md-2">
                                    <img src="images/icons/error.svg" alt="Icono sudadera" class="icon">
                                </div>
                                <div class="col-4 col-md-5 centerVertical">
                                    <div class="line"></div>
                                </div>
                            </div>
                        </div>
                        <div class="container text-center">
                            <p class="fontBig">¡Ups! Parece ser que ha habido un problema enviando el correo...</p>
                            <p>Por favor, prueba a enviarlo de nuevo o envíanos tu mensaje directamente  a la dirección 'contacto@saintpaolommxiv.es'.</p>
                            <p>Sentimos las molestias.</p>
                        </div>
                    <?php
                }
            ?>

        </section>
    </main>

    <footer class="text-center">
        <?php
            include "template/footer.php";
        ?>
    </footer>

    <!-- Web page main Scripts -->
    <?php
        include "template/scripts.php";
    ?>

    <!-- Script changing html title -->
    <script>
        $('title').html("Contacto");
    </script>

    <!-- Cookie Consent -->
    <?php
        include "template/cookieConsent.php";
    ?>

    <!-- Script Shopify Cart -->
    <?php
        include "template/shoppingCart.php";
    ?>
</body>
</html>
