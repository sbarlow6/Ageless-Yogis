<?php $result = getworkshops();

?>
<!doctype html>
<html>

<head>
	<meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">


	<title>Ageless Yogis</title>
	<link href="./css/style.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="./css/slider.css">
	<script src="https://use.fontawesome.com/0a33b60ff1.js"></script>

	

        <link href="//fonts.googleapis.com/css?family=Eagle+Lake:400" rel="stylesheet" type="text/css" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="./js/javascript.js"></script>

</head>

<body>
	<div class="graybg">
<div class="container graybg">
	<div class="col-xs-12 bordertest titletop">
		<a href="./"><img src="./images/Image_Indigo_XL.png" class="logo"><h1> Ageless Yogis </h1></a>
	</div>
	
</div>


<div class="container graybg">
	<div class="navbar1 bordertest"> 

            <ul class="navbarlist">
                <li class="navbaritem"><a href= ".?action=about"  title= "Go to the about page">About </a>
					
                </li>
                <li class="navbaritem"><a href= "#" onclick="dropdown(1)" title= "Go to the services page">Services <i class="fa fa-caret-down" aria-hidden="true"></i></a>
					<ul id="dropdown1" class="navbarsubitem backdropdown">
						<li class="navbarsubitem"><a href=".?action=yoga">Yoga</a></li>
						<li class="navbarsubitem"><a href=".?action=bodytreatment">Body Treatments</a></li>
						<li class="navbarsubitem"><a href=".?action=meditation">Guided Meditation</a></li>
						<li class="navbarsubitem"><a href=".?action=sound">Sound Healing</a></li>
						<li class="navbarsubitem"><a href=".?action=rates">Rates</a></li>
					</ul>
                </li>
                <li class="navbaritem"><a href= ".?action=classes" title= "Go to the classes page">Classes</a></li>
                <li class="navbaritem"><a href= "#" onclick="dropdown(2)" title= "Go to the workshops page">Workshops <i class="fa fa-caret-down" aria-hidden="true"></i></a>
					<ul id="dropdown2" class="navbarsubitem backdropdown">
						<?php foreach ($result as $one) : ?>
						<li class="navbarsubitem"><a href="view/workshoppage.php?workshop=<?php echo $one['workshopID']?>" ><?php echo $one['workshopName']?></a></li>
						<?php endforeach; ?>
					</ul>
                </li>
                <li class="navbaritem"><a href= ".?action=products" title= "Go to the products page">Products</a></li>
                <li class="navbaritem"><a href= ".?action=contact" title= "Go to the contact page">Contact</a></li>

            </ul>
    </div>
</div>
</div>