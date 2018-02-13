<?php
session_start();

if ($_SESSION['loggedin'] != 2){
    header( 'Location: http://www.google.com/' ) ;
}

 $result = getrates2(); 

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
<h2>Edit Rates</h2>
</div>

<nav class="links">


<?php foreach ($result as $one) : ?> 
    <div class='sector'>
<form action="index.php" method="post">
        
        <br>
        
            
        <input type="hidden" name="serviceID" value= '<?php echo $one['serviceID'];?>' >
        <label>Service Title:</label>
        <input type="text" name="serviceName"  size="35" id="sName" required value="<?php echo $one['serviceName'];?>"/>
        <br>



        

        <label>&nbsp;</label>
        <input type="submit" value="Update" name="action" class="button-link"/>
        <input type="submit" value="Delete Service" name="action" class="button-link"/>
        <br>
         
</form></div><br>
 <?php endforeach; ?>
<a href=".?action=newService" class="button-link">New Service</a><br><br><br>   
<a href=".?action=login" class="button-link">Back</a></nav>
</body>
</html>