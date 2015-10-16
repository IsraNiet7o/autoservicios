var datos 	= $('#datos');
var route = "/category";

// Consulta
function Carga(){
	$.ajax({
	    url 		: route,
	    type 		: 'GET',
	    dataType 	: 'json',
	})
	.done(function( data, textStatus, jqXHR ) {
     	$(data).each(function (key,value) {
	    		datos.append('<tr data-id="'+ value.id +'" ><td>'+value.category +'</td>'+
	    						'<td class="grey-text">'+value.header +'</td>'+
	    		                '<td class="grey-text">'+value.descrip +'</td>'+
	    		                '<td class="grey-text"><i class="material-icons brown-text">'+value.icono +'</i></td>'+
	    		                '<td class="text-center">'+
	    		                	'<a class="a-post a-amber" id="'+ value.id +'" OnClick="Mostrar(this)"  href="#!" data-toggle="modal" data-target="#modal-editar-cat" data-whatever="@' + value.id + '">'+
	    		                		'<i class="material-icons">mode_edit</i>'+ 	
	    						    '</a>'+
	    					    '</td>'+
	    		                '<td class="text-center">'+
	    		               	    '<a class="btn-delete-cat a-post a-red" id="' + value.id + '"   href="#!" OnClick="DeleteCat(this)" data-toggle="modal" data-target="#modal-cat-delete" data-whatever="@' + value.id + '">'+
	    		               		    '<i class="material-icons">delete</i>'+
	    		        			'</a>'+
	    		        		'</td>'+
	    		               '</tr>')
	    	});

	 })
	 .fail(function( jqXHR, textStatus, errorThrown ) {   
	    alert( "La solicitud a fallado. Intentelo más Tarde." +  textStatus);
	});
}

//Crear
$(function () {
 	$('#btn-save-cat').click(function (e) {

 		e.preventDefault();

 		var dato  = $('#form-cat').serialize();
 		var token = $('#token').val();

 		$.ajax({
 		  url   : route,
 		  headers : {'X-CSRF-TOKEN' : token},
 		  type  : 'POST', 
 		  dataType: 'json',
 		  data  : dato,
 		})
 		.done(function ( data, textStatus, jqXHR ) {
 		   $('#msj-success').fadeIn();
         $('#ms-model').empty();
         $('#ms-model').append(data.mensaje);
 		   resetForm();
	      $('#modal-categories').modal('hide');
	      $(datos).empty();

 		    Carga();
 		 })
 		.fail(function( jqXHR) {
 		  var obj = jqXHR.responseJSON;
 		  $('#msj').html("");
 		  $.each( obj, function( key, value ) {
 		    $('#msj').append(value + '<br>');
 		  });
 		  $('#msj-error').slideDown();

 		}); 		
 	});

	$('#btn-close-asuccess').click(function() {
	    $('#msj-success').slideUp();
	});
   $('#btn-close-error-cat').click(function() {
       $('#msj-error').slideUp();
   });
});


function Mostrar (btn) {
	var ruta = '/category/'+btn.id+'/edit';

	$.ajax({
		url 		: ruta,
	    type 		: 'GET',
	    dataType 	: 'json',
	}).done(function (data) {
		$('#id').val(data.id);
		$("input[name = 'category'").val(data.category);
		$("input[name = 'header'").val(data.header);
		$("textarea[name = 'descrip'").val(data.descrip);
		$("input[name = 'ico'").val(data.icono);

	}).fail(function (data){
		var obj = data.responseJSON;
		 $('#msj').html("");
		 $.each( obj, function( key, value ) {
				$('#msj').append(value + '<br>');
			});
		$('#msj-error').slideDown();
	});
}

//Edit
$('#btn-update-cat').click(function (e) {
	e.preventDefault();

	var value 	= $('#id').val();
	var dato 	= $('#form-cat-edit').serialize();
	var ruta	= '/category/'+ value +'';
	var token 	= $('#token').val();

	$.ajax({
		url		: ruta,
		headers	: {'X-CSRF-TOKEN' : token},
		type	: 'PUT',
		dataType: 'json',
		data 	: dato,
	})
	.done(function (data) {
		$('#modal-editar-cat').modal('toggle');
		$('#msj-success').fadeIn();
		$('#ms-model').empty();
		$('#ms-model').append(data.mensaje);
		$(datos).empty();
		Carga();
	})
	.fail(function  (data) {
		$('#msj-error-edit').slideDown();
		var obj = data.responseJSON;
		$('#msj-edit').html("");
		$.each( obj, function( key, value ) {
			$('#msj-edit').append(value + '<br>');
		});
	
	});

});

function resetForm () {
	$('#form-cat').each(function(){       
		this.reset();
    });
    $('#form-cat-edit').each(function(){       
		this.reset();
    });
}

$(function () {
	$('#btn-reset-cat').click(function () {
		resetForm();
		$('#msj-error').slideUp();
	});

	$('#btn-reset-cat-edit').click(function () {
		resetForm();
		$('#msj-error-edit').slideUp();
	});
});

function DeleteCat (btn) {
	var ruta = '/category/'+btn.id+'/show';

	$.ajax({
		url 		: ruta,
	    type 		: 'GET',
	    dataType 	: 'json',
	}).done(function (data) {
		$('#id-cat-name').empty();
		$('#id-cat-name').append('<strong>'+data.category+'</strong>');
		$('#inputid').val("");
		$('#inputid').val(data.id);

	}).fail(function (data){
		console.log(data);
	});
}

$('#btn-delete-cat').click(function () {
	var id = $('#inputid').val();
	var form = $('#form-cat-delete');
	var ruta =  form.attr('action').replace(':CAT_ID', id);
	var data = form.serialize();

	$.post(ruta, data, function  (data) {
		//
	})
	.done(function (data) {
		$('#modal-cat-delete').modal('toggle');
		$('#msj-success').fadeIn();
		$('#ms-model').empty();
		$('#ms-model').append(data);
		$(datos).empty();
		Carga();
	})
	.fail(function  (argument) {
		console.log(argument);
	});

});


$(document).ready(function() {
	Carga();
	$(".btn-delete-cat").click(function () {
		console.log('cosa');
	});
});



	

