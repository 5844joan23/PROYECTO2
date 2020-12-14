<?php 
session_start();
if (!isset($_SESSION['camarero']) && !isset($_SESSION['admin'])){
    header('Location: ../index.php');
}

?>