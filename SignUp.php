<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Feastly Sign Up</title>
    <link rel="stylesheet" href="SignUp.css" />
  </head>
  <body>
    <div class="container">
      <div class="form-section">
        <div class="logo">
          <h1>Feastly</h1>
        </div>
        <h2>Get Started!</h2>
        <p>Sign Up to Stay Informed and Engage with Our Network</p>

        <?php
 if ($_SERVER['REQUEST_METHOD']=='POST') {
  $con = mysqli_connect('localhost','root','','restaurant_website');
    if (!$con) {
        echo'Not connected';
    }else{

  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $email = $_POST['email'];
  $password = $_POST['password'];

  $sql = "INSERT INTO user_details (firstname,	lastname,	email,	password) 
  VALUES ('$firstname', '$lastname',  '$email',  '$password')";

   $query = mysqli_query($con,$sql);
   if($query){
    echo"<div class='alert-success'>
    <span>Your account has been successfully created.</span>
</div>";

      echo' <script>
    // Redirect to addstudent.php after 2 seconds
    setTimeout(function() {
        window.location.href = "index.php";
    }, 3000);
    </script>';
 
   }else{
  
    echo"<div class='alert-error'>
    <span>Signup failed. Please check your details and try again.</span>
</div>";

  
   }

    }
 }



?>
        <form method="post" action="signUp.php">
          <div class="input-group">
            <input type="text" placeholder="First Name" required name="firstname" />
            <input type="text" placeholder="Last Name" name="lastname" required />
          </div>
          <input type="email" placeholder="Email" name="email" required />
          <input type="password" placeholder="Password"  name="password"required />
       
          <input type="submit" class="signup-btn" value="Sign Up">
          <p class="login-text">
            Already have an account? <a href="signin.php">Sign in</a>
          </p>
        </form>
      </div>
      <div class="image-section">
        <img src="./images/item1.jpg" alt="Burger Image" />
      </div>
    </div>
  </body>
</html>

