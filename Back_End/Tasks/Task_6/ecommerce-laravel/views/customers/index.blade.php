<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Customers</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: Arial, sans-serif; background: #f4f6f9; padding: 30px; }
        h1 { color: #333; margin-bottom: 20px; }
        table { width: 100%; border-collapse: collapse; background: white; border-radius: 8px; overflow: hidden; box-shadow: 0 2px 8px rgba(0,0,0,0.1); }
        th { background: #3498db; color: white; padding: 12px 15px; text-align: left; }
        td { padding: 12px 15px; border-bottom: 1px solid #eee; }
        tr:last-child td { border-bottom: none; }
        tr:hover td { background: #f9f9f9; }
        .nav { margin-bottom: 20px; display: flex; gap: 10px; }
        .nav a { padding: 8px 16px; background: #3498db; color: white; text-decoration: none; border-radius: 5px; }
        .nav a:hover { background: #2980b9; }
        .city { background: #eaf4fd; color: #2980b9; padding: 3px 8px; border-radius: 4px; font-size: 13px; }
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

    <h1>👥 All Customers</h1>

    @if($customers->isEmpty())
        <p class="empty">No customers found. Add some data in phpMyAdmin!</p>
    @else
        <table>
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>City</th>
                </tr>
            </thead>
            <tbody>
                @foreach($customers as $customer)
                    <tr>
                        <td>{{ $customer->id }}</td>
                        <td>{{ $customer->customerName }}</td>
                        <td>{{ $customer->customerEmail }}</td>
                        <td>{{ $customer->customerPhone }}</td>
                        <td><span class="city">{{ $customer->customerCity }}</span></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</body>
</html>
