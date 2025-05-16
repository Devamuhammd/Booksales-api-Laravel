<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selamat Datang - BookSales</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container my-5">
        <h1 class="text-center mb-4">Toko BookSales</h1>
        <p class="text-center">Selamat Datang di Toko Buku Online!</p>

        <!-- Form Pencarian -->
        <form method="GET" action="{{ url('/') }}" class="mb-4">
            <div class="input-group">
                <input type="text" name="search" class="form-control" placeholder="Cari judul buku..." value="{{ request('search') }}">
                <button class="btn btn-primary" type="submit">Cari</button>
            </div>
        </form>

        <!-- Daftar Buku -->
        <div class="row">
            @forelse ($books as $item)
                <div class="col-md-4 mb-4">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">{{ $item['title'] }}</h5>
                            <p class="card-text">{{ $item['description'] }}</p>
                            <p class="card-text"><strong>Harga:</strong> Rp{{ number_format($item['price'], 0, ',', '.') }}</p>
                            <p class="card-text"><strong>Stok:</strong> {{ $item['stock'] }}</p>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12">
                    <div class="alert alert-warning text-center">
                        Tidak ada buku yang ditemukan.
                    </div>
                </div>
            @endforelse
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
