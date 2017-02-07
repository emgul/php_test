<!DOCTYPE html>
<html>
<head>


<style>


</style>
	<title></title>
</head>
<body>

	<?php
	$color;
	$textcolor;
	$date = $_GET['date'];
	$today = date("Y-m-d");
	echo $today;


	if ($date < $today) {
		$color = "red";
		$textcolor = "blue";
	}
	elseif ($date > $today) {
		$color = "blue";
		$textcolor = "red";
	}

	?>


		<style>
		body {
			background-color: <?php echo $color ?> ;
			color: <?php echo $textcolor  ?> ;
		}

		</style>


</body>

</html>