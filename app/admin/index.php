<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="user.css">
  <title>Document</title>

</head>
<body>
  <?php include 'header.php';
  include '../koneksi.php'
  ?>
  <div class="container">
    <div class="user_container">
      <table class="table">
      <thead>
        <tr>
          <th>Password</th>
          <th>Username</th>
          <!-- <th></th> -->
          <th>Level</th>
          <th>Action</th>
        </tr> 
      </thead>
      <tbody><?php 
        $login = mysqli_query($koneksi,"select * from t_user");
        while($d = mysqli_fetch_array($login)){
        ?>
        <tr>
          <td><?php echo $d['password']; ?> </td>
          <td><?php echo $d['username']; ?></td>
          <td><?php echo $d['level']; ?></td>
          <td>
          <a href="edit.php?=<?php echo $d['username'] ?>" class="button">Edit</a>
          <a href="delete.php?=<?php echo $d['username'] ?>" class="button">Delete</a>
          </td>
        </tr>
        <?php 
        }
        ?></tbody>
       
      </table>
    </div>
  </div>
</body>
</html>