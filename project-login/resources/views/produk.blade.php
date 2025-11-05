<!DOCTYPE html>
<html lang="id">
<head>
 <meta charset="UTF-8">
 <title>Produk Penjualan</title>
 <link
href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
rel="stylesheet">
</head>
<body>
<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
 <div class="container">
 <a class="navbar-brand" href="{{ route('beranda') }}">Sistem Penjualan</a>
 <div class="d-flex">
 <a href="{{ route('logout') }}" class="btn btn-outline-light">Logout</a>
 </div>
 </div>
</nav>
<!-- Konten -->
<div class="container mt-5">
 <h2 class="text-center mb-4">Daftar Produk Penjualan</h2>
 <div class="row justify-content-center">
 @foreach($produk as $item)
 <div class="col-md-3">
 <div class="card mb-4 shadow-sm">
 <img src="{{ asset($item['foto']) }}" class="card-img-top" alt="{{
$item['nama'] }}" style="height:200px; object-fit:cover;">
 <div class="card-body text-center">
 <h5 class="card-title">{{ $item['nama'] }}</h5>
 <p class="card-text text-muted">{{ $item['harga'] }}</p>
 <a href="{{ route('produk.detail', $item['id']) }}" class="btn btndark">Beli Sekarang</a>
 </div>
 </div>
 </div>
 @endforeach
 </div>
</div>
</body>
</html>