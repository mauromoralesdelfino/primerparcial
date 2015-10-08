<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		

		<!--Estilos-->
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="../css/estilo.css">
		<link rel="stylesheet" type="text/css" href="../css/animations.css">
		<!--final de Estilos-->

		<!--Lógica-Programación-->

        <!--Final de Lógica-Programación -->


	</head>
	<body>
		
		<div class="CajaInicio animated bounceInRight"style="  margin-top: 55px;">
			
			<form id="FormIngreso">
				<table class="table"  style=" background-color: gray;">
	<thead>
		<tr>
			<th>Editar</th><th>Borrar</th><th>id</th><th>provincia</th><th>presidente</th>
		</tr>
	</thead>
	<tbody>
<?php
					require_once("clases/AccesoDatos.php");
					require_once("clases/voto.php");

					$arrayDeVotos=voto::TraerTodosLosVotos();
					//var_dump($arrayDeVotos);
					

		foreach ($arrayDeVotos as $voto) {
			echo"<tr>
			<td><a onclick='EditarVoto($voto->id)' class='btn btn-warning'> <span class='glyphicon glyphicon-pencil'>&nbsp;</span>Editar</a></td>
			<td><a onclick='BorrarVoto($voto->id)' class='btn btn-danger'>   <span class='glyphicon glyphicon-trash'>&nbsp;</span>  Borrar</a></td>
			<td>$voto->id</td>
			<td>$voto->provincia</td>
			<td>$voto->presidente</td>
			
			

		</tr>   ";
}

			?>



