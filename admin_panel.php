

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

                    <table class="table">
                            <thead class="thead-dark">
                              <tr>
                                <th class="hoverr" scope="col">Admin List</th>
                                <th scope="col">admin_id</th>
                                <th scope="col">admin_name</th>
                                <th scope="col">email</th>
                                <th scope="col">password</th>
                                <th scope="col">mobile</th>
                                <th scope="col">address</th>
                                <th scope="col">country</th>
                                <th scope="col">birthday</th>
                                <th scope="col">picture</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <th class="hoverr" style="background: rgb(37, 37, 54); color: white;" scope="row">View Customer</th>
                                <td >admin_name</td>
                                <td>Otto</td>
                                <td>@mdo</td>                                
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                                <td>@mdo</td>                                
                                <td>@mdo</td>
                                <td>@mdo</td>

                              </tr>
                              <tr>
                                <th class="hoverr" style="background: rgb(37, 37, 54); color: white;" scope="row">Add Customer</th>
                                <td>email</td>
                                <td>Otto</td>
                                <td>@mdo</td>                                
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                                <td>@mdo</td>                                
                                <td>@mdo</td>
                                <td>@mdo</td>
                              </tr>

                              <tr>
                                <th class="hoverr" style="background: rgb(37, 37, 54); color: white;" scope="row">Add Product</th>
                                <td>password</td>
                                <td>Otto</td>
                                <td>@mdo</td>                                
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                                <td>@mdo</td>                                
                                <td>@mdo</td>
                                <td>@mdo</td>
                              </tr>

                              
                              <tr>
                                    <th class="hoverr" style="background: rgb(37, 37, 54); color: white;" scope="row">View Order</th>
                                    <td>mobile</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>                                
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                    <td>@mdo</td>                                
                                    <td>@mdo</td>
                                    <td>@mdo</td>
                                  </tr>

                                  
                              <tr>
                                    <th class="hoverr" style="background: rgb(37, 37, 54); color: white;" scope="row">Today Order Delivery</th>
                                    <td>address</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>                                
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                    <td>@mdo</td>                                
                                    <td>@mdo</td>
                                    <td>@mdo</td>
                                  </tr>

                                  
                              <tr>
                                    <th class="hoverr" style="background: rgb(37, 37, 54); color: white;" scope="row">Today Order Pending</th>
                                    <td>country</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>                                
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                    <td>@mdo</td>                                
                                    <td>@mdo</td>
                                    <td>@mdo</td>
                                  </tr>

                                  
                              <tr>
                                    <th class="hoverr" style="background: rgb(37, 37, 54); color: white;" scope="row">Total Delivery</th>
                                    <td>Birthday</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>                                
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                    <td>@mdo</td>                                
                                    <td>@mdo</td>
                                    <td>@mdo</td>
                                  </tr>

                                  
                              <tr>
                                    <th class="hoverr" style="background: rgb(37, 37, 54); color: white;" scope="row">Total Pending</th>
                                    <td>Picture</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>                                
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                    <td>@mdo</td>                                
                                    <td>@mdo</td>
                                    <td>@mdo</td>
                                  </tr>

                                  
                              <tr>
                                    <th class="hoverr" style="background: rgb(37, 37, 54); color: white;" scope="row">Total Cancel Order</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>                                
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                    <td>@mdo</td>                                
                                    <td>@mdo</td>
                                    <td>@mdo</td>
                                  </tr>

                              
                            </tbody>
                          </table>


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