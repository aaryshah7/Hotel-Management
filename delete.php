<?php
    include 'admin_con.php';
    if(isset($_GET['deleteid'])){
        $id=$_GET['deleteid'];
        $sql="DELETE FROM `login` WHERE id=$id";
        $result = mysqli_query($con,$sql);
        if($result){
            header('location:singup_user.php');
        }
    }
?>