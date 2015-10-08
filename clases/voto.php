
<?php
class voto
{

public $id;
public $provincia;
public $presidente;
public $sexo;

public static function TraerTodosLosVotos()
{

$objetoAcccesDatos = AccesoDatos::dameUnObjetoAcceso();
$consulta = $objetoAcccesDatos->RetornarConsulta("CALL TraerTodosLosVotos()");
$consulta->execute();
 return $consulta->fetchAll(PDO::FETCH_CLASS, "voto");

}

public function BorrarVoto()
   {
      $objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
      $consulta =$objetoAccesoDato->RetornarConsulta("CALL BorrarVoto(:id)"); 
      $consulta->bindValue(':id',$this->id, PDO::PARAM_INT);    
      $consulta->execute();
      return $consulta->rowCount();
   }

 public function InsertarElVotoParametros()
 {
 	$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
				$consulta =$objetoAccesoDato->RetornarConsulta("CALL InsertarVoto(:id,:sexo,:presidente,:provincia)");
				$consulta->bindValue(':id',$this->id, PDO::PARAM_INT);
				$consulta->bindValue(':sexo', $this->sexo, PDO::PARAM_STR);
				$consulta->bindValue(':presidente', $this->presidente, PDO::PARAM_STR);
				$consulta->bindValue(':provincia', $this->provincia, PDO::PARAM_STR);
				$consulta->execute();		
				return $objetoAccesoDato->RetornarUltimoIdInsertado();
 }

 public function ModificarVotoParametros()
	 {
			$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
			$consulta =$objetoAccesoDato->RetornarConsulta("CALL ModificarVotoParametros(:id,:sexo,:presidente,:provincia)");
			$consulta->bindValue(':id',$this->id, PDO::PARAM_INT);
			$consulta->bindValue(':sexo',$this->sexo, PDO::PARAM_INT);
			$consulta->bindValue(':presidente', $this->presidente, PDO::PARAM_STR);
			$consulta->bindValue(':provincia', $this->provincia, PDO::PARAM_STR);
			return $consulta->execute();
	 }

 public function GuardarVoto()
 {
   
 	if ($this->id>0) 
 	{
 		
 		$this->ModificarVotoParametros();
 	}else
 	{
 		$this->InsertarElVotoParametros();
 	}

 }

	public static function TraerVoto($id)
	{

		$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
			$consulta =$objetoAccesoDato->RetornarConsulta("select id, sexo as sexo, presidente as presidente,provincia as provincia from votos where id = $id");
			$consulta->execute();
			$votoBuscado= $consulta->fetchObject('voto');
			return $votoBuscado;
	}


}//clase


?>