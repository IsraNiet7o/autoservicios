<div class="row">
   <div class="col-xs-12 col-sm-6">
      <div class="form-group">
         {!! Form::label('title', 'Marca del Equipo', ['class'=>'condensada-bolt']) !!}
         {!! Form::text('title', null,['class'=>'form-control', 'placeholder'=>'Marca del Equipo', 'required' => 'required']) !!}
      </div>
   </div>
   <div class="col-xs-12 col-sm-3">
      <div class="form-group">
        {!! Form::label('category_id', 'Categoría', ['class'=>'condensada-bolt']) !!}
        {!! Form::select('category_id', $categories, null,  ['class'=>'form-control', 'placeholder'=>'Selecciona Una','required' => 'required']) !!}
      </div>
   </div>
   <div class="col-xs-12 col-sm-3">
      <div class="form-group">
         {!! Form::label('subcategory_id', 'Subcategoría') !!}
         {!! Form::select('subcategory_id',array(''),null,['placeholder' => 'Selecciona Uno','required' => 'required', 'class'=>'form-control']) !!}
      </div>
   </div>
</div>
<div class="row">
  <div class="col-xs-8">
    <div class="form-group">
         {!! Form::label('developing', 'Mensaje') !!}
         <textarea class="form-control arti" id="developing" name="developing" placeholder="Desarrollo" required></textarea>
    </div>
  </div>
  <div class="col-xs-4">
    <h4>Helper</h4>
     @include('backend.articles.partials.helper')
  </div>{{-- termina --}}
</div>
<div class="row">
   <div class="col-xs-12 col-sm-6">
      <div class="form-group">
          <label for="video"><i class="material-icons ico-align cyan-text">videocam</i> Vídeo Tutorial </label>
          <input  type="file" name="video" id="video" />
          <p class="help-block">Seleccione un Archivo en formato .mp4</p>
      </div>
      <br>
   </div>
</div>