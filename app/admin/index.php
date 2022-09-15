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
  <?php
  $login = mysqli_query($koneksi, "select * from t_user");
  $d = mysqli_fetch_array($login);
  if (isset($_GET['data'])) {
    if ($_GET['data'] == 'table-user') {
      echo include 'table_user.php';
    } elseif ($_GET['data'] == 'table siswa') {
      echo include 'table_siswa.php';
    }
  }

  if (isset($_GET['id'])) {
    if ($_GET['id']) {
      echo include './edit/edit_user.php';
    }
  }
  if (isset($_GET['nis'])) {
    if ($_GET['nis']) {
      echo include './edit/edit_siswa.php';
    }
  }

  ?>

</body>

</html>