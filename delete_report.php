<?php
require_once("db.php");

// Check if ID is provided

    $id = $_GET['id'];
    $stmt = "DELETE FROM add_data WHERE add_id = '$id'";
    $query = $conn->query($stmt);
    if ($query) {
        header("Location: report.php");
die();
    }
    else {
        echo"Something went wrong";
    }

?>
