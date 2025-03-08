<!DOCTYPE html>
<html>
<head>
    <title>Order {{ $order->id }}</title>
    <style>
        body { font-family: Arial, sans-serif; }
        .header { text-align: center; margin-bottom: 20px; }
        .header h1 { margin: 0; font-size: 24px; }
        .details { margin-bottom: 20px; }
        .details p { margin: 5px 0; }
        .table { width: 100%; border-collapse: collapse; }
        .table th, .table td { border: 1px solid #000; padding: 8px; text-align: left; }
        .table th { background-color: #f2f2f2; }
    </style>
</head>
<body>
    <div class="header">
        <h1>Order ID: {{ $order->id }}</h1>
        <p>Status: {{ ucfirst($order->status) }}</p>
    </div>

    <div class="details">
        <p>Total Harga: Rp {{ number_format($order->total_price, 0, ',', '.') }}</p>
        <p>Tanggal Order: {{ $order->created_at->format('d M Y H:i') }}</p>
    </div>

    <table class="table">
        <thead>
            <tr>
                <th>Produk</th>
                <th>Ukuran</th>
                <th>Jumlah</th>
                <th>Harga Satuan</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($order->orderItems as $item)
                <tr>
                    <td>{{ $item->product->name }}</td>
                    <td>{{ $item->stock->size->name }}</td>
                    <td>{{ $item->quantity }} pcs</td>
                    <td>Rp {{ number_format($item->price, 0, ',', '.') }}</td>
                    <td>Rp {{ number_format($item->price * $item->quantity, 0, ',', '.') }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>