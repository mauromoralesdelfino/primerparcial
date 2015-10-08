<?php
require_once("clases/AccesoDatos.php");
require_once("clases/voto.php");


$queHago=$_POST['queHacer'];
//echo"<script>alert('var_dump($queHago)')</script>";

switch ($queHago) {
	case 'MostrarIngreso':
		 //echo"<script>alert('login.php!!!!')</script>";
 			include("partes/FormIngreso.php");
		break;
	
	case 'MostrarVotacion':
			//echo"<script>alert('votar.php!!!!')</script>";
			include("partes/frmVoto.php");
		break;

	case 'MostrarListado':
			include("partes/listado.php");
		break;
	
	case 'BorrarVoto':
			$voto= new voto();
			$voto->id=$_POST['id'];
			$cantidad=$voto->BorrarVoto();
			echo $cantidad;
		break;

	case 'GuardarVoto':
			$voto= new voto();
			$voto->id=$_POST['id'];
			$voto->provincia=$_POST['provincia'];
			$voto->sexo=$_POST['sexo'];
			$voto->presidente=$_POST['presidente'];
			$cantidad = $voto->GuardarVoto();
			echo $cantidad;
			$cuki=$_POST['provincia'];
			setcookie("provincia",$cuki);
		break;

	case 'TraerVoto':
			$voto = voto::TraerVoto($_POST['id']);
			echo json_encode($voto);
		break;

	default:


		# code...
		break;
}


?>