<!-- formulario editar Universidad -->

<div class="row col-sm-12 border-2 border border-light shadow rounded mt-3">
<h5 class="card-header col-sm-12">{{$universidad->nombre}}</h5>
    
    <div class="input-group mb-3 col-sm-9 mt-3">
        <div class="input-group-prepend">
            <label for="nombre" class="mr-2"><small>Nombre</small></label>
            <span class="input-group-text"><i class="fas fa-building"></i></span>
        </div>
        <!-- campus -->
        <input type="text" class="form-control" name="nombre" id="nombre" value="{{old('nombre',$universidad->nombre ?? '') }}" placeholder="Nombre del Campus" required>
    </div>


    <div class="input-group mb-3 col-sm-5">
        <!-- iniciales campus -->        
        <div class="input-group-prepend">
            <label for="iniciales" class="mr-2"><small>Iniciales</small></label>
            <span class="input-group-text"><i class="fas fa-font"></i></span>
        </div>
        <input type="text" class="form-control" name="iniciales" value="{{old('iniciales', $universidad->iniciales ?? '')}}" id="iniciales" placeholder="Iniciales">
    </div>

    <div class="input-group col-sm-8">
        <!-- pais -->
        <div class="input-group-prepend">
            <label for="pais" class="mr-3 ml-3"><small>País</small></label>
            <span class="input-group-text"><i class="fas fa-globe-americas"></i></span>
        </div>
        <input type="text" class="form-control" name="pais" value="{{old('pais', $universidad->pais ?? '')}}" id="pais" placeholder="País">        
    </div>

    <!--tipo universidad-->
    <div class="mt-3 col-sm-7">
        <div class="input-group mt-1">
            <h6><small>Tipo de universidad</small></h6>
            <label class="ml-5">
                <input class="form-check-input" type="radio" name="tipo" id="radio_publica" value="publica" {{ $universidad->tipo == "publica" ? 'checked' : '' }}>
                <b> Pública</b>
            </label>
            <label class="form-check ml-3">
                <input class="form-check-input" type="radio" name="tipo" id="radio_privada" value="privada" {{ $universidad->tipo == "privada" ? 'checked' : '' }}>
                <b> Privada</b>
            </label>
        </div>
    </div>    

</div>    