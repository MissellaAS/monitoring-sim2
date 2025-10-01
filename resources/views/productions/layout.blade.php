<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{ asset('assets/css/style.css')}}">
  <title>Vesta Manufacturing</title>
 
</head>
<body>
  <!-- Header -->
  <div class="navbar">
    <div class="menu-icon">&#9776;</div> <!-- ikon menu -->
  </div>

  <!-- Menu navigasi (disembunyikan dulu) -->
  <div class="nav-links" id="menu">
    <a href="#">Home</a>
    <a href="{{ route('orders.create') }}">Order List</a>
    <a href="#">Product Customer</a>
    <a href="{{ route('productions.index')}}">Production Monitoring</a>
    <a href="{{ route('machines.index') }}">Machine Monitoring</a>
  </div>
  <script >
    // Fungsi untuk toggle menu
    function toggleMenu() {
      var menu = document.getElementById("menu");
      if (menu.style.display === "block") {
        menu.style.display = "none";
      } else {
        menu.style.display = "block";
      }
    }

    // Event listener untuk ikon menu
    document.querySelector('.menu-icon').addEventListener('click', toggleMenu);
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

<main>
  @yield('sectiom')
</main>

</body>
</html>
