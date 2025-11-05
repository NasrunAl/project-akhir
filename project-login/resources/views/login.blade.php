<!DOCTYPE html>
<html lang="id">
<head>
 <meta charset="UTF-8">
 <title>Login | Sistem Penjualan</title>
 <link
href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
rel="stylesheet">
</head>
<body class="bg-light">
<div class="container mt-5">
 <div class="row justify-content-center">
 <div class="col-md-4">
 <div class="card shadow-lg">
 <div class="card-header bg-dark text-white text-center">
 <h4>Login</h4>
 </div>
 <div class="card-body">
 @if(session('error'))
 <div class="alert alert-danger">{{ session('error') }}</div>
 @endif
 <form action="{{ route('login.process') }}" method="POST">
 @csrf
 <div class="mb-3">
 <label>Username</label>
 <input type="text" name="username" class="form-control"
placeholder="Masukkan username" required>
 </div>
 <div class="mb-3">
 <label>Password</label>
 <input type="password" name="password" class="form-control"
placeholder="Masukkan password" required>
 </div>
 <div class="d-grid">
 <button type="submit" class="btn btn-dark">Login</button>
 </div>
 </form>
 </div>
 <div class="card-footer text-center">
 <small>Gunakan username: <b>admin</b> dan password:
<b>12345</b></small>
 </div>
 </div>
 </div>
 </div>
</div>
</body>
</html>