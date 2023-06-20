<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Ejemplo de tabla</title>
</head>
<body>
    <main class="container">
<div class="row">
    <div class="col-12 text-center py-5">
        <h1>Listado de alumnos</h1>
    </div>
</div>
<div class="row">
    <div class="col-12">

   <table class="table border table-hover">
    <thead>
<tr>
    <th>ID</th>
    <th>Nombre</th>
    <th>Apellido</th>
    <th>Presentismo</th>
</tr>
    </thead>
    <tbody>
<tr>
    <td>1</td>
    <td>Agustin</td>
    <td>Beloso</td>
    <td>Presente</td>
</tr>
<tr>
    <td>2</td>
    <td>Ignacio</td>
    <td>Porto</td>
    <td>Presente</td>
</tr>
<tr>
    <td>3</td>
    <td>Ana</td>
    <td>Valle</td>
    <td>Ausente</td>
</tr>
<tr>
    <td>4</td>
    <td>David</td>
    <td>Lidueña</td>
    <td>Presente</td>
</tr>
<tr>
    <td colspan="3" class="text-end">TOTAL</td>
    <td>3</td>
</tr>
</tbody>
   </table>

    </div>
</div>
    </main>
</body>
</html>