<?php
    require_once 'conectar.php';

    $sql = "SELECT `email` FROM `emails`";
    $statement = $db->prepare($sql);
    $statement->execute();

    while ($fila = $statement->fetch()) {
        $filas[] = array(
            "email" => $fila['email']
        );
    }

    $json = json_encode($filas);
    $callback = $_GET['callback'];
    echo $callback.'('. $json . ')';
?>