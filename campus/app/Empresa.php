<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    // Lo que se guardarĂ¡ desde la api
    protected $fillable = ['name', 'description', 'phone'];
}
