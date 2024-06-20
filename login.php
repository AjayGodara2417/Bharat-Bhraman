<?php
include "connection.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bharat Bharaman</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Protest+Riot&display=swap" rel="stylesheet">

    <link rel="shortcut icon" href="./decorative-tricolor-indian-flag-theme-with-white-plain-background_416749-350.jpg" type="jpeg">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="./login.css">
    <link rel="stylesheet" href="./index.css">

</head>
<body>
    <!-- navbar section  -->
    <div class="navbar">
        <div class="logo">Bharat Bhraman</div>
        <div class="navbar-options">
          <div class="btnGroup">
            <button class="btn btnProject"><a href="./index.html">Home</a></button>
          </div>
          <div class="btnGroup">
            <button class="btn btnProject"><a href="./explore.html">Explore</a></button>
          </div>
          <div class="btnGroup">
            <button class="btn btnProject"><a href="./contactus.html">Contact US</a></button>
          </div>
        </div>
    </div>

    <!--Login Form-->
    
    <div class="login_form">
        <div class="left">
            <!-- <img src="./image/logshoes.jpeg"> -->
        </div>

        <div class="right">
            <h1>Welcome Back!</h1>

            <?php 
                if(isset($_POST['sitelogin']))
                {
                    $user=$_POST['username'];
                    $pass=$_POST['password'];
                    $q="select * from register where username='$user' and password='$pass'";
                    $res=mysqli_query($con,$q);
                    if(mysqli_num_rows($res)>0)
                    {
                        echo "<script>window.location.href='index.html'</script>";
                    }
                    else{
                        echo "<p class='text-danger'>Invalid Username or Password</p>";
                    }
                }
                ?>
            <form action="#" method="post">
                <p>User Name</p>
                <div class="user">
                    <i class="fa-solid fa-user"></i>
                    <input type="text" name="username" placeholder="User Name" class="username">
                </div>

                <p class="passworg_tag">Password</p>
                <div class="password">
                    <i class="fa-solid fa-lock"></i>
                    <input type="text" name="password" placeholder="Password">
                </div>

                <a href="./createaccount.php"><p class="forget">Create Account</p></a>

                <button type="submit" name="sitelogin">Login</button>
                <div class="loging_icon">
                    <a href="#"><img src="image/google.png"></a>
                    <a href="#"><img src="image/facebook.png"></a>
                    <a href="#"><img src="image/twitter.png"></a>
                </div>

            </form>

        </div>

    </div>

</body>
</html>