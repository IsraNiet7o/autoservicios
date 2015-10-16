$(document).ready(function  () {

	$('.delete').click(function () {
		var id  = $(this).attr("id");
		var ruta = '/articulos/'+id+'/edit';
		$.ajax({
		   url      : ruta,
		    type       : 'GET',
		    dataType   : 'json',
		}).done(function (data) {
		   $('#id-arti-name').empty();
		   $('#id-arti-name').append('<strong>'+data.title+'</strong>');
		   $('#inputid').val("");
		   $('#inputid').val(data.id);

		}).fail(function (data){
		   alert('Error de Conexion.')
		});
	});


	$('#btn-delete-art').click(function () {
	   var id = $('#inputid').val();
	   var form = $('#form-arti-delete');
	   var ruta =  form.attr('action').replace(':CAT_ID', id);
	   var data = form.serialize();

	   $.post(ruta, data, function  (data) {
	   		$('#modal-arti-delete').modal('toggle');
	   		$('#msj-succes').fadeIn();
	   		$('#ms-model').empty();
	   		$('#ms-model').append(data);

	   		$('tr[data-id="'+id+'"]').fadeOut();
	   })
	   .fail(function  (argument) {
	      alert('Error de Conexion.');
	      $('tr[data-id="'+id+'"]').show();
	   });

	});

	$('#btn-close-asuccess').click(function() {
	   $('#msj-succes').slideToggle();
	});

});
