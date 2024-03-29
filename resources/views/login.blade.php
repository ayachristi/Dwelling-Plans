<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="icon" type="image/png" href="{{ asset('img/profile.png') }}">

    @include('layouts/header')
    <title>Login/Signup</title>
</head>

<body class="login-page">
    @include('layouts/navbar')
    <div class="login-container" id="login_margin">
        <div class="login-left">
            <div class="login-container">

                <form action="/login" method="POST" class="form-wrapper">
                    <h4 class="text-center mt-2">Sign In</h4>
                    @csrf
                    <div class="form-floating mb-3 mt-5">
                        <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                        <label for="floatingInput">Email address</label>
                    </div>
                    <div class="form-floating">
                        <input type="password" name="pw" class="form-control" id="floatingPassword" placeholder="Password">
                        <label for="floatingPassword">Password</label>
                    </div>
                    <div class="text-center mt-3">
                        <h6 class="mb-5">Forgot your password?</h6>
                        <input type="submit" class="auth-submit-btn" value="SIGN IN">
                    </div>
                </form>
            </div>
        </div>

        <div class="login-right">
            <div class="signup-container">

                <form action="/register" method="POST" class="signup-form-wrapper">
                    <h4 class="text-center  mt-1">Sign Up</h4>
                    @csrf
                    <div class="form-floating mt-2">
                        <input type="text" name="first_name" class="form-control" id="floatingInput" placeholder="name@example.com">
                        <label for="floatingInput">First name</label>
                    </div>
                    <div class="form-floating mt-2">
                        <input type="text" name="last_name" class="form-control" id="floatingInput" placeholder="name@example.com">
                        <label for="floatingInput">Last name</label>
                    </div>
                    <div class="form-floating mt-2">
                        <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                        <label for="floatingInput">Email address</label>
                    </div>
                    <div class="form-floating mt-2">
                        <input type="password" name="pw" class="form-control" id="floatingPassword" placeholder="Password">
                        <label for="floatingPassword">Password</label>
                    </div>
                    <div class="form-floating mt-2">
                        <input type="password" name="con_pw" class="form-control" id="floatingPassword" placeholder="Password">
                        <label for="floatingPassword">Confirm password</label>
                    </div>
                    <div class="text-center mt-3">
                        <input type="submit" class="auth-submit-btn" value="SIGN UP">
                    </div>
                </form>
            </div>

            <div class="img-bg">

                <img src="img/icons/download.jpg" alt="house background image">
                <div class="signup-banner d-flex justify-content-between">
                    <div class="first text-center">Unlock the World of Architectural Brilliance with Floor Planning Hub</div>
                    <div class="second text-center">
                        <ul>
                            <li>Explore Innovative Designs</li>
                            <li>Plan Your Dream Spaces</li>
                            <li>Experience Architectural Excellence</li>
                        </ul>
                    </div>
                </div>
                <div class="toggle-buttons d-flex justify-content-between">
                    <button class="btn btn-primary toggleSignUp" id="toggleSignIn">SIGN IN</button>
                    <button class="btn btn-secondary toggleSignIn" id="toggleSignUp">SIGN UP</button>
                </div>
            </div>

        </div>

    </div>
</body>

</html>