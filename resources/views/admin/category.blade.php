<!DOCTYPE html>
<html>

<head>
    @include('admin.css')
    <style type="text/css">
        .table_des {
            width: 350px;
            height: 50px;
            text-align: center;
            margin: auto;
            border: 2px solid grey;
            margin-top: 2px;
        }

        th {
            background-color: rgb(219, 101, 116);
            border: 2px solid grey;
            padding: 15px;
            font-size: 20px;
            font-weight: bold;
            color: white;
        }

        td {
            color: white;
            padding: 10px;
            border: 2px solid grey;
        }
    </style>
</head>

<body>
    @include('admin.header')

    @include('admin.sidebar')
    <div class="page-content">
        <div class="page-header">
            <div class="container-fluid">
                <h3>Category</h3>



                <form action="{{ url('add_category') }}" method="post">
                    @csrf
                    <input class="form-control" type="text" name="category" required>
                    <input type="submit" class="btn btn-primary mt-2" style="height: 40px;" value="Add Category ">

                </form>

            </div>
        </div>
        <div class="page-body">
            <table class="table_des">

                <tr>
                    <th scope="col" colspan="3" style="color: black;">List of categories</th>
                </tr>
                @foreach ($data as $data)
                    <tr>
                        <td>{{ $data->category_name }}</td>
                        {{--                         <td> <a class="btn btn-success" href="{{ url('edit_category', $data->id) }}">Edit</a></td> --}}
                        <td><a class="btn btn-danger" onclick="confirmation(event)"
                                href="{{ url('delete_category', $data->id) }}">Delete</a></td>


                    </tr>
                @endforeach

            </table>
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
