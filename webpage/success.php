<?php 
	session_start();
 ?>

 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
 <html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
 <link rel="stylesheet" href="style.css" />
 <head>
 	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
 	<title>Thank you!</title>
 </head>
 <body>
 	<p>Name <?= $_SESSION["name"] ?></p>
 	<p>Email <?= $_SESSION["email"]?></p>
 	<p>Username <?= $_SESSION["username"]?></p>
 	<p>Password <?= $_SESSION["password"]?></p>
 	<p>Confirm password <?= $_SESSION["passwordconf"]?></p>
 	<p>Date of Birch <?= $_SESSION["dateOfBirth"] ?></p>
 	<p>Gender <?= $_SESSION['gender']?></p>
 	<p>Marital Status <?= $_SESSION["maritalSt"]?></p>
 	<p>Address <?= $_SESSION["address"]?></p>
 	<p>City <?= $_SESSION["city"]?></p>
 	<p>Postal Code <?= $_SESSION["postalCode"]?></p>
 	<p>Home Phone <?= $_SESSION["homePhone"]?></p>
 	<p>Mobile Phone <?= $_SESSION["mobilePhone"]?></p>
 	<p>Credit Card Number <?= $_SESSION["cardNum"]?></p>
 	<p>Credit Card Expire Date <?= $_SESSION["cardExpire"]?></p>
 	<p>Monthly Salary <?= $_SESSION["monthSalary"]?></p>
 	<p>Web Site URL <?= $_SESSION["url"]?></p>


 </body>
 </html>

