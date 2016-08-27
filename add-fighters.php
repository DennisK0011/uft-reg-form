
<?php
    include 'config.php';

$fName = $_POST['firstName'];
$lName = $_POST['lastName'];
$cName = $_POST['clubName']; 

$query = mysqli_query($con, "SELECT * FROM coach WHERE clubName='".$cName."' LIMIT 1");

    if(!$query){

        $sql = "INSERT INTO coach (firstName, lastName, email, clubName)
        VALUES ('$_POST[firstName]', '$_POST[lastName]', '$_POST[email]', '$_POST[clubName]')";
        if ($conn->query($sql) === TRUE) {
            echo "welcoms tekst hier mofo!";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else { echo "Club name is already taken."; }
$conn->close();
?>

<!DOCTYPE html>
<html>
    <head>
    	<html lang=”en”>
    	<meta charset=”UTF-8”>
    	<link rel=”stylesheet” href=”css/style.css”>
    	<title>UNITED FIGHTERS TROPHY registration</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
    </head>

    <body>
            

            <table>
                <thead>
                    <tr>
                        <th><label>Firstname</label></th>
                        <th><label>Lastname</label></th>
                        <th><label>Age</label></th>
                        <th><label>Weight</label></th>
                        <th><label>Grade</label></th>
                        <th><label>MMA</label></th>
                        <th><label>Submission</label></th>
                        <th><label>EDGE</label></th>
                        <th><label>Karate Ippon</label></th>
                        <th><label>Karate Sanbon</label></th>
                        <th><label>Semi contact</label></th>
                        <th></th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td><input class="form-control" name="size[]" type="text" placeholder="Firstname" /></td>
                        <td><input class="form-control" name="color[]" type="text" placeholder="Lastname" /></td>
                        <td><input class="form-control" name="other[]" type="text" placeholder="Age" /></td>
                        <td><input class="form-control" name="price[]" type="text" placeholder="Weight" /></td>
                        <td><input class="form-control" name="quantity[]" type="text" placeholder="Grade" /></td>
                        <td><input class="form-control" name="promotion[]" type="checkbox" placeholder="MMA" /></td>
                        <td><input class="form-control" name="promotion[]" type="checkbox" placeholder="MMA" /></td>
                        <td><input class="form-control" name="promotion[]" type="checkbox" placeholder="MMA" /></td>
                        <td><input class="form-control" name="promotion[]" type="checkbox" placeholder="MMA" /></td>
                        <td><input class="form-control" name="promotion[]" type="checkbox" placeholder="MMA" /></td>
                        <td><input class="form-control" name="promotion[]" type="checkbox" placeholder="MMA" /></td>
                        <td>
                            <button class="btn btn-danger btn-remove" type="button">
                                <i class="glyphicon glyphicon-minus gs"></i>
                            </button>
                        </td>
                    </tr>
                </tbody>

            </table>

            <button class="btn btn-success btn-add" type="button">
               <i class="glyphicon glyphicon-plus gs"></i> 
               <b> Add</b>
            </button>

    </body>
<html>


