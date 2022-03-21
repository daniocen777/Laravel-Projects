<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Precio extends Model
{
    // Lo que se guardará desde la api
    protected $fillable = ['type', 'cost', 'state'];
}
