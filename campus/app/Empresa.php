<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    // Lo que se guardará desde la api
    protected $fillable = ['name', 'description', 'phone'];
}
