<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width" />
        {{-- Style --}}
        @stack('prepend-style')
          @include('includes.style')
        @stack('addon-style')
  </head>
  <body>

    {{-- Page Content --}}
        <div class="page-dashboard">
      <div class="d-flex" id="wrapper" data-aos="fade-right">
        <!-- Sidebar -->
        <div class="border-right" id="sidebar-wrapper">
          <div class="sidebar-heading text-center">
            <img
              src="/images/member/logodashboard-store-logo.svg"
              alt=""
              class="my-4"
            />
          </div>
          <div class="list-group list-group-flush">
            <a
              href="{{ route('dashboard') }}"
              class="list-group-item list-group-item-action @yield('Dashboard')"
              >Dashboard</a
            >
            <a
              href="{{ route('dashboard.products') }}"
              class="list-group-item list-group-item-action @yield('Products')"
            >
              My Products
            </a>
            <a
              href="{{ route('dashboard-transactions') }}"
              class="list-group-item list-group-item-action @yield('Transactions')"
            >
              Transaction
            </a>
            <a
              href="{{ route('settings') }}"
              class="list-group-item list-group-item-action @yield('Settings')"
            >
              Store Settings
            </a>
            <a
              href="{{ route('account') }}"
              class="list-group-item list-group-item-action @yield('Account')"
            >
              My Account
            </a>
            <a
              href="{{ url('logout') }}"
              class="list-group-item list-group-item-action"
            >
              Sign Out
            </a>
          </div>
        </div>

        <!-- Page Content -->
        <div id="page-content-wrapper">
          <nav
            class="navbar navbar-expand-lg navbar-light navbar-store fixed-top navbar-fixed-top"
            data-aos="fade-down"
          >
            <div class="container-fluid">
              <button
                class="btn btn-secondary d-md-none mr-auto mr-2"
                id="menu-toggle"
              >
                &laquo; Menu
              </button>
              <button
                class="navbar-toggler"
                type="button"
                data-toggle="collapse"
                data-target="#navbarSupportedContent"
              >
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Desktop Menu -->
                <ul class="navbar-nav d-none d-lg-flex ml-auto">
                  <li class="nav-item dropdown">
                    <a
                      href="#"
                      class="nav-link"
                      id="navbarDropdown"
                      role="button"
                      data-toggle="dropdown"
                    >
                      <img
                        src="/images/user-pc.png"
                        alt=""
                        class="rounded-circle mr-2 profile-pricture"
                      />
                      Hi, {{ Auth::user()->name }}
                    </a>
                    <div class="dropdown-menu">
                      <a href="{{ route('dashboard') }}" class="dropdown-item"
                        >Dashboard</a
                      >
                      <a href="{{ route('settings') }}" class="dropdown-item"
                        >Setting</a
                      >
                      <div class="dropdown-divider"></div>
                      <a href="/" class="dropdown-item">Logout</a>
                    </div>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link d-inline-block mt-2">
                      <img src="/images/cart2.svg" alt="" />
                      <div class="card-badge">3</div>
                    </a>
                  </li>
                </ul>

                <!-- Mobile -->
                <ul class="navbar-nav d-block d-lg-none">
                  <li class="nav-item">
                    <a href="#" class="nav-link">Hi, {{ Auth::user()->name }}</a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link d-inline-block">Cart</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>

          <!-- Section Content -->
            @yield('content')
        </div>
      </div>
    </div>


    {{-- Footer --}}
    @include('includes.footer')

    {{-- Script --}}
    @stack('prepend-script')
    @include('includes.script')
    @stack('addon-script')
  </body>
</html>
