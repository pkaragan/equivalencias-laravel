<!-- formulario agregar Universidad -->
<div class="row container-fluid col-sm-12 border-2 border border-light shadow rounded" id="agregar-uni">
    <h5 class="card-header">Universidad</h5>
    <!--nombre universidad-->
    <div class="input-group mb-3 col-sm-11 mt-2">
        <div class="input-group-prepend">
            <label for="uni-nombre" class="mr-2"><small>Nombre</small></label>
            <span class="input-group-text"><i class="fas fa-school"></i></span>
        </div>                
        <input type="text" name="uni-nombre" id="uni-nombre" value="{{old('uni-nombre')}}" class="form-control form-agregar-uni" placeholder="Nombre de la institución">
    </div>

    <div class="row">
        <!--iniciales-->
        <div class="input-group mb-3 ml-2 col-sm-4">
            <div class="input-group-prepend">
                <label for="uni-iniciales" class="mr-2"><small>Iniciales</small></label>
                <span class="input-group-text"><i class="fas fa-check"></i></span>
            </div>
            <input type="text" name="uni-iniciales" id="uni-iniciales" value="{{old('uni-iniciales')}}" class="form-control form-agregar-uni" placeholder="Iniciales">            
        </div>
        <!--tipo universidad-->
        <div class="row mb-3 col-sm-7">
            <div class="input-group ml-5 mt-1">
                <h6>Tipo de universidad</h6>
                <label class="ml-5">
                    <input class="form-check-input" type="radio" name="uni-tipo" value="publica" {{ old('uni-tipo') == "publica" ? 'checked' : '' }}>
                    <b> Pública</b>
                </label>
                <label class="form-check ml-3">
                    <input class="form-check-input" type="radio" name="uni-tipo" value="privada" {{ old('uni-tipo') == "privada" ? 'checked' : '' }}>
                    <b> Privada</b>
                </label>
            </div>
        </div>        
        <!--uni-pais-->                
        <div class="input-group mb-3 col-sm-5 ml-2">
            <div class="input-group-prepend">
                <label for="uni-pais" class="mr-4 ml-1"><small>Pais</small></label>
                <span class="input-group-text"><i class="fas fa-globe-americas"></i></span>
            </div>
            <input type="text" class="form-control form-agregar-uni" name="uni-pais" id="uni-pais" placeholder="País" value="{{old('uni-pais')}}">            
        </div>
    </div>
</div>
