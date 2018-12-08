<!DOCTYPE html>
<html>
        <head>
                <link rel = "stylesheet" type = "text/css"href="css/noJSDropDown.css">
                <!-- Latest compiled and minified CSS -->
                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
                <!-- jQuery library -->
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
                <!-- Latest compiled JavaScript -->
                <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        </head>
	<body>
		<?php
			$linkArray = array(
	                   "about",
		            "resume",
			    "blog","ongoingProjects","contact");
			$textArray = array("About","Resume","Blog","Projects","Contact");
			$numLinks =5;
			 print"<input type=\"checkbox\" id=\"btnControl\"/>";
			 print"<div class=\"dropdown-content\" for=\"btnControl\">";
			 for($i = 0; $i <$numLinks;$i++){
				         print"<div class=\"tri2-Hour-ContainerDropLeft \" >\n";
				         print"     <div class=\"arrow-down-tri-Hour2 \">
						                    </div>\n";
				         print"     <div class=\"arrow-up-tri-Hour2 \">
						                    </div>\n";
				         print"</div>\n";
				         print"<div class=\"hexagonLinks  hexagonLinksDrop \">\n";
				         print "   <a class='headerLinks'  href='index.php?page=$linkArray[$i]'\n >";
				         print "   $textArray[$i]";
				         print "   </a>\n";
				         print"</div>\n";
				         print"<div class=\"tri2-Hour-ContainerDropRight \" >\n";
				         print"     <div class=\"arrow-down-tri-Hour2 \">
				                    </div>\n";
				         print"     <div class=\"arrow-up-tri-Hour2 \">
				                    </div>\n";
				         print"</div>\n";
				 }
			 print"</div>";
		?>
	</body>
</html>
