<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="css/style.css">

    <title>Wellrider</title>
</head>

<body>
    <section id="nav-section">

        <nav class="navbar">
            <div class="box-logo">
                <img src="{{asset('image/logo.png')}}" alt="LOGO" id="logo">
            </div>
            <div id="box-menu-icon">
                <i class="fa-solid fa-bars"></i>
            </div>
            <div class="nav-list">
                <ul class="list">
                    <li id="box-menu-out"><i class="fa-solid fa-x"></i></li>
                    <li><a href="#home" class="active">Home</a></li>
                    <li><a href="#services">Services</a></li>
                    <li><a href="#offer">Offer</a></li>
                    <li><a href="#About">About</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </div>
             @if (auth()->guard('owner')->check() ||auth()->guard('admin')->check() || auth()->guard('user')->check()   )
             
                <div class="profile" id="profile_box" onclick="profile_box()">
                    <img src="{{asset('image/profile.jpg')}}" alt="img">
                </div>
             @else
                <div class="sing-box">
                    <a href="{{route('login')}}">Sing in</a>
                    <a href="{{route('register')}}">Sing up</a>
                 </div>
            @endif


        </nav>
        <div id="sub_menu_wrap">
            <div class="sub_menu">
                <div class="user_info" id="user_box">
                    <img src="{{asset('image/profile.jpg')}}" alt="img">
                    <h2>Ram Muwel</h2>
                </div>
                <div class="sub-menu-link">
                    <ul>
                        <li>
                            <i class="fa-solid fa-user-pen left-menu-icon"></i>
                            <a href="edit">Edit Profile</a>
                            <i class="fa-solid fa-chevron-right right-menu-icon"></i>

                        </li>
                        @if (auth()->guard('owner')->check())
                        <li>
                            <i class="fa-solid fa-car fa-lg"></i>
                            <a href="owners">Owner Dashbord</a>
                            <i class="fa-solid fa-chevron-right right-menu-icon"></i>

                        </li>
                        @endif
                        @if (auth()->guard('admin')->check())
                        <li>
                            <i class="fa-solid fa-user-secret fa-xl"></i>
                            <a href="admin.users">Admin Dashbord</a>
                            <i class="fa-solid fa-chevron-right right-menu-icon"></i>

                        </li>
                        @endif
                        <li>
                            <i class="fa-solid fa-book left-menu-icon"></i>
                            <a href="edit">See Activity</a>
                            <i class="fa-solid fa-chevron-right right-menu-icon"></i>

                        </li>

                        <li>
                            <i class="fa-solid fa-right-from-bracket left-menu-icon"></i>
                            <a href="{{route('auth.logout')}}">Logout</a>
                            <i class="fa-solid fa-chevron-right right-menu-icon"></i>

                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="slide-container">
            <div class="slide">
                <img src="{{asset('image/udy1.jpg')}}" alt="img">
                <div class="caption">
                    <h3>Wellcome for your next trip</h3>
                </div>
            </div>
            <div class="slide">
                <img src="{{asset('image/udy3.jpg')}}" alt="img">
                <div class="caption">
                    <h3>any where any time Wellrider with you</h3>
                </div>
            </div>
            <div class="slide">
                <img src="{{asset('image/ydy2.jpg')}}" alt="img">
                <div class="caption">
                    <h3>Wellrider is your next journey</h3>
                </div>
            </div>




        </div>
        <span class="arrow prew" onclick="controller(-1)">&#8249;</span>
        <span class="arrow next" onclick="controller(1)">&#8250;</span>
         <form action="{{route('customer.search')}}" method="POST">

            <div class="search-bar" >
                <div class="city search_city">
                    <input type="text" name="city" placeholder="your city" id="city00">
                </div>
                <div class="city search_date">
                    <input type="date" name="date" id="date00">
                </div>
                <div class="city search_btn">
                    <input type="submit" value="Search Now">
                </div>
            </div>
         </form>
    </section>

    <section class="section_2">
        <h3>how to <span>use</span> </h3>
        <div class="use_container">
            <div class="use_img">
                <div class="img22">
                    <img src="{{asset('image/car.png')}}" alt="car">
                </div>
                <div class="use_cantent">
                    <h4>Car</h4>
                    <p>select the car</p>
                </div>
            </div>
            <div class="lin_use"></div>
            <div class="use_img">
                <div class="img22">
                    <img src="{{asset('image/select-to-cart.png')}}" alt="car">
                </div>
                <div class="use_cantent">
                    <h4>Add to Cart</h4>
                    <p> Offer for you</p>
                </div>
            </div>
            <div class="lin_use"></div>
            <div class="use_img">
                <div class="img22">
                    <img src="{{asset('image/pick-up.png')}}" alt="car">
                </div>
                <div class="use_cantent">
                    <h4>Pick Your Car</h4>
                    <p>Find pick location</p>
                </div>
            </div>
            <div class="lin_use"></div>
            <div class="use_img">
                <div class="img22">
                    <img src="{{asset('image/ride-your-bike.png')}}" alt="car">
                </div>
                <div class="use_cantent">
                    <h4>Ride Anywhere</h4>
                    <p>not have limit.</p>
                </div>
            </div>


        </div>
    </section>

    <section class="section_3">
        <div class="car_container">
            <h2>Popular <span>Car</span></h2>
            <div class="car_list">

                <div class="slider_pc">
                    <div class="wrapper_car">
                        <div class="wrapper_box">
                            <img src="{{asset('image/popular_car1.jpg')}}" alt="img">
                            <div class="detail">
                                <h2>Mahindra MD19</h2>
                                <p>
                                    new
                                    <span class="dot"></span> 2023
                                    <span class="dot"></span> atomatic
                                    <span class="dot"></span> diesel
                                    <span class="dot"></span> 5 seat
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="wrapper_car">
                        <div class="wrapper_box">
                            <img src="{{asset('image/popular_car2.jpg')}}" alt="img">
                            <div class="detail">
                                <h2>Mahindra MD19</h2>
                                <p>
                                    new
                                    <span class="dot"></span> 2023
                                    <span class="dot"></span> atomatic
                                    <span class="dot"></span> diesel
                                    <span class="dot"></span> 5 seat
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="wrapper_car">
                        <div class="wrapper_box">
                            <img src="{{asset('image/popular_car3.jpg')}}" alt="img">
                            <div class="detail">
                                <h2>Mahindra MD19</h2>
                                <p>
                                    new
                                    <span class="dot"></span> 2023
                                    <span class="dot"></span> atomatic
                                    <span class="dot"></span> diesel
                                    <span class="dot"></span> 5 seat
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="wrapper_car">
                        <div class="wrapper_box">
                            <img src="{{asset('image/popular_car1.jpg')}}" alt="img">
                            <div class="detail">
                                <h2>Mahindra MD19</h2>
                                <p>
                                    new
                                    <span class="dot"></span> 2023
                                    <span class="dot"></span> atomatic
                                    <span class="dot"></span> diesel
                                    <span class="dot"></span> 5 seat
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="wrapper_car">
                        <div class="wrapper_box">
                            <img src="{{asset('image/popular_car1.jpg')}}" alt="img">
                            <div class="detail">
                                <h2>Mahindra MD19</h2>
                                <p>
                                    new
                                    <span class="dot"></span> 2023
                                    <span class="dot"></span> atomatic
                                    <span class="dot"></span> diesel
                                    <span class="dot"></span> 5 seat
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="wrapper_car">
                        <div class="wrapper_box">
                            <img src="{{asset('image/popular_car1.jpg')}}" alt="img">
                            <div class="detail">
                                <h2>Mahindra MD19</h2>
                                <p>
                                    new
                                    <span class="dot"></span> 2023
                                    <span class="dot"></span> atomatic
                                    <span class="dot"></span> diesel
                                    <span class="dot"></span> 5 seat
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="wrapper_car">
                        <div class="wrapper_box">
                            <img src="{{asset('image/popular_car1.jpg')}}" alt="img">
                            <div class="detail">
                                <h2>Mahindra MD19</h2>
                                <p>
                                    new
                                    <span class="dot"></span> 2023
                                    <span class="dot"></span> atomatic
                                    <span class="dot"></span> diesel
                                    <span class="dot"></span> 5 seat
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="wrapper_car">
                        <div class="wrapper_box">
                            <img src="{{asset('image/popular_car1.jpg')}}" alt="img">
                            <div class="detail">
                                <h2>Mahindra MD19</h2>
                                <p>
                                    new
                                    <span class="dot"></span> 2023
                                    <span class="dot"></span> atomatic
                                    <span class="dot"></span> diesel
                                    <span class="dot"></span> 5 seat
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="wrapper_car">
                        <div class="wrapper_box">
                            <img src="{{asset('image/popular_car1.jpg')}}" alt="img">
                            <div class="detail">
                                <h2>Mahindra MD19</h2>
                                <p>
                                    new
                                    <span class="dot"></span> 2023
                                    <span class="dot"></span> atomatic
                                    <span class="dot"></span> diesel
                                    <span class="dot"></span> 5 seat
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <span class="pc_arrow " id="pc_prew">&#8249;</span>
            <span class="pc_arrow" id="pc_next">&#8250;</span>
        </div>
    </section>


    <footer>
        <div class="footer-content">
            <div class="footer-section">
                <h2>About Us</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam auctor nulla in nunc sodales, non malesuada ex euismod.</p>
            </div>
            <div class="footer-section">
                <h2>Services</h2>
                <ul>
                    <li><a href="#">Lorem ipsum</a></li>
                    <li><a href="#">car reperring</a></li>
                    <li><a href="#">FAQ</a></li>
                </ul>
            </div>
            <div class="footer-section">
                <h2>Contact Us</h2>
                <p>Email: info@wellrider.com</p>
                <p>Phone: +123 456 7890</p>
            </div>
            <div class="footer-section">
                <h2>Follow Us</h2>
                <div class="social-icons">
                    <a href="#"><img src="facebook-icon.png" alt="Facebook"></a>
                    <a href="#"><img src="twitter-icon.png" alt="Twitter"></a>
                    <a href="#"><img src="instagram-icon.png" alt="Instagram"></a>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2023 Wellrider. All rights reserved.</p>
        </div>
    </footer>


    <script src="js/script.js"></script>
</body>

</html>