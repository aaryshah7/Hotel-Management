<?php
  include 'admin_con.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" 
    integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <title>Customer information</title>
</head>
<body style="background-image:url('tablexy.jpg');  background-size: cover;">
<br><br>
    <div class="container">
        <button class="btn btn-info my-5"><a href="admin-register.php" class="text-light">Add User</a></button>
      <br><br><br>
      <table class="table">
  <thead>
    <tr>
        <th scope="col">Customer Name</th>
        <th scope="col">Email</th>
        <th scope="col">Phone Number</th>
        <th scope="col">Check-in date</th>
        <th scope="col">Check-out date</th>
        <th scope="col">Room type</th>
        <th scope="col">Number of adults</th>
        <th scope="col">Number of children</th>
    </tr>
  </thead>
  <tbody>
    <?php 
    $sql = "SELECT `name`, `email`, `phone`, `check_in`, `check_out`, `room_type`, `adults`, `children` FROM `register`";
    $result = mysqli_query($con,$sql);
    if($result){
      while($row = mysqli_fetch_assoc($result)){
        $name=$row['name'];
        $email=$row['email'];
        $phone=$row['phone'];
        $checkin=$row['check_in'];
        $checkout=$row['check_out'];
        $roomtype=$row['room_type'];
        $adults=$row['adults'];
        $children=$row['children'];
        echo '<tr>
              <th scope="row">'.$name.'</th>
              <td>'.$email.'</td>
              <td>'.$phone.'</td>
              <td>'.$checkin.'</td>
              <td>'.$checkout.'</td>
              <td>'.$roomtype.'</td>
              <td>'.$adults.'</td>
              <td>'.$children.'</td>
              </tr>';
      }
    }
    ?>
    
  </tbody>
</table>
    </div>
</body>
</html>