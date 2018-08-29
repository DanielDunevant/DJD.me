<!DOCTYPE html>
<html>
	<head>
		<link rel = "stylesheet" type = "text/css"href="css/hexStretch.css">
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<!-- jQuery library -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<!-- Latest compiled JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   	</head>
	<body>
		<p id = "width"></p>
		<button onclick="getWindowWidth()">Width of Window</button>
		<script src="javascripts/screenWidthOutputter.js">
                </script>
<?php
				print"   <div class=\"hexagonStretched \">\n";
					require_once( "animationTest.php");
				print"   </div>\n";
?>
	</body>
</html>
