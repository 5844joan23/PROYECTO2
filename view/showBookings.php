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
$query="SELECT * FROM tbl_reservas";
$result = $pdo->prepare($query);
$result->setFetchMode(PDO::FETCH_ASSOC);
$result->execute();

echo '</br>';
echo '<a href="home.php" class="btn btn-dark" value="Volver al Home">Volver al Home</a>';
echo '</br>';
echo '</br>';
echo '<table class="table">';
echo '<tr>';
echo '<th style="text-align:center">ID Reserva</th>';
echo '<th style="text-align:center">ID Mesa</th>';
echo '<th style="text-align:center">Día Reserva</th>';
echo '<th style="text-align:center">Franja Horaria</th>';
echo '<th style="text-align:center">Comensales</th>';
echo '<th style="text-align:center">Teléfono</th>';
echo '<th style="text-align:center">Nombre Reserva</th>';
echo '<th style="text-align:center">ID Usuario</th>';
echo '<th style="text-align:center">Borrar Reserva</th>';
echo '</tr>';

if ($result) {
while ($fila=$result->fetch()) {
    echo '<tr>';
    echo '<td style="text-align:center">'.$fila['id_reserva'].'</td>';
    echo '<td style="text-align:center">'.$fila['id_mesa'].'</td>';
    echo '<td style="text-align:center">'.$fila['dia_reserva'].'</td>';
    echo '<td style="text-align:center">'.$fila['franja_horaria'].'</td>';
    echo '<td style="text-align:center">'.$fila['comensales'].'</td>';
    echo '<td style="text-align:center">'.$fila['telefono'].'</td>';
    echo '<td style="text-align:center">'.$fila['nombre_reserva'].'</td>';
    echo '<td style="text-align:center">'.$fila['id_user'].'</td>';
    echo '<td><form action="../model/borrarBooking.php?id='.$fila['id_reserva'].'" method="POST"> <input type="submit" class="btn btn-secondary" style="text-align:right" value="Borrar"></form></td>';

    echo '</tr>';
}
}
echo '</table>';
?>