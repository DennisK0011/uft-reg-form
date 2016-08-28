<?php
// define variables and set to empty values
$fnameErr = $lnameErr = $cnameErr = $emailErr = "";
$fname = $lname = $cname = $email = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["firstName"])) {
    $fnameErr = "Name is required";
  } 
  else {
    $fname = test_input($_POST["firstName"]);
    if (!preg_match("/^[a-zA-Z ]*$/",$fname)) {
      $fnameErr = "Only letters and white space allowed"; 
	  }
	}

  if (empty($_POST["lastName"])) {
    $lnameErr = "Last Name is required";
  } 
  else {
    $lname = test_input($_POST["lastName"]);
    if (!preg_match("/^[a-zA-Z ]*$/",$lname)) {
      $lnameErr = "Only letters and white space allowed"; 
	  }
	}

  if (empty($_POST["clubName"])) {
    $cnameErr = "Club name is required";
  } 
  else {
    $cname = test_input($_POST["clubName"]);
    if (!preg_match("/^[a-zA-Z ]*$/",$cname)) {
      $cnameErr = "Only letters and white space allowed"; 
	  }
	}

  if (empty($_POST["mailAdress"])) {
    $emailErr = "Email is required";
  } 
  else {
    $email = test_input($_POST["mailAdress"]);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format"; 
	  }
	}
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>