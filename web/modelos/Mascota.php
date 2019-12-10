<?php
class Mascota{
    public $id;
    public $nombre;
    public $especie;
    public $raza;
    public $genero;
    public $edad;
    public function __construct($id="",$nombre="", $especie="", $raza="", $genero="", $edad="")
    {
      $this->id=$id;
      $this->nombre=$nombre;
      $this->especie=$especie;
      $this->raza=$raza;
      $this->genero=$genero;
      $this->edad=$edad;
    }
}