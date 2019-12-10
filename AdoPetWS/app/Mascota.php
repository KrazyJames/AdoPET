<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Mascota extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nombre', 'raza', 'genero', 'edad'
    ];
}
