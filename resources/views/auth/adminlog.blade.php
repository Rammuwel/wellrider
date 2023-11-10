<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/auth.css">
    <title>Login</title>
</head>

<body>
    <section class="register">
        <div class="register-container">
            <div class="header-register">
                <img src={{ asset('image/logo.png') }} alt="logo">
                <h1>Wellcome to wellrider</h1>
            </div>
            <div class="register-form">
                <div class="register-form-container">
                    <div class="register-heading">
                        <h1>Admin Login</h1>
                    </div>
                    <form method="POST" action={{ route('auth.admin.login') }} >
                        @csrf
                        <label for="email">Email<span style="color: red">*</span></label>
                        <input type="text" name="email" placeholder="Enter your email" id="email">
                       
                        <label for="password">Password<span style="color: red">*</span></label>
                        <input type="password" name="password" placeholder=" " id="password">
                     
                        <input type="submit" id="register-btn" value="Login">
                       
                        <a href="#" style=" padding: 2px"> <span style="color: blue">forget password</span></a>
                    </form>
                    <p style="padding: 2px">You are new user then  <a href="admin.register" style="color: blue">Register Now</a></p>
                </div>
            </div>
        </div>
    </section>
</body>

</html>
