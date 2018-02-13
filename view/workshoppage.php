<?php 
require_once '../model.php';
$ident = $_GET['workshop'];
$result = getworkshop($ident); 
include '../view/altheader.php';
?>

<div class="container">
	<div class="col-xs-12 ">
		
                <?php foreach ($result as $one) : 
                if ($one['workshopID'] == $ident) {?>
                <a href="<?php echo $one['workshopLink'];?>"><h3><?php echo $one['workshopName'];?></h3>
                <div class="workshopwrap">
                <img src="../workshopimages/<?php echo $one['workshopImage'];?>" class="workshopimage"></div></a><br>
                
                <?php }
                endforeach; ?>
     </div>
</div>

<?php include '../view/altfooter.php'; ?>