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
	alert("VOTACION MFKR");
	var funcionAjax=$.ajax({
        url:"nexo.php",
		type:"post",
		data:{queHacer:"MostrarVotacion"}
	});
	funcionAjax.done(function(retorno){
		alert("holaaa");
		$("#principal").html(retorno);
		$("#informe").html("Realice votacion !");

	});
	funcionAjax.fail(function(retorno){

		//bla bla bla
	});

}