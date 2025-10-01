<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
  <title>Vesta Manufacturing - @yield('title')</title>
</head>
<body>
  <!-- Header -->
  <div class="navbar">
    <div class="menu-icon" onclick="toggleMenu()">&#9776;</div> <!-- ikon menu -->
  </div>
  
  <div class="nav-links" id="menu">
    <a href="#">Home</a>
    <a href="{{ route('orders.create') }}">Order List</a>
    <a href="#">Product Customer</a>
    <a href="#">Production Monitoring</a>
    <a href="{{ route('machines.index') }}">Machine Monitoring</a>
  </div>
@yield('content')
  <script>
    function toggleMenu() {
      var menu = document.getElementById("menu");
      menu.style.display = (menu.style.display === "block") ? "none" : "block";
    }
  </script>

</body>
</html>
