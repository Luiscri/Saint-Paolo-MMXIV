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
                        <img src="images/icons/formularioIcon.svg" alt="Icono sudadera" class="icon">
                    </div>
                    <div class="col-4 col-md-5 centerVertical">
                        <div class="line"></div>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="container text-center mb-4">
                <span class="fontBig">¿Tienes algo que decirnos?</span>
                <p>Rellena el siguiente formulario, ¡estaremos encantados de resolver cualquier duda o incoveniente que haya podido surgirte!</p>
            </div>
        </section>

        <section>
            <div class="container row centerHorizontal">
                <div class="col-12 col-md-6 centerHorizontal">
                    <form action="submit.php" method="post" class="needs-validation" novalidate>
                        <div class="form-group form-row">
                            <label class="fontBig ml-2" for="name">Nombre (*)</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Tu nombre" required>
                            <div class="invalid-feedback">
                                Por favor, introduce tu nombre para saber cómo dirigirnos hacia ti
                            </div>
                        </div>
                        <div class="form-group form-row">
                            <label class="fontBig ml-2" for="email">E-mail (*)</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Tu correo electrónico" required>
                            <div class="invalid-feedback">
                                Por favor, introduce una dirección de correo electrónico para que podamos responderte
                            </div>
                        </div>
                        <div class="form-group form-row">
                            <label class="fontBig ml-2" for="topic">Asunto</label>
                            <input type="text" class="form-control" id="topic" name="topic" placeholder="Asunto del correo">
                        </div>
                        <div class="form-group form-row">
                            <label class="fontBig ml-2" for="message">Mensaje (*)</label>
                            <textarea type="text" class="form-control" id="message" name="message" rows="10" required></textarea>
                            <div class="invalid-feedback">
                                ¿No tienes nada que decirnos?
                            </div>
                        </div>

                        <div class="g-recaptcha centerBoth" data-sitekey="6LfMVFYUAAAAACVR9n0xc7aviSTrK7EIdaxyMf_8" data-callback="enableSubmit"></div>

                        <div class="text-center mt-3">
                            <button type="submit" id="submit" class="btn" disabled>Enviar</button>
                        </div>
                    </form>
                </div>
            </div>
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

    <!-- Script reCaptcha -->
    <script src='https://www.google.com/recaptcha/api.js?hl=es'></script>
    <script>
        function enableSubmit() {
            document.getElementById('submit').disabled = false;
        }
    </script>

    <!-- Starter JavaScript for disabling form submissions if there are invalid fields -->
    <script>
        (function() {
            'use strict';
            window.addEventListener('load', function() {
                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                var forms = document.getElementsByClassName('needs-validation');
                // Loop over them and prevent submission
                var validation = Array.prototype.filter.call(forms, function(form) {
                    form.addEventListener('submit', function(event) {
                        if (form.checkValidity() === false) {
                            event.preventDefault();
                            event.stopPropagation();
                        }
                        form.classList.add('was-validated');
                    }, false);
                });
            }, false);
        })();
    </script>

    <!-- Script Shopify cart -->
    <?php
        include "template/shoppingCart.php";
    ?>
  </body>
</html>
