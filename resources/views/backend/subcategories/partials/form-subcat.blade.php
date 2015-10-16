<div class="row">
	<div class="col-xs-12 col-sm-6 ">
		<div class="form-group">
			{!! Form::label('title', 'Nombre de la Subategoría', ['class'=>'condensada-bolt']) !!}
			{!! Form::text('title', null,['class'=>'form-control', 'placeholder'=>'Subcategoría', 'required' => 'required']) !!}
		</div>
	</div> 
	<div class="col-xs-12 col-sm-6">
		<div class="form-group">
		   	{!! Form::label('cat', 'Categoría', ['class'=>'condensada-bolt']) !!}
		   	<select class="form-control" name="category_id" placeholder="Selecciona Una" required>
		   	  <option value="" selected="selected">Seleccione Una</option>
		   	  @foreach($categories as $cat)
		   	  	<option value="{{ $cat->id }}">{{ $cat->category }} </option> 
		   	  @endforeach
		   	</select>
		</div>
	</div>
	<div class="col-xs-12">
		<div class="form-group">
		   	{!! Form::label('descrip-ini', 'Descripción Principal', ['class'=>'condensada-bolt']) !!}
			<textarea class="form-control" rows="3" name="descrip-ini" id="descrip" placeholder="Descripción Principal" required></textarea>
		</div>
	</div>
	<div class="col-xs-12">
		<div class="form-group">
		   	{!! Form::label('descrip-footer', 'Notas al pie', ['class'=>'condensada-bolt']) !!}
			<textarea class="form-control" rows="3" name="descrip-foo" id="descrip" placeholder="Notas al pie" required></textarea>
		</div>
	</div>

</div>