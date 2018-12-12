<!DOCTYPE html>
<html lang="en">
  <head>
      <?php
        include "template/head.php";
      ?>
      <link rel="canonical" href="https://saintpaolommxiv.es/fotos">
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
                Fotos
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
                        <img src="images/icons/cameraIcon.svg" alt="Icono sudadera" class="icon">
                    </div>
                    <div class="col-4 col-md-5 centerVertical">
                        <div class="line"></div>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="container text-center">
                <div id="instafeed" class="row"></div>
                <button id="load-more" class="btn">Ver más</button>
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
        $('title').html("Fotos");
    </script>

    <!-- Cookie Consent -->
    <?php
        include "template/cookieConsent.php";
    ?>

    <!-- InstaFeed.min.js to import Instagram pics -->
    <script type="text/javascript" src="js/instafeed.min.js"></script>
    <script type="text/javascript">
        var $loadButton = $('#load-more');
        var feed = new Instafeed({
            // Función que se va a ejecutar después de cargar las imágenes
            after: function() {
                // Si no hay nada más que cargar oculta el botón
                if (!this.hasNext()) {
                    $loadButton.css("display", "none");
                }
            },
            get: 'user',
            userId: '1701692532',
            accessToken: '1701692532.1677ed0.c0d3e7a46eb04ef7ac0f370fa3194adf',
            limit: 9,
            resolution: 'low_resolution',
            template: '<div class="col-12 col-md-4 centerVertical mb-5"><a target="_blank" href="{{link}}"><img src="{{image}}"/></a></div>'
        });

        $loadButton.on('click', function () {
            feed.next();
        });

        feed.run();
    </script>

    <!-- Script Shopify cart -->
    <?php
        include "template/shoppingCart.php";
    ?>
  </body>
</html>
