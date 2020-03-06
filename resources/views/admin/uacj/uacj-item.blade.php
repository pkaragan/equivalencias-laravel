<div class="col-lg-3 col-6">
    <!-- small box -->
    <div class="small-box bg-lightblue">
        <div class="inner">
            <h4>{{$item["iniciales"]}}</h4>
            <p>{{$item["nombre"]}}</p>
        </div>
        <div class="icon">
            <i class="fas fa-building"></i>
        </div>
        <div class="small-box-footer col-sm-12">
            <a href="{{route('uacj.edit',$item['id'])}}" class="tooltipsC col-sm-6" title="Editar campus"><i class="text-light fa fa-edit"></i></a>
            <a href="{{ route ('carreraUacj.show', $item['id']) }}" class="tooltipsC col-sm-6" title="Ver carreras"> <i class="text-white fas fa-arrow-circle-right"></i></a>        
        </div>
    </div>
    <!-- Small boxes (Stat box) -->
</div>
    