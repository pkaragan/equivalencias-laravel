@extends("theme.$theme.layout")
@section("titulo")

{{ $carrera->nombre }} - {{$carrera->campus->universidad->nombre}} - {{$carrera->campus->nombre}}
@endsection

@section('styles')
  <!-- DataTables -->
  <link rel="stylesheet" href="{{asset("assets/$theme/plugins/datatables-bs4/css/dataTables.bootstrap4.css")}}">
  <link rel="stylesheet" href="{{asset("assets/$theme/plugins/select2/css/select2.css")}}">
@endsection


@section('contenido')
<div class="row">
    <div class="col-lg-12">
        @include('includes.mensaje')
        <div class="card">
            <div class="card-header without-border">
                <h3 class="card-title"><b>{{ $carrera->nombre }}</b><small> - <u>{{$carrera->campus->universidad->nombre}}</u> - {{$carrera->campus->nombre}}</small> </h3>
                <a href="#" class="btn btn-info btn-sm card-tools mr-3" data-toggle="modal" data-target="#modal-agregar">Agregar Materia</a>
                <a href="{{route('carrera.show',$carrera->campus->id)}}" class="btn-sm btn-outline-dark card-tools mr-3 tooltipsC" title="Regresar"><i class="fas fa-arrow-left"></i></a>
            </div>
            <!-- listado de universidades 'Select2' -->
            <div id="lista-planes" class="container-fluid col-sm-12 border-2 border border-light shadow rounded">
              <div class="input-group m-3">
                  <div class="input-group-prepend">
                      <span class="input-group-text input-group-sm"><i class="fas fa-school" id="school-icon"></i></span>
                  </div>
                  <select class="select2bs4 col-sm-3" name="select-plan" id="select-plan">            
                      <option value=0>Seleccione el plan</option>
                      @foreach ($planes as $item)
                          <option value={{$item['id']}} {{ old('select-plan') == $item['id'] ? 'selected' : '' }} >{{$item['clave']}}</option>
                      @endforeach
                  </select>
              </div>
            </div>
            <!-- fin del listado-->
            
            <div class="col-md-12 mt-2">
              @csrf
                <div class="card">
                  <div class="card-body p-3">
                    <table class="table table-striped" id="materia-table">
                      <thead>
                        <tr>
                          <th style="width: 10px">#</th>
                          <th>Clave</th>
                          <th>Materia</th>
                          <th class="text-center" style="width: 130px">Mostrar equivalencias</th>
                          <th class="text-center" style="width: 130px">Editar</th>
                          <th class="text-center" style="width: 130px">Eliminar</th>
                        </tr>
                      </thead>
                      <tbody>
                        <div class="materias-ajax" name="materias-ajax" id="materias-ajax"></div>
{{--
                            @foreach ($materias as $key => $item)
                            <tr>
                                <td>{{$key+1}}.</td>
                                <td>{{$item["clave"]}}</td>
                                <td>{{$item["nombre"]}}</td>
                                <td class="text-center"><a href="#" class="tooltipsC" title="Ver carreras"><i class="text-muted fa fa-graduation-cap"></i></a></td>
                                <td class="text-center"><a href="#" class="tooltipsC" title="Editar campus"><i class="text-dark fa fa-edit"></i></a></td>
                                <td class="text-center">
                                  <form action="#" class="d-inline form-eliminar" method="POST">
                                      @csrf @method("delete")
                                      <button type="submit" class="btn-accion-tabla eliminar tooltipsC" title="Eliminar este registro"><i class="text-danger fa fa-trash"></i></button>
                                  </form>
                              </td>
                            </tr>
                            @endforeach                   
                            --}}                                         
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

@section('scriptsPlugins')
  <!-- Select2 -->
    <script src="{{asset("assets/$theme/plugins/select2/js/select2.full.js")}}"></script>
@endsection

@section('scripts')

  <!-- DataTables -->
  <script src="{{asset("assets/$theme/plugins/datatables/jquery.dataTables.js")}}"></script>
  <script src="{{asset("assets/$theme/plugins/datatables-bs4/js/dataTables.bootstrap4.js")}}"></script>


  <script>

    $(function () {
      $('#materia-table').DataTable({
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
    
    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'classic',
    });
  </script>
    

  <script src="{{asset("assets/pages/scripts/admin/materia/index.js")}}" type="text/javascript"></script>
  
@endsection  