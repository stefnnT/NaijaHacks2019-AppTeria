<?php ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Login/Signup | Appteria</title>

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/owl.theme.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">
    <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,300,700' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style2.css">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
</head>
<body>

    <!-- PRE LOADER -->

<div class="preloader">
     <div class="sk-spinner sk-spinner-pulse"></div>
</div>


<div class="navbar navbar-default navbar-fixed-top">
	<div class="container">

		<div class="navbar-header">
			<button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="icon icon-bar"></span>
				<span class="icon icon-bar"></span>
				<span class="icon icon-bar"></span>
			</button>
			<a href="index.html" class="navbar-brand"><span>App</span> teria</a>
		</div>

		<div class="collapse navbar-collapse">
			<ul class="nav navbar-nav navbar-right">
				<li><a href="index.html" class="smoothScroll">Home</a></li>
				<li><a href="index.html#about" class="smoothScroll">About</a></li>
                <li><a href="index.html#screenshot" class="smoothScroll">Features</a></li>
                <li><a href="dashboard.html" class="smoothScroll btn" >Dashboard</a></li>
                <li><a href="#" data-toggle="modal" data-target="#modal1">Contact</a></li>  
			</ul>
		</div>

	</div>
</div>

<div class="main">

        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form" id="register-form">
                            <br> <br> <br>
                        <h2 class="form-title">Sign up</h2>
                        <form method="POST" class="register-form" id="register-form">
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name" required></i></label>
                                <input type="text" name="name" id="name" placeholder="Your Name" required/>
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email" id="email" placeholder="Your Email" required/>
                            </div>
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password" id="password" placeholder="Password" required/>
                            </div>
                            <div class="form-group">
                                <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                                <input type="password" name="re_pass" id="re_pass" placeholder="Repeat your password" required/>
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="agree_term" id="agree_term" class="agree-term"/>
                                <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree to terms and conditions.<a href="#" class="term-service">Terms of service</a></label>
                            </div>
                            <div class="forms-error-msg">
                                
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signup" id="signup" class="form-submit" value="Register"/>
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                            <br> <br> <br>
                        <figure><img src="images/signup-image.jpg" alt="sing up image"></figure>
                        <a href="#login-form" class="signup-image-link">I am already have an account</a>

                            <div>
                            <span class="social-label" style="text-align: left;">   Or register with</span>
                            <ul class="socials">
                                <li><a href="#"><i class="display-flex-center zmdi zmdi-facebook"></i></a></li>
                                <li><a href="#"><i class="display-flex-center zmdi zmdi-twitter"></i></a></li>
                                <li><a href="#"><i class="display-flex-center zmdi zmdi-google"></i></a></li>
                            </ul>
                            </div>
                    </div>  
                </div>
            </div>
        </section>
</div>
<div class="main">
        <!-- Sing in  Form -->
        <section class="sign-in">
            <div class="container">
                <div class="signin-content">
                    <div class="signin-image">
                            <br> <br> <br>
                        <figure><img src="images/signin-image.jpg" alt="sing up image"></figure>
                        <a href="#register-form" class="signup-image-link">Not a user yet, Create an account</a>
                    </div>

                    <div class="signin-form"  id="login-form"> 
                            <br> <br> <br>
                        <h2 class="form-title">Login</h2>
                        <form method="POST" class="register-form" id="login-form">
                            <div class="form-group">
                                <label for="your_name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="username" id="your_name" placeholder="Your Name"/>
                            </div>
                            <div class="form-group">
                                <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password" id="your_pass" placeholder="Password"/>
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="remember-me" id="remember-me" class="agree-term" />
                                <label for="remember-me" class="label-agree-term"><span><span></span></span>Remember me</label>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signin" id="signin" class="form-submit" value="Log in"/>
                            </div>
                        </form>
                        <div class="social-login">
                            <span class="social-label">Or login with</span>
                            <ul class="socials">
                                <li><a href="#"><i class="display-flex-center zmdi zmdi-facebook"></i></a></li>
                                <li><a href="#"><i class="display-flex-center zmdi zmdi-twitter"></i></a></li>
                                <li><a href="#"><i class="display-flex-center zmdi zmdi-google"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
</div>
    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/magnific-popup-options.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/smoothscroll.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/custom.js"></script>
<!-- </div> -->
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>