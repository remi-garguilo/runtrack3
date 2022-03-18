<?php
session_start();

if(isset($_SESSION['login'])){
    header('Location: index.php');
}

// $res = file_get_contents('php://input');
// echo $res;

var_dump($_POST);
?>