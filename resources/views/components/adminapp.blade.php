<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    {{-- Css Bootstrap --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ URL::asset('css/sidebar.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css" rel="stylesheet" />
</head>
<body>
    <div id="adminapp">
        <!-- Side-Nav -->
<div class="side-navbar active-nav d-flex justify-content-between flex-wrap flex-column" id="sidebar">
    <ul class="nav flex-column text-white w-100">
      <h2 class="nav-link h3 text-white my-2">
        Menu Admin
      </h2>
      <a href="{{route('user.home')}}" class="nav-link">
        <i class="bx bxs-dashboard"></i>
        <span class="mx-2">Users</span>
      </a>
      <a href="{{route('category.home')}}" class="nav-link">
        <i class="bx bx-user-check"></i>
        <span class="mx-2">Categories</span>
      </a>
      <a href="{{route('product.home')}}" class="nav-link">
        <i class="bx bx-conversation"></i>
        <span class="mx-2">Products</span>
      </a>
      <a href="{{route('order.home')}}" class="nav-link">
        <i class="bx bx-conversation"></i>
        <span class="mx-2">Orders</span>
      </a>
    </ul>
  </div>

  <!-- Main Wrapper -->
  <div class="p-1 my-container active-cont">
    <!-- Top Nav -->
    <nav class="navbar top-navbar navbar-light bg-light px-5">
      <a class="btn border-0" id="menu-btn"><i class="bx bx-menu"></i></a>
    </nav>
    <main class="py-4">
        {{$slot}}
    </main>
  </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <script src="{{ URL::asset('js/sidebar.js') }}"></script>
</body>
</html>
