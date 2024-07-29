<?php
require_once("config.php");

$nombre = $_POST["nombre"];
$descripcion = $_POST["descripcion"];
$rs = $cn->query("INSERT INTO `categoria-tienda` (nombre, descripcion) VALUES ('$nombre', '$descripcion')");

echo $cn->insert_id;

$cn->close();
?>
