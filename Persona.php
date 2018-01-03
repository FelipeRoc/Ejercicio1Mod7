<?php

class Persona {
	public $Nombre;
	public $Apellido;
	public $Rut;

//metodo mostrar rut de la persona.
	public function mostrar_rut(){
		 return "Mi Rut es ".$this->Rut;
	}

//metodo para mostrar saludo de la persona.
   public function saludar_persona(){
   		return "Hola, soy ".$this->Nombre." ".$this->Apellido;
   }

//metodo para mostrar despedida de la persona.
	 public function despedir_persona(){
			 return "Se despide ".$this->Nombre." ".$this->Apellido;
	 }

   public function setNombre($Nombre_input){
   		$this->Nombre = $Nombre_input;
   }

   public function getNombre(){
   		return $this->Nombre;
   }

	 public function getApellido(){
	 	 return $this->Apellido;
	 }

	public function setApellido($Apellido_input){
		$this->Apellido = $Apellido_input;
	}

	public function setRut($Rut_input){
		 $this->Rut = $Rut_input;
	}

	public function getRut(){
		 return $this->Rut;
	}


}

$obj = new Persona();
$obj->setNombre("Felipe");
$obj->setApellido("Roco");
$obj->setRut("12345678-9");

/*echo "<br>".$obj->saludar_persona();
echo "<br>".$obj->despedir_persona();
echo "<br>".$obj->mostrar_rut();*/

$per = new Persona();
$per->setNombre("Gabriela");
$per->setApellido("Lorca");
$per->setRut("98765432-1");

/*echo "<br>".$per->saludar_persona();
echo "<br>".$per->despedir_persona();
echo "<br>".$per->mostrar_rut();*/
?>
