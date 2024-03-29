<!DOCTYPE html>
<html lang="en">

<head>
    @yield('content')
    @include('layout.partial.css')
</head>

<body class="g-sidenav-show   bg-gray-100">
    @include('layout.partial.sidebar')
    @include('layout.partial.header')
    <!-- End Navbar -->
    @include('layout.partial.body')
    @include('layout.partial.footer')
    @include('layout.partial.setting')
  <!--   Core JS Files   -->
    @include('layout.partial.script')
</body>

</html>