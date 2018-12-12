<?php
    define('SENDER_NAME', 'Saint Paolo MMXIV');
    define('SENDER_ADDRESS', 'contacto@saintpaolommxiv.es');

    $topic = $_REQUEST['topic'];
    $message = $_REQUEST['message'];

    $success = false;
    if(!empty($message) && !empty($topic)){
        require("PHPMailer/PHPMailerAutoload.php");

        //Ajustamos los parámetros para la autentificación SMTP
        $mail = new PHPMailer();
        $mail->CharSet    = 'UTF-8';
        $mail->isSMTP();
        $mail->Host       = "****";
        $mail->SMTPAuth   = true;
        $mail->SMTPSecure = "tls";
        $mail->Port       = 0;
        $mail->Username   = "contacto@saintpaolommxiv.es";
        $mail->Password   =  "****";
        $mail->isHTML(true);

        //Ajustamos los parámetros del correo
        $mail->setFrom(SENDER_ADDRESS, SENDER_NAME);
        $mail->Subject = $topic;
        $mail->Body = $message;
        $mail->AddEmbeddedImage('images/circuloNegroPeq.png', 'logo_2u');

        require_once 'conectar.php';
        $sql = "SELECT `email` FROM `emails`";
        $statement = $db->prepare($sql);
        $statement->execute();

        while ($fila = $statement->fetch()) {
            if(!empty($fila['email'])){
                $mail->addAddress($fila['email']);
                //Enviamos
                $success = $mail->Send();
                $mail->clearAllRecipients();
            }
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
                    <h3 class="mt-3 mb-2 font-weight-bold">Correo enviado con éxito</h3>
                    <p>Todos los suscriptores del newsletter han recibido el email satisfactoriamente.</p>
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
                    <h3 class="mt-3 mb-2 font-weight-bold">Error enviando el correo</h3>
                    <p>Ha habido un error eliminando el email a los suscriptores. Por favor, asegúrese de que ha escrito correctamente el correo y vuelva a intentarlo.</p>
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
        if(page == "emailNewsletter"){
            page = "sendNewsletter";
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
