<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css')}}">
    <title>Edit Order</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #13729a;
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
            margin-top: 40px;
        }

        h2 {
            margin top: 20px;
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
            margin-left: 40px;
        }

        .btn-back {
            background-color: #13729a;
            color: white;
            padding: 8px 20px;
            border-radius: 15px;
            text-decoration: none;
            font-weight: bold;
            margin-right: 40px;
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
            background-color: #13729a;
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
            <h2>EDIT Order</h2>
            <a href="{{ route('orders.index') }}" class="btn-back">BACK</a>
        </div>

        <!-- Form Update -->
        <form action="{{ route('orders.update', $order->id) }}" method="POST" class="edit-form">
            @csrf
            @method('PUT')

            <div class="form-box">
                <label for="company">Company</label>
                <input type="text" id="company" name="company" value="{{ $order->company }}" required>

                <label for="product">Product</label>
                <input type="text" id="product" name="product" value="{{ $order->product }}" required>

                <label for="details">Detail</label>
                <input type="text" id="details" name="details" value="{{ $order->details }}" required>

                <label for ="status">Status</label>
                <input type="text" id="status" name="status" value="{{ $order->status }}" required>
            </div>

            <button type="submit" class="btn-update">UPDATE</button>
        </form>
    </div>
</body>
</html>
