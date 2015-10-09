<?php
	
	// table.php
	require_once("functions.php");
	
	$car_list = getCarData();
	//var_dump($car_list);
	
?>
<table border=1 >
	<tr>
		<th>id</th>
		<th>auto nr märk</th>
	</tr>

	<?php
	
		// iga massiivis oleva elemendi kohta
		// count($car_list) - massiivi pikkus
		for($i = 0; $i < count($car_list); $i++){
			// $i = $i +1; sama, mis $i +=1; sama, mis $i++;
			echo "<tr>";
			
			echo "<td>".$car_list[$i]->id."</td>";
			echo "<td>".$car_list[$i]->number_plate."</td>";
			
			echo "</tr>";
		}
		
	?>
</table>
