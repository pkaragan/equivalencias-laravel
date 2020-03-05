<!-- listado de universidades 'Select2' -->
<div id="lista-uni" class="row container-fluid col-sm-12 border-2 border border-light shadow rounded">
    <h5 class="card-header">Universidad</h5>
    
    <label class="requerido"><small>Selecciona el Instituto</small></label>
    <div class="input-group mb-3 col-sm-12 mt-2">
        <div class="input-group-prepend">
            <span class="input-group-text input-group-sm"><i class="fas fa-school" id="school-icon"></i></span>
        </div>
        <select class="select2bs4 col-sm-11" name="select-uni">            
            <option value=0>Seleccione una universidad</option>
            @foreach ($universidades as $item)
                <option value={{$item['id']}} {{ old('select-uni') == $item['id'] ? 'selected' : '' }} >{{$item['nombre']}}</option>
            @endforeach
        </select>
    </div>
</div>
<!-- fin del listado-->