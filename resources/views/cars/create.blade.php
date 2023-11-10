@extends('layout.app')
@section('content')
    <h1>Cars</h1>
    
   <form action="{{route('cars.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
  
 
      <div class="row gap-2">
        <div class="col-4 mt-2">
            <label for="carname" class="form-lable">Car Name</label>
            <input type="text" name="name" placeholder="Enter Car Name" id="carname" class="form-control">
        </div>
        <div class="col-4 mt-2">
            <label for="carmodel" class="form-lable">Car Model</label>
            <input type="text" name="model" placeholder="Enter Car model" id="carmodel" class="form-control">
        </div>
      </div>
      <div class="row gap-2">
        <div class="col-4 mt-2">
            <label for="carnumber" class="form-lable">Car Number</label>
            <input type="text" name="carnumber" placeholder="Enter Car Number" id="carnumber" class="form-control">
        </div>
        <div class="col-4 mt-2">
            <label for="fueltype" class="form-lable">Fuel Type</label>
            <input type="text" name="fueltype" placeholder="Enter Car Fuel Type" id="fueltype" class="form-control">
        </div>
      </div>
      <div class="row gap-2">
        <div class="col-4 mt-2">
            <label for="brand" class="form-lable">Company Name</label>
            <input type="text" name="brand" placeholder="Enter Car Company name/brand" id="brand" class="form-control">
        </div>
        <div class="col-4 mt-2">
            <label for="carrent" class="form-lable">Car Rent</label>
            <input type="text" name="rent" placeholder="Enter Car Rent/Day...." id="carrent" class="form-control">
        </div>
      </div>
      <div class="row gap-2">
        <div class="col-4 mt-2">
            <label for="city" class="form-lable">City</label>
            <input type="text" name="city" placeholder="Enter Car Service City" id="city" class="form-control">
        </div>
        <div class="col-4 mt-2">
            <label for="about" class="form-lable">About Car</label>
            <textarea name="about" placeholder="rent/hour, color etc" id="about" class="form-control"></textarea>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4 mt-2">
            <div class="card" style="width: 18rem;">
                <img src="" class="card-img-top" alt="" id="imgsc">
                
                <div class="card-body m-2">
                    <input type="file" onchange="readCarURL(this)" id="cis" name="image" class=" btn btn-dark btn-sm m-0 w-100">
                    <p class="m-2 card-header-tabs text-center  text-success">Coose Car Image</p>
                </div>
            </div>

        </div>
        <div class="col-md-4 mt-2">
            <div class="card" style="width: 18rem;">
                <img src="" class="card-img-top" alt="" id="imgsl">
                <div class="card-body m-2">
                    <input type="file" onchange="readLicenseURL(this)" id="cls" name="license" class="btn btn-dark btn-sm m-0 w-100">
                    <p class="m-2 card-header-tabs text-center text-success">Coose Car License Image</p>
                </div>
            </div>
            
        </div>
        <div class="col-md-4"></div>

    </div>

       <button type="submit" class="btn btn-dark btn-lg mt-2">Submit</button>
   </form>
      
   <script>

        function readCarURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#imgsc')
                        .attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
        function readLicenseURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#imgsl')
                        .attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
   </script>
@endsection