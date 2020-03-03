@section('styles')
    <!-- Select2 -->
  <link rel="stylesheet" href="{{asset("assets/$theme/plugins/select2/css/select2.css")}}">
@endsection

    
@if(isset($universidades))

    <!-- Radio buttons -->
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
    @include('admin.campus.form-agregar-uni')
    @include('admin.campus.form-listado-uni')
@else
    <input value="edit" name="edit" hidden>
    <div id="lista-uni" class="row container-fluid col-sm-12 border-2 border border-light shadow rounded">
    <h5 class="card-header">Universidad</h5>
        <div class="input-group mb-3 col-sm-12 mt-2">
            <div class="input-group-prepend">
                <span class="input-group-text input-group-sm"><i class="fas fa-school" id="school-icon"></i></span>
            </div>
            <select class="select2bs4 col-sm-10" name="select-uni" disabled>
                <option>{{$campus->universidad->nombre}}</option>
            </select>
            <div class="card-tools pull-right">
                <a href="{{route('campus.index')}}" class="btn btn-block btn-default btn-sm">
                    <i class="fas fa-edit"></i> Editar
                </a>
            </div>
        </div>
    </div>
@endif                        
    

<!-- formulario agregar Campus -->

<div class="row container-fluid col-sm-12 border-2 border border-light shadow rounded mt-3">
    <h5 class="card-header">Campus</h5>
    <div class="input-group mb-3 col-sm-11 mt-2">
        <div class="input-group-prepend">
            <span class="input-group-text"><i class="fas fa-building"></i></span>
        </div>
        <!-- campus -->
        <input type="text" class="form-control" name="nombre" id="nombre" value="{{old('nombre',$campus->nombre ?? '') }}" placeholder="Nombre del Campus">
    </div>


    <div class="input-group mb-3 col-sm-3">
        <!-- iniciales campus -->
        <input type="text" class="form-control" name="iniciales" value="{{old('iniciales', $campus->iniciales ?? '')}}" id="iniciales" placeholder="Iniciales">
        <div class="input-group-append">
            <span class="input-group-text"><i class="fas fa-font"></i></span>
        </div>
    </div>

    <div class="input-group mb-3 col-sm-4">
        <!-- estado -->
        <input type="text" class="form-control" name="estado" value="{{old('estado', $campus->estado ?? '')}}" id="estado" placeholder="Estado">
        <div class="input-group-append">
            <span class="input-group-text"><i class="fas fa-map-marked-alt"></i></span>
        </div>
    </div>

    <div class="input-group mb-3 col-sm-4">
        <!-- ciudad -->
        <input type="text" class="form-control" name="ciudad" value="{{old('ciudad', $campus->ciudad ?? '')}}" id="ciudad" placeholder="Ciudad">
        <div class="input-group-append">
            <span class="input-group-text"><i class="fas fa-city"></i></span>
        </div>
    </div>

    <div class="input-group mb-3 col-sm-5">
        <!-- calle -->
        <input type="text" class="form-control" name="calle" value="{{old('calle', $campus->calle ?? '')}}" id="calle" placeholder="Calle">
        <div class="input-group-append">
            <span class="input-group-text"><i class="fas fa-road"></i></span>
        </div>
    </div>

    <div class="input-group mb-3 col-sm-3">
        <!-- numero exterior -->
        <input type="number" class="form-control" name="numero" value="{{old('numero', $campus->numero ?? '')}}" id="numero" placeholder="Num int">
        <div class="input-group-append">
            <span class="input-group-text"><i class="fas fa-list-ol"></i></span>
        </div>
    </div>

    <div class="input-group mb-3 col-sm-3">
        <!-- numero interior -->
        <input type="number" class="form-control" name="numero-int" id="numero-int" value="{{old('numero-int', $campus->numero_int ?? '')}}" placeholder="Num ext">
        <div class="input-group-append">
            <span class="input-group-text"><i class="fas fa-sort-numeric-up"></i></span>
        </div>
    </div>

    <div class="input-group mb-3 col-sm-8">
        <!-- colonia -->
        <input type="text" class="form-control" name="colonia" id="colonia" value="{{old('colonia', $campus->colonia ?? '')}}" placeholder="Colonia">
        <div class="input-group-append">
            <span class="input-group-text"><i class="fas fa-vihara"></i></span>
        </div>
    </div>

    <div class="input-group mb-3 col-sm-3">
        <!-- cp -->
        <input type="number" class="form-control" name="cp" id="cp" value="{{old('cp', $campus->cp ?? '')}}" placeholder="Código Postal">
        <div class="input-group-append">
            <span class="input-group-text"><i class="fas fa-sort-amount-down"></i></i></span>
        </div>
    </div>

    <div class="input-group mb-3 col-sm-6">
        <!-- telefono -->
        <input type="tel" class="form-control" name="telefono" id="telefono" value="{{old('telefono', $campus->telefono ?? '')}}" placeholder="Teléfono">
        <div class="input-group-append">
            <span class="input-group-text"><i class="fas fa-phone-volume"></i></span>
        </div>
    </div>

    <div class="input-group mb-3 col-sm-3">
        <!-- extension -->
        <input type="number" class="form-control" name="ext" id="ext" value="{{old('ext', $campus->ext ?? '')}}" placeholder="Extensión">
        <div class="input-group-append">
            <span class="input-group-text"><i class="fas fa-phone-square"></i></span>
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
            $('#form-agregar-uni').required=false;
        }
    }


</script>



