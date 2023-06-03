<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CroHMI Sign In </title>

    <!-- Favicons -->
    <link href="img/icon.png" rel="icon">
    <link href="img/icon.png" rel="apple-touch-icon">

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/SignupStyle.css">

    <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>

</head>
<body>
<?php
session_start();
if($_SESSION)
{
   header("Location: index.php");
   session_destroy();
}
?>


    <div class="header" id="myHeader">
        <a href="index.php"><img src="img/logo.png" alt="logo" /></a>
    </div>


    <div class="main">

        <!-- Sing in  Form -->
        <section class="sign-in">
            <div class="container">
                <div class="signin-content">
                    <div class="signin-image">
                        <figure><img src="img/signin-image.jpg" alt="sing up image"></figure>
                        <!-- <a href="Signup.html" class="signup-image-link">Create an account</a> -->
                    </div>

                    <div class="signin-form">
                        <h2 class="form-title">Log In</h2>
                        <form method="POST" class="register-form" id="loginform">
                            <div class="form-group">
                                <label for="your_email"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="email" id="email" placeholder="Your Email"/>
                            </div>
                            <div class="form-group">
                                <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password" id="password" placeholder="Password"/>
                            </div>
                            <!-- <div class="form-group">
                                <input type="checkbox" name="remember-me" id="remember-me" class="agree-term" />
                                <label for="remember-me" class="label-agree-term"><span><span></span></span>Remember me</label>
                            </div> -->
                            <div class="form-group form-button">
                            <input type="submit" name="loginBtn" id="loginBtn" value="Login" class="form-submit" />
                                
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

    </div>

    <script type="text/javascript">
    
$(document).ready(function() {
    $('#loginform').submit(function(e) {
        e.preventDefault();
        $.ajax({
            type: "GET",
            url: 'http://111.68.101.17:8000/api/crohmi/user/?action=login',
            data: $(this).serialize(),
            success: function(response)
            {

                if (response[0])
                {
                    var email = response[0].email;
                    var isSuper = response[0].is_superuser;
                    $.ajax({
                        url: 'setSession.php',
                        type: 'post',
                        data: { 'email': email, 'role': isSuper},
                        success: function(response2) { 
                            console.log(response2);
                         location.href = 'portal.php'; }
                    });
                    
                }
                else
                {
                    alert('Invalid Credentials!');
                }
           }
       });
     });
});
</script>

</body>
</html>