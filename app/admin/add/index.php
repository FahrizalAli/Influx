<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="../assets/boxicons/css/boxicons.css">
</head>
<body>
<img class="wave" src="../assets/img/wave.png" alt="">
    <div class="container">
        <div class="img">
            <img src="../assets/img/bg.svg" alt="">
        </div>
     <div class="container_content"> 
        <form action="login.php" method="POST">
            <img src="../assets/img/avatar.svg" alt="">
            <h2 class="main_text">Register</h2>
            <div class="container_input">
                <div class="i">
                 <i class='bx bxs-user bx-tada-hover'></i>
                </div>
             <div>
                    <input type="text"  placeholder="Username" name="username">
                </div>
            </div>
            <div class="container_input input2">
                <div class="i">
                <i class='bx bxs-lock-alt bx-tada-hover '></i>
                </div>
                <div>
                    <input type="password"  placeholder="Password" name="password" >
                </div>
            </div>
           <div class="container_input input3">
                <div class="i">
                <i class='bx bxs-label'></i>
                </div>
                <div>
                    <input type="text" placeholder="Level" disabled>
                </div>
           </div>
           <div class="container_checkbox">
                <div class="checkbox1">
                    <input  type="checkbox">
                    <label for="">Admin</label>
                </div>
                <div class="checkbox2">
                <input  type="checkbox">
                    <label for="">Walas</label>
                </div>
                <div class="checkbox3">
                <input  type="checkbox">
                    <label for="">Guru-Piket</label>
                </div>
           </div>
           <a href="../index.php" class="forgot">Back to dashboard?</a>
            <button type="submit" class="btn">Register</button>
            </form>
        </div>
    </div>
 </div>
</body>
</html>