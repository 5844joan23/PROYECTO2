<?php
require_once '../services/conexion.php';
echo '<link rel="stylesheet" type="text/css" href="../css/styles.css">';


$email_user=$_REQUEST['email_user'];
$passwd_user=md5($_REQUEST['passwd_user']);
$status_user=$_REQUEST['status_user'];

$query="INSERT INTO tbl_user (email_user, passwd_user, status_user) VALUES ('$email_user','$passwd_user','$status_user')";

$result = $pdo->prepare($query);
$result->execute();
header('Location: ../view/user_table.php');