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
<h2>New Workshop</h2>
</div>

<nav class="links">
   
<form action="index.php" method="post">
        
        <br>
        
            
        <label>Workshop Title:</label>
        <input type="text" name="workshopName" size="35" id="wName" required/>
        <br>

        

        <label>Enter the file name of the image for this workshop:</label>
        <input type="text" name="workshopImage" id="aImage"  />
        <br>
         <label>Enter the link you would like to add to this workshop (if any):</label>
        <input type="text" name="workshopLink" id="aImage"  />
        <br>
        
        <br>

        <label>&nbsp;</label>
        <input type="submit" value="Add2" name="action" class="button-link"/>
        <br>
         
         
         
    </form>

<form action="upload.php" method="post" enctype="multipart/form-data">
    You may use any of the images below for this product. If you would like to add a new image click choose file and then upload image:<br>
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit" class="button-link">
</form>
Available images:<br>
<?php
$dir    = './workshopimages';
$files1 = scandir($dir);

unset($files1[0]);
unset($files1[1]);


foreach($files1 as $value) {
  echo $value;
  echo '<br><img src="workshopimages/' . $value . '" height="50">';
  echo '<br><br>';
}
    ?>


<a href="?action=workshop_edit" class="button-link">Back</a></nav>
</body>
</html>