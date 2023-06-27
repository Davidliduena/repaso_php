<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//Definicion de pacientes
$aPacientes = array();
$aPacientes[] = array(
    "dni" => "33.765.012",
    "nombre" => "Ana Acuña",
    "edad" => 45,
    "peso" => 81.50,
);
$aPacientes[] = array(
    "dni" => "23.684.385",
    "nombre" => "Gonzalo Bustamante",
    "edad" => 66,
    "peso" => 79,
);
$aPacientes[] = array(
    "dni" => "11.568.778",
    "nombre" => "Martín Perez",
    "edad" => 26,
    "peso" => 77,
);
$aPacientes[] = array(
    "dni" => "1.038.114.788",
    "nombre" => "David Lidueña",
    "edad" => 31,
    "peso" => 89,
);


?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Clinica</title>
</head>
<body>
    <main class="container">
        <div class="row">
            <div class="col-12 py-3 text-center">
                <h1>Listado de pacientes</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <table class="table table-hover border">
                    <tr>
                        <th>DNI</th>
                        <th>Nombre y Apellido</th>
                        <th>Edad</th>
                        <th>Peso</th>
                    </tr>
                    <?php foreach ($aPacientes as $paciente) { ?>
                        <tr>
                            <td><?php echo $paciente["dni"]; ?></td>
                            <td><?php echo $paciente["nombre"]; ?></td>
                            <td><?php echo $paciente["edad"]; ?></td>
                            <td><?php echo $paciente["peso"]; ?></td>
                        </tr>
                        <?php }?>
                </table>
            </div>
        </div>



    </main>
    
</body>
</html>