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
              <div class="small-box bg-info">
                <div class="inner">
                  <h3>150</h3>
  
                  <p>Universidades</p>
                </div>
                <div class="icon">
                  <i class="fas fa-university"></i>
                </div>
              <a href="{{ route ('campus.index')}}" class="small-box-footer"> <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-info">
                <div class="inner">
                  <h3>53<sup style="font-size: 20px">%</sup></h3>
  
                  <p>UACJ</p>
                </div>
                <div class="icon">
                  <i class="fas fa-school"></i>
                </div>
                <a href="{{ route ('uacj.index')}}" class="small-box-footer"> <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-info">
                <div class="inner">
                  <h3>44</h3>
  
                  <p>Estudiantes</p>
                </div>
                <div class="icon">
                  <i class="fas fa-users"></i>
                </div>
                <a href="{{ route ('campus.index')}}" class="small-box-footer"> <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-info">
                <div class="inner">
                  <h3>65</h3>
  
                  <p>Equivalencias</p>
                </div>
                <div class="icon">
                  <i class="fas fa-equals"></i>
                </div>
                <a href="{{ route ('campus.index')}}" class="small-box-footer"> <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-info">
                <div class="inner">
                  <h3>65</h3>
  
                  <p>Administración</p>
                </div>
                <div class="icon">
                  <i class="fas fa-user-cog"></i>
                </div>
                <a href="{{ route ('campus.index')}}" class="small-box-footer"> <i class="fas fa-arrow-circle-right"></i></a>
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