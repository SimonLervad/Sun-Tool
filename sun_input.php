<div class="column">
	<?php
		$time = strtotime($_POST['time']);
		$longitude = $_POST['longitude'];
		$latitude = $_POST['latitude'];
		$gmtOffset = $_POST['gmtOffset'];
		$name = $_POST['name'];


		$sunrise = date_sunrise($time, SUNFUNCS_RET_STRING, $latitude, $longitude, 90.6, $gmtOffset);
		$sunset = date_sunset($time, SUNFUNCS_RET_STRING, $latitude, $longitude, 90.6, $gmtOffset);

		echo '<h3>' . $name . '</h3>';
		echo date('l dS, M Y', $time) . '<br><br>';
		echo 'Solopgang: ' . $sunrise . '<br>';
		echo 'Solnedgang: ' . $sunset . '<br>';
	?>
</div>