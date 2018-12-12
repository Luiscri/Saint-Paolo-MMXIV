<?php
session_start();
if(isset($_SESSION['username'])){
    header("Location: showNewsletter.php");
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <?php
    include "template/head.php";
    ?>
    <link rel="canonical" href="https://saintpaolommxiv.es/admin">
</head>

<body>
<main class="centerBoth h-100">
    <section>
        <div class="container">
            <div class="text-center">
                <img class="mb-3" src="images/logoNegro.png" alt="Logo SPL" height="100px">
            </div>
            <form action="procesarLogin" method="post">
                <fieldset class="scheduler-border py-3 px-3">
                    <legend class="scheduler-border px-2">
                        <h2 class="mb-0">Entrar</h2>
                    </legend>
                    <label for="username" class="sr-only">Usuario:</label>
                    <input type="text" id="username" name="username" class="form-control my-2"
                           placeholder="Nombre de usuario" required>
                    <label for="password" class="sr-only">Contraseña:</label>
                    <input type="password" id="password" name="password" class="form-control mb-3"
                           placeholder="Contraseña" required>
                    <div class="text-center pb-0">
                        <button class="btn" type="submit" style="width: auto;">Entrar</button>
                    </div>
                    <?php
                        if(isset($_REQUEST['errorLogin'])): ?>
                            <div class="panel panel-danger">
                                <div class="panel-heading colorRed text-center">
                                    Error
                                </div>
                                <div class="panel-body colorRed text-center">
                                    <p><?php echo "Nombre de usuario o contraseña incorrectos"; ?></p>
                                </div>
                            </div>
                    <?php endif; ?>
                </fieldset>
            </form>
        </div>
    </section>
</main>

<!-- Web page main Scripts -->
<?php
include "template/scripts.php";
?>

<!-- Script changing html title -->
<script>
    $('title').html("Panel de Control");
</script>
</body>
</html>