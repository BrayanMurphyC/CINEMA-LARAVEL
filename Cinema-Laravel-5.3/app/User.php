<?php

namespace Cinema;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes; //PARA PODER USAR SoftDeletes VER LA DOCUMENTACION
class User extends Authenticatable
{
    use Notifiable,SoftDeletes; //PARA PODER USAR SoftDeletes

    protected $table = 'users'; //hace referencia a la base de datos users no importa si se pone o no ya que viene por default
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
     //PARTES QUE SE NOS PERMITE SER RELLENADAS, se define los atributos que pueden ser llenados por el usuario
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

     protected $dates = ['deleted_at']; //PARA PODER USAR SoftDeletes

    //creamos un metodo para estar seteando la contraseña cada ves que ESTA SEA CAMBIADA
    //encriptara desde aca el password
    public function setPasswordAttribute($valor)  //recibimos un valor
    {
      if (!empty($valor)) { //dond preguntamos que si ese valor no esta vacio vamos a cambiar la contraseña.... ,
        $this->attributes['password'] = \Hash::make($valor);  //el metodo hash es para poder encriptar la contraseña y le vamos a pasar el valor, creamos este metodo para usar en el controler ya no sera necesario encrptar.
      }
    }
}
