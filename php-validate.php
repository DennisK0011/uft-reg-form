<?php
// define variables and set to empty values
$errors ="";
$fnameErr = $lnameErr = $cnameErr = $emailErr = "";
$firstName = $lastName = $clubName = $email  = "";

if(isset($_POST['submit'])) {
  if (empty($_POST["firstName"])) {
    $fnameErr = "Name is required <br />";
  } 
  else {
    $firstName = test_input($_POST["firstName"]);
    if (!preg_match("/^[a-zA-Z ]*$/",$firstName)) {
      $fnameErr = "Only letters and white space allowed <br />"; 
	  }
	}

  if (empty($_POST["lastName"])) {
    $lnameErr = "Last Name is required <br />";
  } 
  else {
    $lastName = test_input($_POST["lastName"]);
    if (!preg_match("/^[a-zA-Z ]*$/",$lastName)) {
      $lnameErr = "Only letters and white space allowed <br />"; 
	  }
	}

  if (empty($_POST["clubName"])) {
    $cnameErr = "Club name is required <br />";
  } 
  else {
    $clubName = test_input($_POST["clubName"]);
    if (!preg_match("/^[a-zA-Z ]*$/",$clubName)) {
      $cnameErr = "Only letters and white space allowed <br />"; 
	  }
	}

  if (empty($_POST["email"])) {
    $emailErr = "Email is required <br />";
  } 
  else {
    $email = test_input($_POST["email"]);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format <br />"; 
	  }
	}
}

  $errors = array('fName' => $fnameErr, 'lName' => $lnameErr, 'cName' => $cnameErr, 'email'=> $emailErr);
  //print_r(empty(array_filter($errors)));



if(!empty(array_filter($errors))) {
  $_SESSION['errors'] = $errors;

  $values = array('fName' => $firstName, 'lName' => $lastName, 'cName' => $clubName, 'email'=> $email);
  $_SESSION['values'] = $values;

  //print_r($_SESSION);
  header('location:' .$_SERVER['HTTP_REFERER']);
  exit();

}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>