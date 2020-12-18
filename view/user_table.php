<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla de alumnos</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
    
</body>
</html>
<?php
require_once '../services/conexion.php';
$query="SELECT * FROM tbl_user";
$result = $pdo->prepare($query);
$result->setFetchMode(PDO::FETCH_ASSOC);
$result->execute();

echo '</br>';
echo '<form action="../model/crearUser.php "method="POST"> <input type="submit" class="btn btn-dark" value="Crear alumno"></form>';
echo '</br>';
echo '<table class="table">';
echo '<tr>';
echo '<th style="text-align:center">ID</th>';
echo '<th style="text-align:center">Email</th>';
echo '<th style="text-align:center">Status (1 = Admin, 2 = Camarero)</th>';
echo '<th style="text-align:center">Acciones</th>';
echo '</tr>';

if ($result) {
while ($fila=$result->fetch()) {
    echo '<tr>';
    echo '<td style="text-align:center">'.$fila['Id_user'].'</td>';
    echo '<td style="text-align:center">'.$fila['email_user'].'</td>';
    echo '<td style="text-align:center">'.$fila['status_user'].'</td>';
    echo '<td><form action="../model/actUser.php?id='.$fila['Id_user'].'" method="POST"> <input type="submit" class="btn btn-secondary" value="Actualizar"></form></td>';
    echo '<td><form action="../model/borrarUser.php?id='.$fila['Id_user'].'" method="POST"> <input type="submit" class="btn btn-secondary" value="Borrar"></form></td>';
    echo '</tr>';
}
}
echo '</table>';
?>