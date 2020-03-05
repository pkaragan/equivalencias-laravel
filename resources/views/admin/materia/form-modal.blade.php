
<div class="modal-dialog modal-lg">
    <div class="modal-content">
        <div class="modal-header bg-light">
            <h6 class="modal-title"><b>{{ $carrera->nombre }}</b> - {{$carrera->campus->universidad->nombre}} - {{$carrera->campus->nombre}}</h6>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <div class="form-group row mt-4">
                <label for="nombre" class="col-lg-2 col-form-label requerido text-right">Nombre</label>         
                <div class="col-lg-8">
                    <input type="text" name="nombre" id="nombre" class="form-control ml-3" value="{{old('nombre', $materia->nombre ?? '')}}" required/>
                    <input name="carrera_id" id="carrera_id" value="{{$carrera->id}}" hidden>
                    <input name="id" id="id" hidden>
                </div>
            </div>
        </div>
        