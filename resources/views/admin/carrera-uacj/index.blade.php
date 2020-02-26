@extends("theme.$theme.layout")
@section("titulo")
Carreras - {{ $campus->nombre }}
@endsection

@section('contenido')
<div class="row">
    <div class="col-lg-12">
        @include('includes.mensaje')
        <div class="card">
            <div class="card-header without-border">
                <h3 class="card-title">Carreras</h3>
                <a href="#" class="btn btn-info btn-sm card-tools mr-3">Agregar Carreras</a>
            </div>

            <div class="col-md-12">
    
                <div class="card">
                  <div class="card-body p-0">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th style="width: 10px">#</th>
                          <th>Nombre</th>
                          <th class="text-center" style="width: 100px">Ver materias</th>
                          <th class="text-center" style="width: 100px">Editar</th>
                          <th class="text-center" style="width: 100px">Eliminar</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($carreras as $key => $item)
                            <tr>                                                            
                                <td>{{$item["id"]}}.</td>
                                <td>{{$item["nombre"]}}</td>                          
                                <td class="text-center"><a href="{{route('carrera')}}" title="Ver carreras"><i class="text-muted fa fa-graduation-cap"></i></a></td>
                                <td class="text-center"><a href="{{route('editar_carrera', ['id' => $item["id"]])}}" title="Editar carrera"><i class="text-dark fa fa-edit"></i></a></td>
                                <td class="text-center"><a href="{{route('eliminar_carrera', ['id' => $item["id"]])}}" title="Eliminar carrera"><i class="text-danger fa fa-trash"></i></a></td>
                            </tr>                        
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                  <!-- /.card-body -->
                </div>
                <!-- /.card -->
              </div>
              <!-- /.col -->            
        </div>
    </div>
</div> 
@endsection