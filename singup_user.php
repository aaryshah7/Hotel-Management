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
    <title>User information</title>
</head>
<body style="background-image:url('tablexy.jpg');  background-size: cover;">
<br><br>
    <div class="container">
        <button class="btn btn-info my-5"><a href="admin-singin.php" class="text-light">Add User</a></button>
      <br><br><br>
    <table class="table">
  <thead>
    <tr>
        <th scope="col">No.</th>
        <th scope="col">User Name</th>
        <th scope="col">Email</th>
        <th scope="col">Delete User</th>
    </tr>
  </thead>
  <tbody>
    <?php 
    $sql = "SELECT `id`, `name`, `email` FROM `login`";
    $result = mysqli_query($con,$sql);
    if($result){
      while($row = mysqli_fetch_assoc($result)){
        $id=$row['id'];
        $name=$row['name'];
        $email=$row['email'];
        echo '<tr>
              <th scope="row">'.$id.'</th>
              <td>'.$name.'</td>
              <td>'.$email.'</td>
              <td>
                <button class="btn btn-danger my-5"><a href="delete.php? deleteid='.$id.'">Delete</a></button>
              </td>
              </tr>';
      }
    }
    ?>
    
  </tbody>
</table>
</div>
</body>
</html>