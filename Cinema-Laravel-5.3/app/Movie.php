<?php

namespace Cinema;

use Illuminate\Database\Eloquent\Model;

use Carbon\Carbon; //usamos esta libreria DOCUMENTACION: http://carbon.nesbot.com/

class Movie extends Model
{
    //hacemos referencia a una tabla en el modelo muvie almacenaremos movies
    //ACA IRA LO QUE ALMACENARA EL MODELO MOVIE COMO LA TABLA DE BASE DE DATOS
    protected $table = "movies"; //es la tabla que usaremos de la base de datos

    //protected $primaryKey = ""; //si no es por default definir
    //Timestamps POR default, Eloquent crea  created_at y updated_at mirar en la base de datos, estara presente en codefistrs cuando se hace la migracion en la BD estara la fehca creada y actualizadas
    //dentro de este modelo si no queremos ponemos
    //public $timestamps = false;

    //PONEMOS NUESTRA BASE DE DATOS

    protected $fillable = ['name','path','cast','direction','duration','genre_id']; //usamos path por que es el 'camino' del archivo que gurdaremos localmente


    //CREAMOS UN MUTADOR y SUBIR EL ARCHIVOS AL LOCAL, path esta en el formulario en subir el archivo ES EL NOMBRE DEL FORMULARIO
    //path es el seleccion del archivo
    //sirve para modificar elemnetos antes de ser guardados, por ejemplo las imagenes para que no se reemplaan al tener mismo nombre
    public function setPathAttribute($path){ //modificaremos el atributo path, estamos recibiendo path
      $name = Carbon::now()->second.$path->getClientOriginalName();//CON CARBON LE ESPECIFICAMOS LA FECHA DE HOY, TOMAMOS EL SEGUNDOEN QUE ES SUBIDO Y LO CONCATENAMOS AL NOMBRE ORIGINAL DEL ARCHIVO
      $this->attributes['path'] = $name; //hacemos referencia a path  y vamos a cambiarlo el nombre
      \Storage::disk('local')->put($name, \File::get($path)); //ACA SE HACE LA SUBIDA DEL ARCHIVO, especificamos el local y mediante el metodo put vamos a almacenar nuestro archivo, recibe el nombre y el archivo que vamos a subir que es el path
    }

}
