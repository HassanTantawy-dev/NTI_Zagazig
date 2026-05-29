<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Products</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: Arial, sans-serif; background: #f4f6f9; padding: 30px; }
        h1 { color: #333; margin-bottom: 20px; }
        table { width: 100%; border-collapse: collapse; background: white; border-radius: 8px; overflow: hidden; box-shadow: 0 2px 8px rgba(0,0,0,0.1); }
        th { background: #4CAF50; color: white; padding: 12px 15px; text-align: left; }
        td { padding: 12px 15px; border-bottom: 1px solid #eee; }
        tr:last-child td { border-bottom: none; }
        tr:hover td { background: #f9f9f9; }
        .nav { margin-bottom: 20px; display: flex; gap: 10px; }
        .nav a { padding: 8px 16px; background: #4CAF50; color: white; text-decoration: none; border-radius: 5px; }
        .nav a:hover { background: #45a049; }
        .price { color: #4CAF50; font-weight: bold; }
        .empty { text-align: center; padding: 40px; color: #999; }
    </style>
</head>
<body>
    <div class="nav">
        <a href="/products">All Products</a>
        <a href="/products/expensive">Products > $100</a>
        <a href="/customers">All Customers</a>
        <a href="/customers/cairo">Cairo Customers</a>
    </div>

    <h1>🛍️ All Products</h1>

    @if($products->isEmpty())
        <p class="empty">No products found. Add some data in phpMyAdmin!</p>
    @else
        <table>
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Price</th>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $product)
                    <tr>
                        <td>{{ $product->id }}</td>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->desc }}</td>
                        <td class="price">${{ number_format($product->price, 2) }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</body>
</html>
