<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

    <link rel="stylesheet" href="{{ asset('css/carcard.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/owner.css')}}">
    <link rel="stylesheet" href="{{asset('css/carform.css')}}">

    <title>Dashbord</title>
</head>

<body>


    <section class="side_section">
        <div class="container">
            <aside>
                <div class="top">
                    <div class="logo">
                        <a href="#home"><img src="img/logo.png" alt="logo"></a>
                    </div>
                    <div class="close">
                        <span class="material-symbols-outlined">
                            close
                            </span>
                    </div>
                </div>
                <div class="side_bar">
                    <a href="{{route('owners.index')}}">
                        <span class="material-symbols-outlined">
                            grid_view
                            </span>
                        <h3>Dashbord</h3>
                    </a>
                    <a href="#">
                        <span class="material-symbols-outlined">
                            person
                            </span>
                        <h3>Profile</h3>
                    </a>
                    <a href="{{route('cars.index')}}" class="active">
                        <span class="material-symbols-outlined">
                            directions_car
                            </span>
                        <h3>Your Cars</h3>
                    </a>
                    <a href="#">
                        <span class="material-symbols-outlined">
                            circle_notifications
                            </span>
                        <h3>Notification</h3>
                    </a>
                    <a href="#">
                        <span class="material-symbols-outlined">
                            move
                        </span>
                        <h3>Trace Cars</h3>
                    </a>
                    <a href="#">
                        <span class="material-symbols-outlined">
                            reviews
                            </span>
                        <h3>FAQ</h3>
                    </a>
                    <a href="#">
                        <span class="material-symbols-outlined">
                            logout
                            </span>
                        <h3>Logout</h3>
                    </a>
                </div>
            </aside>

            <!----------------------- and of aside ------------------------->
            <main>
                <a class="add_btn" href="{{route('cars.index')}}">
                    Back To Your Car
                </a>
                <div class="card">
                    <h2>Car Information Form</h2>
                    <form action="{{route('cars.store')}}" method="post"  enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="carname">Car Name:</label>
                            <input type="text" id="carname" name="carname" required value="{{$car->carname}}" disabled>
                        </div>
                        <div class="form-group">
                            <label for="mileage">Mileage:</label>
                            <input type="text" id="mileage" name="mileage" required value="{{$car->mileage}}" disabled>
                        </div>
                        <div class="form-group">
                            <label for="plate_no">Plate No:</label>
                            <input type="text" id="plate_no" name="plate_no"  value="{{$car->plate_no}}" disabled>
                        </div>
                        <div class="form-group">
                            <label for="daily_price">Daily Price:</label>
                            <input type="text" id="daily_price"  name="daily_price" required value="{{$car->daily_price}}" disabled>
                        </div>      
                        <div class="form-group">
                            <label for="model">Model:</label>
                            <input type="text" id="model" name="model" required value="{{$car->model}}" disabled>
                        </div>
                        <div class="form-group">
                            <label for="fuel_type">Fuel Type:</label>
                            <select id="fuel_type" name="fuel_type" required value="{{$car->fuel_type}}" disabled>
                                <option value="petrol">Petrol</option>
                                <option value="diesel">Diesel</option>
                                <option value="electric">Electric</option>
                            </select>
                        </div>
                       
                        <div class="form-group">
                            <label for="address">Address:</label>
                            <input type="address" id="address" name="address" required value="{{$car->address}}" disabled>
                        </div>
                        <div class="form-group">
                            <label for="condition">Condition:</label>
                            <input type="text" id="condition" name="condition" required value="{{$car->condition}}" disabled>
                        </div>
                       
                    </form>
                </div>
            </main>
            <div class="owner_right">
                <div class="top">

                </div>

               <div class="rightCarContainer">
                <div class="card" id="imageCard">
                    
                    <div class="imageContainer">
                        <img id="" src="{{asset($car->carid)}}" alt="Selected Image">
                    </div>
                </div>
                <div class="card" id="imageCard">
                
                    <div class="imageContainer">
                        <img id="" src="{{asset($car->image)}}" alt="Selected Image">
                    </div>
                </div>
               </div>

            </div>

        </div>
    </section>



    <script src="{{asset('js/owner.js"></script')}}">
    <script src="{{asset('js/carcard.js')}}"></script>

</body>

</html>


