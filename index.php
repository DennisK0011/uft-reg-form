<?php include 'php-validate.php'; ?>
<!DOCTYPE html>
<html>
    <head>
	   <meta charset=”UTF-8”>
	   <link rel=”stylesheet” href=”css/style.css”>
	   <title>UNITED FIGHTERS TROPHY registration</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
        <form action="add-fighters.php" method="post">
        	<fieldset>
                <p>
            	   <label for="firstName">Name</label>
            	   <input type="text" id="firstName" name="firstName" value="<?php echo $fname;?>" required>
                   <span class="error">* <?php echo $fnameErr;?></span>
                </p>

                <p>
            	   <label for="lastName">Surname</label>
            	   <input type="text" id="lastName" name="lastName" value="<?php echo $lname;?>" required>
                   <span class="error">* <?php echo $lnameErr;?></span>
                </p>

                <P>
            	   <label for="clubName">club</label>
            	   <input type="text" id="clubName" name="clubName" value="<?php echo $cname;?>" required>
                   <span class="error">* <?php echo $cnameErr;?></span>
                </p>

                <p>
            	   <label for="mailAdress" >E-mail</label>
            	   <input type="email" id="mailAdress" name="mailAdress" value="<?php echo $email;?>" required>
                   <span class="error">* <?php echo $emailErr;?></span>
                </p>

                <p>
                    <input type="submit">
                </p>
        	</fieldset>
        </form>

        <script src="js/jquery-3.1.0.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="jquery.validate.min.js"></script>
        <script> $("#UFT-registration").validate(); </script>

    </body>
</html>