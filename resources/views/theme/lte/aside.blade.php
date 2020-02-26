<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="/" class="brand-link bg-gradient-primary">
    <img src="{{asset("assets/$theme/dist/img/UACJLogoColor.png")}}"
          alt="UACJ Logo"
          class="brand-image img-circle elevation-3"
          >
    <span class="brand-text font-weight-light">Sist. de equivalencias</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="{{asset("assets/$theme/dist/img/user2-160x160.jpg")}}" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">{{session()->get('nombre_completo') ?? 'Invitado'}}</a>
      </div>
    </div>

    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
      <li class="nav-item">
          
        <li class="nav-item {{getMenuActivo('/universidad')}}">
            <a class="nav-link {{getMenuActivo('/universidad')}}" href="{{route('universidad')}}">
              <i class="nav-icon fas fa-university"></i> 
              <p>
                  Universidades
              </p>
            </a>
        </li>

        <li class="nav-item {{getMenuActivo('/uacj')}}">
          <a class="nav-link {{getMenuActivo('/uacj')}}" href="{{route('uacj')}}">
            <i class="nav-icon fas fa-school"></i> 
            <p>
                  UACJ
            </p>
          </a>
        </li>

        <li class="nav-item {{getMenuActivo('/alumno')}}">
          <a class="nav-link {{getMenuActivo('/alumno')}}" href="{{route('alumno')}}">
            <i class="nav-icon fas fa-users"></i> 
            <p>
                  Estudiantes
            </p>
          </a>
        </li>

        <li class="nav-item {{getMenuActivo('/equivalencias')}}">
          <a class="nav-link {{getMenuActivo('/equivalencias')}}" href="{{route('equivalencias')}}">
            <i class="nav-icon fas fa-equals"></i> 
            <p>
                  Equivalencias
            </p>
          </a>
        </li>

        <li class="nav-item {{getMenuActivo('/admin')}}">
          <a class="nav-link {{getMenuActivo('/admin')}}" href="{{route('admin')}}">
            <i class="nav-icon fas fa-user-cog"></i> 
            <p>
                  Administración
            </p>
          </a>
        </li>                  
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>
