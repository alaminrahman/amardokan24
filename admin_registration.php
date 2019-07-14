


<?php

    include 'connect.php';
    //phpmailer build in library
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    //aii fil gula phpmailer folder a ace
    require 'phpmailer/src/Exception.php';
    require 'phpmailer/src/PHPMailer.php';
    require 'phpmailer/src/SMTP.php';
    //$admin_id = "$_POST['']";


    $error = '';
    $length = '';
    $check_pass = '';
    $check_email = '';


    if(isset($_POST['register'])){

    $name =mysqli_escape_string($conn,$_POST['name']) ;
    $email = mysqli_escape_string($conn,$_POST['email']);
    $password =mysqli_escape_string($conn,$_POST['pass']);
    $con_password = mysqli_escape_string($conn,$_POST['con_pass']);
    $dob = mysqli_escape_string($conn,$_POST['date_of_birth']);
    $contact =mysqli_escape_string($conn,$_POST['contact']);

    //validation email already exits
    $email_exits = "SELECT email FROM admin_reg_table WHERE email = '$email'";
    $email_exits_query = mysqli_query($conn, $email_exits);


         if(mysqli_num_rows($email_exits_query)>0){
            $check_email = "This Email Address Already Exits. Pls try another one";
         }

         elseif(empty($name) || empty($email) || empty($password) || empty($con_password)  || empty($dob) || empty($contact)  ){

            $error = "Please input this filed";

         }
         elseif(strlen($name)<5){
            $length = "Name character must be 6 digit";
         }
         elseif ($password!=$con_password) {
            $check_pass = "Confirm Password not match";
         }
         else{

            $password = md5($password);

            $vkey = md5(time().$email);

           // echo "<script>alert('$vkey')</script>";


            $sql = "INSERT INTO admin_reg_table (name,email,pass,con_pass,dob,contact,v_key,v_status)VALUES('$name','$email','$password','$con_password','$dob','$contact','$vkey',0)";
            $query = mysqli_query($conn,$sql);

            if($query){
                $mail = new PHPMailer; //this is object
                /*set phpmailer to use smtp*/
               $mail->isSMTP();
               //this is fixed
                $mail->Host = "smtp.gmail.com";
                $mail->SMTPAuth = true;
                $mail->Username ="sonjoyroy128@gmail.com";
                $mail->Password = "adhkaroy";

                $mail->SMTPSecure = "tls";
                $mail->Port = 587;
                $mail->From = "sonjoyroy128@gmail.com";
                $mail->FromName = "Al-amin";


                $mail->addAddress($email,"Al-amin here");
                $mail->isHTML(true);
                $mail->Subject = "Email Verification From" ;

                $mail->Body = "<a href='http://localhost/AmarDokan/verify.php?v_key=$vkey'>Click to Verify Now</a>";

                if(!$mail->send()){
                    echo "Mailer Error".$mail->ErrorInfo;
                }
                else{
                    echo"<script>alert('Verification has been sent successfully')</script>";
                }
                header("location:success.php");

            }
             else{
                echo mysqli_error($conn);
                    //echo "<script>alert('Something wen wrong')</script>";
                }

            //echo "<script>alert('Registration Successful')</script>";
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
    <link href="css/registration.css" rel="stylesheet">
    <link href="css/fontawesome.css" rel="stylesheet">
    <link href="css/fontawesome.min.css" rel="stylesheet">
    

    <title>Admin Registration Form</title>
  </head>
  <body>
   
   
    <section class="registration_sec">
        <div class="container">
            <div class="row">
                <div class=" col-md-6 ">
                    <div class="form">
                        
                     <form method="POST" action="?">
                     
                      <div class="form_pad">
                        <h1>Admin Register</h1>
                        <p>Please fill in this form to create an account.</p>
                        <hr>
                        

                        <div class="form-group">
                            <label for="search"><b>Search</b></label>
                            <input type="text" placeholder="Search" name="search">
                           

                        <div class="form-group">
                             
                            <label for="name"><b>Full Name</b></label>
                            <input type="text" placeholder="Enter your name" name="name" >
                            <span class="text text-danger"><?=$error?> <?=$length?></span>
                        </div>
                        
                       
                       

                       
                       
                        <div class="form-group">
                            <label for="email"><b>Email</b></label>
                            <input type="text" placeholder="Enter Email" name="email" >
                           <span class="text text-danger"><?=$error?> <?=$check_email?></span>
                       </div>

                        
                        <div class="form-group">
                           <label for="psw"><b>Create Password</b></label>
                            <input type="password" placeholder="Enter Password" name="pass" >       
                            <span class="text text-danger"><?=$error?></span>                    
                       </div>

                       
                        <div class="form-group">
                            <label for="psw-repeat"><b>Confirm Password</b></label>
                            <input type="password" placeholder="Confirm Password" name="con_pass" >  
                            <span class="text text-danger"><?=$error?> <?=$check_pass?></span>                     
                       </div>

                        
                        
                        <div class="form-group">
                           <label for="birth"><b>Date of Birth</b></label>
                            <input type="date" placeholder="" name="date_of_birth">     
                            <span class="text text-danger"><?=$error?></span>                      
                       </div>

                       
                        <div class="form-group">
                            <label for="contact"><b>Contact Number</b></label>
                            <input type="text" placeholder="Enter your contact number" name="contact" >     
                            <span class="text text-danger"><?=$error?></span>                      
                       </div>

                        
                        <div class="form-group">
                           <label for="photo"><b>Photo</b></label>
                            <input type="file" placeholder="" name="photo" >
                            <span class="text text-danger"><?=$error?></span>
                           
                       </div>
                        <hr>

                        <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
                        
                        <button type="submit" class="registerbtn" name="register">Register</button>
                        
                        <button type="delete" class="deletebtn">Delete</button>

                       <button type="update" class="updatebtn">Update</button>

                       <button type="view" class="viewbtn">View</button>
                        
                        <button type="reset" class="resetbtn">Reset</button>

                        
                      </div>

                      <div class="container signin">
                        <p>Already have an account? <a href="admin_login.php">Sign in</a>.</p>
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