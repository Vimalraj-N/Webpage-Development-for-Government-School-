<html>
<head>
	<title>Add Data</title>
</head>

<body>
<?php
// Include the database connection file
require_once("dbConnection.php");

if (isset($_POST['submit'])) {
	// Escape special characters in string for use in SQL statement	
	$email = mysqli_real_escape_string($mysqli, $_POST['email']);
	$contact = mysqli_real_escape_string($mysqli, $_POST['contact']);
	$address = mysqli_real_escape_string($mysqli, $_POST['address']);
		
	// Check for empty fields
	if (empty($email) || empty($contact) || empty($address)) {
		if (empty($email)) {
			echo "<font color='red'>email field is empty.</font><br/>";
		}
		
		if (empty($contact)) {
			echo "<font color='red'>contact field is empty.</font><br/>";
		}
		
		if (empty($address)) {
			echo "<font color='red'>address field is empty.</font><br/>";
		}
		
		// Show link to the previous page
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} else { 
		// If all the fields are filled (not empty) 

		// Insert data into database
		$result = mysqli_query($mysqli, "INSERT INTO users (`email`, `contact`, `address`) VALUES ('$email', '$contact', '$address')");
		
		// Display success message
		echo "<p><font color='green'>Data added successfully!</p>";
		echo "<a href='index.php'>View Result</a>";
	}
}
?>
</body>
</html>
