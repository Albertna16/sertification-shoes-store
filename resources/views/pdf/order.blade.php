<!DOCTYPE html>
<html>
<head>
    <title>Laporan Belanja</title>
    <style>
        body { font-family: Arial, sans-serif; }
        .container { width: 80%; margin: auto; padding: 20px; border: 1px solid #000; }
        .header { text-align: center; margin-bottom: 20px; }
        .header h2 { margin: 0; }
        .details-table { width: 100%; border-collapse: collapse; margin-bottom: 20px; }
        .details-table td { padding: 5px; }
        .table { width: 100%; border-collapse: collapse; }
        .table th, .table td { border: 1px solid #000; padding: 8px; text-align: left; }
        .table th { background-color: #f2f2f2; }
        .signature { margin-top: 20px; text-align: right; }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h2>Toko Shoe Zalfeet</h2>
            <p>Laporan Belanja Anda</p>
        </div>

        <table class="details-table" border="0">
            <tr>
                <td>User ID: {{ $order->user->id }}</td>
                <td style="text-align: left;">Tanggal: {{ $order->created_at ? $order->created_at->format('d M Y') : now()->format('d M Y') }}</td>
            </tr>
            <tr>
                <td>Nama: {{ $order->user->name }}</td>
                <td style="text-align: left;">ID Paypal: {{ $order->user->paypal_id ?? '-' }}</td>
            </tr>
            <tr>
                <td>Alamat: {{ $order->user->address }}</td>
                <td style="text-align: left;">Nama Bank: {{ $order->user->bank_name ?? '-' }}</td>
            </tr>
            <tr>
                <td>No HP: {{ $order->user->phone }}</td>
                <td style="text-align: left;">Cara Bayar: {{ ucfirst($order->payment_method) }}</td>
            </tr>
        </table>

        <table class="table">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Nama Produk dengan ID</th>
                    <th>Jumlah</th>
                    <th>Harga</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($order->orderItems as $index => $item)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $item->product->name }} ({{ $item->product->id }})</td>
                    <td>{{ $item->quantity }}</td>
                    <td>Rp {{ number_format($item->price, 0, ',', '.') }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <p><strong>Total belanja (termasuk pajak): Rp {{ number_format($order->total_price, 0, ',', '.') }}</strong></p>

        <div class="signature">
            <p><strong>TANDA TANGAN TOKO</strong></p>
        </div>
    </div>
</body>
</html>
