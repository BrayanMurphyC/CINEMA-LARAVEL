@extends('layouts.principal')
@section('content')

<!--REPITE-->

<!--FIN REPITE-->

			<div class="review-content">
						<div class="top-header span_top">
							<div class="logo">
								<a href="index.html"><img src="images/logo.png" alt="" /></a>
								<p>Movie Theater</p>
							</div>
							<div class="search v-search">
								<form>
									<input type="text" value="Search.." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search..';}"/>
									<input type="submit" value="">
								</form>
							</div>
							<div class="clearfix"></div>
						</div>
						<div class="reviews-section">
							<h3 class="head">Movie Reviews</h3>
								<div class="col-md-9 reviews-grids">

{{--HACEMOS UN RECORRIDO CON LOS DATOS QUE NOS MANDA DESDE EL FrontController metodo reviews--}}

									@foreach ($moviesfront as $moviepeli)

											<div class="review">
													<div class="movie-pic">
															<img src="movies/{{$moviepeli->path}}" alt="" /> {{--colocamos las fotos d PELICULA que esta en la carpetamovies y se guarda en el path--}}
													</div>
											<div class="review-info">
														<a class="span" href="single.html">
														<i>{{$moviepeli->name}}</i></a> {{-- mostramos del moviesfront que trae del modelo MOVIE su nombre--}}
															<p class="info">CAST:&nbsp;&nbsp;{{$moviepeli->cast}}</p>
															<p class="info">DIRECTION:&nbsp;&nbsp;{{$moviepeli->direction}}</p>
															<p class="info">GENRE:&nbsp;&nbsp;{{$moviepeli->genre}}</p>
															<p class="info">DURATION:&nbsp;&nbsp;{{$moviepeli->duration}}</p>
											</div>
											<div class="clearfix"></div>
										</div>
									@endforeach
								</div>

							</div>
								<div class="clearfix"></div>
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
<!--REPITE-->

<!--FIN REPITE-->
@endsection
