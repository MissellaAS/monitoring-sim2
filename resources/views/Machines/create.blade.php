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
        }
        .container {
            margin: 30px auto;
            width: 600px;
            background: #0b77a5; /* biru sama dengan background */
            padding: 20px;
            border-radius: 5px; /* sudut tetap membulat */
            position: relative;
        }
        h2 {
            color: black;
            font-weight: bold;
            margin-bottom: 20px;
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
        .btn-submit {
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
    </style>
</head>
<body>
    <!-- Navbar hitam dengan icon -->
    <div class="navbar">
        <i>&#9776;</i>
    </div>

    <!-- Box utama -->
    <div class="container">
        <a href="{{ url()->previous() }}" class="btn-back">BACK</a>
        <h2>ADD NEW MACHINE</h2>

        <form action="{{ route('machines.store') }}" method="POST">
            @csrf
            <label>Machine</label>
            <input type="text" name="machine" required>

            <label>Code Machine</label>
            <input type="text" name="code_machine" required>

            <label>Detail</label>
            <input type="text" name="detail">

            <button type="submit" class="btn-submit">SUBMIT</button>
        </form>
    </div>
</body>
</html>
