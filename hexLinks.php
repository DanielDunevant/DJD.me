<!DOCTYPE html>
<html>
        <head>
                <link rel = "stylesheet" type = "text/css"href="css/triHourGlassish2.css">
                <link rel = "stylesheet" type = "text/css"href="css/hexLinks.css">
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
                   "hexagonTest2-1",
                   "triDivTest",
                   "contact","","");
$textArray = array("Hexi","Tris","Contact","Thing4","Thing5");
$numLinks =5;
require_once( "hexStretch.php");
print"<div id = \"hexLinkContainer\">";
for($i = 0; $i <$numLinks;$i++){
	print"   <div class=\"hexagonLinks\">\n";
        print "   <a class='headerLinks col-xs-2 col-md-2 col-sm-2'  href='index.php?page=$linkArray[$i]'\n >";
        print "   $textArray[$i]";
        print "   </a>\n";
	print"</div>\n";
	print"<div class=\"tri2-Hour-Container \" >";
	print"	   <div class=\"arrow-down-tri-Hour2 \">
                        </div>\n";
        print"     <div class=\"arrow-up-tri-Hour2 \">
                        </div>\n";
        print"</div>\n";
}
?>
	</body>
</html>
