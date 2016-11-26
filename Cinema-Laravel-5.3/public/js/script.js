$("#registro").click(function(){ //usamos el ID REGISTRO DEL link_to en create.blade.php cuando tenemos un evento click
	var dato = $("#genre").val(); //especificamos el dato que sera igual ID del INPUT de genero.blade.php,y obtendremos su valor
	var route = "http://localhost:8000/genero"; //en esta variable es igual a la ruta que nos interesa, puerto 8000 y la ruta es el genero - URI
	var token = $("#token").val(); //creamos esta variable token que toma el valor DEL ID del que tenga el token (id='token')

	$.ajax({
		url: route, //PASAMOS LA URL
		headers: {'X-CSRF-TOKEN': token},//le enviamos el token
		type: 'POST',	//como queremos mandar la informacion que enviamos mediante el metodo POST
		dataType: 'json', //tipo de dato que sera tipo JASON
		data:{genre: dato}, //por ultimo le pasamos la data, que le especificamos que vamos a enviar un genre y le enviamos el dato que estamos tomando en la variable de la parte de arriba

		success:function(){ //llamamos la funcion success
			$("#msj-success").fadeIn(); //mostrar mensaje mediante selectores y mostrarlo(fede)
		},

		error:function(msj){
			$("#msj").html(msj.responseJSON.genre);
			$("#msj-error").fadeIn();
		}
	});

});




// Saludos desde Venezuela, buen aporte, este script funciona para solucionar el error al dar enter en el formulario:
// function Datos(){
//     var dato = $('#genre').val();
//     var route = 'http://localhost:8000/genero';
//     var token = $('#token').val();
//
//     $.ajax({
//         url:        route,
//         headers:    {'X-CSRF-TOKEN':token},
//         type:       'POST',
//         dataType:   'json',
//         data:       {genre: dato},
//
//         success:function(){
//             $('#msj-success').fadeIn();
//             $('#genre').val('');
//         }
//     });
// };
//
// $('form').keypress(function(e){
//     if(e.which === 13){
//         Datos();
//         return false;
//     }
// });
// $('#registro').click(function(){
//     Datos();
// });
