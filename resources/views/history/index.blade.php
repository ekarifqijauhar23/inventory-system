<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <!-- Konten Anda -->
    <x-app-layout>
    <div class="container">
        <h2>Items Added</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>Item</th>
                    <th>Quantity</th>
                    <th>Total Price</th> <!-- Mengubah label kolom menjadi 'Total Price' -->
                    <th>Date</th>
                    <th>Aksi</th> <!-- Menambahkan kolom aksi untuk tombol hapus -->
                </tr>
            </thead>
            <tbody>
                @foreach ($items as $item)
                    <tr>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->quantity }}</td>
                        <td>Rp.{{ number_format($item->price * $item->quantity, 2) }}</td> <!-- Menampilkan total harga (harga * jumlah) -->
                        <td>{{ $item->created_at->format('Y-m-d H:i:s') }}</td>
                        <td>
                            <!-- Tombol Hapus untuk menghapus item -->
                            <form action="{{ route('items.destroy', $item->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this item?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <h2>Items Checked Out</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>Item</th>
                    <th>Quantity</th>
                    <th>Total Price</th> <!-- Mengubah label kolom menjadi 'Total Price' -->
                    <th>Date</th>
                    <th>Aksi</th> <!-- Menambahkan kolom aksi untuk tombol hapus -->
                </tr>
            </thead>
            <tbody>
                @foreach ($checkouts as $checkout)
                    <tr>
                        <td>{{ $checkout->item->name }}</td>
                        <td>{{ $checkout->quantity }}</td>
                        <td>Rp.{{ number_format($checkout->item->price * $checkout->quantity, 2) }}</td> <!-- Menampilkan total harga (harga * jumlah) -->
                        <td>{{ $checkout->created_at->format('Y-m-d H:i:s') }}</td>
                        <td>
                            <!-- Tombol Hapus untuk menghapus checkout -->
                            <form action="{{ route('checkouts.destroy', $checkout->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this checkout?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
