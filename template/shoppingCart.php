<div id="product-component-9aba25c5653"></div>
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
                    id: [651213733951],
                    node: document.getElementById('product-component-9aba25c5653'),
                    moneyFormat: '%E2%82%AC%7B%7Bamount_with_comma_separator%7D%7D',
                    options: {
                        "product": {
                            "variantId": "all",
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
                            "styles": {
                                "product": {
                                    "@media (min-width: 601px)": {
                                        "max-width": "100%",
                                        "margin-left": "0",
                                        "margin-bottom": "50px"
                                    },
                                    //Editado
                                    "display": "none",
                                    "height": "0px"
                                }
                            }
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
                                    "background-color": "#212529",
                                    "color": "#FFFFFF",
                                    "font-family": "Raleway, sans-serif",
                                    ":hover": {
                                        "background-color": "#212529",
                                        "color": "#FFFFFF"
                                    },
                                    "border-radius": "5px",
                                    ":focus": {
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