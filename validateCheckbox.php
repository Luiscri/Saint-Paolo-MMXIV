<?php
$checked = $_REQUEST['checkbox'];

if($checked){
    http_response_code(200);
}else{
    http_response_code(400);
}
?>