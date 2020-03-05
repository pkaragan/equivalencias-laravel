<form action="{{route('materia.update','test')}}" id="form-general" class="form-horizontal" method="POST" autocomplete="off">
  @csrf
  @method('put')
  <div class="modal fade" id="modal-editar">
          @include('admin.materia.form-modal')
          <div class="modal-footer pull-right">
            <button type="submit" class="btn btn-primary">Editar materia</button>
        </div>
      </div>
    </div>
  </div>
</form>