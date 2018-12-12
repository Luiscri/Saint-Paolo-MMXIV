<?php
    $value = $_REQUEST['name'];

    if(!empty($value)){
        http_response_code(200);
    }else{
        http_response_code(400);
    }
?>