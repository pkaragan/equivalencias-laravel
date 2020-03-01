@section('styles')
    <!-- Select2 -->  
  <link rel="stylesheet" href="{{asset("assets/$theme/plugins/select2/css/select2.css")}}">
@endsection  

<div class="card card-info shadow">
    <div class="card-header">
        <h3 class="card-title"><b>Registrar Nuevo Campus</b></h3>
    </div>

    <!-- Radio buttons -->   
    <div class="card-body">     
        <div class="col-sm-12">
            <div class="container text-left">
                <label class="col-form-label-sm">
                    <input class="form-check-input" type="radio" name="radio-universidad" value="existente" id="existente" onchange="mostrar_uni_select(this.value);">
                    Universidad existente
                </label>
                <label class="col-form-label-sm ml-5">
                    <input class="form-check-input" type="radio" name="radio-universidad" value="nueva" id="nueva" onchange="mostrar_uni_select(this.value);">
                    Registrar universidad
                </label>                                
            </div>
        </div>

     <!-- listado de universidades 'Select2' -->        
        
        <div id="lista-uni" class="row container-fluid col-sm-12 border-2 border border-light shadow rounded">        
            <h5 class="card-header">Universidad</h5>    
            <label><small>Selecciona el Instituto</small></label>
            <div class="input-group mb-3 col-sm-12 mt-2">
                <div class="input-group-prepend">
                    <span class="input-group-text input-group-sm"><i class="fas fa-school" id="school-icon"></i></span>
                </div>
                <select class="select2bs4 col-sm-11">
                    @foreach ($universidades as $item)
                        <option>{{$item['nombre']}}</option>    
                    @endforeach                
                </select>
            </div>
        </div>
            
        
        <!-- fin del listado-->

        <!-- formulario agregar Universidad -->
        <div class="row container-fluid col-sm-12 border-2 border border-light shadow rounded" id="agregar-uni">
            <h5 class="card-header">Universidad</h5>
            <div class="input-group mb-3 col-sm-12 mt-2">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-school"></i></span>
                </div>
                <input type="text" name="universidad" id="universidad" class="form-control" placeholder="Nombre de la institución">
            </div>

            <div class="row">
                <div class="input-group mb-3 ml-2 col-sm-4">
                    <input type="text" name="iniciales-uni" id="iniciales-uni" class="form-control" placeholder="Iniciales">
                    <div class="input-group-append">
                        <span class="input-group-text"><i class="fas fa-check"></i></span>
                    </div>
                </div>
                <div class="row mb-3 col-sm-7">
                    <div class="input-group ml-5 mt-1">
                        <h6>Tipo de universidad</h6>
                        <label class=" ml-5">
                            <input class="form-check-input" type="radio" name="radio-universidad" value="existente" onchange="mostrar_uni_select(this.value);" checked>
                            <b> Pública</b>
                        </label>
                        <label class="form-check ml-3">
                            <input class="form-check-input" type="radio" name="radio-universidad" value="nueva" onchange="mostrar_uni_select(this.value);">
                            <b> Privada</b>
                        </label>   
                    </div>
                </div>
            </div>
                      
            <div class="row card-tools col-sm-12">
                <div class="input-group mb-3 col-sm-5">
                    <input type="text" class="form-control" name="pais" id="pais" placeholder="País">
                    <div class="input-group-append">
                        <span class="input-group-text"><i class="fas fa-globe-americas"></i></span>
                    </div>
                </div>
            </div>
        </div>              

        <!-- formulario agregar Campus -->        
        
        <div class="row container-fluid col-sm-12 border-2 border border-light shadow rounded mt-3">
            <h5 class="card-header">Campus</h5>
            <div class="input-group mb-3 col-sm-12 mt-2">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-building"></i></span>
                </div>
                <!-- campus -->
                <input type="text" class="form-control" name="campus" id="campus" placeholder="Nombre del Campus">
            </div>

        
            <div class="input-group mb-3 col-sm-4">
                <!-- iniciales campus -->
                <input type="text" class="form-control" name="iniciales-campus" id="iniciales-campus" placeholder="Iniciales">
                <div class="input-group-append">
                    <span class="input-group-text"><i class="fas fa-font"></i></span>
                </div>
            </div>                                      
            
            <div class="input-group mb-3 col-sm-4">
                <!-- estado -->
                <input type="text" class="form-control" name="estado" id="estado" placeholder="Estado">
                <div class="input-group-append">
                    <span class="input-group-text"><i class="fas fa-map-marked-alt"></i></span>
                </div>
            </div>                

            <div class="input-group mb-3 col-sm-4">
                <!-- ciudad -->
                <input type="text" class="form-control" name="ciudad" id="ciudad" placeholder="Ciudad">
                <div class="input-group-append">
                    <span class="input-group-text"><i class="fas fa-city"></i></span>
                </div>
            </div>

            <div class="input-group mb-3 col-sm-8">
                <!-- calle -->
                <input type="text" class="form-control" name="calle" id="calle" placeholder="Calle">
                <div class="input-group-append">
                    <span class="input-group-text"><i class="fas fa-road"></i></span>
                </div>
            </div>

            <div class="input-group mb-3 col-sm-2">
                <!-- numero interior -->
                <input type="number" class="form-control" name="numero" id="numero" placeholder="Numero">
                <div class="input-group-append">
                    <span class="input-group-text"><i class="fas fa-list-ol"></i></span>
                </div>
            </div>

            <div class="input-group mb-3 col-sm-2">
                <!-- numero exterior -->
                <input type="number" class="form-control" name="numero-ext" id="numero-ext" placeholder="Num ext">
                <div class="input-group-append">
                    <span class="input-group-text"><i class="fas fa-sort-numeric-up"></i></span>
                </div>
            </div>

            <div class="input-group mb-3 col-sm-8">
                <!-- colonia -->
                <input type="text" class="form-control" name="colonia" id="colonia" placeholder="Colonia">
                <div class="input-group-append">
                    <span class="input-group-text"><i class="fas fa-vihara"></i></span>
                </div>
            </div>                

            <div class="input-group mb-3 col-sm-3">
                <!-- cp -->
                <input type="number" class="form-control" name="cp" id="cp" placeholder="Código Postal">
                <div class="input-group-append">
                    <span class="input-group-text"><i class="fas fa-sort-amount-down"></i></i></span>
                </div>
            </div>                

            <div class="input-group mb-3 col-sm-6">
                <!-- telefono -->
                <input type="text" class="form-control" name="telefono" id="telefono" placeholder="Teléfono">
                <div class="input-group-append">
                    <span class="input-group-text"><i class="fas fa-phone-volume"></i></span>
                </div>
            </div>                

            <div class="input-group mb-3 col-sm-3">
                <!-- extension -->
                <input type="number" class="form-control" name="extension" id="extension" placeholder="Extensión">
                <div class="input-group-append">
                    <span class="input-group-text"><i class="fas fa-phone-square"></i></span>
                </div>
            </div>                
        </div>     
        
        <div class="card-footer mt-3">
            <div class="float-right">              

              @include('includes.boton-form-crear', ['regresar' => 'admin.index'])

            </div>
        </div>
    </div>
</div>
  


@section('scriptsPlugins')
<!-- Select2 -->
<script src="{{asset("assets/$theme/plugins/select2/js/select2.full.js")}}"></script>    
@endsection


<script type="text/javascript">

    window.onload = function(){    
                
        document.getElementById("existente").checked = "true";
        document.getElementById("lista-uni").style.display = "block";
        document.getElementById("agregar-uni").style.display = "none";

        //Initialize Select2 Elements
        $('.select2').select2();

        //Initialize Select2 Elements
        $('.select2bs4').select2({
        theme: 'classic'
        });
    }

    function mostrar_uni_select(radio){
        if(radio=='nueva'){
            document.getElementById("lista-uni").style.display = "none";
            document.getElementById("agregar-uni").style.display = "block";
        }else{
            document.getElementById("lista-uni").style.display = "block";
            document.getElementById("agregar-uni").style.display = "none";
        }
    }

  
</script>



