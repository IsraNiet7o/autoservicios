<div class="row">
   <div class="col-xs-12 col-sm-4">
      <div class="form-group">
         {!! Form::label('brand', 'Marca del Equipo', ['class'=>'condensada-bolt']) !!}
         {!! Form::text('brand', null,['class'=>'form-control', 'placeholder'=>'Marca del Equipo', 'required' => 'required']) !!}
      </div>
   </div>
   <div class="col-xs-12 col-sm-4">
   <div class="form-group">
       <label for="inputFile">Fotografía</label>
       <input  type="file" name="file[]" id="inputFile" >
       <p class="help-block">Seleccione una Imagen para mostrar.</p>
   </div>
   <br>
   </div>
   <div class="col-xs-12 col-sm-4">
      <div id="muestraimg" class="center">
         <h6 class="valign grey-text lighten-2">
            <br><br>
            Sube una fotografía que no pese más de 500kb!
         </h6>
      </div>
   </div>
</div>
<div class="row">
   <div class="col-xs-12 col-sm-4">
      <div class="form-group">
         {!! Form::label('model', 'Modelo del Equipo', ['class'=>'condensada-bolt']) !!}
         {!! Form::text('model', null,['class'=>'form-control', 'placeholder'=>'Modelo del Equipo', 'required' => 'required']) !!}
      </div>
   </div>
   <div class="col-xs-12 col-sm-4">
      <div class="form-group">
         {!! Form::label('type', 'Tipo de Equipo', ['class'=>'']) !!}
         {!! Form::select('type',array('multi'=>'Multifuncional','print'=>'Impresora',),null,['placeholder' => 'Selecciona Uno','required' => 'required', 'class'=>'form-control']) !!}
      </div>
   </div>
   <div class="col-xs-12 col-sm-4">
      <div class="form-group">
         {!! Form::label('color', 'Color / Blanco&Negro', ['class'=>'']) !!}
         {!! Form::select('color',array('color'=>'Color','byn'=>'Blanco&Negro',),null,['placeholder' => 'Selecciona Uno','required' => 'required', 'class'=>'form-control']) !!}
      </div>
   </div>
</div>
<div class="row">
   <div class="col-xs-12 col-sm-4">
      <div class="form-group">
          <label for="32bits"><i class="material-icons ico-align cyan-text">cloud_upload</i> Driver de 32Bits</label>
          <input  type="file" name="32bits" id="32bits" >
          <p class="help-block">Seleccione un Archivo</p>
      </div>
      <br>
   </div>
   <div class="col-xs-12 col-sm-4">
      <div class="form-group">
          <label for="64bits"><i class="material-icons ico-align cyan-text">cloud_upload</i> Driver de 64Bits</label>
          <input  type="file" name="64bits" id="64bits" >
          <p class="help-block">Seleccione un Archivo</p>
      </div>
      <br>
   </div>
   <div class="col-xs-12 col-sm-4">
      <div class="form-group">
          <label for="32bits"><i class="material-icons ico-align cyan-text">picture_as_pdf</i> Manual de Equipo </label>
          <input  type="file" name="32bits" id="32bits" >
          <p class="help-block">Seleccione un Archivo en formato PDF o .doc.</p>
      </div>
      <br>
   </div>
</div>