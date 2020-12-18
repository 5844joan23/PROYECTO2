<?php
    require_once '../services/conexion.php';

    $id=$_REQUEST['id'];
    $query="DELETE FROM tbl_reservas WHERE id_reserva = $id";
    $result = $pdo->prepare($query);
    $result->execute();
    header('Location: ../view/showBookings.php');
?>