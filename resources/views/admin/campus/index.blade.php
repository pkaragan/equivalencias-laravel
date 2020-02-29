@extends("theme.$theme.layout")
@section("titulo")
UACJ
@endsection

@section("styles")
<link href="{{asset("assets/js/jquery-nestable/jquery.nestable.css")}}" rel="stylesheet" type="text/css" />
@endsection

@section("scriptsPlugins")
<script src="{{asset("assets/js/jquery-nestable/jquery.nestable.js")}}" type="text/javascript"></script>
@endsection

@section("scripts")
<script src="{{asset("assets/pages/scripts/admin/menu/index.js")}}" type="text/javascript"></script>
@endsection

@section('contenido')
<div class="row">
    <div class="col-lg-12">
        @include('includes.mensaje')
        <div class="card">
            <div class="card-header without-border">
                <h3 class="card-title">UACJ</h3>
                <a href="{{ route('uacj.create') }}" class="btn btn-info btn-sm card-tools mr-3">Agregar Campus</a>
                <a href="{{route('admin-index')}}" class="btn-sm btn-outline-dark card-tools mr-3" title="Regresar"><i class="fas fa-arrow-left"></i></a>
            </div>

            <section class="content mt-3">
              <div class="container-fluid">
                <div class="row">                                
                    @foreach ($campus as $key => $item)
                        @include("admin.uacj.uacj-item",["item" => $item])
                    @endforeach
                </div>
              </div>
            </section>

        </div>
    </div>
</div>
@endsection