<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{ asset('assets/css/style.css')}}">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  <title>ORDER FORM</title>
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
    

    /* Status aktif */
    .active {
      outline: 3px solid #000;
    }

    /* Confirm Button */
    .submit-btn {
      margin: 40px auto 0 auto;
      display: block;
      padding: 12px 40px;
      background-color: #fff;
      color: #000;
      border-radius: 25px;
      border: none;
      font-weight: bold;
      cursor: pointer;
      transition: 0.2s;
      justify-content: center;
      
      
    }
    .submit-btn:hover {
      background-color: #ddd;
    }
    .pull-right {
      margin: 10px 0;
      text-align: left;
    }

    .btn {
    transition: all 0.2s ease-in-out;
    margin-right: 10px;
    }

    .btn-check:checked + .btn {
    transform: scale(1.05);
    box-shadow: 0 0 10px rgba(0,0,0,0.5);
    font-weight: bold;
    border: 2px solid #000;
    }

    .form-label{
      font-size: 18px;
      font-weight: bold;
      color: #fff;
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
    <a href="{{ route('products.create') }}">Production Monitoring</a>
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
      <h2>ORDER FORM</h2>
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

  <!--Checkbox Pilihan Status-->
    <legend for="pilihan-lomba" class="form-label">Status Product</legend>
    <input type="radio" class="btn-check" name="status" value="Preparation" id="success-outlined" autocomplete="off">
    <label class="btn btn-primary" for="success-outlined">Preparation</label>

    <input type="radio" class="btn-check" name="status"  value="Onprocess" id="option0" autocomplete="off">
    <label class="btn btn-warning" for="option0">On Process</label>
    
    <input type="radio" class="btn-check" name="status" value="Finish" id="option1" autocomplete="off">
    <label class="btn btn-success" for="option1">Finish</label>

    <div class="submit">
      <button type="submit" class="submit-btn">SUBMIT</button>
    </div>
</body>
</html>
