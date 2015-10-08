<?php 
session_start();
if(isset($_SESSION['registro'])){  ?>

<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/ingreso.css" rel="stylesheet">

<div id="frmVoto" class="container">
<form  class="form-ingreso" onsubmit="GuardarVoto();return false">
	<h2 class="form-ingreso-heading">VOTACION</h2>
	<label for="provincia" class="sr-only">PROVINCIA</label>
	<input type="text" id="provincia" class="form-control" placeholder="Ingrese Provincia"  title="Ingrese Provincia" required="" value="<?php  if(isset($_COOKIE["provincia"])){echo $_COOKIE["provincia"];}?>">
	<label for="sexo" class="sr-only">SEXO</label>
	<input type="radio" id="sexo" name="sexo" value="masculino" required="">Masculino<br>
	<input type="radio" id="sexo" name="sexo" value="femenino" required="">Femenino
	<select class="form-control" id="presidente">
  		<option value="Macri Mauricio">Macri</option>
  		<option value="Massa Sergio">Massa</option>
  		<option value="Scioli Daniel">Scioli</option>
  		
	</select>
<input readonly   type="hidden"    id="idVOTO" class="form-control" >
<button  class="btn btn-lg btn-primary btn-block" type="submit"><span class="glyphicon glyphicon-floppy-save">&nbsp;&nbsp;</span>VOTAR </button>

</div>
</form>
<?php
echo"<h3>".$_SESSION['registro']."</h3>"; }else{ echo "NO";}

?>         
   