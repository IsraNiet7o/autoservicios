<div class="modal fade" id="modal-subcategories" role="dialog" aria-labelledby="gridSystemModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
    	{!! Form::open(['id'=>'form-sub']) !!}
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title cyan-text" id="gridSystemModalLabel">Nueva Subategoría</h4>
          </div>
          <div class="modal-body">
            <div id="msj-error" class="alert alert-danger alert-dismissible" role="alert" style="display:none">
              <button type="button" class="close fade" id="btn-close-erorr-sub">
                <span aria-hidden="true">&times;</span>
              </button>
              <div id="msj"></div>
            </div>
    		    
            @include('backend.subcategories.partials.form-subcat')
          </div>
          <div class="modal-footer">
            <button type="button" id="btn-reset-sub" class="btn cyan-text" data-dismiss="modal"><i class="material-icons right">close</i>Close</button>
            <a href="#!" id='btn-save-sub' class="btn btn-default"><i class="material-icons right">save</i> Guardar</a>
          </div>
    	{!! Form::close() !!}
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->