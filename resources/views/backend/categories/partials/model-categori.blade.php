<div class="modal fade" id="modal-categories" role="dialog" aria-labelledby="gridSystemModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">

	{!! Form::open(['id'=>'form-cat']) !!}
      <input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title cyan-text" id="gridSystemModalLabel">Nueva Categoría</h4>
      </div>
      <div class="modal-body">
        <div id="msj-error" class="alert alert-danger alert-dismissible" role="alert" style="display:none">
          <button type="button" class="close fade" id="btn-close-error-cat">
            <span aria-hidden="true">&times;</span>
          </button>
          <div id="msj"></div>
        </div>

		    @include('backend.categories.partials.form-cat')

      </div>
      <div class="modal-footer">
        <button type="reset" id="btn-reset-cat" class="btn cyan-text" data-dismiss="modal"><i class="material-icons right">close</i>Cancelar</button>
        <a href="#!" id='btn-save-cat' class="btn btn-default"><i class="material-icons right">save</i> Guardar</a>
      </div>
	{!! Form::close() !!}
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->