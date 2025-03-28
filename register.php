<?php
include 'db.php';
function str_openssl_enc($str, $iv)
{
  $key = 'abcdtoxyz1@3$5^7*92';
  $chiper = "AES-128-CTR";
  $options = 0;
  $str = openssl_encrypt($str, $chiper, $key, $options, $iv);
  return $str;
}

if (isset($_POST['submit'])) {

  $iv = openssl_random_pseudo_bytes(16);
  $fname = $_POST['fname'];
  $username = $_POST['username'];
  $password = $_POST['password'];

  $epass = str_openssl_enc($password, $iv);

  $ivb = bin2hex($iv);

  $sql = "INSERT INTO user_info(username,fname,u_password,iv) VALUES('$username','$fname','$epass','$ivb')";
  $runquery = mysqli_query($conn, $sql);

  if ($runquery) {
    echo "<script>alert('Data inserted sucessfully');  </script>";
    header("location:register_page.php");
  } else {
    echo "<script>alert('kaik locha chhe'); history.back() </script>";
    exit();
  }
}
?>