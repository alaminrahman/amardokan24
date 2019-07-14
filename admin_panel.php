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

    <section class="navbar_sec">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                        <nav class="navbar navbar-expand-lg navbar-light">

                                <a class="navbar-brand" href="index.html">
                                    <img src="img/logo.png" width="160px" height="60px" alt="logo">
                                </a>

                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                  <span class="navbar-toggler-icon"></span>
                                </button>
                              
                                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                  <ul class="navbar-nav  mr-auto">
                                    
                                    <li class="nav-item">
                                      <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                                    </li>

                                    <li class="nav-item">
                                      <a class="nav-link" href="#">MEN</a>
                                    </li>

                                    <li class="nav-item">
                                            <a class="nav-link" href="#">Offer</a>
                                    </li>

                                    
                                    <li class="nav-item">
                                            <a class="nav-link" href="#">About Us</a>
                                    </li>

                                    <li class="nav-item dropdown">
                                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Dropdown
                                      </a>

                                      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="#">Action</a>

                                        <a class="dropdown-item" href="#">Another action</a>

                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                      </div>

                                    </li>

                                    <li class="nav-item">
                                            <a class="nav-link" href="customer_registration.php">Customer Register</a>
                                    </li>

                                    <li class="nav-item">
                                            <a class="nav-link" href="customer_login.php">Login</a>
                                    </li>

                                   
                                  </ul>


                                  <form class="form-inline my-2 my-lg-0">
                                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                                    <button class="btn btn-outline-danger my-2 my-sm-0" type="submit">Search</button>
                                  </form>
                                </div>
                              </nav>

                </div>
            </div>
        </div>
    </section>

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