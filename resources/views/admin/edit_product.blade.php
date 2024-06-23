<!DOCTYPE html>
<html>

<head>
    @include('admin.css')
    <style>
        .div_des {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 50px;
        }

        .form-control[type="file"] {
            background-color: #007bff00;
            color: #8a8d93;
            padding: 10px;
            height: 100%;
            border: solid 1px #444951;
            border-radius: 4px;
            cursor: pointer;
            font-size: 14px;
        }

        /* Change the hover effect */
        .form-control[type="file"]:hover {
            background-color: #0057b300;
        }

        /* Optional: Hide the default file input label */
        .form-control[type="file"]::-webkit-file-upload-button {
            visibility: hidden;
        }

        .form-control[type="file"]::before {
            content: 'Choose File';
            display: inline-block;
            background: #007bff00;
            border: 1px solid #444951;
            border-radius: 4px;
            padding: 10px;
            outline: none;
            white-space: nowrap;
            -webkit-user-select: none;
            cursor: pointer;
            font-size: 14px;
            color: #8a8d93;
        }

        .form-control[type="file"]:hover::before {
            background-color: #02070c5a;
        }
    </style>
</head>

<body>
    @include('admin.header')

    @include('admin.sidebar')
    <div class="page-content">

        <div class="page-header">

            <h2>Update Product</h2>

        </div>
        <div class="page-body">
            <div class="container-fluid">
                <form action="{{ url('update_product',$data->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label class="form-label" style="color:#DB6574">Product Title</label>
                        <input class="form-control" type="text" name="title" value="{{ $data->title }}" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label" style="color:#DB6574">Description</label>
                        <textarea class="form-control" name="description" required>{{ $data->description }}</textarea>
                    </div>
                    <div class="form-group">
                        <label class="form-label" style="color:#DB6574">Price</label>
                        <input class="form-control" type="number" min="0" name="price" value="{{ $data->price }}" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label" style="color:#DB6574">Quantity</label>
                        <input class="form-control" type="number" min="0" name="quantity" value="{{ $data->quantity }}" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label" style="color:#DB6574">Product category</label>
                        <select class="form-control" name="category" required>
                            <option>Select a Category </option>
                            @foreach ($category as $category)
                                <option value="{{ $category->category_name }}" {{ $data->category == $category->category_name ? 'selected' : '' }}>{{ $category->category_name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="form-label" style="color:#DB6574">Product Image</label>
                        <input type="file" class="form-control" name="image">
                    </div>
                    <div class="form-group div_des">
                        <input type="submit" class="btn btn-primary" value="Update Product">
                    </div>
                </form>
            </div>
        </div>



        <!-- JavaScript files-->
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
