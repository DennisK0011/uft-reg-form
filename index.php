<?php 
error_reporting(E_ALL);
session_start();
$errors = (isset($_SESSION['errors']) ? $_SESSION['errors'] : NULL);
$values = (isset($_SESSION['values']) ? $_SESSION['values'] : NULL);
$fnameErr = $lnameErr = $cnameErr = $emailErr = "";
$firstName = $lastName = $clubName = $email  = "";
print_r($_SESSION);
unset($_SESSION['errors']);
unset($_SESSION['values']);
print_r($_SESSION);

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

        <div class ="container">
            <h1>Registration</h1>


                <form  class="form-horizontal" action="add-fighters.php" method="post" >
                    <div class="form-group">
                    	<label class="control-label col-sm-2" for="firstName">Name</label>
                    	<div class="col-sm-4">
                            <input class="form-control " type="text" id="firstName" name="firstName" value="<?php echo $values['fName'];?>" >
                        </div>
                        <span class="error"> <?php echo $errors['fName'];?></span>
                    </div>

                        <div class="form-group">
                    	   <label class="control-label col-sm-2" for="lastName">Surname</label>
                    	   <div class="col-sm-4">
                                <input class="form-control" type="text" id="lastName" name="lastName" value="<?php echo $values['lName'];?>" >
                            </div>
                           <span class="error"> <?php echo $errors['lName'];?></span>
                        </div>

                        <div class="form-group">
                    	   <label class="control-label col-sm-2" for="clubName">club</label>
                    	   <div class="col-sm-4">
                                <input class="form-control" type="text" id="clubName" name="clubName" value="<?php echo $values['cName'];?>" >
                            </div>
                           <span class="error"> <?php echo $errors['cName'];?></span>
                        </div>

                        <div class="form-group">
                    	   <label class="control-label col-sm-2" for="email" >E-mail</label>
                    	   <div class="col-sm-4">
                                <input class="form-control" type="email" id="email" name="email" value="<?php echo $values['email'];?>" >
                            </div>
                           <span class="error"> <?php echo $errors['email'];?></span>
                        </div>

                        <p>
                            <input type="submit" name="submit">
                        </p>
                    </div>
                </form>
            
        </div>

        <script src="js/jquery-3.1.0.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="jquery.validate.min.js"></script>
        <script> $("#UFT-registration").validate(); </script>
    </body>
</html>