<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/auth.css">
    <title>Register</title>
</head>

<body>
    <section class="register" >
        <div class="register-container">
            <div class="header-register">
                <img src={{ asset('image/logo.png') }} alt="logo">
                <h1>Welcome to wellrider</h1>
            </div>
            <div class="register-form">
                <div class="register-form-container">
                    <div class="register-heading">
                        <h1>Register</h1>
                    </div>
                    <form action={{ route('auth.register') }} method="POST">
                        @csrf
                        <div class="user-type">                           
                            <input type="radio" name="user_type" value="user" id="usertype1" checked>
                            <label for="usertype1" class="lable1" >
                                <span>Customer</span>
                            </label>
                            <input type="radio" name="user_type" value="owner" id="usertype2">
                            <label for="usertype2" class="lable2">
                                <span>Owner</span>
                            </label>
                        </div>
                        <label for="firstname">First Name <span style="color: red">*</span></label>
                        <input type="text" name="firstname" placeholder="Enter your first name" id="firstname">
                        <label for="lastname">Last Name<span style="color: red">*</span></label>
                        <input type="text" name="lastname" placeholder="Enter your last name" id="lastname">
                        <label for="email">Email<span style="color: red">*</span></label>
                        <input type="text" name="email" placeholder="Enter your email" id="email">
                        <label for="mobile">Phone No.<span style="color: red">*</span></label>
                        <input type="text" name="mobile" placeholder="Enter your phone number" id="mobile">
                        <label for="password">Password<span style="color: red">*</span></label>
                        <input type="password" name="password" placeholder=" " id="password">
                        <label for="cpassword">Comfirm Password<span style="color: red">*</span></label>
                        <input type="password" name="cpassword" placeholder=" " id="cpassword">
                        <input type="submit" id="register-btn" value="Register">
                    </form>
                    <p style="padding: 2px">you are already register then <a href="login" style="color: blue">Login Now</a></p>
                </div>
            </div>
        </div>
    </section>
</body>

</html>
