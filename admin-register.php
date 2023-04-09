<!DOCTYPE html>
<!-- Created By CodingLab - www.codinglabweb.com -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <!---<title> Responsive Registration Form | CodingLab </title>--->
    <link rel="stylesheet" href="register1.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="container">
    <div class="title">Hotel Registration</div>
    <div class="content">
      <form action="admin-register-backend.php" method="post">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Full Name</span>
            <input type="text" placeholder="Enter your name" name="name" required>
          </div>
          <div class="input-box">
            <span class="details">Email</span>
            <input type="text" placeholder="Enter your email" name="email" required>
          </div>
          <div class="input-box">
            <label for="checkin">Check-in date:</label>
            <input type="date" id="checkin" name="checkin" required>
          </div>
          <div class="input-box">
            <label for="checkout">Check-out date:</label>
            <input type="date" id="checkout" name="checkout" required>
          </div>
          <div class="input-box">
            <span class="details">Phone Number</span>
            <input type="text" placeholder="Enter your number" name="phone"  required>
          </div>
          <div class="input-box">
            <label for="roomtype">Room type:</label><br>
            <div class="mybox">
            <select id="roomtype" name="roomtype" required>
              <option value="standard">Standard</option>
              <option value="deluxe">Deluxe</option>
              <option value="suite">Suite</option>
            </select>
            </div>
          </div>
          <div class="input-box">
            <label for="adults">Number of adults:</label>
            <input type="number" placeholder="1" id="adults" name="adults" min="1" max="10" required>
          </div>
          <div class="input-box">
            <label for="children">Number of children:</label>
            <input type="number" placeholder="0" id="children" name="children" min="0" max="10" required>
          </div>
        </div>
        
        <div class="button">
          <input type="submit" value="Book Now" name="submit">
        </div>
      </form>
    </div>
  </div>

</body>
</html>
