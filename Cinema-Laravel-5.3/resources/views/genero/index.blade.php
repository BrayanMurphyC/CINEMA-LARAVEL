@extends('layouts.admin')
      @section('content')

         <table class="table">
           <thead>
             <th>Nombre</th>
             <th>Operaciones</th>
           </thead>
           <tbody id="datos"> </tbody>
        </table>

      @endsection

      {{--llamar al script AJAX para listar, aca usaremos el script2 asi que lo llamamos--}}
          @section('scripts')
                 {!!Html::script('js/script2.js')!!} <!--PARA PODER USAR EL AJAX - LEER CON AJAX-->
          @endsection
