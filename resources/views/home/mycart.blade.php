<!DOCTYPE html>
<html lang="en">

<head>
    @include('home.css')
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .div_des
        {
            display: flex;
            justify-content: center;
            align-items: center; 
        }
        .hero_area {
            background-color: #fff;
            padding-bottom: 20px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .content_wrapper {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            margin: 20px 60px;
            gap: 20px;
        }

        .form_container,
        .table_container {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            flex: 1;
        }

        .form_container {
            max-width: 400px;
        }

        .form_container div {
            margin-bottom: 15px;
        }

        .form_container label {
            display: block;
            margin-bottom: 5px;
            color: #333;
            font-weight: bold;
        }

        .form_container input[type="text"],
        .form_container input[type="tel"],
        .form_container textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

        .form_container input[type="submit"] {
            background-color: #28a745;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        .form_container input[type="submit"]:hover {
            background-color: #218838;
        }

        .table_container {
            flex: 2;
        }

        .table-responsive {
            margin-bottom: 20px;
        }

        .table {
            width: 100%;
            border-collapse: collapse;
        }

        .table th, .table td {
            padding: 12px;
            border: 1px solid #ddd;
            text-align: center;
        }

        .table th {
            background-color: skyblue;
            color: #514f4f;
            text-transform: uppercase;
        }

        .table td {
            background-color: #f9f9f9;
        }

        .img-fluid {
            border-radius: 5px;
        }

        .btn-danger {
            background-color: #dc3545;
            color: #fff;
            padding: 8px 12px;
            border: none;
            border-radius: 4px;
            text-decoration: none;
            font-size: 14px;
        }

        .btn-danger:hover {
            background-color: #c82333;
        }

        .total-price {
            text-align: center;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .total-price h3 {
            color: #333;
            margin: 0;
            font-size: 20px;
            font-weight: bold;
        }

        @media (max-width: 768px) {
            .content_wrapper {
                flex-direction: column;
                align-items: center;
            }

            .form_container,
            .table_container {
                width: 100%;
                max-width: none;
                margin-bottom: 20px;
            }
        }
    </style>
</head>

<body>
    <div class="hero_area">
        <!-- Header section starts -->
        @include('home.header')
        <!-- Header section ends -->

        <!-- Slider section -->
        <!-- Slider content goes here -->
        <!-- Slider section ends -->
    </div>

    <div class="content_wrapper">
        <div class="table_container">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr class="text-center">
                            <th>Product Title</th>
                            <th>Price</th>
                            <th>Image</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $value = 0; ?>
                        @foreach ($cart as $cartItem)
                        <tr class="text-center">
                            <td>{{ $cartItem->product->title }}</td>
                            <td>${{ $cartItem->product->price }}</td>
                            <td>
                                <img src="products/{{ $cartItem->product->image }}" alt="Product Image" class="img-fluid" width="120" height="120">
                            </td>
                            <td>
                                <a class="btn btn-danger" href="{{ url('delete_product_cart', $cartItem->id) }}">Delete</a>
                            </td>
                        </tr>
                        <?php $value += $cartItem->product->price; ?> 
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="total-price">
                <h3>Total Value: ${{ $value }}</h3>
            </div>
        </div>

        <div class="form_container">
            <form action="{{url('confirm_order')}}" method="POST">
                @csrf
                <div>
                    <label>Receiver name</label>
                    <input type="text" name="name" value="{{Auth::user()->name}}">
                </div>
                <div>
                    <label>Receiver Address</label>
                    <textarea name="address">{{Auth::user()->address}}</textarea>
                </div>
                <div>
                    <label>Receiver phone</label>
                    <input type="tel" name="phone" value="{{Auth::user()->phone}}">
                </div>
                <div class="div_des">
                    <input type="submit" value="Place Order">
                </div>
            </form>
        </div>
    </div>

    <!-- Info section -->
    @include('home.footer')
</body>

</html>
