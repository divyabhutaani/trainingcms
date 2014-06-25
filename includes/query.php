<?php
//  Perform database query
$query  = "SELECT * FROM subjects WHERE visible = 1 ";
$query .= "ORDER BY position ASC";
$result = mysqli_query($connection, $query);
confirm_query($result);
?>