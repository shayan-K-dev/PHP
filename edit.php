<?php 
include "dbcon.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    // fetch the role data based on id
    $sql = "SELECT * FROM roles WHERE id=$id";
    $result = mysqli_query($conn, $sql);

    //filter check
    if(mysqli_num_rows($result) == 1){
        $row = mysqli_fetch_assoc($result);
    } else {
        echo "Role not found.";
        exit;
    }

    //If form is submitted
    if(isset($_POST['update'])){
        $updated_role = $_POST['update_role']; //access
        $update_sql = "UPDATE roles SET name='$updated_role' WHERE id=$id";

        if(mysqli_query($conn, $update_sql)) {

            header("Location: index.php");

        } else{
            echo "Error updating role: " . mysqli_error($conn);
        }
    }
}
?>