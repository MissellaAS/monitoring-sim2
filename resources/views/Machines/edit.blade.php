<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css')}}">
    <title>Edit Machine</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #0e6aa8;
            color: white;
        }

        .navbar {
            background: black;
            padding: 10px;
        }
        .navbar i {
            color: white;
            font-size: 24px;
        }

        .edit-container {
            padding: 30px;
            min-height: 100vh;
            margin: 30px;
        }

        h2 {
            margin-top: 20px;
        }

        /* Header dan tombol back */
        .edit-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 25px;
        }

        .edit-header h2 {
            font-weight: bold;
        }

        .btn-back {
            background-color: #2ea8ff;
            color: white;
            padding: 8px 20px;
            border-radius: 15px;
            text-decoration: none;
            font-weight: bold;
        }

        .btn-back:hover {
            background-color: #007acc;
        }

        /* Box form */
        .edit-form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .form-box {
            background-color: #0e6aa8;
            border: 2px solid black;
            padding: 20px;
            border-radius: 5px;
            width: 50%;
        }

        .form-box label {
            display: block;
            margin-top: 10px;
            font-weight: bold;
        }

        .form-box input {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            margin-bottom: 15px;
            border-radius: 5px;
            border: none;
        }

        /* Tombol update */
        .btn-update {
            background-color: #2ea8ff;
            color: white;
            font-weight: bold;
            padding: 10px 25px;
            border-radius: 15px;
            border: none;
            cursor: pointer;
            margin-top: 20px;
        }

        .btn-update:hover {
            background-color: #007acc;
        }
    </style>
</head>
<body>
    <div class="navbar">
        <span class="menu-icon" onclick="toggleMenu()">&#9776;</span>
    </div>

    <div class="nav-links" id="menu">
        <a href="{{ url('/products') }}">Home</a>
        <a href="#">Product Customer</a>
        <a href="#">Production Monitoring</a>
    </div>

    <script>
    function toggleMenu() {
      const menu = document.getElementById("menu");
      menu.style.display = (menu.style.display === "flex") ? "none" : "flex";
    }
    </script>

    <div class="edit-container">
        <div class="edit-header">
            <h2>EDIT MACHINE</h2>
            <a href="{{ route('machines.index') }}" class="btn-back">BACK</a>
        </div>

        <!-- Form Update -->
        <form action="{{ route('machines.update', $machine->id) }}" method="POST" class="edit-form">
            @csrf
            @method('PUT')

            <div class="form-box">
                <label for="machine">Machine</label>
                <input type="text" id="machine" name="machine" value="{{ $machine->machine }}" required>

                <label for="code">Code Machine</label>
                <input type="text" id="code" name="code" value="{{ $machine->code }}" required>

                <label for="detail">Detail</label>
                <input type="text" id="detail" name="detail" value="{{ $machine->detail }}" required>
            </div>

            <button type="submit" class="btn-update">UPDATE</button>
        </form>
    </div>
</body>
</html>
