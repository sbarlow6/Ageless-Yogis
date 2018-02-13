<?php
session_start();

if ($_SESSION['loggedin'] != 2){
    header( 'Location: http://www.google.com/' ) ;
}

 

?>

<html>

<head>
	<meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">


	<title>Ageless Yogis</title>
	<link href="./css/cpanel.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Alfa+Slab+One|Open+Sans" rel="stylesheet">
</head>
<body>
<div class="title">
<h2>Change Password</h2>
</div>

<nav class="links">
   
<form action="index.php" method="post">
        
        <br>
        
            
        <label>Old Password:</label>
        <input type="text" name="oldPassword" size="35" id="pword" required/>
        <br>

        <label>New Password:</label>
        <input type="text" name="newPassword1" size="35" id="pword2"  />
        <br>

        <label>New Password:</label>
        <input type="text" name="newPassword2" size="35" id="pword3"  />
        <br>
        <br>

        <label>&nbsp;</label>
        <input type="submit" value="changepw" name="action" class="button-link"/>
        <br>
         
         
         
    </form>




    <a href="?action=login" class="button-link">Back</a></nav>
</body>
</html>