@extends("theme.$theme.layout")
@section('titulo')
    Registrar Nuevo Campus - UACJ
@endsection

@section('contenido')
<div class="row">
  <div class="col-lg-12">
    
    @include('includes.form-error')

    @include('includes.mensaje')

    <div class="card card-border-danger">
      <div class="card-header">
        
          <div class="card-tools pull-right">
            <a href="{{route('uacj.index')}}" class="btn btn-block btn-default btn-sm tooltipsC" title="Regresar a Campus">
                <i class="fa fa-fw fa-reply-all"></i> Volver al listado
            </a>
          </div>
      </div>
      <form action="{{route('uacj.store')}}" id="form-general" class="form-horizontal" method="post" autocomplete="off">
        @csrf
                
        <div class="card card-info shadow m-1">
          <div class="card-header">
              <h3 class="card-title"><b>Registrar Nuevo Campus <small> - UACJ</small></b></h3>
          </div>

          <div class="card-body">
            @include('admin.uacj.form')              
          </div>

          <div class="card-footer">            
              @include('includes.boton-form-crear', ['regresar' => 'uacj.index'])                
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