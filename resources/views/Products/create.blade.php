<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{ asset('assets/css/style.css')}}">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  <title>ADD NEW PRODUCTION</title>

  <style>
    body {
      margin: 0;
      font-family: Arial, sans-serif;
      background-color: #13729a;
      color: #000;
    }

    .navbar {
      background-color: #000;
      color: #fff;
      padding: 5px;
      
    }

    .menu-icon {
      font-size: 24px;
      cursor: pointer;
      margin-left: 5px;
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

    .container {
      padding: 20px;
      text-align: center;
    }

    h2 {
      font-size: 32px;
      font-weight: bold;
      text-transform: uppercase;
      text-align: left;
      padding-top: 20px;
    }

    .btn-back {
      margin: 10px 0;
      text-align: left;

    }

    .btn-back a {
      display: inline-block;
      padding: 10px 20px;
      border-radius: 30px;
      background-color: white;
      color: black;
      font-weight: bold;
      text-decoration: none;
    }

    .form-section {
      margin: 20px auto;
      max-width: 1200px;
      text-align: left;
    }

    .form-group {
      margin-bottom: 20px;
      width: 100%;
    }

    label {
      font-weight: bold;
      display: block;
      margin-bottom: 5px;
    }

    input, select {
      width: 100%;
      padding: 10px;
      border-radius: 10px;
      border: 1px solid #ccc;
    }

    button {
      padding: 12px 30px;
      border-radius: 30px;
      border: none;
      background-color: #3ab4ff;
      color: black;
      font-weight: bold;
      cursor: pointer;
    }

    .submit {
      text-align: center;
      margin-top: 40px;
    }
  </style>
</head>

<body>
  {{-- Nav bar --}}
  <div class="navbar">
    <div class="menu-icon" onclick="toggleMenu()">&#9776;</div>
  </div>

  <div class="nav-links" id="menu">
    <a href="{{ url('/products') }}">Home</a>
    <a href="{{ route('orders.create') }}">Order List</a>
  </div>

  {{-- Form --}}
  <div class="container">
    <h2>ADD NEW PRODUCTION</h2>

    <div class="btn-back">
      <a href="{{ route('products.index') }}">BACK</a>
    </div>

    <div class="form-section">
      <form action="{{ route('products.store') }}" method="POST">
        @csrf

        <div class="form-group">
          <label for="company">Machine</label>
          <select name="machine_id" class="form-control">
            <option value="">Select Machine</option>
            @foreach($machines as $machine)
            <option value="{{ $machine_id }}">{{  $machine->name }}</option>
            @endforeach
          </select>
        </div>

        <div class="form-group">
          <label for="product">Product</label>
          <select name="product_id" class="form-control">
            <option value="">Select Product</option>
            @foreach($products as $product)
            <option value="{{ $product->id }}">{{  $product->name }}</option>
            @endforeach
          </select>
        </div>
        <div class=submit>
          <button type="submit">SUBMIT</button>
        </div>
      </form>
    </div>
  </div>

  <script>
    function toggleMenu() {
      const menu = document.getElementById("menu");
      menu.style.display = (menu.style.display === "flex") ? "none" : "flex";
    }
  </script>
</body>
</html>
