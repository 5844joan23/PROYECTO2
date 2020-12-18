<?php
require_once 'userDAO.php';
class ReservaDao{
    public $pdo;

    public function __construct(){
        include '../services/conexion.php';
        $this->pdo=$pdo;
    }

    public function newReservar($id_mesa,$email_user){
      echo "<script src='../js/validarReserva.js'></script>";
      echo "<script src='https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>";

        echo "<form action='../controller/formReservaController.php?email_user=$email_user&id_mesa=$id_mesa' method='POST' onsubmit='return validarReserva()'>";
?>
  <style>
  * {
    padding-top: 1%;
    text-align: center;
  }
input[type=text], select {
  width: 20%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 5%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
<script src="../js/validarReserva.js"></script>
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
  <input type="date" id="dia" name="dia" onclick='return fecha()'><br><br>
  <label for="lname">Hora de la reserva</label><br>
  <select name="hora" id="hora">
    <option value="13-14">13:00-14:00</option>
    <option value="14-15">14:00-15:00</option>
    <option value="15-16">15:00-16:00</option>
    <option value="16-17">16:00-17:00</option>
    <option value="20-21">20:00-21:00</option>
    <option value="21-22">21:00-22:00</option>
    <option value="22-23">22:00-23:00</option>
    <option value="23-00">23:00-00:00</option>
  </select><br><br>
  <label for="nombre">A nombre de...</label><br>
  <input type="text" id="nombreUser" name="nombreUser"><br><br>
  <label for="telefono">Teléfono</label><br>
  <input type="text" id="telefono" name="telefono"><br><br>
  <input type="submit" value="Submit">

</form>
<div id="msg"></div>
<?php
        /* $query="INSERT INTO tbl_reservas (id_mesa,dia_reserva,hora_entrada_reserva) VALUES (?,?,?)";
        $sentencia=$this->pdo->prepare($query);
        $sentencia->bindValue(1,$id_mesa);
        $sentencia->bindValue(2,date('Y-m-d'));
        $sentencia->bindValue(3,date('H:i'));
        $sentencia->execute();

        $query="UPDATE tbl_mesas SET disponibilidad_mesa = ? WHERE id_mesa = ?";
        $sentencia=$this->pdo->prepare($query);
        $sentencia->bindValue(1,"no disponible");
        $sentencia->bindValue(2,$id_mesa);
        $sentencia->execute();
        
        header("Location: ../view/mostrarMesas.php?id={$_GET['id_sala']}");*/
    } 
}
?>