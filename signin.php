
<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Feastly Sign In</title>
    <link rel="stylesheet" href="signin.css" />
  </head>
  <body>
    <div class="container">
      <div class="form-section">
        <div class="logo">
          <h1>Feastly</h1>
        </div>
        <h2>Welcome back!</h2>
        <p>Log in to Access Your Account and Continue Exploring</p>

        <?php
    $con = mysqli_connect('localhost','root','','restaurant_website');
    if (!$con) {
        echo'Not connected';
    }else{
        if ($_SERVER['REQUEST_METHOD']=='POST') {
            $email = $_POST['email'];
            $password = $_POST['password'];

            $select = "SELECT * FROM user_details WHERE email = '$email' AND password = '$password'";
            $logintbl = mysqli_query($con,$select);
            $rw=mysqli_fetch_assoc($logintbl);

            if (mysqli_num_rows($logintbl) > 0) {
                    if ($rw['email']== $email && $rw['password']==$password) {
                    $_SESSION["email"] = $email;
                    $_SESSION['loggedin'] = true;
                    echo"<div class='alert-success'>
                    <span>You've successfully logged in.</span>
                </div>";

                      echo' <script>
                    // Redirect to index.php after 2 seconds 
                    setTimeout(function() {
                        window.location.href = "index.php";
                    }, 2000);
                    </script>';
                    }else {
                    echo"<div class='alert-error'>
                    <span>Invalid username or password</span>
                </div>";
                 }
          
            }else{
                echo"<div class='alert-error'>
                <span>Invalid username or password</span>
            </div>";

            }
                }            
            }
    ?>
        <form method="post" action="signin.php">
          <input type="email" placeholder="Email" required name="email" />
          <input type="password" placeholder="Password" required name="password" />

          <div class="options">
            <label> <input type="checkbox" /> Remember me </label>
            <a href="#" class="forgot-password">Forgot password?</a>
          </div>

          <button type="submit" class="signin-btn">Sign In</button>

          <p class="signup-text">
            Don't have an account? <a href="SignUp.html">Sign Up</a>
            <td></td>
            <a href="index.html">Home</a>
          </p>
        </form>
      </div>
      <div class="image-section">
        <img src="./images/item2.jpg" alt="Food Image" />
      </div>
    </div>
  </body>
</html>