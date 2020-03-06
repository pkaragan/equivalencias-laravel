@extends("theme.$theme.layout")
@section('titulo')
  Editar Campus {{$campus->nombre}}
@endsection

@section('contenido')
<div class="row">
  <div class="col-lg-12">
    
    @include('includes.form-error')

    @include('includes.mensaje')

    <div class="card card-border-danger">
      <div class="card-header">
          <div class="card-tools pull-right">
            <a href="{{route('uacj.index')}}" class="btn btn-block btn-default btn-sm">
                <i class="fa fa-fw fa-reply-all"></i> Volver al listado
            </a>
          </div>
      </div>

      <form action="{{route('uacj.update', $campus->id)}}" id="form-general" class="form-horizontal" method="post" autocomplete="off">
        @csrf
        @method('put')
        
        <div class="card card-info shadow m-1">
          <div class="card-header">
            <h3 class="card-title"><b>Editar Campus</b></h3>
          </div>
          <div class="card-body">
            @include('admin.uacj.form')              
          </div>                   
          
          <div class="card-footer">
            <div class="row">
              <div class="col-sm-11">
                @include('includes.boton-form-editar', ['regresar' => 'uacj.index'])
              </div>
              <div class="col-sm-1">                              
                <table id="eliminar-campus-uacj">
                  <form action="{{route("uacj.destroy", $campus->id)}}" class="d-inline form-eliminar" method="POST">
                    @csrf @method("delete")
                    <button type="submit" class="btn-accion-tabla eliminar tooltipsC" title="Eliminar campus"><big><i class="text-danger fa fa-trash"></i></big></button>
                  </form>
                </table>
                <table class="table table-striped" id="uni-table">                  
                  <tbody>                  
                    <tr>                            
                      <td class="text-center">
                        <form action="{{route("uacj.destroy", $campus->id)}}" class="d-inline form-eliminar" method="POST">
                            @csrf @method("delete")
                            <button type="submit" class="btn-accion-tabla eliminar tooltipsC" title="Eliminar este registro"><i class="text-danger fa fa-trash"></i></button>
                        </form>
                      </td>
                    </tr>                    
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </form>      
    </div>
  </div>
</div>

@endsection

@section('scripts')
  <script src="{{asset("assets/pages/scripts/admin/uacj/index.js")}}" type="text/javascript"></script>    
@endsection