<?php 
$con=mysqli_connect('localhost','root','','dbms');
// Check for a connection error
if (mysqli_connect_error()) {
    die('Connect Error (' . mysqli_connect_errno() . ') ' . mysqli_connect_error());
}
 ?>
