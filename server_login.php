<?php
session_start();
require_once('connect.php');

$username = checkInput($_POST['txtUsername']);
$password = checkInput($_POST['txtPassword']);

if(empty($username) || empty($password)){
    $_SESSION['errMsg'] = "Enter username and password";
    header("Location: index.php");
}
else {
      $query  = mysqli_query($connect, "SELECT * FROM tbl_practice WHERE Username = '$username' && Password = '$password'");

      $query_array = mysqli_fetch_assoc($query);
      if ($query_array) {
        $_SESSION['msg'] = $query_array ;
        header("Location: dashboard.php");   
            
      }
      
      else {
          $_SESSION['errUnregistered'] = "Invalid Username or Password";
          header("Location: index.php ");
          echo "Invalid Username or Password";
      }
  }

function checkInput($input){
  $formTrim = trim($input);
  $formStrips = stripslashes($formTrim);
  $formSpecial = htmlspecialchars($formStrips);
  return $formSpecial;
}

?>