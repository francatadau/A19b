<?php
/**
 */
class liga
{
  private $mysqli;
  private $error=false;
  //Conexion
  function __construct()
  {
    $this->mysqli= new mysqli("localhost", "root", "", "liga");
    if ($this->mysqli->connect_errno) {
      $this->error=true;
    }
  }
  //Consultas
  public function copas(){
    return $resumen=$this->mysqli->query("SELECT * FROM copas");
  }
  public function equipos(){
    return $actores=$this->mysqli->query("SELECT * FROM equipos");
  }
  public function jugadores($equipo){
    return $temporada=$this->mysqli->query("SELECT * FROM jugadores WHERE id_equipo='" .$equipo ."'");
  }
}

 ?>
