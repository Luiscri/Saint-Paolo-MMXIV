<!DOCTYPE html>
<html lang="en">
  <head>
      <?php
        include "template/head.php";
      ?>
      <link rel="canonical" href="https://saintpaolommxiv.es/contacto">
  </head>

  <body class="h-auto">
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

        <section id="navFill" class="text-center mb-5">
            <div class="container">
                <div class="row">
                    <div class="col-4 col-md-5 centerVertical">
                        <div class="line"></div>
                    </div>
                    <div class="col-4 col-md-2">
                        <img src="images/icons/formularioIcon.svg" alt="Icono formulario" class="icon">
                    </div>
                    <div class="col-4 col-md-5 centerVertical">
                        <div class="line"></div>
                    </div>
                </div>
            </div>
        </section>

        <?php if(isset($_COOKIE["contact"])){
            $cookie = json_decode($_COOKIE["contact"]);
            $time = $cookie->expiry;
            $timeToExpiration = $time - time();
            $minutes = intdiv($timeToExpiration, 60);
            if($minutes == 0){
                $minutes = 1;
            }
        ?>

            <div class="container text-center mb-5">
                <p class="fontBig">Por favor, espera <?php echo $minutes; ?> minutos hasta volver a contactarnos</p>
                <p>Por motivos de seguridad sólo permitimos que nuestros clientes nos envíen un correo cada 10 minutos.</p>
                <p>Sentimos las molestias.</p>
            </div>

            <?php
        }else{
        ?>
            <section>
                <div class="container text-center mb-4">
                    <span class="fontBig">¿Tienes algo que decirnos?</span>
                    <p>Rellena el siguiente formulario, ¡estaremos encantados de resolver cualquier duda o incoveniente
                        que haya podido surgirte!</p>
                </div>
            </section>

            <section>
                <div class="container row centerHorizontal">
                    <div class="col-12 col-md-6 centerHorizontal">
                        <form id="contactForm" action="submit" method="post" data-toggle="validator" role="form">
                            <div class="form-group form-row">
                                <label class="fontBig ml-2" for="name">Nombre (*)</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Tu nombre"
                                       data-error="Por favor, introduce tu nombre para saber cómo dirigirnos hacia ti"
                                       data-remote="validateName.php" required>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group form-row">
                                <label class="fontBig ml-2" for="email">E-mail (*)</label>
                                <input type="email" class="form-control" id="email" name="email"
                                       placeholder="Tu correo electrónico"
                                       data-error="Por favor, introduce una dirección de correo electrónico válida para que podamos responderte"
                                       data-remote="validateEmail.php" required>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group form-row">
                                <label class="fontBig ml-2" for="topic">Asunto</label>
                                <input type="text" class="form-control" id="topic" name="topic"
                                       placeholder="Asunto del correo">
                            </div>
                            <div class="form-group form-row">
                                <label class="fontBig ml-2" for="message">Mensaje (*)</label>
                                <textarea type="text" class="form-control" id="message" name="message" rows="10"
                                          data-error="¿No quieres decirnos nada?"
                                          data-remote="validateMessage.php" required></textarea>
                                <div class="help-block with-errors"></div>
                            </div>

                            <div class="form-group ml-3">
                                <input type="checkbox" class="form-check-input" id="checkbox" name="checkbox"
                                       data-error="Debes aceptar esta casilla"
                                       data-remote="validateCheckbox.php" required>
                                <label class="form-check-label" for="checkbox">
                                    He leído y acepto la <a target="_blank" href="aspectos-legales.php#privacidad">Política de Privacidad</a>
                                </label>
                                <div class="help-block with-errors"></div>
                            </div>

                            <div class="g-recaptcha centerBoth" data-sitekey="6LfMVFYUAAAAACVR9n0xc7aviSTrK7EIdaxyMf_8"
                                 data-callback="enableSubmit"></div>

                            <div class="text-center mt-3">
                                <button type="submit" id="submit" class="btn" disabled>Enviar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </section>

        <?php } ?>

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

    <!-- JQuery Bootstrap Validator Plugin -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.9/validator.js"></script>
    <script>
        $(document).ready(function(){
            $('#contactForm').validator();
        });
    </script>

    <!-- Script reCaptcha -->
    <script src='https://www.google.com/recaptcha/api.js?hl=es'></script>
    <script>
        function enableSubmit() {
            document.getElementById('submit').disabled = false;
        }
    </script>

    <!-- Script Shopify cart -->
    <?php
        include "template/shoppingCart.php";
    ?>
  </body>
</html>
