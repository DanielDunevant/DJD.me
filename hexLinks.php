<!DOCTYPE html>
<html>
        <head>
                <link rel = "stylesheet" type = "text/css"href="css/triHourGlassish2.css">
                <link rel = "stylesheet" type = "text/css"href="css/hexLinks.css">
                <link rel = "stylesheet" type = "text/css"href="css/styleshexagon.css">
                <link rel = "stylesheet" type = "text/css"href="css/skewTextBoxVertically.css">
                <link rel = "stylesheet" type = "text/css"href="css/triDivTest.css">
                <link rel = "stylesheet" type = "text/css"href="css/imgInTri.css">
                <link rel = "stylesheet" type = "text/css"href="css/skewTextBox.css">
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
                   "Home_View",
                   "blog",
		   "about",
		   "contact");
$textArray = array("Home","Blog","About","Contact");
$numLinks =4;
require_once( "hexStretch.php");
print"<div id = \"hexLinkContainer\">";
print"<label for=\"btnControl\">";
print"     <img  id=\"dropDownImg\" src=\"images/openDropDown.png\" for=\"dropDownImgControl dropdown-content\">";
print"</label>";
print"<div class=\"hexagonStretched hexagonStretchedLinks\" style=\"display:none\">\n";
print"</div>\n";
print"</div>\n";
require_once( "noJSDropDown.php");
/*When the  window width is  > 850px */
for($i = 0; $i <$numLinks;$i++){
	if($i==0)
	{
		print"<div class=\"linkBar\">";
	}
	print"   <div class=\"hexagonLinks hl1\">\n";
        print "   <a class='headerLinks'  href='index.php?page=$linkArray[$i]'\n >";
        print "   $textArray[$i]";
        print "   </a>\n";
	print"</div>\n";
	if($i<($numLinks-1))
	{
		print"<div class=\"tri2-Hour-Container thc \" >";
		print"	   <div class=\"arrow-down-tri-Hour2 \">
        	           </div>\n";
       	 	print"     <div class=\"arrow-up-tri-Hour2 \">
                    	   </div>\n";
		print"</div>\n";
	}else{
		print"</div>";
	}

}
?>
	</body>
</html>
