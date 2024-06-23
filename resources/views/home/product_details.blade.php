<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Details</title>
    @include('home.css')
    <style>   
        .shop_section {
            background: #f8f9fa;
            padding: 60px 0;
        }
        .heading_container {
            text-align: center;
            margin-bottom: 40px;
        }
          .box {
            background: #fff;
            border: 1px solid #ddd;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s;
            display: flex;
            flex-direction: row;
            margin-bottom: 20px;
        }
        .img-box {
            flex: 1;
            padding: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            border-right: 1px solid #ddd;
        }

        .img-box img {
            max-width: 100%;
            max-height: 100%;
            border-radius: 10px;
        }

        .detail-box {
            flex: 2;
            padding: 30px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .detail-box h6 {
            font-size: 24px;
            margin-bottom: 15px;
            color: #333;
        }

        .detail-box .price {
            font-size: 20px;
            color: #007bff;
            margin-bottom: 10px;
        }

        .detail-box .category,
        .detail-box .quantity {
            font-size: 18px;
            margin-bottom:10px;
            color: #555;
        }

        .detail-box .description {
            font-size: 16px;
            line-height: 1.6;
            color: #555;
           
        }

        @media (max-width: 768px) {
            .box {
                flex-direction: column;
            }

            .img-box {
                border-right: none;
                border-bottom: 1px solid #ddd;
            }

            .detail-box {
                padding: 20px;
            }

            .detail-box h6 {
                font-size: 20px;
            }
        }
    </style>
</head>

<body>
   
        <!-- header section starts -->
        @include('home.header')
        <!-- end header section -->
     
    </div>
    <!-- Product details start-->
    <section class="shop_section layout_padding">
        <div class="container">
            <div class="heading_container">
                <h2>Latest Products</h2>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="box">
                        <div class="img-box">
                            <img src="/products/{{ $data->image }}" alt="Product Image">
                        </div>
                        <div class="detail-box">
                            <h6>{{ $data->title }}</h6>
                            <div class="price">
                                Price : $ {{ $data->price }}
                            </div>
                            <div class="category">
                                Category : {{ $data->category }}
                            </div>
                            <div class="quantity">
                                Available Quantity : {{ $data->quantity }}
                            </div>
                            <div class="description">
                               Description :<br> {{ $data->description }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product details end-->
    <!-- info section -->
    @include('home.footer')
</body>

</html>
