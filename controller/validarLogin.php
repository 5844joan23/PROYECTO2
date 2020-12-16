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
        $query= "SELECT * from tbl_user where email_user='$email' and passwd_user='$password'";
        $sentencia= $pdo->prepare($query);
        $sentencia->execute();

            $user= $sentencia->fetch();
            $id=$user['Id_user'];
            $status=$user['status_user'];
            $email=$user['email_user'];
            session_start();

            $_SESSION["email_user"] = $email;
            $_SESSION["userid"] = $id;

            switch ($status) {
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