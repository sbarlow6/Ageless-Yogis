<?php $result = getworkshops(); ?>

<!doctype html>
<html>

<head>
	<meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">


	<title>Ageless Yogis</title>
	<link href="./css/style.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <link href="https://fonts.googleapis.com/css?family=Alfa+Slab+One|Open+Sans" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="./js/javascript.js"></script>

</head>

<body>
<h1> Ageless yogis </h1>
<div class="navbar1">  
            <ul>
                <li><a href= ".?action=about" title= "Go to the about page">About</a></li>
                <li><a href= ".?action=services" title= "Go to the services page">Services</a></li>
                <li><a href= ".?action=classes" title= "Go to the classes page">Classes</a></li>
                <li><a href= ".?action=workshops" title= "Go to the workshops page">Workshops</a></li>
                <li><a href= ".?action=products" title= "Go to the products page">Products</a></li>
                <li><a href= ".?action=contact" title= "Go to the contact page">Contact</a></li>

            </ul>
                </div>

                <h3>Products</h3>

                <?php foreach ($result as $one) : ?>
                <a href="view/workshoppage.php?workshop=<?php echo $one['workshopID']?>"><?php echo $one['workshopName']?></a>
                <?php endforeach; ?>
</body>
</html>