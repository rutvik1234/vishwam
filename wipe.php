<?php
session_start();
if ($_SESSION['uid']) {
    include "db.php";
?>
   
   <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
    <form class="row g-3" action="wipe.php" method="POST">
        <button type="submit" name="submit">Submit</button>
    </form>
    </body>
    </html>
    <?php
    if (isset($_POST['submit'])) {
    $nsql = "DELETE FROM user_info";
    $runquery = mysqli_query($conn,$nsql);
    if ($runquery) {
        session_destroy();
        header('location:index.php');

    }
    else {
        echo "something went wrong";
    }
}
}
else {
    header('location:admin_login.php');
 }

?>