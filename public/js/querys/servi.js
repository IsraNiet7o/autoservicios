$(function (){

	$('#inputFile').on("change", function(){
		/*Limpia la vista previa*/
		$("#muestraimg").html('');

		var imagen = this.files[0];
		var navegador = window.URL || window.webkitURL;

		//console.log(imagen);

		var name =  imagen.name;
		var size = imagen.size;
		var type =  imagen.type;

		if (size > 500000) {

			$("#muestraimg").append("<p>La imagen "+name+ " supera el máximo tamaño permitido 500kb. </p> ");

		}else if(type != 'image/jpeg' && type !='image/jpg' && type != 'image/png'){

			$("#muestraimg").append("<p>La imagen "+name+ " no es un tipo de imagen Permitido.</p> ");

		}else{

			var reader = new FileReader();
				reader.onload =  function(e){
					$("#muestraimg").append("<img src='"+e.target.result+"' class='img-thumbnail'/>");
				}
				reader.readAsDataURL(imagen);
		}


	});
    
});