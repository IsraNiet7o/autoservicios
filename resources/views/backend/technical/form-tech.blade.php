<div class="row">
   <div class="col-xs-12 col-sm-6">
      <div class="form-group">
         {!! Form::label('name', 'Nombre', ['class'=>'condensada-bolt']) !!}
         {!! Form::text('name', null,['class'=>'form-control', 'placeholder'=>'Nombre', 'required' => 'required']) !!}
      </div>
   </div>
   <div class="col-xs-12 col-sm-6">
      <div class="form-group">
         {!! Form::label('schedule', 'Horario', ['class'=>'condensada-bolt']) !!}
         {!! Form::text('schedule', null,['class'=>'form-control', 'placeholder'=>'Horario', 'required' => 'required']) !!}
      </div>
   </div>
</div>
<div class="row">
   <div class="col-xs-12 col-sm-6">
      <div class="form-group">
         {!! Form::label('email', 'Email', ['class'=>'condensada-bolt']) !!}
         {!! Form::email('email', null,['class'=>'form-control', 'placeholder'=>'Email', 'required' => 'required']) !!}
      </div>
   </div>
   <div class="col-xs-12 col-sm-6">
      <div class="form-group">
         {!! Form::label('pass', 'Password', ['class'=>'condensada-bolt']) !!}
         {!! Form::password('pass',['class'=>'form-control', 'placeholder'=>'Password', 'required' => 'required']) !!}
      </div>
   </div>
</div>
<div class="row">
   <div class="col-xs-12 col-sm-6">
      <div class="row">
         <div class="col-xs-12">
            <div class="form-group">
               {!! Form::label('tel', 'Teléfono', ['class'=>'condensada-bolt']) !!}
               {!! Form::text('tel', null,['class'=>'form-control', 'placeholder'=>'Teléfono', 'required' => 'required']) !!}
            </div>
         </div>
      </div>
      <div class="form-group">
          <label for="inputFile">Fotografía</label>
          <input  type="file" name="file[]" id="inputFile" >
          <p class="help-block">Seleccione una Imagen para mostrar.</p>
      </div>
      <br>
   </div>
   <div class="col-xs-12 col-sm-6">
      <div id="muestraimg" class="center">
         <h6 class="valign grey-text lighten-2">
            <br><br>
            Sube una fotografía que no pese más de 500kb!
         </h6>
      </div>
   </div>
</div>