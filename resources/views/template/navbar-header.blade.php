<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Admin</title>
  <!-- Favicon -->
  <!-- Icons -->
  <link href="{{ asset('js/plugins/nucleo/css/nucleo.css') }}" rel="stylesheet" />
  <link href="{{ asset('js/plugins/@fortawesome/fontawesome-free/css/all.min.css') }}" rel="stylesheet" />
  <!-- CSS Files -->
  <link href="{{ asset('css/argon-dashboard.css?v-1.1.2') }}" rel="stylesheet" />
  <link rel="stylesheet" href="{{ asset('css/style_admin.css') }}">

</head>

<body class="">
  <nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white" id="sidenav-main">
    <div class="container-fluid">
      <!-- Toggler -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main"
        aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <!-- Brand -->
      <a class="navbar-brand pt-0" href="./index.html">
        <img src="{{ asset('images/Logo.png') }}" class="navbar-brand-img" alt="...">
      </a>
      <!-- Collapse -->
      <div class="collapse navbar-collapse" id="sidenav-collapse-main">
        <!-- Collapse header -->
        <div class="navbar-collapse-header d-md-none">
          <div class="row">
            <div class="col-6 collapse-brand">
              <a href="./index.html">
                <img src="./assets/img/brand/blue.png">
              </a>
            </div>
            <div class="col-6 collapse-close">
              <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#sidenav-collapse-main"
                aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
                <span></span>
                <span></span>
              </button>
            </div>
          </div>
        </div>
        <!-- Navigation -->
        <ul class="navbar-nav">
          <li class="nav-item ">
            <a class="nav-link {{ Request::is('admin') ? 'active' : '' }}" href=" {{ route('admin.index') }}">
              <i class="ni ni-tv-2 text-black"></i> Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('admin/pempek') ? 'active' : '' }} " href="{{ route('admin.pempek') }}">
              <i class="ni ni-tv-2 text-black"></i> Pempek
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('admin/tekwan') ? 'active' : '' }} " href="{{ route('admin.tekwan') }}">
              <i class="ni ni-tv-2 text-black"></i> Tekwan
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('admin/Mie') ? 'active' : '' }} " href="{{ route('admin.mie') }}">
              <i class="ni ni-tv-2 text-black"></i> Mie
            </a>
          </li>
          <li class="nav-item d-flex justify-content-center align-items-center ">
            <form method="POST" class="" action="{{ route('logout') }}">
              @csrf

              <x-dropdown-link class="btn btn-danger mt-5 justify-content-center " style="width: 200px;" :href="route('logout')"
                      onclick="event.preventDefault();
                                  this.closest('form').submit();">
                  {{ __('Log Out') }}
          </x-dropdown-link>
          </form>
          </li>
        </ul>
        <!-- Navigation -->
      </div>
    </div>
  </nav>
  <div class="main-content">
    <!-- Navbar -->
    
    <!-- End Navbar -->