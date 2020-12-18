<?php
require_once '../services/conexion.php';
echo '<link rel="stylesheet" type="text/css" href="../css/styles.css">';

echo '<h3>Crear usuario</h3>';


echo "<div class='contenedor'>";
echo "<form action='../controller/crearUserController.php' method='POST'>";

echo "<label for='fname'>Email</label>";
echo "<input type='text' name='email_user' class='email_user'>";

echo "<label for='fname'>Contraseña</label>";
echo "<input type='password' name='passwd_user' class='passwd_user'>";

echo "<label for='lname'>Status</label>";
echo "<input type='text' name='status_user' class='status_user'>";


echo "<input type='submit' class='fenviar' value='Enviar'>";
echo "</form>";
echo "</div>";