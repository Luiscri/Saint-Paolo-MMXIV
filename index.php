<!DOCTYPE html>
<html lang="es">
  <head>
      <?php
        include "template/head.php";
      ?>
      <link rel="canonical" href="https://saintpaolommxiv.es">
  </head>

  <body>
    <header id="fullHeader">
        <?php
            include "template/navBar.php";
        ?>

        <div class="portada centerBoth">
            <picture class="portadaImg">
                <source class="portadaImg img-fluid" srcset="images/portada/inicio/portada-xl.jpg" media="(min-width: 1200px)">
                <source class="portadaImg img-fluid" srcset="images/portada/inicio/portada-l.jpg" media="(min-width: 992px)">
                <source class="portadaImg img-fluid" srcset="images/portada/inicio/portada-md.jpg" media="(min-width: 768px)">
                <source class="portadaImg img-fluid" srcset="images/portada/inicio/portada-tablet.jpg" media="(min-width: 480px)">
                <img class="portadaImg img-fluid" src="images/portada/inicio/portada-mobile.jpg" alt="Foto de portada"/>
            </picture>
            <div class="portadaLetras">
                Saint Paolo
                <p>MMXIV</p>
            </div>
        </div>
    </header>

    <main>

        <section class="my-5 text-center">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-8 centerVertical">
                        <div>
                            <img class="icon mb-3" src="images/icons/packageIcon.svg" alt="Paquete">
                            <h3 class="font-weight-bold">Envíos Express 48h</h3>
                            <img id="nacex" class="mb-2" src="images/NACEX.gif" alt="Logo NACEX">
                            <p class="mb-4">Compra tu prenda y recíbela en menos de 48 horas. Nos comprometemos a procesar tu pedido al siguiente día hábil de haberlo recibido para que puedas disfrutar del producto en un tiempo récord.</p>

                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <img id="cajasImg" class="img-fluid" src="images/cajas.jpg" alt="Cajas">
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="row text-center centerBoth bg-dark text-white">
                <div class="col-12 col-md-6 pr-0">
                    <img class="sideImg img-fluid" src="images/nuevaEditadaMirror.jpg" alt="Nuevo modelo 'Tape', puedes encontrarlo en la tienda">
                </div>
                <div class="col-12 col-md-6 my-5">
                    <div class="container">
                        <h4 class="font-weight-bold">¿Todavía no has visto nuestros nuevos diseños?</h4>
                        <p>Date una vuelta por nuestra tienda, seguro que encuentras algo que te llama la atención.</p>
                        <a class="btn btnTienda noDecoration text-white" href="tienda.php">Tienda</a>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="row text-center centerBoth bg-grey">
                <div class="col-12 col-md-6 my-5">
                    <div class="container">
                        <h4 class="font-weight-bold">¡Últimas unidades de la colección "España"!</h4>
                        <p>Introduce el siguiente código y llévatela con gastos de envío gratis. ¡No te quedes sin la tuya!</p>
                        <p class="mb-1">Código descuento:</p>
                        <input class="text-center bg-transparent discount" value="FREESHIPPING" readonly>
                    </div>
                </div>
                <div class="col-12 col-md-6 pl-0">
                    <img class="sideImg img-fluid" src="images/lydia2.jpg" alt="Modelo llevando nuestra sudadera con la bandera de España">
                </div>
            </div>
        </section>

        <section class="text-center my-5">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h4 class="font-weight-bold mb-3">Suscríbete a nuestro newsletter y sé el primero en enterarte de todas las novedades</h4>
                    </div>
                    <div class="col-12">
                        <form id="newsLetterForm" action="addNewsletter" method="post" data-toggle="validator" role="form">
                            <div class="form-group">
                                <input id="emailInput" type="email" class="form-control text-center centerHorizontal" name="email" placeholder="Correo electrónico"
                                           data-error="Por favor, introduce una dirección de correo electrónico válida"
                                           data-remote="validateEmail.php" required>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group">
                                <input type="checkbox" class="form-check-input" id="checkbox" name="checkbox"
                                       data-error="Debes aceptar esta casilla"
                                       data-remote="validateCheckbox.php" required>
                                <label class="form-check-label" for="checkbox">
                                    He leído y acepto la <a target="_blank" href="aspectos-legales.php#privacidad">Política de Privacidad</a>
                                </label>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="text-center mt-3">
                                <button type="submit" id="submit" class="btn">Enviar</button>
                            </div>
                        </form>
                        <div id="phpResponse" class="text-center mt-2"></div>
                    </div>
                </div>
            </div>
        </section>

    </main>

    <footer class="text-center bg-dark">
        <?php
            include "template/footer.php";
        ?>
    </footer>

    <!-- Web page main Scripts -->
    <?php
        include "template/scripts.php";
    ?>

    <!-- Ajax Form Script -->
    <script src="js/ajaxForm.js"></script>

    <!-- Script changing html title -->
    <script>
        $('title').html("Saint Paolo MMXIV");
    </script>

    <!-- JQuery Bootstrap Validator Plugin -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.9/validator.js"></script>
    <script>
        $(document).ready(function(){
            $('#newsLetterForm').validator();

            //Changing sideImg height
            var cw = $('.sideImg').width();
            $('.sideImg').css({'height':cw+'px'});
        });
    </script>

    <!-- Cookie Consent -->
    <?php
        include "template/cookieConsent.php";
    ?>

    <!-- Script Shopify cart -->
    <?php
        include "template/shoppingCart.php";
    ?>
  </body>
</html>
