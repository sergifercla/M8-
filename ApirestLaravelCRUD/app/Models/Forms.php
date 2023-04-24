<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Forms extends Model
{
    use HasFactory;
    protected $fillable =['id','nombre','apellido1','apellido2','email','telefono','genero','fNacimiento','nPadre','nMadre','nHermanos','adulto'];
}
