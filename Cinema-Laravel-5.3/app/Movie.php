<?php

namespace Cinema;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    //hacemos referencia a una tabla en el modelo muvie almacenaremos movies
    //ACA IRA LO QUE ALMACENARA EL MODELO MOVIE COMO LA TABLA DE BASE DE DATOS
    protected $table = "movies"; //es la tabla que usaremos de la base de datos

    //protected $primaryKey = ""; //si no es por default definir

//Timestamps POR default, Eloquent crea  created_at y updated_at mirar en la base de datos, estara presente en codefistrs cuando se hace la migracion en la BD estara la fehca creada y actualizadas
//dentro de este modelo si no queremos ponemos
//public $timestamps = false;

}
