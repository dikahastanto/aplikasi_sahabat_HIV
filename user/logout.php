<?php 
session_start();

unset($_SESSION['perusahaan']);
unset($_SESSION['data']);

session_destroy();
header('location: ../index.php');

?>