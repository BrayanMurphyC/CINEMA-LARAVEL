<?php

namespace Cinema\Http\Controllers;

use Illuminate\Http\Request;

use Cinema\Genre; //USAMOS PARA USAR EL NAMESPACE DE NUESTRA APLICACION Y USAR EL MODELO Genre
use Cinema\Http\Requests;
class GeneroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      //  return 'hola estamos en el index';
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      //sin AJAX
      // return view('genero.create');   //nos retorna la vista en la carpeta  genero el archivo create.blade.php

      //CON AJAX
      return view('genero.create');  
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
   //SIN AJAX
      /** PARTE SIN AJAX PARA CREAR GENERO, PONER EL CAMPO DE LA BASE DE DATO IGUAL QUE EL NOMBRE DEL FORMULARIO*/
       //Genre::create([
       //'genre'=> $request['genre'],
       //]);
       //return "Usuario Registrado"; //nos dice si se registro el usuario y no retorna

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
