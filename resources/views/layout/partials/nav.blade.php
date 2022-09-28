<nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
    <a class="navbar-brand" href="{{url('/home')}}">UsablitiAi</a>

    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item @yield('home')">
          <a class="nav-link" href="#">لنبدأ</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">عن الموقع</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">مساعدة</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" >
           المزيد
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item text-right"  href="#">ن</a>
            <a class="dropdown-item text-right"  href="#">م</a>
            <a class="dropdown-item text-right"  href="#">ح</a>
          </div>
        </li>
      </ul>
    </div>
  </nav>
