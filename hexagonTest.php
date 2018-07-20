<!DOCTYPE html>
<html>
	<head>
		<link rel = "stylesheet" type = "text/css"href="css/styleshexagon.css">
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<!-- jQuery library -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<!-- Latest compiled JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   	</head>
	<body>
		<?php
			//for Medium screen width
			$numHexes=3;
			print"<div class=\"hex-Container\">";	
			for($i = 0;$i<$numHexes;$i++)
			{
				print"<div class=\"hexagon  \">\n";
  				print"	<span class=\"text\">XYZ</span>\n";
				print"	</div>\n";
			}
			for($i = 0;$i<$numHexes;$i++)
			{
				print"<div class=\"hexagon2 \" >\n";
  				print"	<span class=\"text\">XYZ</span>\n";
				print"</div>\n";
			}
			print"</div>";
			print"<div class=\"hex-Container\">";	
			for($i = 0;$i<$numHexes;$i++)
			{
				print"<div class=\"hexagon  \">\n";
  				print"	<span class=\"text\">XYZ</span>\n";
				print"	</div>\n";
			}
			for($i = 0;$i<$numHexes;$i++)
			{
				print"<div class=\"hexagon2 \" >\n";
  				print"	<span class=\"text\">XYZ</span>\n";
				print"</div>\n";
			}
			print"</div>";
		?>
   	</body>
</html>
