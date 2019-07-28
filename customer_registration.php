
<?php

    include 'connect.php';


    $error = '';
    $email_exits = '';
    $check_pass= '';
    $exists_query ='';


   if(isset($_POST['register'])){

    $name = $_POST['name'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $address = $_POST['address'];
    $password = $_POST['password'];
    $con_pass = $_POST['con_pass'];

   
    $sql = "SELECT * FROM customer_reg_table WHERE email == '$email' ";
    $exists_query = mysqli_query($conn,$sql);


    if(empty($name) || empty($email) || empty($contact) || empty($address) || empty($password) || empty($con_pass)){

        $error = "This filed is empty";
       
    }


    elseif($exists_query){
        $email_exits = "This email already exists";
        
    }

   
    elseif ($password !==$con_pass) {
       $check_pass = 'Confirm password not match';
    }
    else{
        $add_data_sql = "INSERT INTO customer_reg_table (name,email,contact,address,pass,con_password)VALUES('$name','$email','$contact','$address','$password','$con_pass')";
        $query = mysqli_query($conn,$add_data_sql);

        if($query){
            header('location:customer_login.php');
            echo "<script>alert('Registraion Success!')</script>";
        }
        else{
            echo "<script>alert('Something went to wrong!')</script>";
        }
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
    <link href="css/customer_registration.css" rel="stylesheet">
    <link href="css/fontawesome.css" rel="stylesheet">
    <link href="css/fontawesome.min.css" rel="stylesheet">
    

    <title>Customer Registration Form</title>
  </head>
  <body>
   
   
    <section class="Cus_registration_sec">
        <div class="container">
            <div class="row">
                <div class=" col-md-6 ">
                    <div class="form">
                        
                     <form method="POST" action="?">
                     
                      <div class="form_pad">
                        <h1>Customer Register</h1>
                        <p>Please fill in this form to create an account.</p>
                        <hr>
                        
                       
                        
                        <label for="name"><b>Full Name</b></label>
                        <input type="text" placeholder="Enter your name" name="name" >

                        <span style="color: red;"><?=  $error ?></span>
                       <br/>
                       
                        <label for="email"><b>Email</b></label>
                        <input type="text" placeholder="Enter Email" name="email" > 
                        <span style="color: red;"><?=  $error ?> <?= $email_exits ?></span>

                        <br/>
                        <label for="contact"><b>Contact Number</b></label>
                        <input type="text" placeholder="Enter your contact number" name="contact" >
                        <span style="color: red;"><?=  $error ?></span>
                        
                        <br/>
                        <label for="address"><b>Address</b></label>
                        <input type="text" placeholder="Enter your address" name="address" >
                        <span style="color: red;"><?=  $error ?></span>
                        
                        <br/>
                        <label for="psw"><b>Create Password</b></label>
                        <input type="password" placeholder="Enter Password" name="password">
                        <span style="color: red;"><?=  $error ?> </span>

                        <br/>
                        <label for="psw-repeat"><b>Confirm Password</b></label>
                        <input type="password" placeholder="Confirm Password" name="con_pass">
                        <span style="color: red;"><?=  $error ?> <?=$check_pass?></span>
                                    
                        <br/>
                        <label for="photo"><b>Photo</b></label>
                        <input type="file" placeholder="" name="photo">
                        
                        <hr>

                        <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
                        
                        <button type="submit" name="register" class="registerbtn">Register</button>
                        
                        
                        <button type="reset" class="resetbtn">Reset</button>

                        
                      </div>

                      <div class="container signin">
                        <p>Already have an account? <a href="customer_login.php">Sign in</a>.</p>
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
    
    
  </body>
</html>