<!doctype html>
	<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Facebook</title>
		
		<!-- external CSS link -->
		<link rel="stylesheet" href="css/normalize.css">
		<link rel="stylesheet" href="css/style.css">
	</head>

	<body>
		<div id="container">
	
			<h1>Facebook Photos</h1>
			<?php

			/* ASSIGN MY FACEBOOK  */
				$graph_url = file_get_contents('https://graph.facebook.com/castiglione');
				$graph_output = json_decode($graph_url);


			/* TESTING TO SEE THE DATA */
				// echo "<pre>";
				// print_r($graph_output);
				// echo "</pre>";
			
			
			// PRINT OUT THE RESULTS */
				echo $graph_output->name . "<br>";
				// echo $graph_output->gender . "<br />";

				// echo "<img src=\"https://graph.facebook.com/" . $graph_output->id . "/picture\" />";
			
				
			?>

		</div>
	</body>
</html>
