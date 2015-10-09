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
	var localidad=$("#localidad").val();
    var direccion=$("#direccion").val();
	
	
	var funcionAjax=$.ajax({
		url:"nexo.php",
		type:"post",
		data:{
			queHacer:"GuardarVoto",
			id:id,
			provincia:provincia,
			sexo:sexo,
			presidente:presidente,
			localidad:localidad,
            direccion: direccion
			

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
		$("#provincia").val(voto.provincia);
		$("#localidad").val(voto.localidad);
        $("#direccion").val(voto.direccion);
		$("#presidente").val(voto.presidente);
		/*if(voto.sexo == "F")
             $('input:radio[name="sexo"][value="F"]').prop('checked', true);
        else
            $('input:radio[name="sexo"][value="M"]').prop('checked', true);	*/
		if(voto.sexo=="femenino")
			$('input:radio[name="sexo"][value=femenino]').prop('checked',true);
		else
			$('input:radio[name="sexo"][value=masculino]').prop('checked',true);
		
	});
	funcionAjax.fail(function(retorno){
	$("#informe").html(retorno.responseText);

	})
	MostrarVotacion();
}