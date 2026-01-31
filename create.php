<?php
include 'dbcon.php';

if(isset($_POST['add'])){
    $new_role = $_POST['new_role'];   // Access 

    $sql = "INSERT INTO roles (name) VALUES ('$new_role')";
    if (mysqli_query($conn, $sql)) {
        echo "New role created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

?>


<h2>Create New Role<h2>
<form method="post">

<input type="text" placeholder="Enter new role" name="new_role" />

<input type="submit" name="add" value="Add Role" />


</form>