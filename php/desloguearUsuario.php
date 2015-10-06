<?php
echo"<script>alert('deslo1.php!!!!')</script>";

session_start();
echo"<script>alert('deslo2.php!!!!')</script>";
$_SESSION['registro']=null;

session_destroy();
echo"<script>alert('deslo3.php!!!!')</script>";

?>