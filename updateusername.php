<?php
//start session
session_start();
//connect to db
include('connection.php');
//get the user_id
$id = $_SESSION['user_id'];
//get username sent through ajax
$username = $_POST['username'];
//run query and update username
$sql = "UPDATE users SET username='$username' WHERE user_id='$id'";
$result = mysqli_query($link, $sql);
if (!$result) {
	echo '<div class="alert alert-danger">There was an error updating the new username in the database.</div>';
}

?>