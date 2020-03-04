<form action="{{route('carrera.update',$campus->id)}}" id="form-general" class="form-horizontal" method="POST" autocomplete="off">
  @csrf
  <div class="modal fade" id="modal-editar">
        @include('admin.carrera.form-modal')
        <div class="modal-footer pull-right">
          <button type="submit" class="btn btn-primary">Editar carrera</button>
      </div>
    </div>
  </div>
</form>