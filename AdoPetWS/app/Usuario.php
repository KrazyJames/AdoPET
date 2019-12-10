<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Usuario extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nombre', 'username', 'correo', 'contrasena', 'telefono'
    ];
}
