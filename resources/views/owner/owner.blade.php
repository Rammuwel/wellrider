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
                        <a href="/"><img src="{{asset('img/logo.png')}}" alt="logo"></a>
                    </div>
                    <div class="close">
                        <span class="material-symbols-outlined">
                            close
                            </span>
                    </div>
                </div>
                <div class="side_bar">
                    <a href="{{route('owners.index')}}" class="active">
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
                    <a href="{{route('cars.index')}}">
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
                    <a href="logout">
                        <span class="material-symbols-outlined">
                            logout
                            </span>
                        <h3>Logout</h3>
                    </a>
                </div>
            </aside>

            <!----------------------- and of aside ------------------------->
            <main>
                <h1>Dashbord</h1>
                <div class="date">
                    <input type="date">
                </div>
                <div class="insights">
                    <div class="total">
                        <span class="material-symbols-outlined">
                            leaderboard
                        </span>
                        <h1>Total Cars</h1>
                        <p>5</p>
                    </div>
                    <div class="total">
                        <span class="material-symbols-outlined">
                            motion_sensor_active
                         </span>
                        <h1>Active Cars</h1>
                        <p>5</p>
                    </div>
                    <div class="total">
                        <span class="material-symbols-outlined">
                            leaderboard
                        </span>
                        <h1>Total Incone</h1>
                        <p>500$</p>
                    </div>
                </div>
                <div class="recent_order">
                    <h1>Recent Order</h1>
                    <table>
                        <thead>

                            <tr>
                                <th>Car Id</th>
                                <th>Car Name</th>
                                <th>Costmer Name</th>
                                <th>Order Date</th>
                                <th>Returm Date</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Thar</td>

                                <td>
                                    <div class="cost_img">
                                        <img src="#" alt="img">
                                    </div>
                                    <span>Jone Bulet</span>
                                </td>
                                <td>10-08-2023</td>
                                <td>15-08-2023</td>
                                <td>
                                    <button class="more_btn">More</button>

                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Thar</td>

                                <td>
                                    <div class="cost_img">
                                        <img src="#" alt="img">
                                    </div>
                                    <span>Jone Bulet</span>
                                </td>
                                <td>10-08-2023</td>
                                <td>15-08-2023</td>
                                <td>
                                    <button class="more_btn">More</button>

                                </td>
                            </tr>

                            <tr>
                                <td>3</td>
                                <td>Thar</td>

                                <td>
                                    <div class="cost_img">
                                        <img src="#" alt="img">
                                    </div>
                                    <span>Jone Bulet</span>
                                </td>
                                <td>10-08-2023</td>
                                <td>15-08-2023</td>
                                <td>
                                    <button class="more_btn">More</button>

                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </main>

        </div>
    </section>
      
    <script src="js/owner.js"></script>

</body>

</html>