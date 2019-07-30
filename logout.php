<?php
    session_start();
    if(session_destroy()){
        header('location:customer_login.php');
    }

?>