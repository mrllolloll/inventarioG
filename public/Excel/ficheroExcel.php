<?php
header('Content-Type: charset=utf-8');
header("Content-type: application/vnd.ms-excel; name='excel'");
header("Content-Disposition: filename=ExcelSeniat.xls");
header("Pragma: no-cache");
header("Expires: 0");

if (isset($_POST['datos_a_enviar']) && $_POST['datos_a_enviar'] != '') echo $_POST['datos_a_enviar'];
?>
