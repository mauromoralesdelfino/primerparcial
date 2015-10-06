<?php 
session_start();
if(isset($_SESSION['registro'])){ echo '"

<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/ingreso.css" rel="stylesheet">

<div id="frmVoto" class="container">
<form  class="form-ingreso"  >
	<h2 class="form-ingreso-heading">VOTACION</h2>
	<label for="provincia" class="sr-only">PROVINCIA</label>
	<input type="text" id="provincia" class="form-control" placeholder="Ingrese Provincia"  title="Ingrese Provincia" required="" >
	<label for="sexo" class="sr-only">SEXO</label>
	<input type="radio"  name="sexo" value="masculino">Masculino<br>
	<input type="radio"  name="sexo" value="femenino">Femenino
	<select class="form-control">
  		<option value="Macri Mauricio">Macri</option>
  		<option value="Massa Sergio">Massa</option>
  		<option value="Scioli Daniel">Scioli</option>
  		
	</select>
<input class="btn btn-lg btn-primary btn-block" type="submit" name="VOTAR">
	
</div>
</form>"';

echo"<h3>".$_SESSION['registro']."</h3>"; }else{ echo "NO";}?>         
   