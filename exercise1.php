<?php
echo '<h1>Multiplication Table: </h1>';
echo '<table style="text-align: right; color: darkblue">';
echo '<td></td>';
for($i = 1; $i < 101; $i++){
	echo '<th>'.$i.'</th>';
}
for($x = 1; $x < 101; $x++){
	echo '<tr><th>'.$x.'</th>';
	for($y = 1; $y < 101; $y++){
		echo '<td>'.$x*$y.'</td>';
	}
	echo '</tr>';
}
echo '</table>';
?>

