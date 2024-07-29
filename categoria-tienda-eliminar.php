<?php
require_once("config.php");

if (isset($_POST["idcategoria"])) {
    $idcategoria = $_POST["idcategoria"];
    $idcategoria = mysqli_real_escape_string($cn, $idcategoria);
    $query = "DELETE FROM `categoria-tienda` WHERE idcategoria = $idcategoria";
    
    if ($cn->query($query)) {
        echo "Categoría eliminada correctamente";
    } else {
        echo "Error al eliminar la categoría: " . $cn->error;
    }
} else {
    echo "ID de categoría no válido";
}

$cn->close();
?>
