<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    // Lo que se guardará desde la api
    protected $fillable = ['name', 'lastname', 'email', 'state', 'peruvian', 'attendance', 'phone', 'idCompany'];
    // Referenciar la llave foránea
    public function compony()
    {
        return $this->belongsTo('App\Empresa', 'idCompany');
    }
}
