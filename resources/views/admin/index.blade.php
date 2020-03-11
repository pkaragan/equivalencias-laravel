@extends("theme.$theme.layout")
@section("titulo")
Administrador
@endsection

@section('contenido')
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
          <!-- Small boxes (Stat box) -->
          <div class="row">
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-light">
                <div class="inner">
                  <h3 class="text-gray">{{ $campus }}</h3>
  
                  <p>Universidades</p>
                </div>
                <div class="icon">
                  <i class="text-dark fas fa-university"></i>
                </div>
              <a href="{{ route ('campus.index')}}" class="small-box-footer tooltipsC" title="Ver campus"> <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-light">
                <div class="inner">
                  <h3 class="text-gray">{{$campusUacj}}</h3>
  
                  <p>UACJ</p>
                </div>
                <div class="icon">
                  <i class="text-dark fas fa-school"></i>
                </div>
                <a href="{{ route ('uacj.index')}}" class="small-box-footer tooltipsC" title="Ver campus UACJ"> <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-light">
                <div class="inner">
                  <h3 class="text-gray">{{$alumno}}</h3>
  
                  <p>Estudiantes</p>
                </div>
                <div class="icon">
                  <i class="text-dark fas fa-users"></i>
                </div>
                <a href="{{ route ('campus.index')}}" class="small-box-footer tooltipsC" title="Ver estudiantes"> <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-light">
                <div class="inner">
                  <h3 class="text-gray">{{$equivalencias}}</h3>
  
                  <p>Equivalencias</p>
                </div>
                <div class="icon">
                  <i class="text-dark fas fa-equals"></i>
                </div>
                <a href="{{ route ('campus.index')}}" class="small-box-footer tooltipsC" title="Ver equivalencias"> <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-light">
                <div class="inner">
  
                  <p>Administración</p>
                </div>
                <div class="icon">
                  <i class="text-dark fas fa-user-cog"></i>
                </div>
                <a href="{{ route ('campus.index')}}" class="small-box-footer tooltipsC" title="Ir a administración del sistema"> <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
          </div>
          <!-- /.row -->

          <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->
@endsection 