<div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch">
    <div class="card bg-light">      
      <div class="card-body pt-0">
        <div class="row">
          <div class="col-8">
            <h5 class="lead"><b>{{$item["nombre"]}}</b></h5>
            <ul class="ml-4 mb-0 fa-ul text-muted">
              <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> {{$item["calle"]}} {{$item["numero"]}}, {{$item["colonia"] }}, {{$item["ciudad"] }}, {{$item["estado"] }} </li>
              <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> {{$item["telefono"]}}</li>
            </ul>
          </div>
          <div class="col-4 text-center">
            <div class="card-header text-muted border-bottom-0">
                <h6>{{$item["iniciales"]}}</h5>
              </div>
            <img src="{{asset("assets/$theme/dist/img/")}}/{{$item['imagen']}}" alt="" class="img-circle img-fluid w-100 h-75">
          </div>
        </div>
      </div>
      <div class="card-footer">
        <div class="text-right">
          <a href="{{route('uacj.edit',$item['id'])}}" class="btn btn-sm bg-blue">
            Editar 
          </a>
          <a href="{{route('carreraUacj.show', $item['id'])}}" class="btn btn-sm bg-dark"> 
            Ver carreras <i class="text-white fas fa-arrow-circle-right"></i>
          </a>
        </div>
      </div>      
    </div>
  </div>