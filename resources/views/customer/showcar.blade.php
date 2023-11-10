






<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('cass/custshowcar.css')}}">

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

   
    <section class="car-list">
        <div class="car">
            <img src="car1.jpg" alt="Car 1">
            <h2>Car Model 1</h2>
            <p>Location: City, Country</p>
            <p>Rating: <span class="rating">4.5</span> (Average: 4.2)</p>
            <button class="book-button">Book Now</button>
        </div>
        <div class="car">
            <img src="car2.jpg" alt="Car 2">
            <h2>Car Model 2</h2>
            <p>Location: City, Country</p>
            <p>Rating: <span class="rating">3.8</span> (Average: 3.5)</p>
            <button class="book-button">Book Now</button>
        </div>
        <!-- Add more cars as needed -->
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