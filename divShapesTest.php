
<!DOCTYPE html>
<html>
	<head>
		<link rel = "stylesheet" type = "text/css"href="css/stylesDivShapes.css">
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

		<!-- jQuery library -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

		<!-- Latest compiled JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   	</head>
	<body>
		<?php
		$numOfHexes = 3;
		for($i = 0 ;$i<$numOfHexes;$i++)
		{
			print"<div class = \"container-fluid\">";
			print"<div class = \"row\">";
			print"<p class=\"hexagonText \">This is sample text that is really about nothing.\n 
				I just want to use this text to  figure out how real text should be displayed\n
				when that's necessary. At this point this is just a placeholder.</p>\n";
			print"<div class = \"hexagon \">\n";
			print"	<div class=\"arrow-up-hex arrows-hex\">";
			print"</div>\n";
        		print"	<div class=\"arrow-down-hex arrows-hex\"></div>\n";
        		print"	<div class=\"arrow-up-hex arrows-hex\"></div>\n";
        		print"	<div class=\"arrow-down-hex arrows-hex\"></div>\n";
        		print"	<div class=\"arrow-up-hex arrows-hex\"></div>\n";
			print"	<div class=\"arrow-down-hex arrows-hex\"></div>\n";
			print"</div>\n";
			print"<p class=\"hexagonText \">This is sample text that is really about nothing.\n 
				I just want to use this text to  figure out how real text should be displayed\n
				when that's necessary. At this point this is just a placeholder.</p>\n";
			print"<div class = \"hexagon2 \"\n>";	
			print"	<div class=\"arrow-up-hex arrows-hex\">";
			print"</div>\n";
        		print"	<div class=\"arrow-down-hex arrows-hex\"></div>\n";
        		print"	<div class=\"arrow-up-hex arrows-hex\"></div>\n";
        		print"	<div class=\"arrow-down-hex arrows-hex\"></div>\n";
        		print"	<div class=\"arrow-up-hex arrows-hex\"></div>\n";
			print"	<div class=\"arrow-down-hex arrows-hex\"></div>\n";
			print"</div>\n";
			print"</div>\n";
			print"</div>\n";
		}
		$numOfTris = 2;
		
		for($i = 0 ;$i<$numOfHexes;$i++)
		{
        		print"	<div class=\"arrow-up-tri arrows-tri\"></div>\n";
        		print"	<div class=\"arrow-down-tri arrows-tri\"></div>\n";
		}	
		?>
   	</body>
</html>
