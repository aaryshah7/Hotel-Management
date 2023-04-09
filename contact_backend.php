<?php 
require_once("register_conn.php");
if(isset($_POST['submit'])){
    $name = mysqli_real_escape_string($con,$_POST['name']);
    $email = mysqli_real_escape_string($con,$_POST['email']);
    $phone = mysqli_real_escape_string($con,$_POST['phone']);
    $message = mysqli_real_escape_string($con,$_POST['message']);
    
    $sql = "INSERT INTO `contact_us`(`name`, `email`, `phone`, `message`) VALUES ('$name','$email','$phone','$message')";
    $result = mysqli_query($con,$sql);
    if($result){
        header("location:done.html");
    }else{
        echo "Your room is not book";
    }
}
?>