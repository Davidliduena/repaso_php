<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$aProductos = array();
$aProductos[] = array("nombre" => "Smart TV 55\" 4K UHD",
    "marca" => "Hitachi",
    "modelo" => "554KS20",
    "stock" => 60,
    "precio" => 58000
);
$aProductos[] = array("nombre" => "Samsung Galaxy A30 Blanco",
    "marca" => "Samsung",
    "modelo" => "Galaxy A30",
    "stock" => 0,
    "precio" => 22000,
);
$aProductos[] = array("nombre" => "Aire Acondicionado Split Inverter Frío/Calor Surrey 2900F",
    "marca" => "Surrey",
    "modelo" => "553AIQ1201E",
    "stock" => 5,
    "precio" => 45000,
);
$aProductos[] = array("nombre" => "Monitor",
    "marca" => "HP",
    "modelo" => "553AJHJ541441E",
    "stock" => 20,
    "precio" => 4000,
);
//print_r($aProductos);

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla-productos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
    <main class="container">
        <div class="row">
            <div class="col-12 text-center py-5">
                <h1>Tabla Producto</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <table class="table border table-hover">
                    <thead>

                    </thead>

                    <tbody>
                        <tr>
                            <th>Nombre</th>
                            <th>Marca</th>
                            <th>Modelo</th>
                            <th>stock</th>
                            <th>Precio</th>
                            <th>Accion</th>
                        </tr>
                    </tbody>

                    <?php
                    for($contador = 0; $contador <count($aProductos); $contador++){ ?>

                    <tr>
                    <td><?php echo $aProductos[$contador]["nombre"]; ?></td>
                        <td><?php echo $aProductos[$contador]["marca"]; ?></td>
                        <td><?php echo $aProductos[$contador]["modelo"]; ?></td>
                        <td><?php echo $aProductos[$contador]["stock"] == 0? "No hay stock" : ($aProductos[$contador]["stock"]> 10? "Hay stock" : "Poco stock"); ?></td>
                        <td>$ <?php echo $aProductos[$contador]["precio"]; ?></td>
                        <td><button class="btn btn-primary">Comprar</button></td>
                    </tr>
                    
                <?php 
            
                } ?>

                  
                </table>
            </div>
        </div>

    </main>
</body>

</html>