<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <!-- Konten Anda -->
    <x-app-layout>
    <div class="container">
        <form action="{{ route('checkouts.store') }}" method="POST" id="checkout-form">
            @csrf
            <div class="mb-3">
                <label for="item_id" class="form-label">Item</label>
                <select class="form-control" id="item_id" name="item_id" required>
                    @foreach ($items as $item)
                        <option value="{{ $item->id }}" data-price="{{ $item->price }}">
                            {{ $item->name }} - Rp{{ number_format($item->price, 0, ',', '.') }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="quantity" class="form-label">Quantity</label>
                <input type="number" class="form-control" id="quantity" name="quantity" value="1" required min="1">
            </div>

            <div class="mb-3">
                <label for="total_price" class="form-label">Total Price</label>
                <input type="text" class="form-control" id="total_price" name="total_price" readonly>
            </div>

            <button type="submit" class="btn btn-success">Checkout</button>
            <a href="{{ route('checkouts.index') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
    </x-app-layout>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const itemSelect = document.getElementById('item_id');
            const quantityInput = document.getElementById('quantity');
            const totalPriceInput = document.getElementById('total_price');
            const form = document.getElementById('checkout-form');

            // Fungsi untuk menghitung total harga
            function calculateTotalPrice() {
                const selectedOption = itemSelect.options[itemSelect.selectedIndex];
                const price = parseFloat(selectedOption.getAttribute('data-price'));
                const quantity = parseInt(quantityInput.value, 10);
                const totalPrice = price * quantity;

                // Menampilkan total harga dengan format mata uang
                totalPriceInput.value = totalPrice.toLocaleString();
            }

            // Menambahkan event listener ketika item atau jumlah berubah
            itemSelect.addEventListener('change', calculateTotalPrice);
            quantityInput.addEventListener('input', calculateTotalPrice);

            // Memanggil fungsi untuk menghitung harga awal saat halaman dimuat
            calculateTotalPrice();

            // Menangani pengiriman form dan memastikan total price adalah angka murni
            form.addEventListener('submit', function(e) {
                // Menghapus format mata uang dan memastikan hanya angka yang dikirim
                const totalPrice = totalPriceInput.value.replace(/[^0-9.-]+/g, ""); // Menghapus simbol mata uang
                totalPriceInput.value = totalPrice; // Update nilai total price tanpa simbol Rp
                
                // Log data yang akan dikirimkan
                console.log("Total Price yang akan dikirim:", totalPrice);
            });
        });
    </script>
</body>
