<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Vesta Manufacturing</title>
  <style>
    body, html {
      margin: 0;
      padding: 0;
      height: 100%;
      font-family: Arial, sans-serif;
    }

    /* Header hitam */
    .navbar {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 50px;
      background-color: black;
      display: flex;
      align-items: center;
      padding: 0 20px;
      z-index: 2;
    }

    .menu-icon {
      font-size: 24px;
      color: white;
      cursor: pointer;
    }

    /* Background gedung */
    .hero {
      height: 100vh;
      background: url("https://media-public.canva.com/gvGO0/MAEYOOgvGO0/1/s.jpg") no-repeat center center;
      background-size: cover;
      position: relative;
      color: white;
    }

    /* Teks di kanan */
    .hero-text {
      position: absolute;
      top: 30%;
      right: 5%;
      text-align: right;
    }

    .hero-text h1 {
      font-size: 50px;
      margin: 0;
    }

    .hero-text h2 {
      font-size: 30px;
      margin: 0;
      font-weight: bold;
    }

    .hero-text p {
      font-size: 14px;
      margin-top: 10px;
      line-height: 1.5;
      letter-spacing: 1px;
    }
  </style>
</head>
<body>
  <!-- Header -->
  <div class="navbar">
    <div class="menu-icon">&#9776;</div> <!-- ikon menu -->
  </div>

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
