<div class="form-group row">
    <label for="nombre" class="col-lg-2 col-form-label requerido text-right">Nombre</label>         
    <div class="col-lg-8">
        <input type="text" name="nombre" id="nombre" class="form-control ml-3" value="{{old('nombre', $data->nombre ?? '')}}" required/>
    </div>
</div>

<div class="form-group row">
    <label for="slug" class="col-lg-2 control-label requerido text-right">Slug</label>
    <div class="col-lg-8">
        <input type="text" name="slug" id="slug" class="form-control ml-3" value="{{old('slug', $data->slug ?? '')}}" required/>
    </div>  
</div>