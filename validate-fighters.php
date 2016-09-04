<?php
// define variables and set to empty values

function isNaam($text){
  if (!preg_match("/^[a-zA-Z ]*$/",$text)){
    return "Only letters and white space allowed";  
  } else {
    return true;
  }
}


function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>