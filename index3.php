<!DOCTYPE html>
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
    
 
    <div class="content">
      <!-- <div class="content2">   -->
         <header>login page</header>
        <form action="login.php" method="post">
            <div class="field">
                <span class="fa fa-user"></span>
                <input type="text" required placeholder="user name" name="name"/>
                <span class="show">Show</span>
            </div>  <br>
          
            
            <div class="field space">
                <span class="fa fa-lock"></span>
                <input type="password" class="pass-key" required placeholder="Password" name="password"/>
                <span class="show">Show</span>
            </div>
              
            <div class="pass">
                <a href="index1.php">first you need to sign up</a> <br>
                <a href="admin.php">Admin login</a>
            </div> 
            
            <div class="field">
                <input type="submit" value="login"  />
            </div>
    
            
        </form> 
    <!-- </div> -->
    </div>     
  
    <script
  src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8"
  crossorigin="anonymous"
></script>
</body>
</html>




