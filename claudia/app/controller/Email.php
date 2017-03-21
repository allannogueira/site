<?php

require("../classes/Email.php");

if((!$_POST)){ $_POST = (array) json_decode(file_get_contents('php://input')); }

$destinatario = $_POST["destinatario"];
$assunto = $_POST["assunto"];
$msg = $_POST["msg"];

$objEmail = new Email();
$objEmail->_setDestinatario($destinatario);
$objEmail->_setAssunto($assunto);
$objEmail->_setMsg($msg);
echo json_encode($objEmail->enviarEmail());


?>