<?php

    include 'connect.php';
    session_start();

    $user_check = $_SESSION['login_user'];
    $sql = "SELECT * FROM customer_reg_table WHERE email = '$user_check' ";
    $query = mysqli_query($conn,$sql);

    $row = mysqli_fetch_assoc($query);

    $login_session = $row['name'];
    $contact = $row['contact'];
    $address = $row['address'];
    $email = $row['email'];


?>