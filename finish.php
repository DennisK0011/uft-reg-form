<?php
error_reporting(E_ALL);
include 'validate-fighters.php';
include 'config.php';

$firstName = $_POST["firstName"];
$lastName = $_POST["lastName"];
$gender = $_POST["gender"];
$age = $_POST["gender"];
$weight = $_POST["weight"];
$grade = $_POST["grade"];
$mma = $_POST["mma"];
$submission = $_POST["submission"];
$edge = $_POST["edge"];
$ippon = $_POST["ippon"];
$sanbon = $_POST["sanbon"];
$semiContact = $_POST["semiContact"];

$aantal = count($firstName);
$x=0;
while ($aantal > $x) {
	$cont[$x]['firstName'] = $firstName[$x];
	$cont[$x]['lastName'] = $lastName[$x];
	$cont[$x]['gender'] = $gender[$x];
	$cont[$x]['weight'] = $weight[$x];
	$cont[$x]['grade'] = $grade[$x];
	$cont[$x]['mma'] = $mma[$x];
	$cont[$x]['submission'] = $submission[$x];
	$cont[$x]['edge'] = $edge[$x];
	$cont[$x]['ippon'] = $ippon[$x];
	$cont[$x]['sanbon'] = $sanbon[$x];
	$cont[$x]['semiContact'] = $semiContact[$x];
	$x++;
}


$cont = array_filter($cont);

print_r($cont[0]);

/*if(is_array($input)){

	$sql = "INSERT INTO coach (firstName, lastName) VALUES ";

	$valuesArr = array();
	foreach ($input as $value) {
		//$firstName = $value['firstName'];
		//$lastName = $value['lastName'];

		//$valuesArr[] = "('$firstName' , '$lastName')";
		print_r($value);
	}

	$sql .= implode(',', $valuesArr);
}*/

$con->close();
//print_r($firstName);
?>