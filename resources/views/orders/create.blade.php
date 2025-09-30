<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
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
      padding: 10px 15px;
    }
    .menu-icon {
      font-size: 25px;
      color: #fff;
      cursor: pointer;
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
    }

    /* Left Section */
    .form-section {
      flex: 1;
    }
    .form-group {
      margin-bottom: 20px;
      text-align: left;
    }
    label {
      display: block;
      margin-bottom: 8px;
      font-weight: bold;
      color: #fff;
    }
    input, textarea {
      width: 100%;
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
      padding: 20px;
    }
    .status-section h3 {
      margin-bottom: 20px;
      font-weight: bold;
      color: #ffffffff;
      font-size: 23px;
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
      width: 146px;
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
  </style>
</head>
<body>
  <!-- Navbar -->
  <div class="navbar">
    <span class="menu-icon">&#9776;</span>
  </div>

  <!-- Content -->
  <div class="container">
    <h2 class="form-title">Order Form</h2>
    <div class="pull-right mb-3">
      <a class="btn btn-primary" href="{{ route('products.index') }}"> Back</a>
    </div>

    <form action="{{ route('products.store') }}" method="POST">
      @csrf

      <div class="form-wrapper">
        <!-- Left: Form -->
        <div class="form-section">
          <div class="form-group">
            <label for="company">Company</label>
            <input type="text" id="company" name="company" placeholder="Enter company name">
          </div>
          <div class="form-group">
            <label for="product">Product</label>
            <input type="text" id="product" name="product" placeholder="Enter product name">
          </div>
          <div class="form-group">
            <label for="details">Details</label>
            <textarea id="details" name="details" placeholder="Enter details"></textarea>
          </div>
        </div>

        <!-- Right: Status -->
        <div class="status-section">
          <h3>Status Product</h3>
          <button type="button" class="status-btn red" value="preparation">Preparation</button>
          <button type="button" class="status-btn yellow" value="onprocess">On Process</button>
          <button type="button" class="status-btn green" value="finish">Finish</button>
        </div>
      </div>

      <!-- Hidden input untuk status -->
      <input type="hidden" name="status" id="status">

      <div class="text-center">
        <button type="submit" class="confirm-btn">CONFIRM</button>
      </div>
    </form>
  </div>

  <script>
    // Pilih semua tombol status
    const statusButtons = document.querySelectorAll('.status-btn');
    const statusInput = document.getElementById('status');

    statusButtons.forEach(button => {
      button.addEventListener('click', () => {
        // Hapus kelas aktif dari semua tombol
        statusButtons.forEach(btn => btn.classList.remove('active'));
        // Tambah kelas aktif ke tombol yang diklik
        button.classList.add('active');
        // Simpan nilai ke input hidden
        statusInput.value = button.value;
      });
    });

    // Validasi sebelum submit
    document.querySelector('form').addEventListener('submit', function(e) {
      const company = document.getElementById('company').value;
      const product = document.getElementById('product').value;
      const details = document.getElementById('details').value;
      const status = statusInput.value;

      if (!company || !product || !details || !status) {
        e.preventDefault(); // cegah submit
        alert("Harap isi semua form dan pilih status produk!");
      }
    });
  </script>
</body>
</html>
