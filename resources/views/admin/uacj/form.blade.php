<div class="row col-sm-12 border-2 border border-light shadow rounded mt-3">           
    <div class="input-group mb-3 col-sm-8 mt-3">
        <div class="input-group-prepend">
            <label for="nombre" class="mr-2 requerido"><small>Nombre</small></label>
            <span class="input-group-text"><i class="fas fa-building"></i></span>
        </div>
        <!-- campus -->
        <input type="text" class="form-control" name="nombre" id="nombre" value="{{old('nombre',$campus->nombre ?? '') }}" placeholder="Nombre del Campus">
    </div>


    <div class="input-group mb-3 mt-3 col-sm-4">
        <!-- iniciales campus -->        
        <div class="input-group-prepend">
            <label for="iniciales" class="mr-2 requerido"><small>Iniciales</small></label>
            <span class="input-group-text"><i class="fas fa-font"></i></span>
        </div>
        <input type="text" class="form-control" name="iniciales" value="{{old('iniciales', $campus->iniciales ?? '')}}" id="iniciales" placeholder="Iniciales">
    </div>

    <div class="input-group mb-3 col-sm-6">
        <!-- estado -->
        <div class="input-group-prepend">
            <label for="estado" class="mr-3 requerido"><small>Estado</small></label>
            <span class="input-group-text"><i class="fas fa-map-marked-alt"></i></span>
        </div>
        <input type="text" class="form-control" name="estado" value="{{old('estado', $campus->estado ?? '')}}" id="estado" placeholder="Estado">        
    </div>

    <div class="input-group mb-3 col-sm-6">
        <!-- ciudad -->
        <div class="input-group-prepend">
            <label for="ciudad" class="mr-2 requerido"><small>Ciudad</small></label>
            <span class="input-group-text"><i class="fas fa-city"></i></span>
        </div>
        <input type="text" class="form-control" name="ciudad" value="{{old('ciudad', $campus->ciudad ?? '')}}" id="ciudad" placeholder="Ciudad">        
    </div>

    <div class="input-group mb-3 col-sm-6">
        <!-- calle -->
        <div class="input-group-prepend">
            <label for="calle" class="ml-3 mr-3"><small>Calle</small></label>
            <span class="input-group-text ml-1"><i class="fas fa-road"></i></span>
        </div>
        <input type="text" class="form-control" name="calle" value="{{old('calle', $campus->calle ?? '')}}" id="calle" placeholder="Calle">        
    </div>

    <div class="input-group mb-3 col-sm-3">
        <!-- numero exterior -->
        <div class="input-group-prepend">
            <label for="numero" class="mr-2"><small>Num ext</small></label>
            <span class="input-group-text"><i class="fas fa-list-ol"></i></span>
        </div>
        <input type="number" class="form-control" name="numero" value="{{old('numero', $campus->numero ?? '')}}" id="numero" placeholder="Num ext">        
    </div>

    <div class="input-group mb-3 col-sm-3">
        <!-- numero interior -->
        <div class="input-group-prepend">
            <label for="num_int" class="mr-2"><small>Num int</small></label>
            <span class="input-group-text"><i class="fas fa-sort-numeric-up"></i></span>
        </div>
        <input type="text" class="form-control" name="numero_int" id="numero_int" value="{{old('numero_int', $campus->numero_int ?? '')}}" placeholder="Num int">        
    </div>

    <div class="input-group mb-3 col-sm-9">
        <!-- colonia -->
        <div class="input-group-prepend">
            <label for="colonia" class="mr-2 ml-2"><small>Colonia</small></label>
            <span class="input-group-text ml-2"><i class="fas fa-vihara"></i></span>
        </div>
        <input type="text" class="form-control" name="colonia" id="colonia" value="{{old('colonia', $campus->colonia ?? '')}}" placeholder="Colonia">        
    </div>

    <div class="input-group mb-3 col-sm-3">
        <!-- cp -->
        <div class="input-group-prepend">
            <label for="cp" class="mr-2"><small>C.P.</small></label>
            <span class="input-group-text"><i class="fas fa-sort-amount-down"></i></i></span>
        </div>
        <input type="number" class="form-control" name="cp" id="cp" value="{{old('cp', $campus->cp ?? '')}}" placeholder="Código Postal">        
    </div>

    <div class="input-group mb-3 col-sm-4">
        <!-- telefono -->
        <div class="input-group-prepend">
            <label for="telefono" class="mr-3"><small>Teléfono</small></label>
            <span class="input-group-text ml-1"><i class="fas fa-phone-volume"></i></span>
        </div>
        <input type="tel" class="form-control" name="telefono" id="telefono" value="{{old('telefono', $campus->telefono ?? '')}}" placeholder="Teléfono">        
    </div>

    <div class="input-group mb-3 col-sm-3">
        <!-- extension -->
        <div class="input-group-prepend">
            <label for="ext" class="mr-2"><small>Extensión</small></label>
            <span class="input-group-text"><i class="fas fa-phone-square"></i></span>
        </div>
        <input type="number" class="form-control" name="ext" id="ext" value="{{old('ext', $campus->ext ?? '')}}" placeholder="Extensión">        
    </div>
</div>    