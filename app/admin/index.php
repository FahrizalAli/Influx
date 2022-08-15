<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- STYLE CSS -->
    <link rel="stylesheet" href="style.css" />
    <!-- BOXICONS -->
    <link rel="stylesheet" href="./assets/boxicons/css/boxicons.css">
    <title>Influx</title>
  </head>
  <body>
<?php 
  session_start();
  if($_SESSION['status'] != 'login'){
    header("location:../index.php?data=belum_login");
  }
?>
<div class="container_alert" id="con">
<div class="alert">
  <p>Welcome to admin dashboard</p>
  <i class='bx bx-x' style='color:#fff' onclick="remove()"></i>
</div>
</div>
    <header>

      <div class="container_header">
        <div class="main_content">
          <div class="bulat"></div>
         
          <!-- <i class="bx bxs-bolt-circle"></i> -->
          <h1><a href="https://smknegeri7batam.sch.id/" target="_blank">SMKN7</a>
          </h1>
        </div>
        <div class="navlink">
          <ul>
            <li class="nav-item garis">Plugins</li>
            <li class="nav-item garis"><a href="../princing/index.php">Princing</a></li>
            <li class="nav-item garis">Help</li>
          </ul>
        </div>
        <div class="sidemenu">
          <a href="../admin/add/index.php">Register</a>
          <a href="../logout.php" class="button" onclick="return confirm('Are you sure want to Logout?')">Logout</a>
          <i class="bx bxs-widget"></i>
        </div>
      </div>
      
    </header>
   
    <!-- LORDICON -->
    <script src="https://cdn.lordicon.com/xdjxvujz.js"></script>
    <!-- JAVA SCRIPT -->
    <script src="script.js"></script>
  </body>
</html>
