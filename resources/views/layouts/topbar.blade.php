<header id="page-topbar">
    <div class="navbar-header">
        <div class="d-flex">
            <!-- LOGO -->
            <div class="navbar-brand-box">
                <a href="{{url('index')}}" class="logo logo-dark">
                    <span class="logo-sm">
                        <img src="{{ URL::asset('/assets/images/mgm.png') }}" alt="" height="50">
                    </span>
                    <span class="logo-lg">
                        <img src="{{ URL::asset('/assets/images/mgm.png') }}" alt="" height="50">
                    </span>
                </a>

                <a href="{{url('index')}}" class="logo logo-light">
                    <span class="logo-sm">
                        <img src="{{ URL::asset('/assets/images/mgm.png') }}" alt="" height="50">
                    </span>
                    <span class="logo-lg">
                        <img src="{{ URL::asset('/assets/images/mgm.png') }}" alt="" height="50">
                    </span>
                </a>
            </div>

            <button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect vertical-menu-btn">
                <i class="fa fa-fw fa-bars"></i>
            </button>

            <!-- App Search-->

        </div>

        <div class="d-flex">

            <div class="dropdown d-inline-block d-lg-none ms-2">
                <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-search-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="uil-search"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0" aria-labelledby="page-header-search-dropdown">


                </div>
            </div>



            <div class="dropdown d-none d-lg-inline-block ms-1">
                <button type="button" class="btn header-item noti-icon waves-effect" data-bs-toggle="fullscreen">
                    <i class="uil-minus-path"></i>
                </button>
            </div>

            {{-- <ul class="navbar-nav ms-auto">
                @auth
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Welcome back, 
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <li><a class="dropdown-item" href="/dashboard"><i class="bi bi-layout-text-sidebar-reverse"></i> My Dashboard</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li>
                          <form action="/logout" method="post">
                                @csrf
                              <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i> Logout</button>
                          </form>
                      </li>
                    </ul>
                  </li> --}}

            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    {{-- <img class="rounded-circle header-profile-user" src="{{ URL::asset('/assets/images/users/avatar-6.jpg') }}"
                    alt="Header Avatar"> --}}
                    <span class="d-none d-xl-inline-block ms-1 fw-medium font-size-15"></span>
                    <i class="uil-angle-down d-none d-xl-inline-block font-size-17"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-end">
                    <!-- item-->
                    <a class="dropdown-item" href="/home"><i class="uil-home-alt font-size-18 align-middle text-muted me-1"></i> <span class="align-middle">@lang( 'Dashboard')</span></a>

                    <form action="/logout" method="post">
                        {{ csrf_field() }}

                        <button type="submit" class="dropdown-item"><i class="uil uil-sign-out-alt"></i> Logout </button></span></a>
                    </form>


                    {{-- <a class="dropdown-item" href="#"><i class="uil uil-wallet font-size-18 align-middle me-1 text-muted"></i> <span class="align-middle">@lang('translation.My_Wallet')</span></a>
                    <a class="dropdown-item d-block" href="#"><i class="uil uil-cog font-size-18 align-middle me-1 text-muted"></i> <span class="align-middle">@lang('translation.Settings')</span> <span class="badge bg-soft-success rounded-pill mt-1 ms-2">03</span></a>
                    <a class="dropdown-item" href="#"><i class="uil uil-lock-alt font-size-18 align-middle me-1 text-muted"></i> <span class="align-middle">@lang('translation.Lock_screen')</span></a> --}}

                    {{-- <a class="dropdown-item" onclick="event.preventDefault(); document.getElementById('logout').submit();"><i class="uil uil-sign-out-alt font-size-18 align-middle me-1 text-muted"></i> <span class="align-middle">@lang('translation.Sign_out')</span></a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                    </form>
                </div> --}}
            </div>
        </div>


        <div class="dropdown d-inline-block">
            <button type="button" class="btn header-item noti-icon right-bar-toggle waves-effect">
                <i class="uil-cog"></i>
            </button>
        </div>

    </div>
    </div>
</header>