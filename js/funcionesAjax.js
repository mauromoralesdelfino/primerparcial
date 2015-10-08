function MostrarIngreso()
{   
	var funcionAjax=$.ajax({
		url:"nexo.php",
		type:"post",
		data:{queHacer:"MostrarIngreso"}
	});
	funcionAjax.done(function(retorno){
	
	$("#principal").html(retorno);
	$("#informe").html("Correcto Form login!!!");
	});

	funcionAjax.fail(function(retorno){
	
		//alert("ERROR");
	});
}

function MostrarVotacion()
{
	
	var funcionAjax=$.ajax({
        url:"nexo.php",
		type:"post",
		data:{queHacer:"MostrarVotacion"}
		
	});
	funcionAjax.done(function(retorno){
		//alert(retorno+"fsddsfds");
		//console.log("4"+retorno+"4");
		if (retorno.trim()=="NO") 
		{
			
			MostrarIngreso();
			

		}
		else
		{
			
			$("#principal").html(retorno);
			$("#informe").html("Realice votacion !");
		}
		

	});
	funcionAjax.fail(function(retorno){

		//bla bla bla
	});

}


function Listado()
{
	var funcionAjax=$.ajax({
		url:"nexo.php",
		type:"post",
		data:{queHacer:"MostrarListado"}
	});

	funcionAjax.done(function(retorno){
		$("#principal").html(retorno);
		$("#informe").html("Correcto!!!");
		
	})
funcionAjax.fail(function(retorno){
		$("#principal").html(":(");
		$("#informe").html(retorno.responseText);	
	});

}