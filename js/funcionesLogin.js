function ValidarLogin()
{
 var VarDni=$("#dni").val();

var funcionAjax=$.ajax({

	url:"php/ValidarUsuario.php",
	type:"post",
	data:{

		dni:VarDni
		 }
	});

funcionAjax.done(function(retorno){

		if(retorno=="correcto")
        		{
        			MostrarIngreso();
					//$("#informe").html("Correcto Form login!!!");
					}
        		else
        		{
        			$("#informe").html("NO esta registrado... ");
        		}
		});
funcionAjax.fail(function(retorno){
		
		$("#informe").html("ERROR !!!!");	
		});

}


function desloguear()

{

	var funcionAjax=$.ajax({
		url:"php/desloguearUsuario.php",
		type:"post"
		});
		funcionAjax.done(function(retorno){

			MostrarIngreso();
			$("#informe").html("LOGOUT!!!");


		});

}