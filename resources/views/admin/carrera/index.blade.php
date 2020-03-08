@extends("theme.$theme.layout")
@section("titulo")

{{$campus->universidad->nombre}} - {{ $campus->nombre}}
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
                <h3 class="card-title"><b>{{ $campus->universidad->nombre }}</b> - {{ $campus->nombre }} </h3>
                <a href="#" class="btn btn-info btn-sm card-tools mr-3" data-toggle="modal" data-target="#modal-agregar">Agregar Carrera</a>
                <a href="{{route('campus.index')}}" class="btn-sm btn-outline-dark card-tools mr-3 tooltipsC" title="Regresar"><i class="fas fa-arrow-left"></i></a>
            </div>

            @include('admin.carrera.create', ['nombre' => $campus->universidad->nombre], ['campus' => $campus])
            @include('admin.carrera.edit', ['nombre' => $campus->universidad->nombre], ['campus' => $campus])

            <div class="col-md-12 mt-2">

                <div class="card">
                  <div class="card-body p-3">
                    <table class="table table-striped" id="carrera-table">
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
                                <td>{{$key+1}}.</td>
                                <td>{{$item["nombre"]}}</td>
                                <td class="text-center"><a href="{{route('materia.show', $item["id"])}}" class="tooltipsC" title="Ver Materias"><i class="text-muted fas fa-book"></i></a></td>
                                <td class="text-center"><a href="#" class="tooltipsC" title="Editar carrera" data-id="{{$item["id"]}}" data-nombre="{{$item["nombre"]}}" data-campus_id="{{$item["campus_id"]}}" data-toggle="modal" data-target="#modal-editar"><i class="text-dark fa fa-edit"></i></a></td>
                                <td class="text-center">

                                  <form action="{{route("carrera.destroy", $item['id'])}}" class="d-inline form-eliminar" method="POST">
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

  <script>
    $(function () {
      $('#carrera-table').DataTable({
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

  <script src="{{asset("assets/pages/scripts/admin/carrera/index.js")}}" type="text/javascript"></script>
@endsection
