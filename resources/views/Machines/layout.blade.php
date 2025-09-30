<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
  <title>Vesta Manufacturing</title>
</head>
<body class="bg-info">

  <!-- Header / Navbar -->
  <div class="navbar bg-dark text-white p-3 d-flex justify-content-between align-items-center">
    <div class="menu-icon fs-3" onclick="toggleMenu()">&#9776;</div> <!-- ikon menu -->
  </div>

  <!-- Sidebar Menu -->
  <div class="nav-links bg-dark text-white p-3" id="menu" style="display:none;">
    <a href="#" class="d-block text-white text-decoration-none mb-2">Home</a>
    <a href="#" class="d-block text-white text-decoration-none mb-2">Order List</a>
    <a href="#" class="d-block text-white text-decoration-none mb-2">Product Customer</a>
    <a href="#" class="d-block text-white text-decoration-none mb-2">Production Monitoring</a>
    <a href="#" class="d-block text-white text-decoration-none">Machine Monitoring</a>
  </div>

  <!-- Main Content -->
  <div class="container py-4">
    @yield('content')
  </div>

  <script>
  function toggleMenu() {
    var menu = document.getElementById("menu");
    if (menu.style.display === "block") {
      menu.style.display = "none";
    } else {
      menu.style.display = "block";
    }
  }
  </script>
</body>
</html>
