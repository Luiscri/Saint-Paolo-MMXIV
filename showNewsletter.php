<?php
    require_once("restringido.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        include "template/head.php";
    ?>
</head>

<body style="height: auto;">
<header>
    <?php
        require("template/adminNavbar.php");
    ?>
</header>

<main id="navFill">
    <div class="container">
        <div class="row text-center centerBoth">
            <div class="col-12 col-md-6 text-center">
                <h3 class="mt-3 mb-2 font-weight-bold">Suscriptores</h3>
                <table class="table table-striped">
                    <tbody id="content">
                        <!-- Se rellena mediante JS -->
                    </tbody>
                </table>
            </div>
        </div>

        <div class="row text-center centerBoth">
            <div class="col-12 col-md-6 text-center">
                <h3 class="mt-3 mb-2 font-weight-bold">Eliminar suscriptor</h3>
                <form form id="deleteForm" action="deleteNewsletter" method="post" data-toggle="validator" role="form">
                    <div class="form-group">
                        <input id="emailInput" type="email" class="form-control text-center centerHorizontal" name="email" placeholder="Correo electrónico"
                               data-error="Introduce una dirección de correo electrónico válida"
                               data-remote="validateEmail.php" required>
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="text-center mt-3">
                        <button type="submit" id="submit" class="btn">Eliminar</button>
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

<!-- Script for changing navBar active li and charhing DB from table -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.9/validator.js"></script>
<script>
    $(document).ready(function () {
        // Ejemplo URL http://domain.com/page.html
        var currentLocation = window.location.href.split('/');
        var pagePortion = (currentLocation[currentLocation.length - 1]).split('.php');
        var page = pagePortion[0];
        $('.navbar .nav-link[href*="' + page + '"]').parent().addClass('active'); //El *= es para que valga con que lo contenga en vez de que tenga que ser igual

        var url = window.location.pathname;
        var dir = url.substring(0, url.lastIndexOf('/')); // url del servidor, p.ej. http://localhost/departamentosSQL
        $.getJSON(dir + '/jsonp.php?callback=?', function (data) {
            $("#content").html('');
            $.each(data, function (i, item) {
                $("#content").append('<tr><td>' + item.email + '</td></tr>');
            });
        });

        $('#deleteForm').validator();
    });
</script>

<!-- Script changing html title -->
<script>
    $('title').html("Panel de Control");
</script>
</body>
</html>