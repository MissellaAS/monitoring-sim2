<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
  <title>Vesta Manufacturing</title>
</head>
<body>
  <!-- Header -->
  <div class="navbar">
    <div class="menu-icon" onclick="toggleMenu()">&#9776;</div> <!-- ikon menu -->
  </div>
  
  <div class="nav-links" id="menu">
    <a href="#">Home</a>
    <a href="#">Order List</a>
    <a href="#">Product Customer</a>
    <a href="#">Production Monitoring</a>
    <a href="#">Machine Monitoring</a>
  </div>
@yield('content')
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
