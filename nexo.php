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
			session_start();
			$voto= new voto();
			$voto->id=$_POST['id'];
			$voto->dni=$_SESSION['registro'];
			$voto->provincia=$_POST['provincia'];
			$voto->localidad=$_POST['localidad'];
            $voto->direccion=$_POST['direccion'];
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
	case 'VerEnMapa':
        
        		include("partes/formMapa.php");
				break;
				
	case 'guardarMarcadores':
        session_start();
        if(isset($_POST["marcadores"]))
        {
            $filename = "ArchivosTxt/marcadores" . getdate()[0] . ".txt";

            $_SESSION['file'] = $filename;
            $puntos = $_POST["marcadores"];

            $file = fopen($filename, "w");

            foreach ($puntos as $valor)
            {
                $lat =  $valor["lat"];
                $lng =  $valor["lng"];
                $nombre =  $valor["nombre"];
                fwrite($file, $lat.">".$lng.">".$nombre . PHP_EOL);
            }
        fclose($file);

        echo "Marcadores guardados con exito";
        }
        else
            echo "No ingreso marcador/es a guardar";
        break;

	default:


		# code...
		break;
}


?>