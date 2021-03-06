<nav class="main-header navbar navbar-expand navbar-light bg-gradient-primary">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
     
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" data-slide="true" href="#">
          <i class="fas fa-th-large"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header"> {{session()->get('nombre_completo') ?? 'Invitado'}}</span>
          <div class="dropdown-divider"></div>          

          <div class="pull-left">
            <a href="{{route('login')}}" class="dropdown-item dropdown-footer">Login</a>
          </div>
          <div class="pull-right">
            <a href="{{route('logout')}}" class="dropdown-item dropdown-footer">Salir</a>
          </div>        
        </li>      
      </ul>                  
</nav>
  