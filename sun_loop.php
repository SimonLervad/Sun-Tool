<div id="danske-byer" class="column">
<?php
	$dkname = $_POST['dkname'];
	// Starting date
	$date = '-1 day';
	// End date
	$end_date = 'sunday';

	// input location
	$lon = $_POST['lon'];
	$lat = $_POST['lat'];
	$gmt = $_POST['gmt'];
	echo 
	'<table>
		<tr>
			<th>' . $dkname . '</th>
			<th>Solopgang</th>
			<th>Solnedgang</th>
		</tr>';		// loops days from now till sunday
			while (strtotime($date) < strtotime($end_date)) {
				$date = date ("l j F", strtotime("+1 day", strtotime($date)));
				$dkop = date_sunrise(strtotime("$date"), SUNFUNCS_RET_STRING, $lat, $lon, 90.6, $gmt);
				$dkned = date_sunset(strtotime("$date"), SUNFUNCS_RET_STRING, $lat, $lon, 90.6, $gmt);
				echo
				// display date
				"<tr><td>$date</td><td>" 
				// display sunrise
				. $dkop . "</td><td>"
				// display sunset
				. $dkned . "</td></tr>";
			}
		?>
	</table>
</div>