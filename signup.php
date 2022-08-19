<?php include "logincheck.php"; ?> 
<!DOCTYPE html>
<html>
<head>
    <title> </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <link rel="stylesheet" href="style.css">
</head>
<body>
            <div align="center">
	                        <?php
							$remarks = isset($_GET['remarks']) ? $_GET['remarks'] : '';
							if ($remarks==null and $remarks=="") {
							echo ' <div id="reg-head" class="headrg"><b></b></div> ';
							}
							if ($remarks=='success') {
							echo ' <div id="reg-head" class="headrg"><b>Registration Success</b></div> ';
							}
							if ($remarks=='failed') {
							echo ' <div id="reg-head-fail" class="headrg"><b>Registration Failed!, Username exists</b></div> ';
							}
							if ($remarks=='error') {
							echo ' <div id="reg-head-fail" class="headrg"><b>Registration Failed! <br> Error: '.$_GET['value'].' <b> </div> ';
							}
							?>
            </div>

<main class="main">
    <div class="wrapper">
        <div class="card">
            <div class="title">
                <h1 class="title title-large">Sign Up</h1>
                <p class="title title-subs">Already have an account? <span><a href="index.php" class="linktext">Login</a></span></p>
            </div>
            <form action="execute.php" method="POST" class="form" id="reg">
                <div class="form-group">
                    <input type="username" name="fname" id="username" class="input-field" placeholder="First Name">
                </div>
                <div class="form-group">
                    <input type="text" name="lname" id="email" class="input-field" placeholder="Last Name">
                </div>
                <div class="form-group">
                    <input type="text" name="address" id="email" class="input-field" placeholder="Student ID">
                </div>
                <div class="form-group">
                    <input type="email" name="username" id="password" class="input-field" placeholder="Email address">
                </div>
                <div class="form-group">
                    <input type="password" name="password" id="password" class="input-field" placeholder="Password">
                </div>
                <div class="form-group">
                    <a href="./index.html" class="linktext">Forgot Password</a>
                    <input type="submit" name="submit" class="input-submit" value="Sign Up">
                </div>
            </form>
            <div class="line">
                <span class="line-bar"></span>
                <span class="line-text"></span>
                <span class="line-bar"></span>
            </div>

            <div class="method">
                <div class="method-item">
                    <a href="#" class="btn-action">
                        <i class="icons icons-google fab fa-google"></i>
                        <span>Sign in with Google</span>
                    </a>
                </div>
                <div class="method-item">
                    <a href="#" class="btn-action">
                        <i class="icons icons-facebook fab fa-facebook"></i>
                        <span>Sign in with Facebook</span>
                    </a>
                </div>
                <div class="method-item">
                    <a href="#" class="btn-action">
                        <i class="icons icons-apple fab fa-apple"></i>
                        <span>Sign in with Apple</span>
                    </a>
                </div>
            </div>
            
        </div>
    </div>
</main>
</body>
</html>

