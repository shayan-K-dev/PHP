<?php
include 'dbcon.php';

$sql = "SELECT * FROM roles";
$result = mysqli_query($conn, $sql);
?>

<h1>All Roles in Database</h1>
<table border="2">
<thead>
    <th>Role ID</th>
    <th>Role Name</th>
    <th>Action</th>
</thead>
<tbody>
<?php
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    $counter = 1;
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr>
         <td>" . $counter . "</td>
         <td>" . $row["name"] . "</td>
         <td>
         <a href='edit.php?id=" . $row["id"] .
         "'>Edit</a> | 
         <a href='delete.php?id=" . $row["id"] .
         "' onclick=\"return confirm
         ('Are you sure u wana delete this role?');\">Delete</a>
         </td>
         </tr>";
         $counter++;
    }
} else {
    echo "<tr><td colspan='3'>No roles found</td></
    tr>";
}

?>

</tbody>
</table>
