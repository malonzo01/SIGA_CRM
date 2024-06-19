<aside id="sidebar" class="sidebar">
    <ul class="sidebar-nav" id="sidebar-nav">
        <li class="nav-item">
            <a class="nav-link " href="{{ route('dashboard.index') }}">
                <i class="fas fa-chart-bar"></i>
                <span>Inicio</span>
            </a>
        </li>
        @if (@Auth::user()->hasRole('Webmaster') || @Auth::user()->hasRole('Administrador'))
            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#admin" data-bs-toggle="collapse" href="#">
                    <i class="fas fa-gears"></i>
                    <span>Administrar</span>
                    <i class="fas fa-chevron-down arrows ms-auto"></i>
                </a>
                <ul id="admin" class="nav-content collapse" data-bs-parent="#sidebar-nav">
                    <li><a class="dropdown-item d-flex align-items-center" href="{{ route('admin.dashboard.index') }}">
                        <i class="fas fa-circle"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    @can('admin.users.index')
                        <li>
                            <a href="{{ route('admin.users.index') }}">
                                <i class="fas fa-circle"></i>
                                <span>Usuarios</span>
                            </a>
                        </li>
                    @endcan
                    @can('admin.roles.index')
                        <li>
                            <a href="{{ route('admin.roles.index') }}">
                                <i class="fas fa-circle"></i>
                                <span>Roles</span>
                            </a>
                        </li>
                    @endcan
                </ul>
            </li>
        @endif
        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#placas" data-bs-toggle="collapse" href="#">
                <i class="fab fa-opencart"></i><span>Placas</span><i class="fas fa-chevron-down arrows ms-auto"></i>
            </a>
            <ul id="placas" class="nav-content collapse" data-bs-parent="#sidebar-nav">
                @foreach ($insurences as $index => $insurence)
                    <li>
                        <a href="{{ route('plate_car.generate', ['insurence' => $index]) }}">
                            <i class="fas fa-circle"></i><span>{{ $insurence->name }}</span>
                        </a>
                    </li>
                @endforeach
            </ul>
        </li>
    </ul>
</aside>
