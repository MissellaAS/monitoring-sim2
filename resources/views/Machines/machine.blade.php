<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Show Machine Milling</title>
  @vite(['resources/css/style.css'])
</head>
<body>
  <!-- Navbar -->
  <div class="navbar">
    <div class="menu-icon">☰</div>
  </div>

  <div class="container">
    <h1>SHOW MACHINE<br>MILLING</h1>

    <div class="back-btn">
      <button>BACK</button>
    </div>

    <div class="info">
      <div>
        <h3>MACHINE</h3>
        <p>MILLING</p>
      </div>
      <div>
        <h3>CODE</h3>
        <p>BEIJING 1</p>
      </div>
      <div>
        <h3>DETAIL</h3>
        <p>MILLING</p>
      </div>
    </div>

    <div class="product-list">
      <h3>PRODUCT</h3>
      <div class="product-item">
        <span>RING</span>
        <span class="status onprocess">ON PROCESS</span>
      </div>
      <div class="product-item">
        <span>SHAFT</span>
        <span class="status finish">FINISH</span>
      </div>
      <div class="product-item">
        <span>BOLT</span>
        <span class="status prepare">PREPARE</span>
      </div>
      <div class="product-item">
        <span>POCKET</span>
        <span class="status onprocess">ON PROCESS</span>
      </div>
    </div>
  </div>
</body>
</html>
