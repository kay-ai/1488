<!DOCTYPE html>
<html lang="en">

<head>
  @include('partials.header-links')
</head>

<body class="fine-scrollbar">
    <!-- ======= Mobile nav toggle button ======= -->
    <i class="bi bi-list mobile-nav-toggle d-lg-none"></i>

    @yield('header')
    @yield('content')
    @include('partials.footer')
</body>

</html>
