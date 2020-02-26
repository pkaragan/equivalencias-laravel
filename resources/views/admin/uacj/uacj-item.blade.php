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
        <a href="{{ route ('carreraUacj', ['id'=>$item->id]) }}" class="small-box-footer"> <i class="fas fa-arrow-circle-right"></i></a>
    </div>
    <!-- Small boxes (Stat box) -->
</div>
    