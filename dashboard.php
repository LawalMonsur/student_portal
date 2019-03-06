<?php
session_start();
$username = @$_SESSION['msg'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" media="screen" href="main.css">
  <title>Welcome to your Dashboard.</title>
</head>
<body>
<div class="container bg-light">
  <div class="row">

    <div class="col-md-3 col-sm-3 col-xs-12">
    <img src="img/user.png" alt="" class="img img-responsive img-circle">
    <div class="links pt-5">
      <p class=""><a href="">Dashboard</a></p>
      <p class=""><a href="">Biodata</a></p>
      <p class=""><a href="">Edit Biodata</a></p>
      <p class=""><a href="">Course Registration</a></p>
      <p class=""><a href="">Change Password</a></p>
    </div>
    </div>
    <div class="col-md-9 col-sm-9 col-xs-12">
    <h2>Welcome to your Dashboard: <?php echo $username['Username']; ?></h2>
    </div>
  </div>
</div>

</body>
</html>