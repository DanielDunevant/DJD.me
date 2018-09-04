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
		<div class ="widthFinder">
                	<p id = "width"></p>
                	<button id="widthButton" onclick="getWindowWidth()">Width of Window</button>
                	<script src="javascripts/screenWidthOutputter.js">
                	</script>
		</div>
                <?php
                        $textArray=array("Yes","no","Maybe","Perhaps?","This is the  testing of the thing.
                        The thing is the  test. That's great!","Wow! I think that we need to think about
                        thinking. I need to  wow! Look at this test. Perhaps it should do things yeah!",
                        "yep","uhuh?","Yeah","what the heck!", "yeeeet" ,"Now it will work?","Or Maybe
                        now for sure","This","will","be","difficult to", "Make work");
                        $titleArray=array("Title1 is long very","This short2","Place3","Holders4","5","6",
                        "7","8","9","10","11","12","13","14");
                        $numOfTriBlocks = 12;
                        $j=0;
                        for($i = 0; $i<$numOfTriBlocks;$i++)
                        {
                                print"<div class =\"tri-Block\">";
				print"<div id=\"tri-Container\"> \n";
                                print"  <div class=\"arrow-up-tri \">
                                                <img class=\"triImg1\" src=\"images/smilingEmoji.png\">\n
						<div class = \"triContent1\">
                                                    <span class=\"text\">$textArray[$j]</span>\n
						</div>
                                                <h1 class=\"triTitle1\">$titleArray[$j]</h1>\n
					</div>\n";
				print"<div class=\"arrow-up-tri inner-Tri-Up inner-Tri\">
				      </div>";
				print"<div class=\"arrow-up-tri img-Tri-Up img-Tri\">";
			//	print"		<img class=\"object-fit_cover\" src=\"images/smilingEmoji.png\">\n";
			        print"</div>";
				print"<div class=\"divider divider-Up\"></div>";
                                $j++;
				print"	<div class=\"arrow-down-tri \">
					<h1 class=\"triTitle2\">$titleArray[$j]</h1>\n
					<div class = \"triContent2\">
                                                   <span class=\"text\">$textArray[$j]</span>\n
					</div>
                                        <img class=\"triImg2\" src=\"images/smilingEmoji.png\">\n
                                        </div>\n";
				print"<div class=\"arrow-down-tri inner-Tri-Down inner-Tri\"></div>";
				print"<div class=\"arrow-down-tri img-Tri-Down img-Tri\"></div>";
				print"<div class=\"divider divider-Down\"></div>";
                                $j++;
                                print"</div>";
                                print"<div id=\"tri-Container2\">";
				print"	  <div class=\"arrow-up-tri \">
                                                <img class=\"triImg1\" src=\"images/smilingEmoji.png\">\n
						<div class = \"triContent1\">
                                                    <span class=\"text\">$textArray[$j]</span>\n
                                                </div>
                                                <h1 class=\"triTitle1\">$titleArray[$j]</h1>\n
                                       </div>\n";
				print"<div class=\"arrow-up-tri inner-Tri-Up inner-Tri\"></div>";
				print"<div class=\"arrow-up-tri img-Tri-Up img-Tri\"></div>";
				print"<div class=\"divider divider-Up\"></div>";
                                $j++;
				print"          
					<div class=\"arrow-down-tri \">
						<h1 class=\"triTitle2\">$titleArray[$j]</h1>\n
						<div class = \"triContent2\">
                                                    <span class=\"text\">$textArray[$j]</span>\n
						</div>
                                        	<img class=\"triImg2\" src=\"images/smilingEmoji.png\">\n
                                        </div>\n";
				print"<div class=\"arrow-down-tri inner-Tri-Down inner-Tri\"></div>";
				print"<div class=\"arrow-down-tri img-Tri-Down img-Tri\"></div>";
				print"<div class=\"divider divider-Down\"></div>";
                                $j++;
                                print"</div>";
                                print"</div>";
                        }
                ?>


