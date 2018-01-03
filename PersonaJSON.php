<?php
  include('Persona.php');
  $obj = new Persona();
  $obj->setNombre("Roberto");
  $obj->setApellido("Enzo");
  //Imprimir Objeto
  echo json_encode($obj);
?>
