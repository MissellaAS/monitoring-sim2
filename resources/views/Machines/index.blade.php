<!DOCTYPE html>
<html>
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

        /* Top action bar */
        .top-bar {
            width: 90%;
            margin: 0 auto 20px auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .btn {
            padding: 10px 20px;
            border-radius: 25px;
            font-weight: bold;
            text-decoration: none;
            border: none;
            cursor: pointer;
        }
        .btn-add {
            background: gold;
            color: black;
        }
        .btn-back {
            background: white;
            color: black;
        }
        .btn:hover {
            opacity: 0.9;
        }

        /* Success message */
        .alert-success {
            background: #fff;
            color: green;
            padding: 10px;
            border-radius: 5px;
            margin: 15px auto;
            width: 80%;
            text-align: center;
            font-weight: bold;
        }

        /* Table style */
        table {
            width: 90%;
            margin: 0 auto 30px auto;
            border-collapse: separate;
            border-spacing: 0 12px;
        }
        table th, table td {
            padding: 15px;
            text-align: center;
        }
        table th {
            background: #0b77a5;
            color: white;
            border-radius: 12px 12px 0 0;
        }
        table tr {
            background: white;
            border-radius: 12px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        table td {
            border-top: 1px solid #eee;
        }

        /* Action buttons */
        .action-btn {
            display: inline-block;
            padding: 6px 15px;
            margin: 2px;
            border-radius: 15px;
            font-weight: bold;
            text-decoration: none;
            cursor: pointer;
            border: none;
        }
        .btn-edit {
            background: #f1c40f;
            color: black;
        }
        .btn-delete {
            background: #e74c3c;
            color: white;
        }
        .btn-edit:hover, .btn-delete:hover {
            opacity: 0.85;
        }

        /* Status buttons */
        .btn-status {
            border-radius: 20px;
            padding: 6px 15px;
            font-weight: bold;
            border: none;
            margin: 2px;
            cursor: pointer;
        }
        .status-prep {
            background: #2ecc71;
            color: white;
        }
        .status-process {
            background: #f1c40f;
            color: black;
        }
        .status-finish {
            background: #e74c3c;
            color: white;
        }
    </style>
</head>
<body>
<<<<<<< HEAD

    <!-- Header -->
    <div class="header">MACHINES MONITORING</div>

    <!-- Top bar with buttons -->
    <div class="top-bar">
        <a href="{{ route('machines.create') }}" class="btn btn-add">+ Add New Machine</a>
        <a href="/" class="btn btn-back">Back</a>
=======
  <!-- Navbar -->
  <div class="navbar">
    <span class="menu-icon" onclick="toggleMenu()">&#9776;</span>
  </div>

  <div class="nav-links" id="menu">
    <a href="{{ url('/products') }}">Home</a>
    <a href="{{ route('orders.create') }}">Order List</a>
    <a href="#">Product Customer</a>
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
      <a href="{{ url('/products') }}" class="btn btn-back">BACK</a>
>>>>>>> 0b50313b0b23c7561ca702a4c19f919dc3fa5009
    </div>

    <!-- Success message -->
    @if(session('success'))
        <div class="alert-success">
            {{ session('success') }}
        </div>
    @endif

    <!-- Table -->
    <table>
    <thead>
        <tr>
<<<<<<< HEAD
            <th>ID</th>
            <th>Machine</th>
            <th>Code</th>
            <th>Detail</th>
            <th>Status</th>
            <th>Action</th>
=======
          <th>ID</th>
          <th>MACHINE</th>
          <th>CODE MACHINE</th>
          <th>DETAIL</th>
          <th>STATUS</th>
          <th>ACTION</th>
>>>>>>> 0b50313b0b23c7561ca702a4c19f919dc3fa5009
        </tr>
    </thead>
    <tbody>
        @forelse($machines as $machine)
            <tr>
                <td>{{ $machine->id }}</td>
                <td>{{ $machine->machine }}</td>
                <td>{{ $machine->code }}</td>
                <td>{{ $machine->detail }}</td>
                <td>
                    @if($machine->status == 'Preparation')
                        <span style="color: blue; font-weight: bold;">Preparation</span>
                    @elseif($machine->status == 'On Process')
                        <span style="color: orange; font-weight: bold;">On Process</span>
                    @elseif($machine->status == 'Finish')
                        <span style="color: green; font-weight: bold;">Finish</span>
                    @else
                        <span>-</span>
                    @endif
                </td>
                <td>
                    <a href="{{ route('machines.edit', $machine->id) }}" class="action-btn">Edit</a>
                    <form action="{{ route('machines.destroy', $machine->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="action-btn" style="background:red; color:white;">Delete</button>
                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="6">No machines found.</td>
            </tr>
        @endforelse
    </tbody>
</table>


</body>
</html>
