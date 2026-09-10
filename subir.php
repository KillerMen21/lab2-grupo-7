<?php

$archivo = $_FILES['archivo'];

$nombre = $archivo['name'];
$tmp = $archivo['tmp_name'];

move_uploaded_file($tmp, "uploads/" . $nombre);

echo "Archivo subido";
?>