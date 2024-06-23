<!DOCTYPE html>
<html>
  <head>
    @include('admin.css')
    <style>
      .table  th {
          background-color: #DB6574;
          border: 1px solid black;
          text-align: center;
      }

      .table tr {
          background-color: transparent;
          color: white;
          text-align: center;
      }

      .table tr td {
          background-color: transparent;
          color: white;
          text-align: center;
          vertical-align: middle;
          border: 1px solid grey;
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
        <h2>Orders</h2>
      </div>
        <div class="container-fluid">
          <div lass="page-body">
            <table class="table">
              
                <tr>
                  <th>Customer name</th>
                  <th>Address</th>
                  <th>Phone</th>
                  <th>Product title</th>
                  <th>Price</th>
                  <th>Image</th>
                  <th>Status</th>
                  <th>Change status</th>
                 
                </tr>
              
              
                @foreach ($data as $data)
                <tr>
                  <td>{{$data->name}}</td>
                  <td>{{$data->rec_address}}</td>
                  <td>{{$data->phone}}</td>
                  <td>{{$data->product->title}}</td>
                  <td>{{$data->product->price}}</td>
                  <td>
                    <img src="products/{{ $data->product->image}}" alt="not found" class="img-fluid" width="120px" height="120px">
                  </td>
                  <td>{{$data->status}}</td>
                  <td>
                    <a href="{{url('on_the_way',$data->id)}}" class="btn btn-warning">On the way </a>
                    <a href="{{url('deliverd',$data->id)}}" class="btn btn-success">Delivered </a>
                  </td>
                 
                </tr>
                @endforeach
             
            </table>
          </div>
        </div>
      </div>
    </div>

    <!-- JavaScript files-->
    <script src="{{asset('/admincss/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('/admincss/vendor/popper.js/umd/popper.min.js')}}"></script>
    <script src="{{asset('/admincss/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('/admincss/vendor/jquery.cookie/jquery.cookie.js')}}"></script>
    <script src="{{asset('/admincss/vendor/chart.js/Chart.min.js')}}"></script>
    <script src="{{asset('/admincss/vendor/jquery-validation/jquery.validate.min.js')}}"></script>
    <script src="{{asset('/admincss/js/charts-home.js')}}"></script>
    <script src="{{asset('/admincss/js/front.js')}}"></script>
  </body>
</html>
