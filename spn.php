<!DOCTYPE html>
<html lang="en">
  <head>
      <?php
        include "template/head.php";
      ?>
      <link rel="canonical" href="https://saintpaolommxiv.es/spn">
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
                        <img src="images/icons/sudaderaIcon.svg" alt="Icono sudadera" class="icon">
                    </div>
                    <div class="col-4 col-md-5 centerVertical">
                        <div class="line"></div>
                    </div>
                </div>
             </div>
        </section>

        <section>
            <div class="container">
                <div class="row mb-5">
                    <div class="col-12 resize">
                        <a class="mr-1 noDecoration" href="tienda.php">Tienda</a> > <a class="mx-1 noDecoration" href="tienda.php">Sudaderas</a> > <span class="ml-1">Sudadera España Azul Marino</span>
                    </div>
                </div>
            </div>
        </section>

        <section class="mb-5">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-4 centerBoth">
                        <div class="zoom">
                            <div id="img1" class="mb-2">
                                <img src="images/sudaderas/spb.jpeg" id="mainImg" width="300" height="400" alt="Sudadera Gris España"/>
                            </div>
                            <div class="text-center">
                                <img src="images/sudaderas/spb.jpeg" class="thumbnail mr-1" id="thumbnail-1" width="120" height="160">
                                <img src="images/sudaderas/spb2.jpeg" class="thumbnail" id="thumbnail-2" width="120" height="160">
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-8 centerVertical mt-4">
                        <div class="text-center">
                            <p class="fontBig">Sudadera España Azul Marino - 35€</p>
                        </div>

                        <div id="accordion" class="mt-3">
                            <div class="card">
                                <div class="card-header bg-dark text-white p-0" id="headingOne">
                                    <h5 class="mb-0 fontBig text-center p-3" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Descripción
                                    </h5>
                                </div>

                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                                    <div class="card-body">
                                        <p>Sudadera de manga montada con bandera de España serigrafiada en el frontal y el logotipo de nuestra marca en la parte trasera.</p>
                                        <ul>
                                            <li>80% algodón - 20% poliéster</li>
                                            <li>Mangas montadas</li>
                                            <li>Cuello y dobladillo inferior en canalé con elastán</li>
                                            <li>Corte moderno ajustado</li>
                                            <li>Costuras laterales</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header bg-dark text-white p-0" id="headingTwo">
                                    <h5 class="mb-0 fontBig text-center p-3" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Encuentra tu talla
                                    </h5>
                                </div>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                    <div class="card-body">
                                        <img src="images/guiaTallas.jpg" alt="Guía de tallas">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Botón de compra -->
                        <div id="product-component-74a39bd34c4" class="centerHorizontal mt-5"></div>
                    </div>
                </div>
            </div> <!-- .container -->
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

    <!-- JavaScript functions for the thumbnails -->
    <script type="text/javascript" src="js/shop.js"></script>

    <!-- ZoomMaster js File and Initialization -->
    <script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
    <script src="js/jquery.zoom.min.js"></script>
    <script type="text/javascript">
        $(function(){
            $("#thumbnail-1").on('click', function(){
                changeImage("images/sudaderas/spb.jpeg");
            });

            $("#thumbnail-2").on('click', function(){
                changeImage("images/sudaderas/spb2.jpeg");
            });

            $("#img1").zoom();
        });
    </script>

    <!-- Script changing html title -->
    <script>
        $('title').html("Tienda - SP Navy");
    </script>

    <!-- Cookie Consent -->
    <?php
        include "template/cookieConsent.php";
    ?>

    <!-- Script Shopify Buy Button -->
    <script type="text/javascript">
        /*<![CDATA[*/

        (function () {
            var scriptURL = 'https://sdks.shopifycdn.com/buy-button/latest/buy-button-storefront.min.js';
            if (window.ShopifyBuy) {
                if (window.ShopifyBuy.UI) {
                    ShopifyBuyInit();
                } else {
                    loadScript();
                }
            } else {
                loadScript();
            }

            function loadScript() {
                var script = document.createElement('script');
                script.async = true;
                script.src = scriptURL;
                (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(script);
                script.onload = ShopifyBuyInit;
            }

            function ShopifyBuyInit() {
                var client = ShopifyBuy.buildClient({
                    domain: 'saint-paolo-mmxiv.myshopify.com',
                    apiKey: '2774f46f88a1cf141255f3a6652e777c',
                    appId: '6',
                });

                ShopifyBuy.UI.onReady(client).then(function (ui) {
                    ui.createComponent('product', {
                        id: [651221860415],
                        node: document.getElementById('product-component-74a39bd34c4'),
                        moneyFormat: '%E2%82%AC%7B%7Bamount_with_comma_separator%7D%7D',
                        options: {
                            "product": {
                                "variantId": "all",
                                "width": "240px",
                                "contents": {
                                    "img": false,
                                    "imgWithCarousel": false,
                                    "title": false,
                                    "variantTitle": false,
                                    "price": false,
                                    "description": false,
                                    "buttonWithQuantity": false,
                                    "quantity": false
                                },
                                "text": {
                                    "button": "AÑADIR AL CARRITO"
                                },
                                "styles": {
                                    "product": {
                                        "@media (min-width: 601px)": {
                                            "max-width": "100%",
                                            "margin-left": "0",
                                            "margin-bottom": "50px"
                                        }
                                    },
                                    "button": {
                                        "background-color": "#ffffff",
                                        "color": "#000000",
                                        //Editado
                                        "border": "1px solid black",
                                        "font-family": "Raleway, sans-serif",
                                        "padding-left": "15px",
                                        "padding-right": "15px",
                                        ":hover": {
                                            //Editado
                                            "background-color": "#212529",
                                            "color": "#FFFFFF"
                                        },
                                        "border-radius": "5px",
                                        ":focus": {
                                            //Editado
                                            "background-color": "#212529"
                                        },
                                        "font-weight": "normal"
                                    },
                                    "variantTitle": {
                                        "font-family": "Raleway, sans-serif",
                                        "font-weight": "normal"
                                    },
                                    "title": {
                                        "font-family": "Raleway, sans-serif",
                                        "font-size": "26px"
                                    },
                                    "description": {
                                        "font-family": "Raleway, sans-serif",
                                        "font-weight": "normal"
                                    },
                                    "price": {
                                        "font-family": "Raleway, sans-serif",
                                        "font-size": "18px",
                                        "font-weight": "normal"
                                    },
                                    "compareAt": {
                                        "font-size": "15px",
                                        "font-family": "Raleway, sans-serif",
                                        "font-weight": "normal"
                                    }
                                },
                                "googleFonts": [
                                    "Raleway",
                                    "Raleway",
                                    "Raleway",
                                    "Raleway",
                                    "Raleway",
                                    "Raleway"
                                ]
                            },
                            "cart": {
                                "contents": {
                                    "button": true
                                },
                                "text": {
                                    "title": "Carrito",
                                    "total": "TOTAL",
                                    "notice": "La dirección de envío y los códigos de descuento serán introducidos al procesar el pago.",
                                    "button": "PAGAR",
                                    "empty": "Tu carrito está vacío."
                                },
                                "styles": {
                                    "button": {
                                        //Editado
                                        "background-color": "#212529",
                                        "color": "#FFFFFF",
                                        "font-family": "Raleway, sans-serif",
                                        ":hover": {
                                            //Editado
                                            "background-color": "#212529",
                                            "color": "#FFFFFF"
                                        },
                                        "border-radius": "5px",
                                        ":focus": {
                                            //Editado
                                            "background-color": "#212529"
                                        },
                                        "font-weight": "normal"
                                    },
                                    "footer": {
                                        "background-color": "#ffffff"
                                    }
                                },
                                "googleFonts": [
                                    "Raleway"
                                ]
                            },
                            "modalProduct": {
                                "contents": {
                                    "img": false,
                                    "imgWithCarousel": true,
                                    "variantTitle": false,
                                    "buttonWithQuantity": true,
                                    "button": false,
                                    "quantity": false
                                },
                                "styles": {
                                    "product": {
                                        "@media (min-width: 601px)": {
                                            "max-width": "100%",
                                            "margin-left": "0px",
                                            "margin-bottom": "0px"
                                        }
                                    },
                                    "button": {
                                        "background-color": "#ffffff",
                                        "color": "#000000",
                                        "font-family": "Raleway, sans-serif",
                                        "padding-left": "15px",
                                        "padding-right": "15px",
                                        ":hover": {
                                            "background-color": "#e6e6e6",
                                            "color": "#000000"
                                        },
                                        "border-radius": "5px",
                                        ":focus": {
                                            "background-color": "#e6e6e6"
                                        },
                                        "font-weight": "normal"
                                    },
                                    "variantTitle": {
                                        "font-family": "Raleway, sans-serif",
                                        "font-weight": "normal"
                                    },
                                    "title": {
                                        "font-family": "Raleway, sans-serif"
                                    },
                                    "description": {
                                        "font-family": "Raleway, sans-serif",
                                        "font-weight": "normal"
                                    },
                                    "price": {
                                        "font-family": "Raleway, sans-serif",
                                        "font-weight": "normal"
                                    },
                                    "compareAt": {
                                        "font-family": "Raleway, sans-serif",
                                        "font-weight": "normal"
                                    }
                                },
                                "googleFonts": [
                                    "Raleway",
                                    "Raleway",
                                    "Raleway",
                                    "Raleway",
                                    "Raleway",
                                    "Raleway"
                                ]
                            },
                            "toggle": {
                                "styles": {
                                    "toggle": {
                                        "font-family": "Raleway, sans-serif",
                                        "background-color": "#ffffff",
                                        ":hover": {
                                            //Editado
                                            "background-color": "#ffffff"
                                        },
                                        ":focus": {
                                            //Editado
                                            "background-color": "#ffffff"
                                        },
                                        "font-weight": "normal"
                                    },
                                    "count": {
                                        "color": "#000000",
                                        ":hover": {
                                            "color": "#000000"
                                        }
                                    },
                                    "iconPath": {
                                        "fill": "#000000"
                                    }
                                },
                                "googleFonts": [
                                    "Raleway"
                                ]
                            },
                            "option": {
                                "styles": {
                                    "label": {
                                        "font-family": "Raleway, sans-serif"
                                    },
                                    "select": {
                                        "font-family": "Raleway, sans-serif"
                                    }
                                },
                                "googleFonts": [
                                    "Raleway",
                                    "Raleway"
                                ]
                            },
                            "productSet": {
                                "styles": {
                                    "products": {
                                        "@media (min-width: 601px)": {
                                            "margin-left": "-20px"
                                        }
                                    }
                                }
                            }
                        }
                    });
                });
            }
        })();
        /*]]>*/
    </script>
  </body>
</html>
