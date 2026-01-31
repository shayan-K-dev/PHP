<?php
include 'dbcon.php';
if(isset($_GET['id'])){
    $id = $_GET['id'];

    $delete_sql = "DELETE FROM roles WHERE id=$id";
    if (mysqli_query($conn, $delete_sql)) {

        header("Location: index.php");

    } else {
        echo "Error deleting role: " . mysqli_error($conn);
    }
} else {
    echo "Role not found.";
    exit;
}
?>