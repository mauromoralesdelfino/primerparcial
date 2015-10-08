function BorrarVoto(idParametro)
{

	var funcionAjax=$.ajax({
		url:"nexo.php",
		type:"post",
		data:{
			queHacer:"BorrarVoto",
			id:idParametro
		}
	});

	funcionAjax.done(function(retorno){
		Listado()
		//alert(retorno);
		$("#informe").html("cantidad de eliminados "+ retorno);	
	});
	funcionAjax.fail(function(retorno){	
		$("#informe").html(retorno.responseText);
		//alert(retorno);	
	});	
}

function GuardarVoto()
{	

	var id=$("#idVOTO").val();
	var provincia=$("#provincia").val();
	var sexo=$("#sexo:checked").val();
	var presidente=$("#presidente").val();
	
	
	var funcionAjax=$.ajax({
		url:"nexo.php",
		type:"post",
		data:{
			queHacer:"GuardarVoto",
			id:id,
			provincia:provincia,
			sexo:sexo,
			presidente:presidente,
			

		}

	});

	funcionAjax.done(function(retorno){
		alert("FUNCIONAAAAA");
		Listado();
		desloguear();	
		$("#informe").html("cantidad de agregados "+ retorno);
		
	});

	funcionAjax.fail(function(retorno){
		$("#informe").html(retorno.responseText);
	});
}

function EditarVoto(idParametro)
{
	var funcionAjax=$.ajax({
		url:"nexo.php",
		type:"post",
		data:{
			queHacer:"TraerVoto",
			id:idParametro
		}
	});

	funcionAjax.done(function(retorno){
		var voto=JSON.parse(retorno);
		$("#idVOTO").val(voto.id);
		$("#sexo").val(voto.sexo);
		$("#provincia").val(voto.provincia);
		$("#presidente").val(voto.presidente);
	});
	funcionAjax.fail(function(retorno){
	$("#informe").html(retorno.responseText);

	})
	MostrarVotacion();
}