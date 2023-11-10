   
@extends('layout.app')
@section('content')
    <h1>Car details</h1>
    
   <form  >
    <form action="{{route('cars.search')}}" method="POST" mt-5 class="d-inline-flex">
        @csrf
        <input type="text" class="form-control-sm" name="id" placeholder="Enter user id">
        <button type="submit" class="btn btn-dark btn-lg">Search</button>
    </form>
      <div class="row gap-2 mt-2">
        <div class="col-4 mt-2">
            <label for="carname" class="form-lable">Car Name</label>
            <input type="text" name="name" placeholder="Enter Car Name" id="carname" class="form-control" value="{{$car->name}}" disabled>
        </div>
        <div class="col-4 mt-2">
            <label for="carmodel" class="form-lable">Car Model</label>
            <input type="text" name="model" placeholder="Enter Car model" id="carmodel" class="form-control" value="{{$car->model}}" disabled>
        </div>
      </div>
      <div class="row gap-2">
        <div class="col-4 mt-2">
            <label for="carnumber" class="form-lable">Car Number</label>
            <input type="text" name="carnumber" placeholder="Enter Car Number" id="carnumber" class="form-control" value="{{$car->carnumber}}" disabled>
        </div>
        <div class="col-4 mt-2">
            <label for="fueltype" class="form-lable">Fuel Type</label>
            <input type="text" name="fueltype" placeholder="Enter Car Fuel Type" id="fueltype" class="form-control" value="{{$car->fueltype}}" disabled>
        </div>
      </div>
      <div class="row gap-2">
        <div class="col-4 mt-2">
            <label for="brand" class="form-lable">Company Name</label>
            <input type="text" name="brand" placeholder="Enter Car Company name/brand" id="brand" class="form-control" value="{{$car->brand}}" disabled>
        </div>
        <div class="col-4 mt-2">
            <label for="carrent" class="form-lable">Car Rent</label>
            <input type="text" name="rent" placeholder="Enter Car Rent/Day...." id="carrent" class="form-control" value="{{$car->rent}}" disabled>
        </div>
      </div>
      <div class="row gap-2">
        <div class="col-4 mt-2">
            <label for="city" class="form-lable">City</label>
            <input type="text" name="city" placeholder="Enter Car Service City" id="city" class="form-control" value="{{$car->city}}" disabled>
        </div>
        <div class="col-4 mt-2">
            <label for="about" class="form-lable">About Car</label>
            <textarea name="about" placeholder="rent/hour, color etc" id="about" class="form-control" value="{{$car->about}}" disabled></textarea>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4 mt-2">
            <div class="card" style="width: 18rem;">
                <img src="{{asset('carsimg/'.$car->image)}}" class="card-img-top" style="width: 100%" alt="" id="imgsc">
                
                <div class="card-body m-2">   
                    <p class="m-2 card-header-tabs text-center  text-success"> Car Image</p>
                </div>
            </div>

        </div>
        <div class="col-md-4 mt-2">
            <div class="card" style="width: 18rem;">
                <img src="{{asset('carslic/'.$car->license)}}" class="card-img-top" alt="" id="imgsl">
                <div class="card-body m-2">
                    <p class="m-2 card-header-tabs text-center text-success">Car License</p>
                </div>
            </div>
            
        </div>
        <div class="col-md-4"></div>

    </div>

   </form>
@endsection