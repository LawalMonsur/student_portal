<?php
session_start();
$err = @$_SESSION['errMsg'];
$errEmail = @$_SESSION['errEmail'];
$errNum = @$_SESSION['errNum'];
$errPass = @$_SESSION['errPass'];
$success = @$_SESSION['sucMsg'];
$notSucc =  @$_SESSION['notSuc'];
$userExist = @$_SESSION['errUserExist'];
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Sign Up</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" media="screen" href="main.css">
  <!-- <script src="main.js"></script> -->

  <style>
    .bg {
    background: url('img/signup.jpeg') no-repeat;
    width: 100%;
    height: 100%;
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: cover;
    margin: 0;
  }
  #login {
    margin-top: 80px;
    padding: 60px 40px;
    -webkit-box-shadow: -5px 2px 62px 8px rgba(0,0,0,0.75);
    -moz-box-shadow: -5px 2px 62px 8px rgba(0,0,0,0.75);
    box-shadow: -5px 2px 62px 8px rgba(0,0,0,0.75);
  }
  h1 {
    color: white;
    font-weight: bolder;
    text-align: center;
    margin-top: -20px;
  }
  label {
    font-size: 17px;
    color: white;
  }
  button {
    -webkit-box-shadow: -5px 2px 62px 8px rgba(0,0,0,0.75);
    -moz-box-shadow: -5px 2px 62px 8px rgba(0,0,0,0.75);
    box-shadow: -5px 2px 62px 8px rgba(0,0,0,0.75);
  }
  p.text-center, #signin {
    margin-top: 10px;
    font-size: 15px;
    color: white;
  }
  </style>
</head>
<body>
<div class="container-fluid bg">
  <div class="row">
    <div class="col-md-4 col-sm-4 col-xs-12"></div>
    <div class="col-md-4 col-sm-4 col-xs-12">
      <form action="server_signup.php" id="login" name="myForm" method="post">
        <h1> Sign Up </h1>
        <span class= "text-danger"><?php echo  $err; ?></span>
        <span class= "text-success"><?php echo  $success; ?></span>
        <span class= "text-danger"><?php echo  $notSucc; ?></span>
        <div class="row">
          <div class="form-group col-lg-6">
            <label for="">First Name</label>
            <div class="input-group">
              <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span> </span>
              <input type="text" class="form-control" id="fname" name="txtFirstname" placeholder="First Name">
            </div>
          </div>
          <div class="form-group col-lg-6">
            <label for="">Last Name</label>
            <div class="input-group">
              <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span> </span>
              <input type="text" class="form-control" id="lname" name="txtLastname" placeholder="Surname" >
            </div>
          </div>
        </div> 
        <div class="form-group">
          <label for="">Email</label>
          <div class="input-group">
            <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span> </span>
            <input type="text" class="form-control" id="email" name="txtEmail" placeholder="Email">
          </div>
          <span class= "text-danger"><?php echo $errEmail; ?></span>
        </div>
        <div class="form-group">
        <span class= "text-danger">
          <label for="">Username</label>
          <div class="input-group">
            <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span> </span>
            <input type="text" class="form-control" id="email" name="txtUsername" placeholder="Username">
          </div>
          <span class= "text-danger"><?php echo  $userExist; ?></span>
        </div>
        <div class="form-group">
          <label for="">Contact No</label>
          <div class="input-group">
            <span class="input-group-addon"><span class="glyphicon glyphicon-phone"></span> </span>
            <input type="text" class="form-control" id="phone" name="txtMobile" placeholder="Phone">
          </div>
          <span class= "text-danger"><?php echo $errNum; ?></span>
        </div>
        <div class="form-group">
        <span class= "text-danger">
          <label for="">Password</label>
          <div class="input-group">
            <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span> </span>
            <input type="password" class="form-control" id="pass" name="txtPassword" placeholder="Password">
          </div>
        </div>
        <div class="form-group">
          <label for="">Confirm Password</label>
          <div class="input-group">
            <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span> </span>
            <input type="password" class="form-control" id="repass" name="txtConfirmPassword" placeholder="Re-type Password">
          </div>
          <span class= "text-danger"><?php echo $errPass; ?></span>
        </div>
        <input  type="submit" class="btn btn-success btn-block" name="btnSubmit" value= "Sign Up">
        <p class="text-center">Already a member? &nbsp &nbsp<a id="signin" href="index.php">Sign in</a></p>
      </form>
    </div>
    <div class="col-md-4 col-sm-4 col-xs-12"></div>
  </div>
</div>

</body>
<?php
  unset($_SESSION['errMsg']);
  unset($_SESSION['errEmail']);
  unset($_SESSION['errNum']);
  unset($_SESSION['errPass']);
  unset($_SESSION['notSuc']);
  unset($_SESSION['sucMsg']);
  unset($_SESSION['errUserExist']);
  ?>
</html>