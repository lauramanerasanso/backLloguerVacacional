<?php
session_start(); 

if ($_SESSION['acces'] != "SI") { 

    header("Location: ../index.php");
    exit(); 
} 
?>