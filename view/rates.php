<?php
$result2 = getrates();
$result3 = getastrologyrate();
?>
<div class="container">
	<div class="col-xs-12">
<h2>View Schedule​ For Current Class Times, Workshops & Pricing</h2>
<ul class="rates">
<?php foreach ($result2 as $one) : ?>
	<li><?php echo $one['serviceName']?></li>
<?php endforeach; ?>
<!-- <li>Private Yoga Sessions $75 Hour​​ ($25 Travel Fee)</li>
<li>Meditation & Sound Healing $75 Hour​</li>
<li>Relaxation Massage $75 Hour</li>
<li>Intuitive Massage $125 Hour & A Half</li>
<li>Hot Stone Massage $125 Hour</li>
<li>Ionic Foot Bath $45 Half Hour</li> -->
</ul>
<h2>Astrology & Ascended Numerology Price:</h2>
​<ul class="rates">
<?php foreach ($result3 as $one) : ?>
	<li><?php echo $one['serviceName']?> </li>
<?php endforeach; ?>
<!-- <li>Hour & A Half Session Only: $150</li>
</ul> -->
	</div>
</div>



