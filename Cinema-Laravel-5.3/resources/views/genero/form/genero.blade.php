<div class="form-group">
  {!!Form::label('genre','Nombre:')!!}  {{--especificamos el nombre que va a obtener y le pasamos lo que queremos que se renderice en la vista--}}
  {!!Form::text('genre', null,['id'=>'genre','class'=>'form-control', 'placeholder'=>'Ingrese el género de la película'])!!}
  {{-- creamos un imput de texto donde le pasamos un nombre genre, le pasamos un nulo no queremos valor por default, despues le asignamos atributos primero el id despues la clase BOOSTRAP  y despues placeholder--}}
 </div>




{{--SIN AJAX--}}
{{-- <div class="form-group">
  {!!Form::label('Género:')!!}
  {!!Form::text('genre', null,['class'=>'form-control', 'placeholder'=>'Ingrese el gero de la peli'])!!} {{--NAME ES EL NOMBRE O ATRIBUTO DEL TEXT Y EL NULL ES EL VAMOR QE PODEMOS PONERLO SI QUEREMOS QUE TENGA
  </div> --}}
