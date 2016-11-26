@extends('layouts.admin')
    @section('content')
      {!!Form::open()!!}
      @include('genero.form.genero')  {{--aca incluimos el codigo repetido html--}}

{{-- Incluimos link_to donde no nos llevara a ninguna ruta, el titulo registrar y como atributo le pasamos el ID el cual s
era registro y el segundo le pasaremos la clase--}}
      {!!link_to('#', $title='Registrar', $attributes=['id'=>'registro','class'=>'btn btn-primary'], $secure = null);!!}

      {!!Form::close()!!}
      @endsection 




{{--SIN AJAX--}}
{{-- @extends('layouts.admin')
    @section('content')

      {!!Form::open(['route'=>'genero.store', 'method'=>'POST'])!!}



      {{-- {!! Form::submit('Registar!',['class'=>'btn btn-primary'])!!}
      {!!Form::close()!!}
    @endsection --}}
