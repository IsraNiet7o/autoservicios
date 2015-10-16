var tbody   = $('#tbody');
var route   = "/subcategory";



function resetForm () {
   $('#form-sub').each(function(){       
      this.reset();
    });
    $('#form-sub-edit').each(function(){       
      this.reset();
    });
}

$(function () {
   $('#btn-reset-sub').click(function () {
      resetForm();
      $('#msj-error').slideUp();
   });

   $('#btn-reset-sub-edit').click(function () {
      resetForm();
      $('#msj-error-edit').slideUp();
   });
});

// Consulta
function Carga(){
  $.ajax({
      url     : route,
      type    : 'GET',
      dataType  : 'json',
      beforeSend: function () {
        //console.log("antes");
      },
  })
  .done(function( data, textStatus, jqXHR ) {
      $(data).each(function (key,value) {
          tbody.append('<tr>'+ 
                         '<td>'+value.title+'</td>'+
                         '<td class="grey-text">'+value.category+'</td>'+
                         '<td class="grey-text">'+value.descrip_ini+'</td>'+
                         '<td class="grey-text">'+value.descrip_foo+'</td>'+
                         '<td class="text-center">'+
                          '<a class="a-post a-amber" id="'+ value.id +'"  href="#!" OnClick="Mostrar(this)" data-toggle="modal" data-target="#modal-editar-subcat" data-whatever="@' + value.id + '">'+
                            '<i class="material-icons">mode_edit</i>'+
                          '</a>'+
                          '</td>'+
                          '<td class="text-center">'+
                              '<a class="a-post a-red" id="' + value.id + '" href="#!" OnClick="DeleteCat(this)" data-toggle="modal" data-target="#modal-subcat-delete" data-whatever="@' + value.id + '">'+
                                  '<i class="material-icons">delete</i>'+ 
                              '</a>'+
                          '</td>'+
                           '</tr>')
        });

   })
   .fail(function( jqXHR, textStatus, errorThrown ) {   
      alert( "La solicitud a fallado. Intentelo más Tarde." + jqXHR);
  });
}

//Crear
$(function () {
  $('#btn-save-sub').click(function (e) {

     e.preventDefault();

     var datos  = $('#form-sub').serialize();
     var token = $('input[name="_token"]').val();

      $.ajax({
        url       : route,
        headers   : {'X-CSRF-TOKEN' : token},
        type      : 'POST', 
        dataType  : 'json',
        data      : datos,
      })
     .done(function (data) {
         $('#msj-succes').fadeIn();
         $('#ms-model').empty();
         $('#ms-model').append(data.mensaje);
         resetForm();
         $('#modal-subcategories').modal('toggle');
         $(tbody).empty();
         Carga();

      })
     .fail(function (jqXHR) {
       var obj = jqXHR.responseJSON;
       $('#msj').html("");
       $.each( obj, function( key, value ) {
         $('#msj').append(value + '<br>');
       });
       $('#msj-error').slideDown();

     });
    
   });

});

function Mostrar (btn) {
   var ruta = '/subcategory/'+btn.id+'/edit';

   $.ajax({
      url         : ruta,
       type       : 'GET',
       dataType   : 'json',
   }).done(function (data) {
      $('#id').val(data.id);
      $("input[name = 'title'").val(data.title);
      $("textarea[name = 'descrip-ini'").val(data.descrip_ini);
      $("textarea[name = 'descrip-foo'").val(data.descrip_foo);

   }).fail(function (data){
      alert('Error de Conexción. Intentelo más Taede.');
   });
}

//Edit
$('#btn-update-subcat').click(function (e) {
   e.preventDefault();

   var value   = $('#id').val();
   var dato    = $('#form-sub-edit').serialize();
   var ruta = '/subcategory/'+ value +'';
   var token = $('input[name="_token"]').val();


   $.ajax({
      url      : ruta,
      headers  : {'X-CSRF-TOKEN' : token},
      type  : 'PUT',
      dataType: 'json',
      data  : dato,
   })
   .done(function (data) {
      $('#msj-succes').fadeIn();
      $('#ms-model').empty();
      $('#ms-model').append(data.mensaje);
      resetForm();
      $('#modal-editar-subcat').modal('toggle');
      $(tbody).html('');
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


   $('#btn-error-edit').click(function() {
      $('#msj-error-edit').slideUp();
   })

});

function DeleteCat (btn) {
   var ruta = '/subcategory/'+btn.id+'/show';
   $.ajax({
      url      : ruta,
       type       : 'GET',
       dataType   : 'json',
   }).done(function (data) {
      $('#id-subcat-name').empty();
      $('#id-subcat-name').append('<strong>'+data.title+'</strong>');
      $('#inputid').val("");
      $('#inputid').val(data.id);

   }).fail(function (data){
      console.log(data);
   });
}

$('#btn-delete-subcat').click(function () {
   var id = $('#inputid').val();
   var form = $('#form-subcat-delete');
   var ruta =  form.attr('action').replace(':CAT_ID', id);
   var data = form.serialize();

   $.post(ruta, data, function  (data) {
      //
   })
   .done(function (data) {
      $('#modal-subcat-delete').modal('toggle');
      $('#msj-succes').fadeIn();
      $('#ms-model').empty();
      $('#ms-model').append(data);
      $(tbody).empty();
      Carga();
   })
   .fail(function  (argument) {
      console.log(argument);
   });

});


$(document).ready(function() {
  Carga();
  $('[data-toggle="popover"]').popover();

  $('#btn-close-asuccess').click(function() {
     $('#msj-succes').slideToggle();
  });
  $('#btn-close-erorr-sub').click(function() {
     $('#msj-error').slideToggle();
  });
});
