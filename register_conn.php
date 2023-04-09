<?php

$sname = "localhost";
$uname = "root";
$password = "";
$db_name = "sgp_project";
$con = mysqli_connect($sname, $uname, $password, $db_name);
if(!$con){
    echo "connection failed";
}
 ?>