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
<h2>New Rate</h2>
</div>

<nav class="links">
   
<form action="index.php" method="post">
        
        <br>
        
            
        <label>Service Title:</label>
        <input type="text" name="serviceName" size="35" id="sName" required/>
        <br>

        

        

        <label>&nbsp;</label>
        <input type="submit" value="Add" name="action" class="button-link"/>
        <br>
         
         
         
    </form>



<a href="?action=workshop_edit" class="button-link">Back</a></nav>
</body>
</html>