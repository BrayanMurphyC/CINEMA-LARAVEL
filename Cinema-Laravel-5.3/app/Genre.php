<?php

namespace Cinema;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{

  //hacemos referencia a la tabla que almacenara de la base de datos
    protected $table = "genres";

    protected $fillable = [
         'genre',
    ];

}
