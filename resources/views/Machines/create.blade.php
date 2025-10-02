<!DOCTYPE html>
<html>
<head>
    <title>Add New Machine</title>
    <style>
        body {
            background-color: #0b77a5; /* biru tua background */
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .navbar {
            background: black;
            padding: 10px;
        }
        .navbar i {
            color: white;
            font-size: 24px;
            cursor: pointer;
        }
        .nav-links {
            display: none;
            flex-direction: column;
            background: #333;
            padding: 10px;
        }
        .nav-links a {
            color: white;
            padding: 8px;
            text-decoration: none;
        }
        .container {
            margin: 30px auto;
            width: 600px;
            background: #0b77a5;
            padding: 20px;
            border-radius: 5px;
            position: relative;
        }
        h2 {
            color: black;
            font-weight: bold;
            margin-bottom: 20px;
            text-align: center;
        }
        label {
            color: black;
            display: block;
            margin-top: 15px;
            font-weight: normal;
        }
        input, textarea {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: none;
            border-radius: 5px;
        }
        .btn-submit, .submit-btn {
            display: block;
            margin: 20px auto 0 auto;
            background: #4db8ff;
            padding: 10px 25px;
            border: none;
            cursor: pointer;
            border-radius: 20px;
            font-weight: bold;
        }
        .btn-back {
            position: absolute;
            top: 10px;
            right: 10px;
            background: #4db8ff;
            padding: 5px 20px;
            text-decoration: none;
            color: black;
            border-radius: 20px;
            font-weight: bold;
        }
        .alert {
            background: white;
            color: red;
            padding: 10px;
            border-radius: 5px;
            margin-bottom: 15px;
        }
        .status-group {
            margin-top: 15px;
        }
        .status-group label {
            margin-right: 10px;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <div class="navbar" onclick="toggleMenu()">
        <i>&#9776;</i>
    </div>

    <div class="nav-links" id="menu">
        <a href="{{ url('/products') }}">Home</a>
        <a href="{{ route('productions.create') }}">Product Customer</a>
        <a href="{{ route('machines.index') }}">Production Monitoring</a>
    </div>

    <script>
    function toggleMenu() {
        const menu = document.getElementById("menu");
        menu.style.display = (menu.style.display === "flex") ? "none" : "flex";
    }
    </script>

    <div class="container">
        <a href="{{ route('machines.index') }}" class="btn-back">BACK</a>
        <h2>ADD NEW MACHINE</h2>

        <!-- Error message -->
        @if ($errors->any())
            <div class="alert">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- Success message -->
        @if(session('success'))
            <div class="alert" style="color: green;">
                {{ session('success') }}
            </div>
        @endif

        <!-- Form Machine -->
        <form action="{{ route('machines.store') }}" method="POST">
            @csrf
            <label>Machine</label>
            <input type="text" name="machine" required>

            <label>Code Machine</label>
            <input type="text" name="code" required>

            <label>Detail</label>
            <input type="text" name="detail">

            <button type="submit" class="btn-submit">SUBMIT MACHINE</button>
        </form>

        <hr style="margin: 30px 0; border: 1px solid black;">

        <h2>ADD NEW ORDER</h2>
        <!-- Form Order -->
        <form action="{{ route('orders.store') }}" method="POST">
            @csrf
            <label>Company</label>
            <input type="text" name="company" placeholder="Enter company name" required>

            <label>Product</label>
            <input type="text" name="product" placeholder="Enter product name" required>

            <label>Details</label>
            <textarea name="detail" placeholder="Enter details"></textarea>

            <div class="status-group">
                <legend>Status Product</legend>
                <input type="radio" name="status" value="Preparation" id="prep">
                <label for="prep">Preparation</label>

                <input type="radio" name="status" value="Onprocess" id="process">
                <label for="process">On Process</label>

                <input type="radio" name="status" value="Finish" id="finish">
                <label for="finish">Finish</label>
            </div>

            <button type="submit" class="submit-btn">SUBMIT ORDER</button>
        </form>
    </div>
</body>
</html>
