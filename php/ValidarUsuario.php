<?php
session_start();

//$dni=$_POST['dni'];

$_SESSION['registro']=$_POST['dni'];
echo "correcto";
?>