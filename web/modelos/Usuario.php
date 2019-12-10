<?php
class Usuario{
    public $id;
    public $nombre;
    public $username;
    public $correo;
    public $contrasena;
    public $telefono;
    public function __construct($id="",$nombre="", $username="", $correo="", $contrasena="", $telefono="")
    {
      $this->id=$id;
      $this->nombre=$nombre;
      $this->username=$username;
      $this->correo=$correo;
      $this->contrasena=$contrasena;
      $this->telefono=$telefono;
    }
}