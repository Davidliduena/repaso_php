<?php
//esto se usa para resetear la zona horaria 
date_default_timezone_set('America/Bogota');


$nombre = "David Lidueña";
$edad = 31;
$aPeliculas= array("la mascara", "volver al futuro", "Indiana jhons", "la momia");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Ficha Personal</title>
</head>
<body>
<body>
    <main class="container">
<div class="row">
    <div class="col-12 text-center py-5">
        <h1>Ficha personal</h1>
    </div>
</div>
<div class="row">
    <div class="col-12">

   <table class="table border table-hover border">
    <tr>
        <th>Fecha</th>
        <td><?php echo date("d/m/y");?></td>
    </tr>
    <tr>
        <th>Nombre y apellido</th>
        <td><?php echo $nombre;?></td>
    </tr>
    <tr>
        <th>Edad</th>
        <td><?php echo $edad;?></td>
    </tr>
    <tr>
        <th>Pelicula favorita</th>
        <td><?php echo $aPeliculas[0];?><br>
        <?php echo $aPeliculas[1];?><br>
        <?php echo $aPeliculas[2];?><br>
        <?php echo $aPeliculas[3];?></td>
    </tr>
</tbody>
   </table>

    </div>
</div>
    </main>
</body>
</body>
</html>