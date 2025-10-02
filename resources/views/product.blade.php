<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Product Customer</title>
  <style>
    body {
      margin: 0;
      font-family: Arial, sans-serif;
      background: #0c7db1;
      color: #000;
    }

    .container {
      padding: 20px;
    }

    h2 {
      color: white;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 20px;
    }

    th, td {
      text-align: center;
      padding: 15px;
      background: white;
      border-radius: 15px;
    }

    th {
      background: white;
      font-weight: bold;
    }

    .status {
      padding: 8px 15px;
      border-radius: 20px;
      color: white;
      font-weight: bold;
      margin: 3px;
      display: inline-block;
    }

    .preparation {
      background: red;
    }

    .process {
      background: orange;
    }

    .finish {
      background: green;
    }

    .back-btn {
      margin-top: 20px;
      padding: 10px 20px;
      border: none;
      background: white;
      border-radius: 20px;
      cursor: pointer;
      font-weight: bold;
    }
  </style>
</head>
<body>
  <div class="container">
    <h2>Product Customer</h2>

    <table>
      <thead>
        <tr>
          <th>ID</th>
          <th>Company</th>
          <th>Product</th>
          <th>Detail</th>
          <th>Status</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($products as $product)
        <tr>
          <td>{{ $product->id }}</td>
          <td>{{ $product->company }}</td>
          <td>{{ $product->name }}</td>
          <td>{{ $product->detail }}</td>
          <td>
            <span class="status preparation">Preparation</span>
            <span class="status process">On Process</span>
            <span class="status finish">Finish</span>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>

    <a href="{{ url()->previous() }}">
      <button class="back-btn">Back</button>
    </a>
  </div>
</body>
</html>
