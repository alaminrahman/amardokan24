


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link href="img/logo.png" rel="shortcut icon">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/admin_panel.css" rel="stylesheet">
    

    <title>Admin Panel</title>
  </head>
  <body>

  <?php
  /*----------------------navbar------------------------*/

     include 'layouts/navbar.php'
  ?>
    
    <section class="admin_panel_sec">
        <div class="container">
            <div class="row">

                 <div class="col-md-3">
                     <div class="left_side" >
                         <ul>
                            <hr/>
                             <li><a href="admin_panel.php">Admin List</a></li>
                             <hr/>
                             <li><a href="view_customer.php">View Customer</a></li>
                             <hr/>
                             <li><a href="#">Add Customer</a></li>
                             <hr/>
                             <li><a href="#">Add Prodcut</a></li>
                             <hr/>
                             <li><a href="#">View Order</a></li>
                             <hr/>
                             <li><a href="#">Today Delivery Order</a></li>
                             <hr/>
                             <li><a href="#">Today Order Pending</a></li>
                             <hr/>
                             <li><a href="#">Total Delivery</a></li>
                             <hr/>
                             <li><a href="#">Total Pending</a></li>
                             <hr/>
                             <li><a href="#">Cancel Order</a></li>
                             <hr/>

                         </ul>
                     </div>
                 </div>

                <div class="col-md-9">

                    <table class="table">
                            <thead class="thead-dark">
                              <tr>
                              
                                <th scope="col">admin_id</th>
                                <th scope="col">admin_name</th>
                                <th scope="col">email</th>                               
                                <th scope="col">mobile</th>
                                <th scope="col">address</th>                           
                                <th scope="col">picture</th>
                              </tr>
                            </thead>
                           


                            <tbody>

                        <?php 

                            include 'connect.php';

                            $sql = "SELECT * FROM admin_reg_table";
                            $query = mysqli_query($conn,$sql);

                            if($query){
                                if(mysqli_num_rows($query)>0){
                                    while ($row = mysqli_fetch_assoc($query)) {
                                        
                                  


                        ?>

                              <tr>
                                
                                <td><?php echo $row['admin_id'] ?></td>
                                <td><?php echo $row['name'] ?></td>
                                <td><?php echo $row['email'] ?></td>                                
                            
                                <td><?php echo $row['contact'] ?></td>
                                <td><?php echo $row['address'] ?></td>
                                <td></td>                                
                              

                              </tr>
                            
                        <?php
                              }
                                }
                            }

                        ?>
                                  
                             

                              
                            </tbody>
                          </table>
                          </div>






            </div>
        </div>
    </section>
    





    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="js/jQuery.js" type="text/javascript"></script>

    <!--manual javascript here-->

    


  </body>
</html>