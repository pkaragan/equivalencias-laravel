@extends("theme.$theme.layout")
@section("titulo")
Universidades
@endsection

@section('contenido')
<div class="row">
    <div class="col-lg-12">
        @include('includes.mensaje')
        <div class="card">
            <div class="card-header without-border">
                <h3 class="card-title">Universidades</h3>                
                <a href="{{route('universidad.create')}}" class="btn btn-info btn-sm card-tools mr-3">Agregar Campus</a>
                <a href="{{route('admin-index')}}" class="btn-sm btn-outline-dark card-tools mr-3" title="Regresar"><i class="fas fa-arrow-left"></i></a>
            </div>

            <div class="col-md-12 mt-2">
    
                <div class="card">
                  <div class="card-body p-0">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th style="width: 10px">#</th>
                          <th>Nombre</th>
                          <th>Iniciales</th>
                          <th>Campus</th>
                          <th class="text-center">Ver carreras</th>
                          <th class="text-center">Editar</th>
                          <th class="text-center">Eliminar</th>
                        </tr>
                      </thead>
                      <tbody>

                        @foreach ($universidades as $key => $item)
                            <tr>                                                            
                                <td>{{$item["id"]}}.</td>
                                <td>{{$item["nombre"]}}</td>
                                <td>{{$item["iniciales"]}}</td>
                                <td>{{$item["campus"]}}</td>   
                                <td class="text-center"><a href="{{route('carrera.show',$item['campus_id'])}}" title="Ver carreras"><i class="text-muted fa fa-graduation-cap"></i></a></td>
                                <td class="text-center"><a href="{{route('universidad.edit',$item['id'])}}" title="Editar universidad"><i class="text-dark fa fa-edit"></i></a></td>
                                <td class="text-center"><a href="{{route('universidad.destroy',$item["id"])}}" title="Eliminar universidad"><i class="text-danger fa fa-trash"></i></a></td>
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