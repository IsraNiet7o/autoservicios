<div class="modal fade" id="modal-editar-subcat" tabindex="-1" role="dialog" aria-labelledby="gridSystemModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
	{!! Form::open(['id'=>'form-sub-edit']) !!}
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title cyan-text" id="gridSystemModalLabel">Editar Subcategoría</h4>
      </div>
      <div class="modal-body">
      {{-- Mensaje de Error --}}
      <div id="msj-error-edit" class="alert alert-danger alert-dismissible" role="alert" style="display:none">
        <button type="button" id="btn-error-edit" class="close fade">
          <span aria-hidden="true">&times;</span>
        </button>
        <div id="msj-edit"></div>
      </div>
      <input type="hidden" id="id">
			  @include('backend.subcategories.partials.form-subcat')
      </div>
      <div class="modal-footer">
        <button type="button" id="btn-reset-sub-edit" class="btn cyan-text" data-dismiss="modal"><i class="material-icons right">close</i>Close</button>
        <button type="button" id='btn-update-subcat' class="btn btn-default"><i class="material-icons right">mode_edit</i> Editar</button>
      </div>
	{!! Form::close() !!}
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->