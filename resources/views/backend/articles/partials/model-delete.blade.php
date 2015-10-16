<div class="modal fade" id="modal-delete" role="dialog" aria-labelledby="gridSystemModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header mred">
          <h4 class="modal-title white-text" id="gridSystemModalLabel">Alerta <i class="material-icons left">warning</i></h4>
        </div>
        <div class="modal-body alert-danger">
          <h4>¿Estas seguro que quieres eliminar el articulo <strong>{{ $arti->title }}?</strong> </h4>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn " data-dismiss="modal"><i class="material-icons right">close</i>Close</button>
        {!! Form::open(['route'=>['articles.destroy', $arti], 'method'=>'DELETE', 'class' => 'pull-right']) !!}
          <button type="submit" class="btn btn-primary btn-default-red"><i class="material-icons right">delete</i> Eliminar </button>
        {!! Form::close() !!}
        </div>

    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->