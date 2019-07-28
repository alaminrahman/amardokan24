<?php
include 'session.php';

?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="cus_profile.css" rel="stylesheet">

    <title>User Profile</title>
  </head>
  <body>
    
     <section class="profile_sec">
       <div class="container">
    
            <div class="row">
                
            <button><a href="../index.php" target="_blank">Logout</a></button>
             
           <div class="card" style="width: 18rem;">
              <img src="p.png" class="card-img-top" alt="profile image">
              
               <div class="card-body">
                   
               
                <h5 class="card-title">Name : <span><?= $login_session; ?></span></h5>
                
                <p class="card-text">Contact: <span><?= $contact; ?></span> </p>
                <p class="card-text">Address: <span><?= $address;?></span> </p>
                
                <a href="#" class="btn btn-primary">Back</a>
                
                
              </div>
              
            </div>
            
            
           
           </div>
            
           </div>
           
          
          
       
       
   </section>
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>

