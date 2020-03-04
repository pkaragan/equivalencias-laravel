@extends("theme.$theme.layout")
@section('titulo')
    Crear Menús
@endsection
    
@section('contenido')
<div class="row">
    <div class="col-lg-12">
      
      @include('includes.form-error')

      @include('includes.mensaje')

      <div class="card card-border-danger">
        <div class="card-header">
          <h3 class="card-title">Crear Menús</h3>
            <div class="card-tools pull-right">
              <a href="{{route('menu')}}" class="btn btn-block btn-default btn-sm">
                  <i class="fa fa-fw fa-reply-all"></i> Volver al listado
              </a>
            </div>
        </div>
        <form action="{{route('guardar_menu')}}" id="form-general" class="form-horizontal" method="post" autocomplete="off">
          @csrf
          <!-- /.card-header -->
          <div class="card-body">

              @include('admin.menu.form')

          </div>
          
          <div class="card-footer">
            <div class="col-lg-10 float-right">              

              @include('includes.boton-form-crear', ['regresar' => 'menu'])

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