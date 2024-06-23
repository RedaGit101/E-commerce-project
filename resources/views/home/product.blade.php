<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latest Products</title>
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
.div_center
{
    display: flex;
    justify-content: center;
    content-align: center;
    padding: 50px;
}
    </style>
</head>

<body>

    <section class="shop_section">
        <div class="container">
            <div class="heading_container">
                <h2>Latest Products</h2>
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
                        <a class="btn btn-primary" style="color: white;" href="{{ url('add_cart', $products->id) }}">Add to Cart</a>
                    </div>
                </div>
                @endforeach
            </div>

            <div class="action-box div_center">
                <a class="btn btn-primary" href="{{ url('product_page') }}">View All Products</a>
            </div>
        </div>
    </section>

</body>

</html>
