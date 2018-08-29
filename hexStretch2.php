<!DOCTYPE html>
<html>
	<head>
		<link rel = "stylesheet" type = "text/css"href="css/hexStretch.css">
		<link rel = "stylesheet" type = "text/css"href="css/triHourGlassish.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<!-- jQuery library -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<!-- Latest compiled JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</head>
	<body>
	<?php
				print"<div id=\"headerDecor\">";
				print"  <div class=\"tri-Hour-Container \">";
				print"	   <div class=\"arrow-down-tri-Hour \">
                                           </div>\n";
                                print"     <div class=\"arrow-up-tri-Hour \">
                                           </div>\n";
                                print"  </div>\n";
				print"  <div class=\"tri-Hour-Container tri-Hour-Container2\" >";
				print"	   <div class=\"arrow-down-tri-Hour \">
                                           </div>\n";
                                print"     <div class=\"arrow-up-tri-Hour \">
                                           </div>\n";
                                print"  </div>\n";
				print"</div>\n";

				print"     <div class=\"hexagonStretched \">\n";
					     require_once( "animationTest.php");
				print"     </div>\n";
	?>
	</body>
</html>
