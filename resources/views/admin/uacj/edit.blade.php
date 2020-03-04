@extends("theme.$theme.layout")
@section('titulo')
    Permisos
@endsection

@section('contenido')
<div class="row">
    <div class="col-lg-12">
      
      @include('includes.form-error')

      @include('includes.mensaje')

      <div class="card card-border-danger">
        <div class="card-header">
          <h3 class="card-title">Editar Permisos {{$data->nombre}}</h3>
            <div class="card-tools pull-right">
              <a href="{{route('permiso')}}" class="btn btn-block btn-default btn-sm">
                  <i class="fa fa-fw fa-reply-all"></i> Volver al listado
              </a>
            </div>
        </div>
        <form action="{{route('actualizar_permiso', ['id' =>$data->id])}}" id="form-general" class="form-horizontal" method="post" autocomplete="off">
          @csrf
          @method('put')
          <!-- /.card-header -->
          <div class="card-body">

              @include('admin.permiso.form')

          </div>
          
          <div class="card-footer">
            <div class="col-lg-10 float-right">              


              @include('includes.boton-form-editar', ['regresar' => 'permiso'])

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