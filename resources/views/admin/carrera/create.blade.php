<form action="{{route('carrera.store')}}" id="form-general" class="form-horizontal" method="POST" autocomplete="off">
    @csrf
    <div class="modal fade" id="modal-agregar">

        
                @include('admin.carrera.form-modal')
                <div class="modal-footer pull-right">
                    <button type="submit" class="btn btn-primary">Agregar carrera</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>    
    </div>
</form>