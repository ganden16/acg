<!doctype html>
<html lang="en" data-pc-preset="preset-1" data-pc-sidebar-caption="true" data-pc-direction="ltr" dir="ltr" data-pc-theme="light">
  <!-- [Head] start -->

  <head>
      <!-- [Meta] -->
      <meta charset="utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui" />
      <link rel="stylesheet" href="{{ asset('assets1/fonts/feather.css') }}" />
      <link rel="stylesheet" href="{{ asset('assets1/fonts/fontawesome.css') }}" />
      <link rel="stylesheet" href="{{ asset('assets1/fonts/material.css') }}" />
      <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600&display=swap" rel="stylesheet" />
      <link rel="stylesheet" href="{{ asset('assets1/fonts/tabler-icons.min.css') }}" />
      <link rel="stylesheet" href={{ asset('assets1/css/style.css') }} id="main-style-link" />
      <link rel="icon" href="{{ asset('assets1/images/logo/acg4.png') }}" type="image/x-icon" />

      <title>@yield('title', 'ACG')</title>

    @vite('resources/css/app.css')
    @yield('link-meta')

  </head>
  <!-- [Head] end -->
  <!-- [Body] Start -->

  <body>
    <!-- [ Pre-loader ] start -->
<div class="loader-bg fixed inset-0 bg-white dark:bg-themedark-cardbg z-[1034]">
  <div class="loader-track h-[5px] w-full inline-block absolute overflow-hidden top-0">
    <div class="loader-fill w-[300px] h-[5px] bg-primary-500 absolute top-0 left-0 animate-[hitZak_0.6s_ease-in-out_infinite_alternate]"></div>
  </div>
</div>
<!-- [ Pre-loader ] End -->
 <!-- [ Sidebar Menu ] start -->
<nav class="pc-sidebar">
  <div class="navbar-wrapper">
    <a href="{{ route('home') }}" class="">
        <img src="{{ asset('assets1/images/acg-1.png') }}" class="w-30 mt-5" alt="logo" />
    </a>
    <div class="navbar-content h-[calc(100vh_-_74px)] py-2.5">
      <ul class="pc-navbar">
        <li class="pc-item pc-caption">
          <label></label>
        </li>
        <li class="pc-item">
        <li class="pc-item">
          <a href="/dashboard" class="pc-link">
            <span class="pc-micon">
              <i data-feather="home"></i>
            </span>
            <span class="pc-mtext">Dashboard</span>
          </a>
        </li>
        <li class="pc-item">
          <a href="/dashboard/blog" class="pc-link">
            <span class="pc-micon">
              <i data-feather="file-text"></i>
            </span>
            <span class="pc-mtext">Blog</span>
          </a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- [ Sidebar Menu ] end -->
 <!-- [ Header Topbar ] start -->
<header class="pc-header">
  <div class="header-wrapper flex max-sm:px-[15px] px-[25px] grow"><!-- [Mobile Media Block] start -->
<div class="me-auto pc-mob-drp">
  <ul class="inline-flex *:min-h-header-height *:inline-flex *:items-center">
    <!-- ======= Menu collapse Icon ===== -->
    <li class="pc-h-item pc-sidebar-collapse max-lg:hidden lg:inline-flex">
      <a href="#" class="pc-head-link ltr:!ml-0 rtl:!mr-0" id="sidebar-hide">
        <i data-feather="menu"></i>
      </a>
    </li>
    <li class="pc-h-item pc-sidebar-popup lg:hidden">
      <a href="#" class="pc-head-link ltr:!ml-0 rtl:!mr-0" id="mobile-collapse">
        <i data-feather="menu"></i>
      </a>
    </li>
  </ul>
</div>
<!-- [Mobile Media Block end] -->
<div class="ms-auto">
  <ul class="inline-flex *:min-h-header-height *:inline-flex *:items-center">
    {{-- <li class="dropdown pc-h-item">
      <a class="pc-head-link dropdown-toggle me-0" data-pc-toggle="dropdown" href="#" role="button"
        aria-haspopup="false" aria-expanded="false">
        <i data-feather="sun"></i>
      </a>
      <div class="dropdown-menu dropdown-menu-end pc-h-dropdown">
        <a href="#!" class="dropdown-item" onclick="layout_change('dark')">
          <i data-feather="moon"></i>
          <span>Dark</span>
        </a>
        <a href="#!" class="dropdown-item" onclick="layout_change('light')">
          <i data-feather="sun"></i>
          <span>Light</span>
        </a>
      </div>
    </li> --}}
    <li class="dropdown pc-h-item header-user-profile">
      <a class="pc-head-link dropdown-toggle arrow-none me-0" data-pc-toggle="dropdown" href="#" role="button"
        aria-haspopup="false" data-pc-auto-close="outside" aria-expanded="false">
        <i data-feather="user"></i>
      </a>
      <div class="dropdown-menu dropdown-user-profile dropdown-menu-end pc-h-dropdown p-2 overflow-hidden">
        <div class="dropdown-header flex items-center justify-between py-4 px-5 bg-primary-500">
          <div class="flex mb-1 items-center">
            <div class="shrink-0">
              <a href="{{ route('home') }}" class="">
                <img src="{{ asset('assets1/images/user/avatar-2.jpg') }}" alt="user-image" class="w-10 rounded-full" />
              </a>
            </div>
            <div class="grow ms-3">
              <h6 class="mb-1 text-white">{{ auth()->user()->username }}</h6>
              {{-- <span class="text-white">name</span> --}}
            </div>
          </div>
        </div>
        <div class="dropdown-body py-4 px-5">
          <div class="profile-notification-scroll position-relative" style="max-height: calc(100vh - 225px)">
            {{-- <a href="#" class="dropdown-item">
              <span>
                <svg class="pc-icon text-muted me-2 inline-block">
                  <use xlink:href="#custom-setting-outline"></use>
                </svg>
                <span>Settings</span>
              </span>
            </a>
            <a href="#" class="dropdown-item">
              <span>
                <svg class="pc-icon text-muted me-2 inline-block">
                  <use xlink:href="#custom-share-bold"></use>
                </svg>
                <span>Share</span>
              </span>
            </a> --}}
            <a href="{{ route('dashboard.change-password') }}" class="dropdown-item">
              <span>
                <svg class="pc-icon text-muted me-2 inline-block">
                  <use xlink:href="#custom-lock-outline"></use>
                </svg>
                <span>Change Password</span>
              </span>
            </a>
            <div class="grid my-3">
              <button onclick="logout()" class="btn btn-primary flex items-center justify-center">
                <svg class="pc-icon me-2 w-[22px] h-[22px]">
                  <use xlink:href="#custom-logout-1-outline"></use>
                </svg>
                Logout
              </button>
            </div>
          </div>
        </div>
      </div>
    </li>
  </ul>
</div>
</div>
</header>
<!-- [ Header ] end -->

    <!-- [ Main Content ] start -->
   <div class="pc-container">
      <div class="pc-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
          <div class="page-block">
            {{-- <div class="page-header-title">
              <h5 class="mb-0 font-medium">Default</h5>
            </div> --}}
            <ul class="breadcrumb">
              @yield('li-breadcrumb')
            </ul>
          </div>
        </div>
        <!-- [ breadcrumb ] end -->

        <!-- [ Main Content ] start -->
        @yield('content')
        <!-- [ Main Content ] end -->
      </div>
</div>
    <!-- [ Main Content ] end -->
    <footer class="pc-footer">
      <div class="footer-wrapper container-fluid mx-10">
        <div class="grid grid-cols-12 gap-1.5">
          <div class="col-span-12 sm:col-span-6 my-1">
            {{-- <p class="m-0"></p>
              <a href="https://codedthemes.com/" class="text-theme-bodycolor dark:text-themedark-bodycolor hover:text-primary-500 dark:hover:text-primary-500" target="_blank">CodedThemes</a>
              , Built with ♥ for a smoother web presence.
            </p>
          </div>
          <div class="col-span-12 sm:col-span-6 my-1 justify-self-end">
            <p class="inline-block max-sm:mr-3 sm:ml-2">Distributed by <a href="https://themewagon.com" target="_blank">Themewagon</a></p>
          </div> --}}
        </div>
      </div>
    </footer>

    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
        @method('DELETE')
    </form>

    <!-- Required Js -->
    <script src="{{ asset('assets1/js/plugins/simplebar.min.js') }}"></script>
    <script src="{{ asset('assets1/js/plugins/popper.min.js') }}"></script>
    <script src="{{ asset('assets1/js/icon/custom-icon.js') }}"></script>
    <script src="{{ asset('assets1/js/plugins/feather.min.js') }}"></script>
    <script src="{{ asset('assets1/js/component.js') }}"></script>
    <script src="{{ asset('assets1/js/theme.js') }}"></script>
    <script src="{{ asset('assets1/js/script.js') }}"></script>
    @yield('js')

    <div class="floting-button fixed bottom-[50px] right-[30px] z-[1030]">
    </div>

    <script>
      layout_change('false');
    </script>


    <script>
      layout_theme_sidebar_change('dark');
    </script>


    <script>
      change_box_container('false');
    </script>

    <script>
      layout_caption_change('true');
    </script>

    <script>
      layout_rtl_change('false');
    </script>

    <script>
      preset_change('preset-1');
    </script>

    <script>
    //   main_layout_change('vertical');
    </script>


  </body>
  <script>
    function logout() {
        if (confirm('Are you sure you want to logout?')) {
            const logoutForm = document.getElementById('logout-form');
            if (logoutForm) {
                logoutForm.submit();
            } else {
                alert('An error occurred. Please try again.');
            }
        }
    }
    </script>
</html>
