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
			$textArray=array("Yes","no","Maybe","Perhaps?","This is the  testing of the thing.
			The thing is the  test. That's great!","Wow! I think that we need to think about
			thinking. I need to  wow! Look at this test. Perhaps it should do things yeah!",
			"yep","uhuh?","Yeah","what the heck!", "yeeeet" ,"Now it will work?","Or Maybe
			 now for sure");
			$titleArray=array("Title1 is long very","This short2","Place3","Holders4","5","6",
			"7","8","9","10","11","12","13","14");
			//only works for $numHexes of 6 and 2
			$numHexes=6;
			print"<div class=\"hex-Container\">";	
			for($i = 0;$i<$numHexes;$i++)
			{
				print"<div class=\"hexagon  \">\n";
  				print"	<p class=\"hexTitle\">$titleArray[$i]</p>\n";
  				print"	<span class=\"text\">$textArray[$i]</span>\n";
  				print"	<img class=\"hexImg\" src=\"images/smilingEmoji.png\">\n";
				print"	</div>\n";
			}
			for($i = $numHexes;$i<$numHexes+$numHexes;$i++)
			{
				print"<div class=\"hexagon2 \" >\n";
  				print"	<p class=\"hexTitle\">$titleArray[$i]</p>\n";
  				print"	<span class=\"text\">$textArray[$i]</span>\n";
  				print"	<img class=\"hexImg\" src=\"images/smilingEmoji.png\">\n";
				print"</div>\n";
			}
			print"</div>";
		?>
   	</body>
</html>
