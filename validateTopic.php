<?php
    $value = $_REQUEST['topic'];

    if(!empty($value)){
        http_response_code(200);
    }else{
        http_response_code(400);
    }
?>