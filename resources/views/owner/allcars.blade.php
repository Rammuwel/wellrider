<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/owner.css">

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
                <span class="car_heading">
                    <h1>Car Details</h1>
                </span>
                <div class="search_car">

                    <form action="#">
                        <input type="text" placeholder="inter car name or id">
                        <input type="submit" value="Search">
                    </form>
                    <a class="add_btn" href="{{route('owner.addcar')}}">
                        Add Car
                    </a>
                </div>
                <div class="cars-main_owner">
                    <div class="info">
                        <table>
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Plate No</th>
                                    <th>Address</th>
                                    <th>Daily Price</th>
                                    <th>Fuel Type</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                 @foreach ($cars as $car)
                                 <tr>
                                       <td>{{$car->id}}</td>
                                       <td>
                                           <div class="car_main_image">
                                              <a href="{{route('cars.show', ['car' => $car->id])}}"> <img src="{{asset($car->image)}}" alt="img"></a>
                                           </div>
                                           <samp>{{$car->carname}}</samp>
                                           <td>{{$car->plate_no}}</td>
                                           <td>{{$car->address}}</td>
                                           <td>{{$car->daily_price}}</td>
                                           <td>{{$car->fuel_type}}</td>
                                           <td>
                                              <a href="{{route('cars.edit', ['car'=>$car->id])}}">
                                                  <button id="Update"> Edit</button>
                                              </a>
                                             
                                                <form action="{{route('cars.destroy', ['car' => $car->id])}}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" id="Delete">Delete</button>
                                                </form>
                                              
                                           </td>
                                    </tr>
                                     
                                 @endforeach  
                                </tbody>
                            </table>
                        </div>
                    </div>
                </main>
                <div class="owner_right">
                    <div class="top">
    
                    </div>
    
                </div>
    
            </div>
        </section>
    



    <script src="js/owner.js"></script>

</body>

</html>