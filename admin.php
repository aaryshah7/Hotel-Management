<?php 
    require("admin_con.php");
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login page</title>
    <script src="https://kit.fontawesome.com/421e558d95.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="log-in.css">
    <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT"
    crossorigin="anonymous"
  />
</head>
<body>
    <div class="bg-image">
     <div class="new1">

        
     </div>  
    <div class="content">
        <div class="new1">


        </div>
        <header>Admin login page</header>
        <form method="post">
        <div class="field">
                <span class="fa fa-user"></span>
                <input type="text" required placeholder="Admin name" name="adminname"/>
                <span class="show">Show</span>
            </div>  <br>
          
            
            <div class="field space">
                <span class="fa fa-lock"></span>
                <input type="password" class="pass-key" required placeholder="Password" name="adminpassword"/>
                <span class="show">Show</span>
            </div>
              
            <br>
            <div class="field">
                <input type="submit" value="login" name="singin" />
            </div>

            </div>
        </form>
       
    <?php 
        if(isset($_POST['singin'])){
            $query = "SELECT * FROM `admin_login` WHERE 'Admin_Name'='.$_POST[adminname].' AND 'Admin_Password'='.$_POST[adminpassword].' ";
            $result = mysqli_query($con,$query);
            if(mysqli_num_rows($result)<=1){
                session_start();
                $_SESSION['AdminLoginId']=$_POST['adminname'];
                header("location: admin_panel.php");
            }else{
                echo "<script>alert('Incorrect Password') </script>";
            }
        }
    ?>
      
    </div>
    <script
  src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8"
  crossorigin="anonymous"
></script>
</body>
</html>




