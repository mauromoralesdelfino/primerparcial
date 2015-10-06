<?php
require_once("clases/AccesoDatos.php");
//require_once("clases/voto.php");


$queHago=$_POST['queHacer'];
//echo"<script>alert('var_dump($queHago)')</script>";

switch ($queHago) {
	case 'MostrarIngreso':
		// echo"<script>alert('login.php!!!!')</script>";
 			include("partes/FormIngreso.php");
		break;
	
	case 'MostrarVotacion':
			//echo"<script>alert('votar.php!!!!')</script>";
			include("partes/frmVoto.php");
			break;

	default:


		# code...
		break;
}


?>