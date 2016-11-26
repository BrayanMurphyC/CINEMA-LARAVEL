@extends('layouts.admin')
    @section('content')
      {!!Form::open()!!}

      <div id="msj-success" class="alert alert-success alert-dismissible" role="alert" style="display:none">
       		<strong> Genero Agregado Correctamente.</strong>
   	</div>

         {{--token sirve para que laravel reconozca que esa peticion no es malintencionada le asiga un token---}}
         <input type="hidden" name="_token" value="{{ csrf_token() }}" id="token"> {{-- el ID hace mas facil de obtener su valor en AJAX--}}
         @include('genero.form.genero')  {{--aca incluimos el codigo repetido html--}}

{{-- Incluimos link_to donde no nos llevara a ninguna ruta, el titulo registrar y como atributo le pasamos el ID el cual s
era registro y el segundo le pasaremos la clase--}}
      {!!link_to('#', $title='Registrar', $attributes = ['id'=>'registro', 'class'=>'btn btn-primary'], $secure = null)!!}

      {!!Form::close()!!}
	  @endsection




{{--SIN AJAX--}}
{{-- ARROBA extends('layouts.admin')
    @section('content')

      {!!Form::open(['route'=>'genero.store', 'method'=>'POST'])!!}



      {{-- {!! Form::submit('Registar!',['class'=>'btn btn-primary'])!!}
      {!!Form::close()!!}
    @endsection --}}
