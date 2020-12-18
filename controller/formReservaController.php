<?php
require_once '../services/conexion.php';


$dia=$_REQUEST['dia'];
$hora=$_REQUEST['hora'];
$mesa=$_REQUEST['id_mesa'];
$user=$_REQUEST['email_user'];
$nombre=$_REQUEST['nombreUser'];
$comensales=$_REQUEST['comensales'];
$telefono=$_REQUEST['telefono'];

/* $queryId="SELECT id_user FROM tbl_user where email_user='$user'";
$sentenciaId=$pdo->prepare($queryId);
$sentenciaId->execute();
$id_user=$sentenciaId->fetch(PDO::FETCH_ASSOC); */
session_start();
$id_user=$_SESSION['userid'];
// echo $id_user;

$query="SELECT * from tbl_reservas where id_mesa='{$mesa}' and dia_reserva='{$dia}' and franja_horaria='{$hora}'";
// echo $query;
//die;

$sentencia=$pdo->prepare($query);
$sentencia->execute();

if($sentencia->rowCount()!=0){
    header("Location: ../view/showBookings.php");
} else {
    $query="INSERT INTO tbl_reservas (dia_reserva, id_mesa, franja_horaria, nombre_reserva, comensales, telefono, id_user) VALUES ('$dia', '$mesa', '$hora', '$nombre', '$comensales', '$telefono', '$id_user')";
    $sentencia=$pdo->prepare($query);
    $sentencia->bindParam(1,$dia);
    $sentencia->bindParam(2,$mesa);
    $sentencia->bindParam(3,$hora);
    $sentencia->bindParam(4,$nombre);
    $sentencia->bindParam(5,$comensales);
    $sentencia->bindParam(6,$telefono);
    $sentencia->bindParam(7,$id_user);
    $sentencia->execute();

    header("Location: ../view/home.php");
}
