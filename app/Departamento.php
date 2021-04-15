<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    //

    /** Relacion 1:1 de Departamento a Usuario **/
    public function usuario()
    {
      return $this->hasOne(User::class, 'departamento_id', 'id');
    }

}
