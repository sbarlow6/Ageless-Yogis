<?php
session_start();

if ($_SESSION['loggedin'] != 2){
    header( 'Location: http://www.google.com/' ) ;
}

 $result = getworkshops(); 

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
<h2>Edit Workshops</h2>
</div>

<nav class="links">


<?php foreach ($result as $one) : ?> 
    <div class='sector'>
<form action="index.php" method="post">
        
        <br>
        
            
        <input type="hidden" name="workshopID" value= '<?php echo $one['workshopID'];?>' >
        <label>Workshop Title:</label>
        <input type="text" name="workshopName"  size="35" id="wName" required value="<?php echo $one['workshopName'];?>"/>
        <br>



        <label>Image:</label>
        <input type="text" name="image" id="aImage"  value="<?php echo $one['workshopImage'];?>"/>
        <br>

        <label>Link Address (if any):</label>
        <input type="text" name="workshopLink" id="alink"  value="<?php echo $one['workshopLink'];?>"/>
        <br>

        <label>&nbsp;</label>
        <input type="submit" value="Update2" name="action" class="button-link"/>
        <input type="submit" value="Delete" name="action" class="button-link"/>
        <br>
         
</form></div><br>
 <?php endforeach; ?>
<a href=".?action=newworkshop" class="button-link">New Workshop</a><br><br><br>   
<a href=".?action=login" class="button-link">Back</a></nav>
</body>
</html>