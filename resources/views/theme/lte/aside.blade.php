<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="/" class="brand-link bg-gradient-info">
    <img src="{{asset("assets/$theme/dist/img/AdminLTELogo.png")}}"
          alt="AdminLTE Logo"
          class="brand-image img-circle elevation-3"
          style="opacity: .8">
    <span class="brand-text font-weight-light">AdminLTE 3</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="{{asset("assets/$theme/dist/img/user2-160x160.jpg")}}" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">{{session()->get('nombre_usuario') ?? 'Invitado'}}</a>
      </div>
    </div>

    <!-- search form -->
    <form action="#" method="get" class="sidebar">
      <div class="input-group">
        <input type="text" name="q" class="form-control" placeholder="Search...">
        <span class="input-group-btn">
          <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
          </button>
        </span>
      </div>
    </form>
    <!-- /.search form -->

    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
      <li class="nav-item">
        <a href="#" class="nav-link mt-3">
          <p>
          <i class="far fa-circle nav-icon"></i>
          Menu Principal</p>
        </a>


              @foreach ($menusComposer as $key => $item)
                @if ($item["menu_id"] != 0)
                  @break
                @endif
                @include("theme.$theme.menu-item", ["item" => $item])
              @endforeach      
        
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>
