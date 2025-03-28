<?php
require_once("db.php");

// Check if ID is provided

    $id = $_GET['id'];
    $stmt = "DELETE FROM add_party WHERE party_no = '$id'";
    $query = $conn->query($stmt);
    if ($query) {
        header("Location: add_party.php");
die();
    }
    else {
        echo"Something went wrong";
    }

?>
