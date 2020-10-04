<?php

if(isset($_GET['name'])){

    $con = mysqli_connect('fdb30.atspace.me', '3530951_wish','asdfghjkl123','3530951_wish');

    if(!$con)
    {
        die("Connection Error" . mysqli_connect_error());
    }
    // else{
    // echo "Success";
    // }

    $name = $_GET['name'];
    $email = $_GET['email'];
    $phone = $_GET['phone'];
    $message = $_GET['message'];

    $sql = "INSERT INTO `wish`.`message` (`name`,`email`,`phone`,`message`,`date`) VALUES ('$name', '$email', '$phone', '$message', current_timestamp());";
    // echo $sql;

    if($con->query($sql) == true)
    {
        echo "";
    }
    // else
    // {
    //     echo "ERROR: $sql <br> $con->error";
    // }
    $con->close();
}
?>