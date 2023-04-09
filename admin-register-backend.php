<?php
require_once("register_conn.php");
if(isset($_POST['submit'])){
    $name = mysqli_real_escape_string($con,$_POST['name']);
    $email = mysqli_real_escape_string($con,$_POST['email']);
    $phone = mysqli_real_escape_string($con,$_POST['phone']);
    $check_in = mysqli_real_escape_string($con,$_POST['checkin']);
    $check_out = mysqli_real_escape_string($con,$_POST['checkout']);
    $adults = mysqli_real_escape_string($con,$_POST['adults']);
    $children = mysqli_real_escape_string($con,$_POST['children']);
    $room_type = mysqli_real_escape_string($con,$_POST['roomtype']);

    $sql = "INSERT INTO `register`(`name`, `email`, `phone`, `check_in`, `check_out`, `adults`, `children`, `room_type`) VALUES ('$name','$email','$phone','$check_in','$check_out','$adults','$children','$room_type')";
    $result = mysqli_query($con,$sql);
    if($result){
        header("location:register_user.php");
    }else{
        echo "Your room is not book";
    }
}
?>