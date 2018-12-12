<?php
    define('USER', '****');
    define('PASSWORD', '****');

    function checkLogin($username, $password){
        if(!isset($username) || !isset($password)){
            return false;
        }
        if($username == USER && $password == PASSWORD){
            return true;
        }
        return false;
    }

    //Valido
    if(!checkLogin($_REQUEST['username'], $_REQUEST['password'])){
        session_destroy();
        $errorLogin = "El usuario o la contraseña son incorrectos";
        header("Location: admin.php?errorLogin=$errorLogin"); //Vuelve a login.php > p con error
    }else{
        session_start(); //Comienzo sesion
        $_SESSION['username'] = $_REQUEST['username']; //Guardo datos en la sesión
        header("Location: showNewsletter.php"); //Redirijo a la página del newsletter
    }

?>