<?php include 'navigation.php';?>

<body>
	<div class = main>
		<p id="first" class="fadeInAnimated">Together</p>
		<p id="second" class="fadeInAnimated">For</p>
		<p id="third" class="fadeInAnimated">West Africa</p>
	</div>
	<div class="fadeInAnimated" id=fourth>
			<div class="tooltip" id=svg_container1><a href="art.php"><?php echo file_get_contents("../Images/Icons/ios-brush.svg"); ?></a><span class="tooltiptext">Art</span></div>
			<div class="tooltip" id=svg_container2><a href="wildlife.php"><?php echo file_get_contents("../Images/Icons/ios-bug.svg"); ?></a><span class="tooltiptext">Wildlife</span></div>
			<div class="tooltip" id=svg_container3><a href="food.php"><?php echo file_get_contents("../Images/Icons/ios-nutrition.svg"); ?></a><span class="tooltiptext">Food</span></div>
			<div class="tooltip" id=svg_container4><a href="smiles.php"><?php echo file_get_contents("../Images/Icons/ios-happy.svg"); ?></a><span class="tooltiptext">Smiles</span></div>
	</div>
</body>