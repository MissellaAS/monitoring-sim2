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
  @yield('content')
  <!-- Hero section -->
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
</body>
</html>
