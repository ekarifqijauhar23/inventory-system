<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <!-- Konten Anda -->
    <x-app-layout>
    <div class="container">
        
        <a href="{{ route('checkouts.create') }}" class="btn btn-primary mb-4">Add Checkout</a>
        <table class="table">
            <thead>
                <tr>
                    <th>Barang</th>
                    <th>Jumlah</th>
                    <th>Harga</th> <!-- Tambahkan kolom Harga -->
                    <th>Total Harga</th> <!-- Kolom Total Harga -->
                    <th>Tanggal Pesan</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($checkouts as $checkout)
                    <tr>
                        <td>{{ $checkout->item->name }}</td>
                        <td>{{ $checkout->quantity }}</td>
                        <td>Rp.{{ number_format($checkout->item->price, 2) }}</td> <!-- Tampilkan harga per barang -->
                        <td>Rp.{{ number_format($checkout->item->price * $checkout->quantity, 2) }}</td> <!-- Tampilkan total harga -->
                        <td>{{ $checkout->created_at->format('Y-m-d H:i:s') }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
