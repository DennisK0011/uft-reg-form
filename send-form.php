<?php
//header('Location: add-fighters.php');
include 'config.php';

$sql = "INSERT INTO coach (firstName, lastName, email, clubName)
        VALUES ('$_POST[firstName]', '$_POST[lastName]', '$_POST[email]', '$_POST[clubName]')";
if ($conn->query($sql) === TRUE) {
            echo "welcoms tekst hier mofo!";
            
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


$conn->close();
?>