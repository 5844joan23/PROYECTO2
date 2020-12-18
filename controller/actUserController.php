<?php
    require_once '../services/conexion.php';

    $id_user=$_REQUEST["id"];
    $email=$_REQUEST['email_user'];
    $status_user=$_REQUEST['status_user'];

    $query="UPDATE tbl_user SET email_user='$email', status_user='$status_user' WHERE Id_user=$id_user";
    $result = $pdo->prepare($query);
    $result->execute();
    header('Location: ../view/user_table.php');