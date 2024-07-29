<?php
require_once("config.php");

$idcategoria = $_POST["idcategoria"];
$nombre = $_POST["nombre"];
$descripcion = $_POST["descripcion"];
$rs = $cn->query("UPDATE `categoria-tienda` SET nombre='$nombre', descripcion='$descripcion' WHERE idcategoria=$idcategoria");

$cn->close();
?>
