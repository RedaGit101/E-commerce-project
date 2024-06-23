<!DOCTYPE html>
<html lang="en">
<head>
    @include('home.css')
    <style>
        .order-summary {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .order-summary h2 {
            margin-bottom: 20px;
            color: #333;
        }
        .order-summary table {
            width: 100%;
            border-collapse: collapse;
        }
        .order-summary table th, .order-summary table td {
            padding: 10px;
            border: 1px solid #ddd;
            text-align: left;
        }
        .order-summary table th {
            background-color: skyblue;
            color: #514f4f;
            text-transform: uppercase;
        }
    </style>
</head>
<body>
    <div class="hero_area">
        @include('home.header')
    </div>

    <div class="order-summary">
        <h2>Order History</h2>
        @if($orderSum->isEmpty())
            <p>You have no orders.</p>
        @else
            <table>
                <thead>
                    <tr>
                        <th>Order ID</th>
                        <th>Product</th>
                        <th>Receiver Name</th>
                        <th>Address</th>
                        <th>Phone</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($orderSum as $order)
                        <tr>
                            <td>{{ $order->id }}</td>
                            <td>{{ $order->product->title }}</td>
                            <td>{{ $order->name }}</td>
                            <td>{{ $order->rec_address }}</td>
                            <td>{{ $order->phone }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>

    @include('home.footer')
</body>
</html>
