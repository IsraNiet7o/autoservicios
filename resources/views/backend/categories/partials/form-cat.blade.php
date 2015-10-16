<div class="row">
	<div class="col-xs-12 col-sm-8 col-xs-offset-2">
		<div class="form-group">
			{!! Form::label('category', 'Nombre de la Categoría', ['class'=>'condensada-bolt']) !!}
			{!! Form::text('category', null,['class'=>'form-control', 'placeholder'=>'Categoría', 'required' => 'required']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('header', 'Encabezado ', ['class'=>'condensada-bolt']) !!}
			{!! Form::text('header', null,['class'=>'form-control', 'placeholder'=>'Descripción Breve', 'required' => 'required']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('descrip', 'Descripción ', ['class'=>'condensada-bolt']) !!}
			<textarea class="form-control" rows="3" name="descrip" id="descrip" placeholder="Descripción Principal" required></textarea>
		</div>
		<div class="form-group">
			<a href="#!" type="button" class="a-post pull-right" data-container="body" data-toggle="popover" data-placement="top" data-content="Busca en http://www.google.com/design/icons/ y elige el icono que deseas agragar, pero solo introduce la palabra que se encuentra dentro de la etiqueta <i class='material-icons' >palabra_a_introducir</i>">
		 		<i class="material-icons">help</i>
			</a>
			{!! Form::label('ico', 'Icono ', ['class'=>'condensada-bolt']) !!}
			{!! Form::text('ico', null,['class'=>'form-control', 'placeholder'=>'Icono de Google Desing', 'required' => 'required']) !!}
		</div>
	</div>
</div>