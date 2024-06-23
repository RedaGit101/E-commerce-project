<!DOCTYPE html>
<html lang="en">

<head>
    @include('home.css')
    <style>
        .shop_section {
            padding: 50px 0;
        }

        .heading_container h2 {
            font-size: 2.5rem;
            text-align: center;
            margin-bottom: 30px;
        }

        .products-container {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: center;
        }

        .box {
            border: 1px solid #ddd;
            border-radius: 5px;
            overflow: hidden;
            width: 300px;
            text-align: center;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .img-box img {
            width: 100px;
            height: auto;
        }

        .detail-box {
            padding: 15px;
        }

        .detail-box h6 {
            font-size: 1.25rem;
            margin-bottom: 10px;
        }

        .detail-box span {
            font-size: 1.5rem;
            color: #28a745;
        }

        .action-box {
            display: flex;
            justify-content: space-around;
            padding: 15px;
        }

        .action-box .btn {
            padding: 10px 20px;
            border-radius: 5px;
        }

        .div_des {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 50px;
        }

        .search-container {
            display: flex;
            justify-content: center;
            padding: 20px;
            background-color: #f8f9fa;
        }

        .search-container form {
            display: flex;
            width: 80%;
        }

        .search-container input[type="search"] {
            flex: 1;
            padding: 10px;
            border: 2px solid #ddd;
            border-radius: 5px 0 0 5px;
            outline: none;
        }

        .search-container button {
            padding: 10px 20px;
            border: 2px solid skyblue;
            background-color: skyblue;
            color: #514f4f;
            border-radius: 0 5px 5px 0;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .search-container button:hover {
            background-color: skyblue;
        }
    </style>
</head>

<body>
    <div class="hero_area">
        <!-- header section starts -->
        @include('home.header')
        <!-- end header section -->

        <!-- search section -->
        <div class="search-container">
            <form action="{{ url('product_search') }}" method="get">
                @csrf
                <input type="search" name="search" placeholder="Search for products">
                <button type="submit">Search</button>
            </form>
        </div>
        <!-- end search section -->

        <!-- slider section -->
        <!-- Add slider content here if necessary -->
        <!-- end slider section -->
    </div>
    <!-- end hero area -->

    <!-- shop section -->
    <section class="shop_section">
        <div class="container">
            <div class="heading_container">
                <h2>Our Products</h2>
            </div>

            <div class="products-container">
                @foreach ($product as $products)
                    <div class="box">
                        <div class="img-box">
                            <img src="products/{{ $products->image }}" alt="{{ $products->title }}">
                        </div>
                        <div class="detail-box">
                            <h6>{{ $products->title }}</h6>
                            <span>${{ $products->price }}</span>
                        </div>
                        <div class="action-box">
                            <a class="btn btn-light" href="{{ url('product_details', $products->id) }}">Details</a>
                            <a class="btn btn-primary" style="color:white;" href="{{ url('add_cart', $products->id) }}">Add to Cart</a>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
        <div class="div_des">
            {{ $product->links() }}
        </div>
    </section>
    <!-- end shop section -->

    <!-- contact section -->
    {{-- @include('home.contact') --}}
    <!-- end contact section -->

    <!-- info section -->
    @include('home.footer')
    <!-- end info section -->

</body>

</html>
