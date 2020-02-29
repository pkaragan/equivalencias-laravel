<div class="form col-lg-12">    
    @csrf
    <div class="form-group">
        <div class="form-group row">
            <label for="nombre" class="col-lg-1 col-form-label requerido text-right">Nombre</label>         
            <div class="col-lg-8">
                <input type="text" name="nombre" id="nombre" class="form-control" value="{{old('nombre', $data->nombre ?? '')}}" required/>
            </div>
        
            <label for="iniciales" class="col-lg-1 control-label requerido text-right">Iniciales</label>
            <div class="col-lg-2">
                <input type="text" name="iniciales" id="iniciales" class="form-control" value="{{old('iniciales', $data->iniciales ?? '')}}" required/>
            </div>  
        </div>
        <div class="form-group row">
            <label for="estado" class="col-lg-1 control-label requerido text-right">Estado</label>
            <div class="col-lg-5">
                <input type="text" name="estado" id="estado" class="form-control" value="{{old('estado', $data->estado ?? '')}}" required/>
            </div>  
            <label for="ciudad" class="col-lg-1 control-label requerido text-right">Ciudad</label>
            <div class="col-lg-5">
                <input type="text" name="ciudad" id="ciudad" class="form-control" value="{{old('ciudad', $data->ciudad ?? '')}}" required/>
            </div>  
        </div>        
        <div class="form-group row">
            <label for="calle" class="col-lg-1 control-label text-right">Calle</label>
            <div class="col-lg-7">
                <input type="text" name="calle" id="calle" class="form-control" value="{{old('calle', $data->calle ?? '')}}">
            </div>  
            <label for="numero" class="col-lg-1 control-label text-right">Numero</label>
            <div class="col-lg-3">
                <input type="text" name="numero" id="numero" class="form-control" value="{{old('numero', $data->numero ?? '')}}">
            </div>
        </div>
        <div class="form-group row">
            <label for="cp" class="col-lg-1 control-label text-right">Código Postal</label>
            <div class="col-lg-4">
                <input type="number" name="cp" id="cp" class="form-control" value="{{old('cp', $data->cp ?? '')}}">
            </div>  
            <label for="telefono" class="col-lg-1 control-label text-right">Telefono</label>
            <div class="col-lg-5">
                <input type="tel" name="telefono" id="telefono" class="form-control" value="{{old('telefono', $data->telefono ?? '')}}">
            </div>  
        </div>      
    </div>            
</div>