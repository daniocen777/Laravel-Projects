<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pago extends Model
{
    // Lo que se guardará desde la api
    protected $fillable = ['idStudent', 'idCost'];

    // Referenciar la llave foránea
    public function student()
    {
        return $this->belongsTo('App\Alumno', 'idStudent');
    }

    public function cost()
    {
        return $this->belongsTo('App\Precio', 'idCost');
    }
}
