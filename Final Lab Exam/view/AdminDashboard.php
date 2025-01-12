<?php
  session_start();

  // Check if admin is logged in
  if(!isset($_SESSION['flag'])){
    header('location: AdminLogin.php');
    exit(); // Stop further execution
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
  

</head>
<body>
<div class="header">
  <form action="Dashboard.php" method="post">
    
  </form>
  <h1 style="color:#59D5E0;">Welcome <?php echo $_SESSION['username'];?>!</h1>
  <form action="../Controller/Logout.php" method="post">
  <button type="submit" class="logout-button"><b>Logout</b></button>
  </form>

</div>



  <div class="content">
    <center>
      <fieldset>
        <table>
          <tr>
          <td><form action="../view/UserDisplay.php"><button type="submit">Manage Users</button></form></td>
            
            
          </tr>
          
          <tr>
            
            <td><form action="../view/StaffDisplay.php"><button type="submit">Manage Staffs</button></form></td>
          </tr>
          <tr>
            
            <td><form action="../view/StaffDisplay.php"><button type="submit">Search Staffs</button></form></td>
          </tr>

          
        </table>

      </fieldset>
    </center>
  </div>

</body>
</html>
