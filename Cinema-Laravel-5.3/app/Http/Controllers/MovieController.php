<?php

namespace Cinema\Http\Controllers;

use Illuminate\Http\Request;

use Cinema\Http\Requests;

use Cinema\Genre;    //USAMOS EL MODELOS GENERO
use Cinema\Movie;    //USAMOS EL MODELOS movie

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $movies2 = Movie::MoviesConsult(); //creamos una variable movies2 que sera igual al modelo movie y especificamos nuestro modelo MoviesConsult que esta haciendo la consulta, si pongo ALL tambm funciona
      //  $return $movies; para ver la consilta prueba
       return view('pelicula.index',compact('movies2')); //RETORNAREMOS A index.blade Y ENVIAMOS los datos que esta en la variable que creamos

      //return 'estamos en el index';  //http://localhost:8000/movie
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {                                         //usamos el MODELO GENERO y enviamos el genero y id a la vista create.blade para usar en el listado de genero
      $genreslist = Genre::pluck('genre', 'id'); //LISTAMOS o arrancamos o cogemos EL GENERO Y EL ID CORRESPONDIENTE DE TODOS LOS GENEROS - pluck ES  ARRANCAR o coger, list ya no se usa
                                            //SOLO estamos listando el genero y su id, y esto lo utilizamos en un SELECT en el pelicula.blade.php
      return view('pelicula.create',compact('genreslist')); //RETORNAMOS A Create.BLADE.PHP y mandamos como datos lo de la variable genreslist PARA USAR EN EL SELECT LO QUE ESTAMOS COGIENDO QUE ES EL GENERO CON SU id
    }                                        //despues nos vamos a config/Filesystems.php

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      Movie::create($request->all()); //creamos la pelicula QUE LLENE TOODOO
      return "Listo";                 //nos vamos al modelo MOVIE para condicionar que no reemplace archivos y añadir los campos que puedan ser rellenados
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //muestra recursos en especifico
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
