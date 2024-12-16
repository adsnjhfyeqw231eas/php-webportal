<?php

// Create connection
$con= mysqli_connect('localhost',"gauri_Nath","HnE*i#GvMg}A@123","gauri_nath");

// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}
else {
    print("Connection success.");
}
?>

