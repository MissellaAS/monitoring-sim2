<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{ asset('assets/css/style.css')}}">
  <title>Machines Monitoring</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
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
      padding: 10px;
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

    /* Container */
    .container {
      margin-top: 30px;
    }

    h2 {
      font-weight: bold;
      margin-bottom: 20px;
    }

    /* Buttons */
    .btn-custom {
      border-radius: 25px;
      font-weight: bold;
      padding: 6px 20px;
      border: none;
      transition: 0.2s;
    }
    .btn-custom:hover {
      opacity: 0.9;
      transform: scale(1.05);
    }
    .btn-add {
      background-color: #f1c40f;
      color: #000;
    }
    .btn-back {
      background-color: #fff;
      color: #000;
      border-radius: 25px;
      font-weight: bold;
      padding: 6px 25px;
    }

    /* Table */
    .table {
      border-collapse: separate;
      border-spacing: 10px 15px;
      width: 100%;
    }
    .table th, .table td {
      background: #fff;
      border-radius: 20px;
      text-align: center;
      vertical-align: middle;
      padding: 15px;
    }
    .table th {
      font-weight: bold;
    }

    /* Action Buttons */
    .btn-show { background-color: #2ecc71; color: white; }
    .btn-edit { background-color: #f1c40f; color: #000; }
    .btn-delete { background-color: #e74c3c; color: white; }

    /* Status Buttons */
    .btn-status {
      border-radius: 25px;
      font-weight: bold;
      padding: 6px 15px;
      margin: 0 3px;
    }
    .status-prep { background-color: #2ecc71; color: white; }
    .status-process { background-color: #f1c40f; color: #000; }
    .status-finish { background-color: #e74c3c; color: white; }
  </style>
</head>
<body>
  <!-- Navbar -->
  <div class="navbar">
    <span class="menu-icon" onclick="toggleMenu()">&#9776;</span>
  </div>

  <div class="nav-links" id="menu">
    <a href="{{ url('/productions') }}">Home</a>
    <a href="{{ route('orders.create') }}">Order List</a>
    <a href="#">Production Monitoring</a>
  </div>

  <script>
    function toggleMenu() {
      const menu = document.getElementById("menu");
      menu.style.display = (menu.style.display === "flex") ? "none" : "flex";
    }
  </script>


  <!-- Content -->
  <div class="container">
    <div class="d-flex justify-content-between align-items-center mb-4">
      <h2>MACHINES MONITORING</h2>
      <a href="{{ url('/productions') }}" class="btn btn-back">BACK</a>
    </div>

    <div class="mb-3">
      <a href="{{ route('machines.create') }}" class="btn btn-custom btn-add">Add New Machine</a>
    </div>

    <table class="table">
      <thead>
        <tr>
          <th>ID</th>
          <th>MACHINE</th>
          <th>CODE MACHINE</th>
          <th>DETAIL</th>
          <th>STATUS</th>
        </tr>
      </thead>
      <tbody>
        @foreach($machines as $machine)
        <tr>
          <td>{{ $machine->id }}</td>
          <td>{{ $machine->machine }}</td>
          <td>{{ $machine->code }}</td>
          <td>{{ $machine->detail }}</td>
          <td>
            <a href="{{ route('machines.show',$machine->id) }}" class="btn btn-custom btn-show">SHOW</a>
            <a href="{{ route('machines.edit',$machine->id) }}" class="btn btn-custom btn-edit">EDIT</a>
            <form action="{{ route('machines.destroy',$machine->id) }}" method="POST" style="display:inline;">
              @csrf
              @method('DELETE')
              <button type="submit" class="btn btn-custom btn-delete">DELETE</button>
            </form>
          </td>
        </tr>
       @endforeach
      </tbody>
    </table>
  </div>
</body>
</html>

