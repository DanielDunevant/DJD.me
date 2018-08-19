
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
		<p id = "width"></p>
		<button onclick="getWindowWidth()">Width of Window</button>
		<script src="javascripts/screenWidthOutputter.js">
                </script>
		<?php
			$textArray=array("Yes","no","Maybe","Perhaps?","This is the  testing of the thing. The thing is the  test. That's great!","Wow! I think that we need to think about thinking. I need to  wow! Look at this test. Perhaps it should do things yeah!","yep","uhuh?","Yeah","what the heck!", "yeeeet" ,"Now it will work?","Or Maybe now for sure","This","will","be","difficult to", "Make work");
			$numOfTriBlocks = 1;
			$j=0;
			for($i = 0; $i<$numOfTriBlocks;$i++)
			{
				print"<div class =\"tri-Block\">";
				print"<div id=\"tri-Container\">";
        			print"	<div class=\"arrow-up-tri \"><span class=\"text\">$textArray[$j]</span>\n</div>\n";
				$j++;
				print"	<div class=\"arrow-down-tri \"><span class=\"text2\">$textArray[$j]</span>\n</div>\n";
				$j++;
				print"</div>";
				print"<div id=\"tri-Container2\">";
        			print"	<div class=\"arrow-up-tri  \"><span class=\"text\">$textArray[$j]</span>\n</div>\n";
				$j++;
				print"	<div class=\"arrow-down-tri \"><span class=\"text2\">$textArray[$j]</span>\n</div>\n";
				$j++;
				print"</div>";
				print"</div>";
			}
		?>
   	</body>
</html>
