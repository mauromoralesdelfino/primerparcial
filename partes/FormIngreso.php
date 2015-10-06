<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/ingreso.css" rel="stylesheet">

<?php 
 
session_start();
if(!isset($_SESSION['registro'])){  ?>

<div id="FrmIngreso" class="container">
<form class="form-ingreso" onsubmit="ValidarLogin();return false;" >
	<h2 class="form-ingreso-heading">Ingrese sus datos</h2>
	<label for="dni" class="sr-only">DNI</label>
	<input type="number" id="dni" class="form-control" placeholder="Ingrese DNI"  title="Ingrese su dni para votar" required="" min="1000000" max="99000000">
	
	<input class="btn btn-lg btn-primary btn-block" type="submit" name="Enviasfdsfdsfdsf">

</div>
</form>
<?php }else{    echo"<h3>usted '".$_SESSION['registro']."' esta logeado. </h3>";?>         
    <button onclick="desloguear()" class="btn btn-lg btn-danger btn-block" type="button"><span class="glyphicon glyphicon-off">&nbsp;</span>Deslogearme</button>
  <?php  }  ?>