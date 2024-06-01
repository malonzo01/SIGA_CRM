<div>
  @php
  $currentRouteName = Route::currentRouteName();
  $activeRoutes = ['front-pages-pricing', 'front-pages-payment', 'front-pages-checkout', 'front-pages-help-center'];
  $activeClass = in_array($currentRouteName, $activeRoutes) ? 'active' : '';
  @endphp
  <!-- Navbar: Start -->
  <nav class="layout-navbar shadow-none py-0">
    <div class="container">
      <div class="navbar navbar-expand-lg landing-navbar px-3 px-md-4">
        <!-- Menu logo wrapper: Start -->
        <div class="navbar-brand app-brand demo d-flex py-0 py-lg-2 me-4">
          <!-- Mobile menu toggle: Start-->
          <button class="navbar-toggler border-0 px-0 me-2" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="ti ti-menu-2 ti-sm align-middle"></i>
          </button>
          <!-- Mobile menu toggle: End-->
          <a href="{{route('pages.home')}}" class="app-brand-link">
            <span class="app-brand-text demo menu-text fw-bold ms-2 ps-1">{{ config('variables.templateName') }} - Blog</span>
          <!--  <span class="app-brand-logo demo">@include('_partials.macros',['height'=>20,'withbg' => "fill: #fff;"])</span> -->
          </a>
        </div>
        <!-- Menu logo wrapper: End -->
        <!-- Menu wrapper: Start -->
        <div class="collapse navbar-collapse landing-nav-menu" id="navbarSupportedContent">
          <button class="navbar-toggler border-0 text-heading position-absolute end-0 top-0 scaleX-n1-rtl" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="ti ti-x ti-sm"></i>
          </button>
          <div class="d-flex flex-row bd-highlight">
            <ul class="navbar-nav ms-lg-auto">
              <li class="nav-item"><a class="nav-item nav-link active" href="/posts" >Todas Las Categorias</a></li>
              @foreach ($categories as $category)
                <li class="nav-item"><a class="nav-link" href="{{ route('posts.category', $category) }}">{{ $category->name }}</a></li>
              @endforeach
           </ul>
          </div>
            <ul class="navbar-nav ms-lg-auto">
              @auth
                <!-- User -->
                <li class="nav-item navbar-dropdown dropdown-user dropdown">
                  <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                    <div class="avatar avatar-online">
                      <img src="{{ Auth::user() ? Auth::user()->profile_photo_url : asset('assets/img/avatars/1.png') }}" alt class="h-auto rounded-circle">
                    </div>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                      <a class="dropdown-item" href="{{ Route::has('profile.show') ? route('profile.show') : url('pages/profile-user') }}">
                        <div class="d-flex">
                          <div class="flex-shrink-0 me-3">
                            <div class="avatar avatar-online">
                              <img src="{{ Auth::user() ? Auth::user()->profile_photo_url : asset('assets/img/avatars/boxed-bg.png') }}" alt class="h-auto rounded-circle">
                            </div>
                          </div>
                          <div class="flex-grow-1">
                            <span class="fw-medium d-block">
                              @if (Auth::check())
                              {{ Auth::user()->name }}
                              @endif
                            </span>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li>
                      <div class="dropdown-divider"></div>
                    </li>
                    <li>
                      <a class="dropdown-item" href="{{ route('blog.admin') }}">
                        <span class="d-flex align-items-center align-middle">
                          <i class="flex-shrink-0 ti ti-credit-card me-2 ti-sm"></i>
                          <span class="flex-grow-1 align-middle">Administrar Blog</span>
                        </span> </a>
                    </li>
                    <li>
                      <div class="dropdown-divider"></div>
                    </li>
                    @if (Auth::check())
                    <li>
                      <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class='ti ti-logout me-2'></i>
                        <span class="align-middle">Logout</span>
                      </a>
                    </li>
                    <form method="POST" id="logout-form" action="{{ route('logout') }}">
                      @csrf
                    </form>
                    @else
                    <li>
                      <a class="dropdown-item" href="{{ Route::has('login') ? route('login') : url('auth/login-basic') }}">
                        <i class='ti ti-login me-2'></i>
                        <span class="align-middle">Login</span>
                      </a>
                    </li>
                    @endif
                  </ul>
                </li>
                <!--/ User -->
              @else
                <!-- Authentication Links -->
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('login') }}"><i class="tf-icons navbar-icon ti ti-lock-open ti-xs me-1"></i> Login</a>
                </li>
              @endauth
            </ul>
          </div>
        </div>
    </div>
  </nav>
  <!-- Navbar: End -->

</div>
