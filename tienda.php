<!DOCTYPE html>
<html lang="en">
  <head>
      <?php
        include "template/head.php";
      ?>
      <link rel="canonical" href="https://saintpaolommxiv.es/tienda">
  </head>

  <body>
    <header>
        <?php
            include "template/navBar.php";
        ?>

        <!--
        <div class="portada centerBoth">
            <picture class="portadaImg">
                <source class="portadaImg img-fluid" srcset="images/portada/tienda/tienda-xl.jpg" media="(min-width: 1200px)">
                <source class="portadaImg img-fluid" srcset="images/portada/tienda/tienda-xl.jpg" media="(min-width: 992px)">
                <source class="portadaImg img-fluid" srcset="images/portada/tienda/tienda-xl.jpg" media="(min-width: 768px)">
                <source class="portadaImg img-fluid" srcset="images/portada/tienda/tienda-tablet.jpg" media="(min-width: 480px)">
                <img class="portadaImg img-fluid" src="images/portada/tienda/tienda-mobile.jpg" alt="Foto de portada"/>
            </picture>

            <div class="portadaLetras">
                Tienda
            </div>
        </div>
        -->
    </header>

    <main>

        <section id="navFill" class="text-center mb-5">
            <div class="container">
                <div class="row">
                    <div class="col-4 col-md-5 centerVertical">
                        <div class="line"></div>
                    </div>
                    <div class="col-4 col-md-2">
                        <img id="sudaderaIcon" src="images/icons/sudaderaIcon.svg" alt="Icono sudadera" class="icon">
                    </div>
                    <div class="col-4 col-md-5 centerVertical">
                        <div class="line"></div>
                    </div>
                </div>
             </div>
        </section>

        <section class="text-center fontBig">
            <div class="container">
                <div class="row">
                    <article class="col-12 col-md-6 centerBoth mb-5">
                        <div class="divFotos">
                            <a href="spg.php">
                                <img class="sudaderaImg doubleImgLeft" src="images/sudaderas/spgDoble.png" alt="Sudadera de España gris">
                            </a>
                            <a href="spg.php"><p class="mt-2">Sudadera España Gris</p></a>
                            <a href="spg.php"><p>35€</p></a>

                        </div>
                    </article>

                    <article class="col-12 col-md-6 centerBoth mb-5">
                        <div class="divFotos">
                            <a href="spn.php">
                                <img class="sudaderaImg doubleImgRight" src="images/sudaderas/spbDoble.png" alt="Sudadera de España azul marino">
                            </a>
                            <a href="spn.php"><p class="mt-2">Sudadera España Azul Marino</p></a>
                            <a href="spn.php"><p>35€</p></a>
                        </div>
                    </article>

                    <article class="col-12 col-md-6 centerBoth mb-5">
                        <div class="divFotos">
                            <a href="tapeg.php">
                                <img class="sudaderaImg doubleImgLeft" src="images/sudaderas/mangasgDoble.png" alt="Sudadera mangas verde">
                            </a>
                            <a href="tapeg.php"><p class="mt-2">Sudadera Tape Verde</p></a>
                            <a href="tapeg.php"><p>35€</p></a>
                        </div>
                    </article>

                    <article class="col-12 col-md-6 centerBoth mb-5">
                        <div class="divFotos">
                            <a href="tapen.php">
                                <img class="sudaderaImg doubleImgRight" src="images/sudaderas/mangasbDoble.png" alt="Sudadera mangas azul marino">
                            </a>
                            <a href="tapen.php"><p class="mt-2">Sudadera Tape Azul Marino</p></a>
                            <a href="tapen.php"><p>35€</p></a>
                        </div>
                    </article>

                    <article class="col-12 col-md-6 centerBoth mb-5">
                        <div class="divFotos">
                            <a href="zipg.php">
                                <img class="sudaderaImg doubleImgLeft" src="images/sudaderas/zipgDoble.png" alt="Sudadera cremallera verde">
                            </a>
                            <a href="tapen.php"><p class="mt-2">Sudadera Zip Verde</p></a>
                            <a href="tapen.php"><p>35€</p></a>
                        </div>
                    </article>

                    <article class="col-12 col-md-6 centerBoth mb-5">
                        <div class="divFotos">
                            <a href="zipn.php">
                                <img class="sudaderaImg doubleImgRight" src="images/sudaderas/zipnDoble.png" alt="Sudadera cremallera azul marino">
                            </a>
                            <a href="tapen.php"><p class="mt-2">Sudadera Zip Azul Marino</p></a>
                            <a href="tapen.php"><p>35€</p></a>
                        </div>
                    </article>
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
        $('title').html("Tienda");
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
