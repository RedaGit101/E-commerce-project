<!DOCTYPE html>
<html>
  <head> 
  @include('admin.css')
  <style>
    

  </style>
  </head>
  <body>
    @include('admin.header')
    
    @include('admin.sidebar')
      <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">
            <h1>Update Category</h1>
            <div>
                
                <form action="{{url('update_category',$data->id)}}" method="post">
                    @csrf
                    <input class="form-control" type="text" name="category" value="{{$data->category_name}}">
                    <input class="btn btn-primary mt-2" type="submit" value="update category">
                </form>
            </div>

      </div>
    </div>
    <!-- JavaScript files-->
    <script src="{{asset('/admincss/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('/admincss/vendor/popper.js/umd/popper.min.js')}}"> </script>
    <script src="{{asset('/admincss/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('/admincss/vendor/jquery.cookie/jquery.cookie.js')}}"> </script>
    <script src="{{asset('/admincss/vendor/chart.js/Chart.min.js')}}"></script>
    <script src="{{asset('/admincss/vendor/jquery-validation/jquery.validate.min.js')}}"></script>
    <script src="{{asset('/admincss/js/charts-home.js')}}"></script>
    <script src="{{asset('/admincss/js/front.js')}}"></script>
  </body>
</html>