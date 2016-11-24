@extends('layouts.principal') <!--HEREDAMOS- hacemos referencia a la carpeta layouts y al archibo principal.blade.php solo basta la primera letra-->
@section('content') <!--aca hacemos refrencia a la seccion content y lo finalizamos en la parte de abajo-->
	@include('alerts.errors')	<!--llamamos el mensaje de error de la carpeta alerts y el archivo errros-->
	@include('alerts.request')<!--llamamos el mensaje de error de la carpeta alerts y el archivo request para las validaciones de los datos-->

	<div class="header">
	<div class="top-header">
	<div class="logo">
			<a href="index.html"><img src="images/logo.png" alt="" /></a>
			<p>Movie Theater</p>
	</div>
	<div class="search">
			<form>
				<input type="text" value="Search.." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search..';}"/>
				<input type="submit" value="">
			</form>
	</div>
	<div class="clearfix"></div>
	</div>


<div class="header-info">
<h1>BIG HERO 6</h1>

{{-- FORMULARIO PARA EL LOGUEO O LOGIN, LO ANTERIOR LE MODIFICAMOS AL ESTLO BLADE EL HTML --}}

	{!!Form::open(['route'=>'log.store', 'method'=>'POST'])!!} {{--Especificamos que usaremos el metodo store de nuestro controlador y la informacion sera enviada por el metodo POST--}}
			<div class="form-group">
				{!!Form::label('correo','Correo')!!}
				{!!Form::email('email',null,['class'=>'form-control','placeholder'=>'Ingrese su Correo'])!!}
			{{-- <label>Usuario</label>
			<input type="email" class="form-control" placeholder="Ingrese Usuario"> --}}
			</div>
		<div class="form-group">
			{!!Form::label('contrasena','Contraseña')!!}
			{!!Form::password('password',['class'=>'form-control','placeholder'=>'Ingresa su Contraseña'])!!}
			{{-- <label>Contraseña</label>
			<input type="password" class="form-control" placeholder="Ingrese Contraseña"> --}}
		</div>
		{{-- <button type="submit" class="btn btn-primary">Login</button> --}}
			{!!Form::submit('Iniciar', ['class'=>'btn btn-primary'])!!}
	{!!Form::close()!!}


<!-- descripcion de la pelicula de la pagina -->

<p class="age"><a href="#">All Age</a> Don Hall, Chris Williams</p>
<p class="review">Rating	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: &nbsp;&nbsp;  8,5/10</p>
<p class="review reviewgo">Genre	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : &nbsp;&nbsp; Animation, Action, Comedy</p>
<p class="review">Release &nbsp;&nbsp;&nbsp;&nbsp;: &nbsp;&nbsp; 7 November 2014</p>
<p class="special">The special bond that develops between plus-sized inflatable robot Baymax, and prodigy Hiro Hamada, who team up with a group of friends to form a band of high-tech heroes.</p>
<!-- <a class="video" href="#"><i class="video1"></i>WATCH TRAILER</a>
<a class="book" href="#"><i class="book1"></i>BOOK TICKET</a> -->
</div>
</div>

<div class="review-slider">
<ul id="flexiselDemo1">
<li><img src="images/r1.jpg" alt=""/></li>
<li><img src="images/r2.jpg" alt=""/></li>
<li><img src="images/r3.jpg" alt=""/></li>
<li><img src="images/r4.jpg" alt=""/></li>
<li><img src="images/r5.jpg" alt=""/></li>
<li><img src="images/r6.jpg" alt=""/></li>
</ul>

</div>
@endsection <!--finalizamos la seccion-->
