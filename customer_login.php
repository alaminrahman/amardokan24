
<?php 

  include 'connect.php';



session_start();

//atar jonno login howar por r back hobe na
if(isset($_SESSION['login_user'])){
  header('location:customer/cus_profile1.php');
}
if(isset($_POST['login'])){
 
  $email = mysqli_real_escape_string($conn,$_POST['email']);
  $password = mysqli_real_escape_string($conn,$_POST['password']);

    $sql = "SELECT * FROM customer_reg_table WHERE email = '$email' AND pass = '$password'";
    $query = mysqli_query($conn,$sql);

    if(mysqli_num_rows($query)>=1){

        $_SESSION['login_user']=$email;      

       // header('location:cus_profile.php');
        header('location:customer/cus_profile1.php');

      
    }
    else{
      echo "Wrong";
    }

}



?>







<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/customer_login.css" rel="stylesheet">
    <link href="css/fontawesome.css" rel="stylesheet">
    <link href="css/fontawesome.min.css" rel="stylesheet">
    

    <title>Customer Login Form</title>
  </head>
  <body>
   
   
    <section class="login_sec">
        <div class="container">
            <div class="row">
                <div class=" col-md-6 ">
                    <div class="form">
                        <h2 class="text-center">Customer Login</h2>

                      <form method="POST" action="?">
                      <div class="imgcontainer">
                        <img src="img/profile.png" alt="profile" class="avatar">
                      </div>

                      <div class="login_pad">
                        <label for="uname"><b>Email</b></label>
                        <input type="text" placeholder="Enter email" name="email">

                        <label for="psw"><b>Password</b></label>
                        <input type="password" placeholder="Enter Password" name="password">

                        <button type="submit" name="login">Login</button>
                        <button type="text"><a href="customer_registration.php">Create Account</a></button>
                        
                        <label>
                          <input type="checkbox" checked="" name="remember"> Remember me
                        </label>
                      </div>

                      <div class="container" style="background-color:#f1f1f1">
                        <button type="button" class="cancelbtn">Cancel</button>
                        <span class="psw">Forgot <a href="customer_login_forgot.php">password?</a></span>
                      </div>
                    </form>

                    </div>
                     

                    
                    
                </div> <!--col end-->
            </div><!--row end-->
        </div><!--container end-->
    </section>
    
    
    
    
    
    
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
    <script src="js/bootstrap.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <script src="js/fontawesome.js" type="text/javascript"></script>
    <script src="js/fontawesome.min.js" type="text/javascript"></script>
    
    <!---login start---->
    <script>
          // Get the modal
    var modal = document.getElementById('id01');

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
      if (event.target == modal) {
        modal.style.display = "none";
      }
    }
    </script>
    
    <!---login end---->
    
    
  </body>
</html>