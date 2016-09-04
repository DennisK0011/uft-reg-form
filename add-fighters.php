<?php
error_reporting(E_ALL);
session_start();
include 'php-validate.php';
include 'sanitize.php';
include 'config.php';

//$firstName = sanitize($_POST["firstName"]);
//$lastName = sanitize($_POST["lastName"]);
//$email = sanitize($_POST["email"]);
//$clubName = sanitize($_POST["clubName"]);


/*$sql = "INSERT INTO coach (firstName, lastName, email, clubName)
        VALUES ('$firstName', '$lastName', '$email', '$clubName')";

if ($con->query($sql) === TRUE) {
            echo "info updated";            
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$con->close();*/
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>UFT registration</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link rel=”stylesheet” href=”css/style.css”>
    </head>

    <body>
        <form action="finish.php" method="post">

            <table>
                <thead>
                    <tr>
                        <th><label class="col-sm-2">Firstname</label></th>
                        <th><label class="col-sm-2">Lastname</label></th>
                        <th><label class="col-sm-2">Gender</label></th>
                        <th><label class="col-sm-2">Age</label></th>
                        <th><label class="col-sm-2">Weight</label></th>
                        <th><label class="col-sm-2">Grade</label></th>
                        <th><label class="col-sm-2">MMA</label></th>
                        <th><label class="col-sm-2">Submission</label></th>
                        <th><label class="col-sm-2">EDGE</label></th>
                        <th><label class="col-sm-2">Karate Ippon</label></th>
                        <th><label class="col-sm-2">Karate Sanbon</label></th>
                        <th><label class="col-sm-2">Semi contact</label></th>
                        <th></th>
                    </tr>
                </thead>

      

                <tbody>
                <?php
                    $i = 0;
                    while ($i<= 10) {
                ?>
                    <tr>
                        <td><input class="form-control" name="firstName[]" type="text" placeholder="Firstname" /></td>
                        <td><input class="form-control" name="lastName[]" type="text" placeholder="Lastname" /></td>
                        <td>
                            <select name="gender[]">
                                <option value="1">Male</option>
                                <option value="0">Female</option>
                            </select>
                        </td>
                        <td><input class="form-control" name="age[]" type="number" placeholder="Age" min="8" max="99"/></td>
                        <td><input class="form-control" name="weight[]" type="number" placeholder="Weight" min="0" max="150"/></td>
                        <td>
                            <select name="grade[]">
                                <option value="MMA">MMA</option>
                                <option value="beginner">Beginner</option>
                                <option value="advanced">Advanced</option>
                                <option value="elite">Elite</option>
                                <option value="EDGE"> EDGE open</option>
                                <option value="6kyu">6 kyu</option>
                                <option value="5kyu">5 kyu</option>
                                <option value="4kyu">4 kyu</option>
                                <option value="3kyu">3 kyu</option>
                                <option value="2kyu">2 kyu</option>
                                <option value="1kyu">1 kyu</option>
                                <option value="1dan">1 dan</option>
                                <option value="2dan">2 dan</option>
                                <option value="3dan">3 dan</option>
                                <option value="4dan">4 dan</option>
                                <option value="5dan">5 dan</option>
                                <option value="6dan">6 dan</option>
                            </select>
                        </td>
                        
                        <input class="form-control" name="submission[]" type="hidden" value="0"/>
                        <input class="form-control" name="edge[]" type="hidden" value="false"/>
                        <input class="form-control" name="ippon[]" type="hidden" value="false" />
                        <input class="form-control" name="sanbon[]" type="hidden" value="false" />
                        <input class="form-control" name="semiContact[]" type="hidden" value="false"/>

                        <td>
                            <input class="form-control" name="mma[]" id="mma[]" type="checkbox"  value="1"/>
                        <input class="form-control" name="mma[]" id="mma[]" type="hidden" value="0"></td>
                        <td><input class="form-control" name="submission[]" type="checkbox" placeholder="Submission" value="true"/></td>
                        <td><input class="form-control" name="edge[]" type="checkbox" placeholder="EDGE" value="true" /></td>
                        <td><input class="form-control" name="ippon[]" type="checkbox" placeholder="Karate Ippon" value="true" /></td>
                        <td><input class="form-control" name="sanbon[]" type="checkbox" placeholder="Kaarate Sanbon" value="true" /></td>
                        <td><input class="form-control" name="semiContact[]" type="checkbox" placeholder="Semi Contact" value="true" /></td>
                        <td>
                            <button class="btn btn-danger btn-remove" type="button">
                                <i class="glyphicon glyphicon-minus gs"></i>
                            </button>
                        </td>
                    </tr>
                    <?php $i++; } ?>
                </tbody>
            </table>
            
                <button class="btn btn-success btn-add" type="button">
                   <i class="glyphicon glyphicon-plus gs"></i> 
                   <b> Add fighter</b>
                </button>
                 <p>
                    <input type="submit" name="submit">
                </p>
        </form>

        <script src="js/jquery-3.1.0.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/table.js"></script>
    </body>
<html>


