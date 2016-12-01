<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Marca extends Model
{
    protected $table = 'marcas';


    protected $fillable = [
        'nit', 'razon', 'imagen',
    ];

    public function getSitios(){
        return $this->hasMany('App\Sitio');
    }


}
