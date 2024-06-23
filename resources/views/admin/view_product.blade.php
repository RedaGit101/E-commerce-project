<!DOCTYPE html>
<html>

<head>
    @include('admin.css')
    <style>
        .table thead th {
            background-color: #DB6574;
            border: 1px black;
            border-style: solid;

        }

        .table tbody tr {
            background-color: transparent;
            color: white;
            text-align: center;
        }

        .table tbody tr td {
            background-color: transparent;
            color: white;
            text-align: center;
            vertical-align: middle;
            border: 1px grey;
            border-style: solid;

        }

        .table img {
            border-radius: 10px;
            max-width: 120px;
            max-height: 120px;
            object-fit: contain;
            display: block;
            margin: 0 auto;
        }

        .div_des {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 50px;
        }
    </style>
</head>

<body>
    @include('admin.header')

    @include('admin.sidebar')
    <div class="page-content">
        <div class="page-header">
            <h2>Product List</h2>
        </div>
        <div class="page-body">
            <div class="container-fluid ">
                <form class="form-inline mb-2" action="{{url('product_search')}}" method="get">
                    @csrf
                    <input type="search" name="search" class="form-control mb-2 mr-sm-2" style="width: 200px;" placeholder="Search">
                    <button type="submit" class="btn btn-primary mb-2">Search</button>
                </form>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr class="text-center">
                                <th>Product Title</th>
                                <th>Description</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Category</th>
                                <th>Image</th> 
                                 <th>Edit</th>
                                <th>Delete</th>
                              
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($product as $products)
                                <tr>
                                    <td>{{ $products->title }}</td>
                                    <td>{{($products->description)}}</td>
                                    <td>{{ $products->price }}</td>
                                    <td>{{ $products->quantity }}</td>
                                    <td>{{ $products->category }}</td>
                                    <td>
                                        <img src="products/{{ $products->image }}" alt="not found" class="img-fluid"
                                            width="120px" height="120px">
                                    </td>
                                    <td><a class="btn btn-success" href="{{ url('edit_product', $products->id) }}">Edit</a></td>
                                    <td><a class="btn btn-danger" onclick="confirmation(event)"
                                            href="{{ url('delete_product', $products->id) }}">Delete</a></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="div_des">
                {{ $product->links() }}
            </div>

        </div>
        <!-- JavaScript files-->
        <script type="text/javascript">
            function confirmation(ev) {
                ev.preventDefault();
                var urlToRedirect = ev.currentTarget.getAttribute('href');
                swal({
                        title: "Are you sure you want to delete this?",
                        text: "This delete will be permanent",
                        icon: "warning",
                        buttons: true,
                        dangerMode: true,
                    })
                    .then((willCancel) => {
                        if (willCancel) {
                            window.location.href = urlToRedirect;
                        }
                    });

            }
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"
            integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="{{ asset('/admincss/vendor/jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('/admincss/vendor/popper.js/umd/popper.min.js') }}"></script>
        <script src="{{ asset('/admincss/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('/admincss/vendor/jquery.cookie/jquery.cookie.js') }}"></script>
        <script src="{{ asset('/admincss/vendor/chart.js/Chart.min.js') }}"></script>
        <script src="{{ asset('/admincss/vendor/jquery-validation/jquery.validate.min.js') }}"></script>
        <script src="{{ asset('/admincss/js/charts-home.js') }}"></script>
        <script src="{{ asset('/admincss/js/front.js') }}"></script>
</body>

</html>
