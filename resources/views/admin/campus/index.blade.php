@extends("theme.$theme.layout")
@section("titulo")
Universidades
@endsection

@section('styles')
  <!-- DataTables -->
  <link rel="stylesheet" href="{{asset("assets/$theme/plugins/datatables-bs4/css/dataTables.bootstrap4.css")}}">
@endsection

@section('contenido')
<div class="row">
    <div class="col-lg-12">
        @include('includes.mensaje')
        <div class="card">
            <div class="card-header without-border">
                <h3 class="card-title">Universidades</h3>
                <a href="{{route('campus.create')}}" class="btn btn-info btn-sm card-tools mr-3">Agregar Campus</a>
                <a href="{{route('admin-index')}}" class="btn-sm btn-outline-dark card-tools mr-3" title="Regresar"><i class="fas fa-arrow-left"></i></a>
            </div>

            <div class="col-md-12 mt-2">

                <div class="card">
                  <div class="card-body p-3">
                    <table class="table table-striped" id="uni-table">
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
                                <td>{{$key+1}}.</td>
                                <td>{{$item["nombre"]}}</td>
                                <td>{{$item["iniciales"]}}</td>
                                <td>{{$item["campus"]}}</td>
                                <td class="text-center"><a href="{{route('carrera.show',$item['campus_id'])}}" title="Ver carreras"><i class="text-muted fa fa-graduation-cap"></i></a></td>
                                <td class="text-center"><a href="{{route('campus.edit',$item['campus_id'])}}" title="Editar campus"><i class="text-dark fa fa-edit"></i></a></td>
                                <td class="text-center">
                                  <form action="{{route("campus.destroy", $item['campus_id'])}}" class="d-inline form-eliminar" method="POST">
                                      @csrf @method("delete")
                                      <button type="submit" class="btn-accion-tabla eliminar tooltipsC" title="Eliminar este registro"><i class="text-danger fa fa-trash"></i></button>
                                  </form>
                              </td>
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

@section('scripts')  

  <!-- DataTables -->
  <script src="{{asset("assets/$theme/plugins/datatables/jquery.dataTables.js")}}"></script>
  <script src="{{asset("assets/$theme/plugins/datatables-bs4/js/dataTables.bootstrap4.js")}}"></script>


  <!-- page script -->
  <script>
    $(function () {
      $('#uni-table').DataTable({
        "paging": true,
        "lengthChange": true,
        "searching": true,
        "ordering": true,
        "info": true,
        "autoWidth": true,
        "language":{
          "info": "Numero total de registros:  <b> _TOTAL_ </b>",
          "search": "Buscar",
          "paginate": {
            "next": "Siguiente",
            "previous": "Anterior",
          },
          "lengthMenu": 'Mostrar   <select>  '+
                        '<option value="10">10</option>'+
                        '<option value="20">20</option>'+
                        '<option value="30">30</option>'+
                        '<option value="-1">Todos</option>'+
                        '</select> registros',
          "loadingRecords": "Cargando...",
          "Processing": "Procesando...",
          "emptyTable": "No hay datos",
          "zeroRecords": "No hay coincidencias",
          "infoEmpty": "",
          "infoFiltered": ""
          }

      });
    });
  </script>

  <script src="{{asset("assets/pages/scripts/admin/campus/index.js")}}" type="text/javascript"></script>
@endsection
