<div class="modal fade" id="modal-editar-cat" tabindex="-1" role="dialog" aria-labelledby="gridSystemModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
	{!! Form::open(['id'=>'form-cat-edit']) !!}
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title cyan-text" id="gridSystemModalLabel">Editar Categoría</h4>
      </div>
      <div class="modal-body">
        {{-- Mensaje de Error --}}
        <div id="msj-error-edit" class="alert alert-danger alert-dismissible" role="alert" style="display:none">
          <button type="button" class="close fade" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <div id="msj-edit"></div>
        </div>

        <input type="hidden" name="token" value="{{ csrf_token() }}" id="token">
        <input type="hidden" id="id">
        @include('backend.categories.partials.form-cat')

      </div>
      <div class="modal-footer">
        <button type="reset" id="btn-reset-cat-edit" class="btn cyan-text" data-dismiss="modal"><i class="material-icons right">close</i>Cancelar</button>
        <a href="#!" id='btn-update-cat' class="btn btn-default"><i class="material-icons right">mode_edit</i> Actualizar</a>
      </div>
	{!! Form::close() !!}
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->