<?php
include "db.php";
session_start();
function str_openssl_enc($str, $iv)
{
  $key = 'abcdtoxyz1@3$5^7*92';
  $chiper = "AES-128-CTR";
  $options = 0;
  $str = openssl_encrypt($str, $chiper, $key, $options, $iv);
  return $str;
}

if (isset($_POST['login'])) {
 

    $username = $_POST['username'];
    $password =$_POST['password'];
    
    $nsql = "SELECT * FROM user_info WHERE username='$username'";
    $runquery = mysqli_query($conn,$nsql);
    $count = mysqli_num_rows($runquery);
    $row = mysqli_fetch_array($runquery);
    if ($row > 0) {
      
      $niv = $row['iv'];
    }

  $iv = hex2bin($niv);
  $epass = str_openssl_enc($password,$iv);
    

    $sql = "SELECT * FROM user_info WHERE username='$username' AND u_password='$epass'";
    $runquery = mysqli_query($conn,$sql);
    $count = mysqli_num_rows($runquery);
    $row = mysqli_fetch_array($runquery);

    $_SESSION['uid'] = $row['user_id'];
    $_SESSION['uname'] = $row['fname'];

    $ip_add = getenv("REMOTE_ADDR");

    if ($count == 1) {
        echo "<script> alert('Sucessfully login!');</script>";
        header("location:index.php");
    }
    else {
        echo "<script> alert('Check username or password');</script>";
        header("location:index.php");
    }
}
?>