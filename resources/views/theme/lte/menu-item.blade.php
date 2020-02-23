@if ($item["submenu"] == [])
    <li class="nav-item {{getMenuActivo($item["url"])}}">
        <a class="nav-link {{getMenuActivo($item["url"])}}" href="{{url($item['url'])}}">
          <i class="nav-icon fa {{$item["icono"]}}"></i> 
          <p>
                {{$item["nombre"]}}          
          </p>
        </a>
    </li>
@else
    <li class="nav-item {{getMenuActivo($item["url"])}}">
        <a href="#" class="nav-link {{getMenuActivo($item["url"])}}">
            <i class="nav-icon fa {{$item["icono"]}}"></i> 
                <p>
                    {{$item["nombre"]}}
                    <i class="fas fa-angle-left right"></i>
                </p>
        </a>
        <ul class="nav nav-treeview" style="display: block;">
            @foreach ($item["submenu"] as $submenu)
                @include("theme.$theme.menu-item", ["item" => $submenu])
            @endforeach
        </ul>                    
    </li>
@endif

