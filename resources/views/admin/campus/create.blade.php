@extends("theme.$theme.layout")
@section('titulo')
    Crear Nuevo Campus
@endsection

@section('contenido')
<div class="row">
  <div class="col-lg-12">
    
    @include('includes.form-error')

    @include('includes.mensaje')

    <div class="card card-border-danger">
      <div class="card-header">
        
          <div class="card-tools pull-right">
            <a href="{{route('campus.index')}}" class="btn btn-block btn-default btn-sm">
                <i class="fa fa-fw fa-reply-all"></i> Volver al listado
            </a>
          </div>
      </div>
      <form action="{{route('campus.store')}}" id="form-general" class="form-horizontal" method="post" autocomplete="off">
        @csrf
                
        <div class="card card-info shadow m-1">
          <div class="card-header">
              <h3 class="card-title"><b>Registrar Nuevo Campus</b></h3>
          </div>

          <div class="card-body">
            @include('admin.campus.form')              
          </div>

          <div class="card-footer">            
              @include('includes.boton-form-crear', ['regresar' => 'campus.index'])                
          </div>   
          
        </div>
             
       </form>      
    </div>
    <!-- /.card -->
  </div>
    <!-- /.col -->
</div>
  <!-- /.row -->

@endsection