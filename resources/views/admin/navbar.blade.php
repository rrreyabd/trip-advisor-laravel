<nav class="sb-topnav navbar navbar-expand navbar-dark bg-greentripadvisorgradient">
    <!-- Navbar Brand-->
    <img src="{{ asset('img/TripAdvisor_Logo.svg.png')}}" class=" ps-3" height="40px" alt="">
    <!-- Sidebar Toggle-->
    <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas text-black fa-bars"></i></button>
    <!-- Navbar-->
    <ul class="navbar-nav d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="text-white fas fa-user fa-fw"></i></a>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="{{ route('logout')}}">Logout</a></li>
            </ul>
        </li>
    </ul>
</nav>