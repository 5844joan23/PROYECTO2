<?php
require_once '../model/userDAO.php';
?>
<html>
  <head>
    <meta charset="UTF-8">
  </head>
<body>
<?php
$user=$_REQUEST['email_user'];
echo "<form action='../controller/formReservaController.php?email_user=$user' method='POST'>";
?>
  <label for="comensales">Número de comensales</label><br>
  <select name="comensales" id="comensales" name="comensales">
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
    <option value="6">6</option>
  </select><br><br>
  <label for="dia">Día de la reserva</label><br>
  <input type="date" id="dia" name="dia"><br><br>
  <label for="lname">Hora de la reserva</label><br>
  <select name="hora" id="hora">
    <option value="13:00-14:00">13:00-14:00</option>
    <option value="14:00-15:00">14:00-15:00</option>
    <option value="15:00-16:00">15:00-16:00</option>
    <option value="16:00-17:00">16:00-17:00</option>
    <option value="20:00-21:00">20:00-21:00</option>
    <option value="21:00-22:00">21:00-22:00</option>
    <option value="22:00-23:00">22:00-23:00</option>
    <option value="23:00-00:00">23:00-00:00</option>
  </select><br><br>
  <label for="nombre">A nombre de...</label><br>
  <input type="text" id="nombreUser" name="nombreUser"><br><br>
  <label for="tlf">Teléfono</label><br>
  <input type="text" id="tlf" name="tlf"><br><br>
  <input type="submit" value="Submit">

</form> 

</body>
</html>