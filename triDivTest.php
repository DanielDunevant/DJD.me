
<!DOCTYPE html>
<html>
	<head>
		<link rel = "stylesheet" type = "text/css"href="css/triDivTest.css">
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<!-- jQuery library -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<!-- Latest compiled JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   	</head>
	<body>
		<?php
			$numOfTriBlocks = 2;
			for($i = 0; $i<$numOfTriBlocks;$i++)
			{
			print"<div class =\"tri-Block\">";
				print"<div id=\"tri-Container\">";
        				print"	<div class=\"arrow-up-tri \"></div>\n";
					print"	<div class=\"arrow-down-tri \"></div>\n";
				print"</div>";
				print"<div id=\"tri-Container2\">";
        				print"	<div class=\"arrow-up-tri  \"></div>\n";
					print"	<div class=\"arrow-down-tri \"></div>\n";
				print"</div>";
			print"</div>";
			}
		?>
   	</body>
</html>
