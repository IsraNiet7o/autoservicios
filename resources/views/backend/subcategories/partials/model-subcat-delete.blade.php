<div class="modal fade" id="modal-subcat-delete" role="dialog" aria-labelledby="gridSystemModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title cyan-text" id="gridSystemModalLabel">Eliminar Categoría</h4>
      </div>
      <div class="modal-body alert-danger">
        {!! Form::open(['route'=>['subcategorias.destroy', ':CAT_ID'],'method'=>'DELETE' ,'id'=>'form-subcat-delete']) !!}
        <input type="hidden" id="inputid">
        {!! Form::close() !!}
      
        <h5 class="text-center">Esta seguro que quiere <strong>Eliminar</strong> la Subcategoría: 
            <span id="id-subcat-name"></span>
        </h5>

      </div>      
      <div class="modal-footer">
        <button type="reset" id="btn-reset-subcat" class="btn cyan-text" data-dismiss="modal"><i class="material-icons right">close</i>Cancelar</button>
        <a href="#!" id='btn-delete-subcat' class="btn btn-default"><i class="material-icons right">delete</i> Eliminar</a>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->