<?php
// <!-- connect to the database -->
$link = mysqli_connect("localhost","tanyalrh_onlinenotes","fcbarca","tanyalrh_onlinenotes");
if (mysqli_connect_error()) {
	die("ERROR: Unable to connect:".mysqli_connect_error());
}
?>