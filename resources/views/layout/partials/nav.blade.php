<nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm sticky-top">
    <a class="navbar-brand ml-5" href="{{url('/home')}}">مصنف الآراء</a>

    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item @yield('start')">
          <a class="nav-link" href="/start">صنف </a>
        </li>
        <li class="nav-item @yield('about')">
          <a class="nav-link" href="/home">عن الموقع</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">مساعدة</a>
        </li>

      </ul>
    </div>
  </nav>
