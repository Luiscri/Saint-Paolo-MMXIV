<?php
    require_once("restringido.php");

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

    $success = false;
    $email = sanitazeEmail($_POST['email']);

    if(!empty($email)){
        require_once 'conectar.php';

        try{
            $sql_delete = "DELETE FROM `emails` WHERE `email` = :email";
            $statement = $db->prepare($sql_delete);
            $statement->bindParam(':email', $email);
            $statement->execute();

            $nfilas = $statement->rowCount();
            if($nfilas > 0){
                $success = true;
            }
        }catch(Exception $error){
            die("Error conexión BBDD " . $error->getMessage());
        }

    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        include "template/head.php";
    ?>
</head>

<body>
<header>
    <?php
        require("template/adminNavbar.php");
    ?>
</header>

<main class="h-100">
    <div class="container h-100">
        <div class="row text-center centerBoth h-100">
            <div class="col-12 col-md-6 text-center">
                <?php
                    if($success){
                        ?>
                        <section class="text-center mb-5">
                            <div class="container">
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
                        </section>
                        <h3 class="mt-3 mb-2 font-weight-bold">Email eliminado con éxito</h3>
                        <p>El email '<?php echo $email; ?>' ha sido eliminado con éxito de la base de datos y no volverá a recibir ningún correo del newsletter.</p>
                        <?php
                    }else{
                        ?>
                        <section class="text-center mb-5">
                            <div class="container">
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
                        </section>
                        <h3 class="mt-3 mb-2 font-weight-bold">Error eliminando el email</h3>
                        <p>Ha habido un error eliminando el email '<?php echo $email; ?>' de la base de datos. Puede que dicho email no se encuentre en la BBDD o que haya habido un error
                        al ejecutar el comando. Por favor, asegúrese de que ha escrito correctamente el correo y vuelva a intentarlo.</p>
                        <?php
                    }
                ?>
            </div>
        </div>
    </div>
</main>

<!-- Web page main Scripts -->
<?php
    include "template/scripts.php";
?>

<!-- Script for changing navBar active li and charhing DB from table -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.9/validator.js"></script>
<script>
    $(document).ready(function () {
        // Ejemplo URL http://domain.com/page.html
        var currentLocation = window.location.href.split('/');
        var pagePortion = (currentLocation[currentLocation.length - 1]).split('.php');
        var page = pagePortion[0];
        if(page == "deleteNewsletter"){
            page = "showNewsletter";
        }
        $('.navbar .nav-link[href*="' + page + '"]').parent().addClass('active'); //El *= es para que valga con que lo contenga en vez de que tenga que ser igual
    });
</script>

<!-- Script changing html title -->
<script>
    $('title').html("Panel de Control");
</script>
</body>
</html>
