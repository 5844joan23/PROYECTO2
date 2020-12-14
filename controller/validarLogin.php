<?php
include '../model/user.php';
include '../model/userDAO.php';
require_once "../services/conexion.php";

    $email    = $_POST['email'];
    $password = md5($_POST['psswd']);

    // Comprobar si existe un usuario con ese email o contraseña
    $result = "Select * from tbl_user
        where email_user='$email' and passwd_user='$password'";
    $sentencia = $pdo->prepare($result);
    $sentencia->execute();
    if($sentencia->rowCount()!=0){ //Se ejecuta el if si existe el usuario
        $query= "SELECT status_user from tbl_user where email_user='$email' and passwd_user='$password'";
        $sentencia= $pdo->prepare($query);
        $sentencia->execute();

            $status= $sentencia->fetch();
            session_start();
            $_SESSION["user"] = $email;

            switch ($status[0]) {
                case '1':
                    header("Location: ../view/homeAdmin.php");
                    break;
                case '2':
                    header("Location: ../view/home.php");
                    break;
            }
        } else { //Esto se ejecuta si el usuario no existe
            header("Location: ../index.php");
      }
/* include '../model/user.php';
include '../model/userDAO.php';

$user = new User($_POST['email'], md5($_POST['psswd']));
$userDAO = new UserDAO();

 if($userDAO->loginUser($user)){ 
  header('Location: ../view/home.php');
} 
  // header('Location: ../index.php');
//  echo "error"; */

?>