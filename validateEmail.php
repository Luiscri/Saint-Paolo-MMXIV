<?php
    $value = $_REQUEST['email'];

    if(!empty($value)) {
        if (filter_var($value, FILTER_VALIDATE_EMAIL)) {
            http_response_code(200);
        } else {
            http_response_code(400);
        }
    }else{
        http_response_code(400);
    }
?>