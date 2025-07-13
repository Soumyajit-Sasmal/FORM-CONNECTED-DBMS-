<?php

include "connection.php";

$fn = $_REQUEST['fn']; // Get full name
$ad = $_REQUEST['ad']; // Get address
$em = $_REQUEST['em']; // Get email
$ps = $_REQUEST['ps']; // Get password
$st = $_REQUEST['st']; // Get state
$ip = getenv('REMOTE_ADDR'); // Get client IP
$tm=date("Y-m-d h:i:s A");
$pn=$_REQUEST['pn'];

$sql = "INSERT INTO reg (fullname, address, email, password, state, ip,timeregian,phonenumbers) VALUES('$fn', '$ad', '$em', '$ps', '$st', '$ip','$tm','$pn')";

mysqli_query($con, $sql); // Run SQL insert

header("Location:form.html"); // Redirect to form

?>