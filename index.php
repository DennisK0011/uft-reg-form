<?php include 'php-validate.php'; ?>

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

                <form class="form-horizontal" action="send-form.php" method="post" >
                    <div class="form-group">
                    	<label class="control-label col-sm-2" for="firstName">Name</label>
                    	<div class="col-sm-4">
                            <input class="form-control " type="text" id="firstName" name="firstName" value="<?php echo $fname;?>" required>
                        </div>
                        <span class="error"> <?php echo $fnameErr;?></span>
                    </div>

                        <div class="form-group">
                    	   <label class="control-label col-sm-2" for="lastName">Surname</label>
                    	   <div class="col-sm-4">
                                <input class="form-control" type="text" id="lastName" name="lastName" value="<?php echo $lname;?>" required>
                            </div>
                           <span class="error"> <?php echo $lnameErr;?></span>
                        </div>

                        <div class="form-group">
                    	   <label class="control-label col-sm-2" for="clubName">club</label>
                    	   <div class="col-sm-4">
                                <input class="form-control" type="text" id="clubName" name="clubName" value="<?php echo $cname;?>" required>
                            </div>
                           <span class="error"> <?php echo $cnameErr;?></span>
                        </div>

                        <div class="form-group">
                    	   <label class="control-label col-sm-2" for="mailAdress" >E-mail</label>
                    	   <div class="col-sm-4">
                                <input class="form-control" type="email" id="mailAdress" name="mailAdress" value="<?php echo $email;?>" required>
                            </div>
                           <span class="error"> <?php echo $emailErr;?></span>
                        </div>

                        <p>
                            <input type="submit">
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