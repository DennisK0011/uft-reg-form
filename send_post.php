<?php
    include 'config.php';

    $query = mysqli_query("INSERT INTO coach (firstName, lastName, email, clubName)
    	VALUES ('$_POST[firstName]', '$_POST[lastName]', '$_POST[email]', '$_POST[clubName]')");
if (!$conn->query($query)) {
	echo "error code ({$conn->errno}): {$conn->error}";
} else { echo "query succes"}


?>
