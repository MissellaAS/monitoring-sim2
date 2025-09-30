<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{ asset('assets/css/style.css')}}">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  <title>ADD NEW PRODUCTION</title>
  

  <title>Order List</title>
  <style>
    body {
      margin: 0;
      font-family: Arial, sans-serif;
      background-color: #13729a;
      color: #000;
    }

    /* Navbar */
    .navbar {
      background-color: #000;
      color: #fff;
      padding: 5px;
    }
    .menu-icon {
      font-size: 24px;
      cursor: pointer;
      margin-left: 20px;
    }
    .nav-links {
      display: none;
      flex-direction: column;
      background-color: #000;
      padding: 10px;
    }
    .nav-links a {
      color: white;
      text-decoration: none;
      padding: 5px 0;
    }
    .nav-links a:hover {
      background-color: #333;
    }

    /* Container */
    .container {
      max-width: 960px; 
      width: 90%;        
      margin: 50px auto;
      border-radius: 15px;
      padding: 30px;
    }

    /* Title */
    .form-title {
      font-size: 36px;
      font-weight: bold;
      color: #000;
      text-align: center;
      margin-bottom: 30px;
    }

    /* Flex Wrapper */
    .form-wrapper {
      display: flex;
      justify-content: space-between;
      align-items: flex-start;
      gap: 50px;
      display: flex;
      justify-content: space-between;
      padding: 40px;
    }

    /* Left Section */
    .form-section {
      flex: 1;
    }
    .form-section h2 {
      font-weight: bold;
      margin-bottom: 25px;
      color: #000;
    }
    .form-group {
      margin-bottom: 20px;
    }
    label {
      display: block;
      margin-bottom: 8px;
      font-weight: bold;
      color: #fff;
    }
    input, textarea {
      width: 80%;
      padding: 12px;
      border-radius: 10px;
      border: none;
      font-size: 14px;
    }
    textarea {
      height: 120px;
      resize: none;
    }

    /* Right Section */
    .status-section {
      width: 250px;
      text-align: center;
    }
    .status-section h3 {
      margin-bottom: 25px;
      font-weight: normal;
      color: #000;
    }
    .status-btn {
      display: block;
      margin: 15px auto;
      padding: 12px 35px;
      border-radius: 25px;
      border: none;
      font-weight: bold;
      cursor: pointer;
      transition: 0.2s;
    }
    .status-btn:hover {
      opacity: 0.9;
      transform: scale(1.05);
    }
    .red { background-color: #e74c3c; color: white; }
    .yellow { background-color: #f1c40f; color: #000; }
    .green { background-color: #2ecc71; color: white; }

    /* Status aktif */
    .active {
      outline: 3px solid #000;
    }

    /* Confirm Button */
    .confirm-btn {
      margin-top: 40px;
      padding: 12px 40px;
      background-color: #fff;
      color: #000;
      border-radius: 25px;
      border: none;
      font-weight: bold;
      cursor: pointer;
      transition: 0.2s;
    }
    .confirm-btn:hover {
      background-color: #ddd;
    }
    .pull-right {
      margin: 10px 0;
      text-align: left;
    }
  </style>
</head>
<body>
  <!-- Navbar -->
  <div class="navbar">
    <span class="menu-icon" onclick="toggleMenu()">&#9776;</span>
  </div>

  <div class="nav-links" id="menu">
    <a href="{{ url('/products') }}">Home</a>
    <a href="#">Product Customer</a>
    <a href="#">Production Monitoring</a>
    <a href="{{ route('machines.index') }}">Machine Monitoring</a>
  </div>

  <script>
    function toggleMenu() {
      const menu = document.getElementById("menu");
      menu.style.display = (menu.style.display === "flex") ? "none" : "flex";
    }
  </script>

  <!-- Content -->
  <div class="container">
    <!-- Left: Form -->
    <div class="form-section">
      <h2>Order List</h2>
      <div class="pull-right">
        <a class="btn btn-primary" href="{{ route('products.index') }}"> Back</a>
      </div>
    </div>

<form action="{{ route('products.store') }}" method="POST">
    @csrf

    <div> 
      <div class="form-group">
        <label>Company</label>
        <input type="text" id="company" placeholder="Enter company name">
      </div>
      <div class="form-group">
        <label>Product</label>
        <input type="text" id="product" placeholder="Enter product name">
      </div>
      <div class="form-group">
        <label>Details</label>
        <textarea id="details" placeholder="Enter details"></textarea>
      </div>
    </div>

    <!-- Right: Status -->
    <div class="status-section">
      <h3>Status Product</h3>
      <button class="status-btn red" name="preparation" value="preparation" for="option0">Preparation</button>
      <button class="status-btn yellow" name="onprocess" value="onprocess" for="option1">On Process</button>
      <button class="status-btn green" name="finish" value="finish" for="option2">Finish</button>

      <button class="confirm-btn">CONFIRM</button>
    </div>
  </div>

  <script>
    // Pilih semua tombol status
    const statusButtons = document.querySelectorAll('.status-btn');
    let selectedStatus = null;

    // Tambahkan event listener untuk tiap tombol status
    statusButtons.forEach(button => {
      button.addEventListener('click', () => {
        // Hapus kelas aktif dari semua tombol
        statusButtons.forEach(btn => btn.classList.remove('active'));
        // Tambah kelas aktif ke tombol yang diklik
        button.classList.add('active');
        selectedStatus = button.textContent;
      });
    });

    // Event untuk tombol confirm
    document.querySelector('.confirm-btn').addEventListener('click', () => {
      const company = document.getElementById('company').value;
      const product = document.getElementById('product').value;
      const details = document.getElementById('details').value;

      if (!company || !product || !details) {
        alert("Harap isi semua form sebelum konfirmasi!");
        return;
      }

      if (!selectedStatus) {
        alert("Harap pilih status produk terlebih dahulu!");
        return;
      }

      alert(
        "Order Confirmed!\n\n" +
        "Company: " + company + "\n" +
        "Product: " + product + "\n" +
        "Details: " + details + "\n" +
        "Status: " + selectedStatus
      );
    });
  </script>
</body>
</html>
