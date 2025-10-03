<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Navbar Bootstrap</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .logo-circle {
      width: 40px;
      height: 40px;
      background-color: #1eaae9;
      border-radius: 50%;
    }
    .nav-link {
      color: white !important;
    }
    .btn-nav {
      background-color: #1eaae9;
      color: white !important;
      border-radius: 20px;
      padding: 5px 15px;
      margin-left: 10px;
    }
    .navbar-custom {
      background-color: #d6d6d6;
      /* border: 2px solid #1eaae9; */
    }
  </style>
</head>
<body>
  
  <nav class="navbar navbar-expand-lg navbar-custom">
    <div class="container-fluid">
      <!-- Logo bulat -->
      <div class="logo-circle"></div>

      <!-- Menu -->
      <div class="ms-auto d-flex">
        <a href="#" class="btn btn-nav">Login</a>
        <a href="#" class="btn btn-nav">Shop</a>
        <a href="#" class="btn btn-nav">Galery</a>
        <a href="#" class="btn btn-nav">Contack</a>
      </div>
    </div>
  </nav>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
