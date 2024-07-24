<?php
// Include the database connection file
require_once("dbConnection.php");

if (isset($_POST['update'])) {
	// Escape special characters in a string for use in an SQL statement
	$id = mysqli_real_escape_string($mysqli, $_POST['id']);
	$email = mysqli_real_escape_string($mysqli, $_POST['email']);
	$contact = mysqli_real_escape_string($mysqli, $_POST['contact']);
	$address = mysqli_real_escape_string($mysqli, $_POST['address']);	
	
	// Check for empty fields
	if (empty($email) || empty($contact) || empty($address)) {
		if (empty($email)) {
			echo "<font color='red'>Name field is empty.</font><br/>";
		}
		
		if (empty($contact)) {
			echo "<font color='red'>Age field is empty.</font><br/>";
		}
		
		if (empty($address)) {
			echo "<font color='red'>Email field is empty.</font><br/>";
		}
	} else {
		// Update the database table
		$result = mysqli_query($mysqli, "UPDATE users SET `email` = '$email', `contact` = '$contact', `address` = '$address' WHERE `id` = $id");
		
		// Display success message
		echo "<p><font color='green'>Data updated successfully!</p>";
		echo "<a href='index.php'>View Result</a>";
	}
}
