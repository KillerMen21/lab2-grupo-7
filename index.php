<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>lab2-grupo 7</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" 
          rel="stylesheet">


    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="contenedor">

        <h1>Integrantes del Grupo 7</h1>

        <div class="integrantes">
            <p>Joseph Gamboa <span>C4F292</span></p>
            <p>Joseth Barrios <span>C5D075</span></p>
            <p>Johan Cerdas <span>C31976</span></p>
            <p>Jefferson Bonilla <span>C21262</span></p>
            <p>Joel Collado <span>C32254</span></p>
        </div>

        <div class="formulario">

            <h2>Subir archivo</h2>

            <form action="subir.php" method="POST" enctype="multipart/form-data">

                <input type="file" name="archivo">

                <button type="submit">Subir</button>

            </form>

        </div>

    </div>

</body>

</html>