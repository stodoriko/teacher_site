<?
/*	$start = $_GET['a']; $end = $_GET['b'];
	while ($start <= $end) {
		echo $start, "";
		$start++;
	}*/
?>

<?
/*for ($x = 1; $x <= 20; $x++) echo $x;*/
?>

<?
/*	$start = $_GET['a']; $end = $_GET['b'];
	for ($value = $start; $value <= $end ; $value++) { 
		echo $value. "";
	}*/
?>

<?
/*	for ($r = 1; $r <= 10; $r++) { 
		for ($c = 1; $c <= 10 ; $c++) echo ($r * $c);
			echo "<br>";
	}*/
?>

	<table cellpadding ="5" border="1">
	<?
		for ($r = 1; $r <= 10 ; $r++) { 
				echo "<tr>";
				for ($c = 1; $c <= 10 ; $c++) { 
					echo "<td>";
					echo ($r * $c);
					echo "</td>";
				}
				echo "</tr>";
			}	
	?>