
<div class="modal-dialog modal-lg">
    <div class="modal-content">
        <div class="modal-header bg-light">
            <h6 class="modal-title"><b>{{ $nombre }}</b></h6>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <div class="form-group row mt-4">
                <label for="nombre" class="col-lg-2 col-form-label requerido text-right">Nombre</label>         
                <div class="col-lg-8">
                    <input type="text" name="nombre" id="nombre" class="form-control ml-3" required/>                    
                </div>
            </div>
            <div class="form-group row">
                <label for="clave" class="col-lg-2 col-form-label requerido text-right">Clave</label>         
                <div class="col-lg-5">
                    <input type="text" name="clave" id="clave" class="form-control ml-3" required/>
                </div>
                <input name="id" id="id" hidden>
            </div>
        </div>
        