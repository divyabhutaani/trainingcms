<?php
//database creation
$dbserver= "localhost";
$dbusername="root";
$dbpass="target";
$dbdatabase="targetintegration";

$dbconnect= mysqli_connect($dbserver,$dbusername,$dbpass,$dbdatabase);// or die("Error " . mysqli_error($link));

if(mysqli_connect_errno())
    {
        die("Sorry!<br> Connection Failed. " . mysqli_error($dbconnect) . " " . mysqli_connect_errno() ." " );
    };
?>
