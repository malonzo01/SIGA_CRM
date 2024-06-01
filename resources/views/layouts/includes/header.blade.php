<header id="header" class="header fixed-top d-flex align-items-center shadow-none">
    <div class="d-flex align-items-center justify-content-between ps-2">
        <a href="{{ route('dashboard.index') }}" class="logo d-flex align-items-center">
            <img src="{{ asset('img/logo.png') }}" alt="Logo">
            <span class="d-none d-lg-block">SIGA</span>
        </a>
        <i class="fas fa-bars toggle-sidebar-btn btn btn-light ms-4" style="font-size: 1rem;"></i>
    </div>

    <div class="search-bar">
        <form class="search-form d-flex align-items-center" method="POST" action="#">
            <input type="text" name="query" placeholder="Search" title="Enter search keyword">
            <button type="submit" title="Search"><i class="bi bi-search"></i></button>
        </form>
    </div>

    <nav class="header-nav ms-auto">
        <ul class="d-flex align-items-center">
            <li class="nav-item d-block d-lg-none">
                <a class="nav-link nav-icon search-bar-toggle" href="#">
                    <i class="fas fa-search"></i>
                </a>
            </li>

            <li class="nav-item dropdown pe-3">
                <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                    <img src="{{ url('img/user-default.jpg') }}" alt="Profile" class="rounded-circle border">
                    <span class="d-none d-md-block dropdown-toggle ps-2">{{ auth()->user()->name }}</span>
                </a>

                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                    <li class="dropdown-header">
                        <h6>{{ auth()->user()->name }}</h6>
                    </li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item d-flex align-items-center" href="{{ route('profile.index') }}">
                            <i style="width: 20px; font-size: 16px;" class="text-center fas fa-user"></i>
                            <span>Perfil</span>
                        </a>
                    </li>
                    @can('admin.users.index')
                        <li><a class="dropdown-item d-flex align-items-center" href="{{ route('admin.users.index') }}">
                                <i style="width: 20px; font-size: 16px;" class="text-center fas fa-users"></i>
                                <span>Users</span>
                            </a>
                        </li>
                    @endcan
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item d-flex align-items-center" href="{{ route('admin.dashboard.index') }}">
                        <i style="width: 20px; font-size: 16px;" class="text-center fas fa-camera-retro"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item d-flex align-items-center" href="{{ route('session.logout') }}"><i
                                style="width: 20px; font-size: 16px;"
                                class="text-center fas fa-sign-out-alt"></i><span>Cerrar sesión</span></a></li>
                </ul>
            </li>
        </ul>
    </nav>
</header>
