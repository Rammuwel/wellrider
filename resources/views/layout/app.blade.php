<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{-- <link rel="stylesheet" href="{{asset(css/cars.css)}}"> --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>

<body>
    <div class="container">
      <div class="row">
        <div class="col-sm-2">
          <div class="list-group">
            <a href="#" class="list-group-item list-group-item-action">Dashboard</a>
            <a  href="#collapseOne" class="list-group-item list-group-item-action" data-bs-toggle="collapse">Users</a>
            <div id="collapseOne" class="collapse"  data-bs-parent="#accordion">
              <a href="#" class="list-group-item list-group-item-action">All Users</a>
              <a href="#" class="list-group-item list-group-item-action">Show</a>   
              <a href="#" class="list-group-item list-group-item-action">Add</a>
              <a href="#" class="list-group-item list-group-item-action">Update</a>
              <a href="#" class="list-group-item list-group-item-action">Delete</a>
            </div>
            <a  href="#collapseTwo" class="list-group-item list-group-item-action" data-bs-toggle="collapse">Cars</a>
            <div id="collapseTwo" class="collapse"  data-bs-parent="#accordion">
              <a href="#" class="list-group-item list-group-item-action">All Cars</a>
              <a href="#" class="list-group-item list-group-item-action">Show</a>   
              <a href="#" class="list-group-item list-group-item-action">Add</a>
              <a href="#" class="list-group-item list-group-item-action">Update</a>
              <a href="#" class="list-group-item list-group-item-action">Delete</a>
            </div>
            <a  href="#collapseTree" class="list-group-item list-group-item-action" data-bs-toggle="collapse">Order</a>
            <div id="collapseTree" class="collapse"  data-bs-parent="#accordion">
              <a href="#" class="list-group-item list-group-item-action">All Order</a>
              <a href="#" class="list-group-item list-group-item-action">Show</a>   
              <a href="#" class="list-group-item list-group-item-action">Add</a>
              <a href="#" class="list-group-item list-group-item-action">Update</a>
              <a href="#" class="list-group-item list-group-item-action">Delete</a>
            </div>
            <a href="#" class="list-group-item list-group-item-action">Live Track</a>
          </div>
        </div>
        <div class="col-sm-10">
          @yield('content')
        </div>
      </div>
      
    </div>
</body>

</html>
