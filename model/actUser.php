<?php
require_once '../services/conexion.php';

echo '<link rel="stylesheet" type="text/css" href="../css/style.css">';

    $id=$_REQUEST['id'];
    $query="SELECT * FROM tbl_user WHERE Id_user = $id";

echo '<h3>Actualizar Usuario</h3>';

$result = $pdo->prepare($query);
$result->setFetchMode(PDO::FETCH_ASSOC);
$result->execute();

if($row =$result->fetch()){

echo '<div class="form-group">';
echo "<form action='../controller/actUserController.php' method='POST'>";

echo "<label for='femail'>Email</label>";
echo "<input type='text' name='email_user' class='form-control' value='{$row["email_user"]}'>";

echo "<label for='lname'>Status</label>";
echo "<input type='text' name='status_user' class='form-control' value='{$row["status_user"]}'>";

echo "<input type='hidden' name='id' value='{$id}'>";

echo "<input type='submit' class='fenviar' value='Enviar'>";
echo "</form>";
echo "</div>";
}