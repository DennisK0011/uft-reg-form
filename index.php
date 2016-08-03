<!DOCTYPE html>
<head>
	<html lang=”en”>
	<meta charset=”UTF-8”>
	<link rel=”stylesheet” href=”style.css”>
	<title>UNITED FIGHTERS TROPHY registration</title>
    
    <?php
    include 'php-validate.php';
    ?>

</head>

<body>
<form action="send_post.php" method="post">
	<fieldset>
        <p>
    	   <label for="firstName">Name</label>
    	   <input type="text" id="firstName" name="firstName" value="<?php echo $fname;?>">
           <span class="error">* <?php echo $fnameErr;?></span>
        </p>

        <p>
    	   <label for="lastName">Surname</label>
    	   <input type="text" id="lastName" name="lastName" value="<?php echo $lname;?>">
           <span class="error">* <?php echo $lnameErr;?></span>
        </p>

        <P>
    	   <label for="clubName">club</label>
    	   <input type="text" id="clubName" name="clubName" value="<?php echo $cname;?>">
           <span class="error">* <?php echo $cnameErr;?></span>
        </p>

        <p>
    	   <label for="mailAdress" >E-mail</label>
    	   <input type="email" id="mailAdress" name="mailAdress" value="<?php echo $email;?>">
           <span class="error">* <?php echo $emailErr;?></span>
        </p>

        <p>
            <input type="submit">
        </p>
	</fieldset>
</form>

</body>