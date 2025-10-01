<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
  <title>Vesta Manufacturing - @yield('title')</title>
</head>
<body>
  <!-- Navbar -->
  <div class="navbar">
    <div class="menu-icon" onclick="toggleMenu()">&#9776;</div>
  </div>

  <!-- Menu navigasi (disembunyikan dulu) -->
  <div class="nav-links" id="menu">
    <a href="{{ url('/product') }}">Home</a>
    <a href="{{ route('orders.index') }}">Order List</a>
    <a href="{{ route('products.create') }}">Production Monitoring</a>
    <a href="{{ route('machines.index') }}">Machine Monitoring</a>
  </div>
@yield('content')
  <script>
    function toggleMenu() {
      var menu = document.getElementById("menu");
      menu.style.display = (menu.style.display === "block") ? "none" : "block";
    }
  </script>

  <!-- Hero Section -->
  <div class="hero">
    <div class="hero-text">
      <h2>Vesta</h2>
      <h1>Manufacturing</h1>
      <p>
        MANUFACTURING COMPANY ENGAGED <br>
        IN THE MANUFACTURE <br>
        OF INDUSTRIAL MACHINE PARTS
      </p>
    </div>
  </div>
<script>
  function toggleMenu() {
    const menu = document.getElementById("menu");
    if (menu.style.display === "flex") {
      menu.style.display = "none";
    } else {
      menu.style.display = "flex";
    }
  }
</script>


</body>

</html>



