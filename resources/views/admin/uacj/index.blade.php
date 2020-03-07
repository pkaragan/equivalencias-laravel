@extends("theme.$theme.layout")
@section("titulo")
UACJ
@endsection

@section('contenido')
<div class="row">
    <div class="col-lg-12">
        @include('includes.mensaje')
        <div class="card">
            <div class="card-header without-border">
                <h3 class="card-title">UACJ</h3>
                <a href="{{ route('uacj.create') }}" class="btn btn-info btn-sm card-tools mr-3">Agregar Campus</a>
                <a href="{{route('admin-index')}}" class="btn-sm btn-outline-dark card-tools mr-3 tooltipsC" title="Regresar"><i class="fas fa-arrow-left"></i></a>
            </div>

            <div class="card card-solid">
                <div class="card-body pb-0">
                    <div class="row d-flex align-items-stretch">
                        @foreach ($campus as $key => $item)
                            @include("admin.uacj.uacj-item",["item" => $item])
                        @endforeach
                    </div>
                </div>
            </div>                   
                  
        </div>
    </div>
</div>
@endsection
