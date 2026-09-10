<?php 

$archivo = $_FILES['archivo']; 

$nombre = $archivo['name']; 
$tmp = $archivo['tmp_name']; 

move_uploaded_file($tmp, "uploads/" . $nombre); 

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Archivo subido</title>

    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="contenedor mensaje">

        <h1>¡Archivo subido!</h1>

        <p>El archivo <strong><?php echo $nombre; ?></strong> se subió correctamente.</p>

        <a href="index.php">
            <button>Regresar</button>
        </a>

    </div>

</body>

</html>