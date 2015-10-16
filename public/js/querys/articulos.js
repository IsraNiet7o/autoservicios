$(function (){

	$('#btn-subtituloejem').click(function() 
	{ 
	   $('#developing').val($('#developing').val()+'<h2>Título</h2>'); 
	});

	$('#btn-subtituloPost').click(function() 
	{ 
	   $('#developing').val($('#developing').val()+'<h3>Subtítulo</h3>'); 
	});

	$('#btn-parrafoejem').click(function() 
	{ 
	   $('#developing').val($('#developing').val()+ "<p>Escribe tu Parrafo aquí.</p>"); 
	});

	$('#btn-link-post').click(function() 
	{ 
	   $('#developing').val($('#developing').val()+ '<a href="#!" class="a-post">Ejemplo de un Enlace(link)</a>'); 
	});

	$('#btn-bloquePost').click(function() 
	{ 
	   $('#developing').val($('#developing').val()+ '<blockquote><p>Escribe tu bloque aqui.</p></blockquote>'); 
	});	

	$('#btn-textoResalta').click(function() 
	{ 
	   $('#developing').val($('#developing').val()+ '<strong>Este es el texto resaltado</strong>'); 
	});

	$('#btn-textoItalica').click(function() 
	{ 
	   $('#developing').val($('#developing').val()+ '<em>Este es un texto en italica</em>'); 
	});

	$('#btn-listadesorden').click(function() 
	{ 
	   $('#developing').val($('#developing').val()+ '<ul class="estilo">'+
              '<li>Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</li>'+
              '<li>Donec id elit non mi porta gravida at eget metus.</li>'+
              '<li>Nulla vitae elit libero, a pharetra augue.</li>'+
          		'</ul>'); 
	});

	$('#btn-listaorden').click(function() 
	{ 
	   $('#developing').val($('#developing').val()+ '<ol>'+
              '<li>Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</li>'+
              '<li>Donec id elit non mi porta gravida at eget metus.</li>'+
              '<li>Nulla vitae elit libero, a pharetra augue.</li>'+
          		'</ol>'); 
	});

	$('#btn-imag-arti-ejem').click(function() 
	{ 
	   $('#developing').val($('#developing').val()+ '<div class="col-xs-12 text-center">'+
              '<img src="../../img/img_arti/desdemac.png" alt="Desde Mac">'+
              '</div>'); 
	});

});