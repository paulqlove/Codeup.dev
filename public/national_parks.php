<?php

	require_once('../park_seeder.php');

	$stmt = $dbc->query('SELECT * FROM national_parks LIMIT 10');

	// echo "rows: " . $stmt->rowCount() . PHP_EOL;
	// echo "Columns: " . $stmt->columnCount() . PHP_EOL;
	

	
?>
<!DOCTYPE html>
<html>
	<head>
			<link rel="stylesheet" type="text/css" href="../css/parks.css">
			<title>National Parks</title>
	</head>
	<body>

		
		
					<section>
				<? while ($row = $stmt->fetch(PDO::FETCH_ASSOC)): ?>
						<ul>
						<? foreach ($row as $value): ?>
							
					<li><?	echo "<p>$value</p>" . PHP_EOL ?></li>
						</ul>
						<?php endforeach ?>
						<?php endwhile ?>
					
					</section>
			
			

		
	</body>
</html>