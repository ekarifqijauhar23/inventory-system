<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <!-- Konten Anda -->
    <x-app-layout>
    <div class="container">
    @if(auth()->user() && auth()->user()->isAdmin())
        <a href="{{ route('items.create') }}" class="btn btn-primary mb-4">Tambah Item</a>
    @endif
        <table class="table">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Jumlah</th>
                    <th>Harga</th>
                    @if(auth()->user() && auth()->user()->isAdmin())
                    <th>Aksi</th>
                    @endif
                </tr>
            </thead>
            <tbody>
                @foreach ($items as $item)
                    <tr>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->quantity }}</td>
                        <td>Rp.{{ number_format($item->price, 0, ',', '.') }}</td> <!-- Menambahkan format mata uang -->
                        <td>
                        @if(auth()->user() && auth()->user()->isAdmin())
                            <a href="{{ route('items.edit', $item) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('items.destroy', $item) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endif
                @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
