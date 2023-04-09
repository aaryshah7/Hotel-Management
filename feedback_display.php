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
    <title>Feedbacks</title>
</head>
<body style="background-image:url('tablexy.jpg');  background-size: cover;">
<bt><br><br><br><br>
    <div class="container">
    
<table class="table" >
  <thead>
    <tr>
        <th scope="col">User Name</th>
        <th scope="col">Email</th>
        <th scope="col">Phone Number</th>
        <th scope="col">Feedbacks</th>
    </tr>
  </thead>
    <tbody>
        <?php
            $sql = "SELECT `name`, `email`, `phone`, `message` FROM `contact_us`";
            $result = mysqli_query($con,$sql);
            if($result){
                while($row = mysqli_fetch_assoc($result)){
                    $name=$row['name'];
                    $email=$row['email'];
                    $phone=$row['phone'];
                    $message=$row['message'];
                    echo '<tr>
                        <th scope="row">'.$name.'</th>
                        <td>'.$email.'</td>
                        <td>'.$phone.'</td>
                        <td>'.$message.'</td>
                        </tr>';
                }
            }
        ?>
    </tbody>
        </table>
        </div>
</body>
</html>