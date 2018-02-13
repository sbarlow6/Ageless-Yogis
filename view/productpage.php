<?php 

require_once '../model.php';
include '../view/altheader.php';
$ident = $_GET['product'];
$result2 = getproduct($ident); 

?>

<div class="container">
	<div class="col-sm-6">

                <?php foreach ($result2 as $one) : ?>
                <h3><?php echo $one['productName'];?></h3>
                <?php echo $one['productDesc'];?><br>
                <img src="<?php echo $one['productImage'];?>"><br>
                <?php echo $one['productPrice'];?>.00 BUY NOW!<br>
    </div>

    <div class="col-sm-6">
                <?php echo $one['productBody'];?><br>
                <?php endforeach; ?>
    </div>
</div>
</body>
</html>