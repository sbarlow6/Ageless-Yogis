<?php
session_start();
echo $_SESSION['loggedin'];
?>
<!doctype html>
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
<h2>New Product</h2>
</div>

<nav class="links">
            <p>All fields are required.</p>
            <!--needs an action attribute which takes the info and passes it over to the form which is in a different location. The method tells how to get the information POST and GET.-->
            <form action="index.php" method="post">
                <fieldset>
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username" ><br>
                    <label>Password</label>
                    <input type="password" name="password" id="password">

                    <label>&nbsp;</label>
                    <input type="submit" name="action" value="login" class="button-link"><br>
                </fieldset>
            </form>
</nav>
        </div>
    </body>

</html>