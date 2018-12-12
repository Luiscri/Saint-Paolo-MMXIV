<?php
    require_once("restringido.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        include "template/head.php";
    ?>

    <!-- CSS for text editor -->
    <link type="text/css" href="css/editor.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
</head>

<body class="h-auto">
<header>
    <?php
        require("template/adminNavbar.php");
    ?>
</header>

<main id="navFill">
    <div class="container">
        <div class="row centerBoth">
            <div class="col-12 col-md-8">
                <form id="emailForm" class="mt-4" action="emailNewsletter" method="post" data-toggle="validator" role="form">
                    <div class="form-group">
                        <label class="fontBig ml-2" for="topic">Asunto:</label>
                        <input type="text" class="form-control" id="topic" name="topic" placeholder="Asunto del mensaje"
                               data-error="Introduce un asunto para el correo"
                               data-remote="validateTopic.php" required>
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group">
                        <label class="fontBig ml-2 mb-0" for="message">Mensaje:</label>
                        <textarea id="placeHolder"></textarea>
                        <input id="message" name="message" type="hidden">
                    </div>
                    <div class="text-center my-3">
                        <button type="submit" id="submit" class="btn">Enviar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>

<!-- Web page main Scripts -->
<?php
include "template/scripts.php";
?>

<!-- Script for:
        -Changing navBar active li
        -Activate validator
-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.9/validator.js"></script>
<script>
    $(document).ready(function () {
        // Ejemplo URL http://domain.com/page.html
        var currentLocation = window.location.href.split('/');
        var pagePortion = (currentLocation[currentLocation.length - 1]).split('.php');
        var page = pagePortion[0];
        $('.navbar .nav-link[href*="' + page + '"]').parent().addClass('active'); //El *= es para que valga con que lo contenga en vez de que tenga que ser igual

        //Arrancar editor de texto
        var editor = $("#placeHolder").Editor();
        var template = "<div style=\"text-align: center;\"><img src=\"cid:logo_2u\"><img src=\"data:image/png;base64,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\"></div><br><div style=\"text-align: center;\">[ Escribir aquí ]<br></div><div style=\"text-align: left;\">___________________________________________<br><br><span style=\"font-style: italic;\"><font size=\"2\">Si en algún momento desea cancelar su suscripción a nuestro newsletter puede hacerlo enviando un correo a la dirección 'contacto@saintpaolommxiv.es' con el asunto 'Cancelar suscripción newsletter' e indicando en el cuerpo del mensaje el correo que desea dar de baja.</font></span></div>";
        $("#placeHolder").Editor("setText", template);

        //Configuramos el boton de enviar del editor
        $("#submit").click(function(e){
            var texto = $("#placeHolder").Editor("getText");
            $('#message').attr('value', texto);

            if (!confirm('Este correo será enviado a todos los suscriptores del newsletter, ¿está seguro de querer enviarlo?')){
                e.preventDefault();
            }
        });

        //Activate form validator
        $('#emailForm').validator();
    });
</script>

<!-- Script for text editor -->
<script src="js/editor.js"></script>

<!-- Script changing html title -->
<script>
    $('title').html("Panel de Control");
</script>
</body>
</html>