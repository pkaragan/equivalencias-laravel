@extends("theme.$theme.layout")
@section("titulo")

{{ $carrera->nombre }} - {{$carrera->campus->universidad->nombre}} - {{$carrera->campus->nombre}}
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
                <h3 class="card-title"><b>{{ $carrera->nombre }}</b> - <u>{{$carrera->campus->universidad->nombre}}</u> - {{$carrera->campus->nombre}} </h3>
                <a href="#" class="btn btn-info btn-sm card-tools mr-3" data-toggle="modal" data-target="#modal-agregar">Agregar Materia</a>
                <a href="{{route('carrera.show',$carrera->campus->id)}}" class="btn-sm btn-outline-dark card-tools mr-3 tooltipsC" title="Regresar"><i class="fas fa-arrow-left"></i></a>
            </div>

            @include('admin.materia.create', ['carrera' => $carrera])
            @include('admin.materia.edit', ['carrera' => $carrera])

            <div class="col-md-12 mt-2">

                <div class="card">
                  <div class="card-body p-3">
                    <table class="table table-striped" id="data-table">
                      <thead>
                        <tr>
                          <th style="width: 10px">#</th>
                          <th>Materia</th>
                          <th class="text-center" style="width: 130px">Mostrar equivalencias</th>
                          <th class="text-center" style="width: 130px">Editar</th>
                          <th class="text-center" style="width: 130px">Eliminar</th>
                        </tr>
                      </thead>
                      <tbody>
                        /***
                        @foreach ($carrera->materias as $key => $item)
                            <tr>
                                <td>{{$key+1}}.</td>
                                <td>{{$item["nombre"]}}</td>
                                <td class="text-center"><a href="#" class="tooltipsC" title="Mostrar equivalencias" data-id="{{$item["id"]}}" data-nombre="{{$item["nombre"]}}" data-campus_id="{{$item["id"]->$campus["id"]}}" data-toggle="modal" data-target="#modal-editar"><i class="text-muted fas fa-equals"></i></a></td>
                                <td class="text-center"><a href="#" class="tooltipsC" title="Editar materia" data-id="{{$item["id"]}}" data-nombre="{{$item["nombre"]}}" data-carrera_id="{{$item["id"]->carrera["id"]}}" data-toggle="modal" data-target="#modal-editar"><i class="text-dark fa fa-edit"></i></a></td>
                                <td class="text-center">

                                  <form action="{{route("materia.destroy", $item['id'])}}" class="d-inline form-eliminar" method="POST">
                                      @csrf @method("delete")
                                      <button type="submit" class="btn-accion-tabla eliminar tooltipsC" title="Eliminar este registro"><i class="text-danger fa fa-trash"></i></button>
                                  </form>
                                </td>
                            </tr>
                        @endforeach
                        ***/
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
      $('#data-table').DataTable({
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

  <script src="{{asset("assets/pages/scripts/admin/index.js")}}" type="text/javascript"></script>
@endsection
