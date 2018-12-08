<!DOCTYPE html>
<html>
        <head>
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
		/*Sample of how much text can be in a given textArray Element */
                //What else  can I write here?
                // How will this effect the way
                // it looks? Let's find out. How
                // many words can be seen in this
                // system? A few more?
	$testText =array( "This is a long string meant to fill up the  whole polygon thing. There of course is a point at
	which I'll soon run out of room in this container. Let's find out what can be done to make this all fit in two
	of these skewed containers. We just need to make it split at 144 and end at 288. This is test. placeholder");
	$textArray=array("Yes this is a test of how the div should look. What else needs to be said
	here? I think that eventually i'll. I want to see what else needs to be done to make this functional.","no this is not how it will look finally","Maybe this is something that will turn into something  great","Perhaps it will be the best site ever","This is the  testing of the thing.
                        The thing is the  test. That's great!","Wow! I think that we need to think about
                        thinking. I need to  wow! Look at this test. Perhaps it should do things yeah!",
                        "yep","uhuh?","Yeah","what the heck!", "yeeeet" ,"Now it will work?","Or Maybe
                        now for sure","This","will","be","difficult to", "Make work");
                        $titleArray=array("Title1 is long very","This short2","Place3","Holders4","5","6",
                        "7","8","9","10","11","12","13","14");
                        $numOfTriBlocks = 2;
			$j=0;
			$k=0;
                        for($i = 0; $i<$numOfTriBlocks;$i++)
			{
				//in actual implementation the testText element will be j
				$testTextSplitArray = str_split($testText[0],158);
                                print"<div class =\"tri-Block\">";
				print"<div id=\"tri-Container\"> \n";
                                print"  <div class=\"arrow-up-tri \">";
				print"<div class=\"arrow-up-tri inner-Tri-Up inner-Tri\">
					 <div class = \"triContent1\">";
				print"<div class=\"arrow-up-tri img-Tri-Up img-Tri\">";
				print"
					<div class=\"wrap\">
						<div class=\"crop\">\n
      							<img class=\"tri-image\"src=\"https://s3.amazonaws.com/uifaces/faces/twitter/brad_frost/128.jpg\">\n
   						</div>\n
					</div>\n
				</div>";
				print"<div class=\"divider divider-Up\"></div>";
			        print"</div>";
			        print"		 <div class=\"skewedContainer\">

                			             <span class=\"skewedText\">
                                                                                </pre>";
				$testTextSplitArray[0] = $testTextSplitArray[0] . "-";
				strlen($testText[0]>315)? print"String is too long": print"$testTextSplitArray[0]";

                		print"	         </span>
                			     </div>
					 </div>
				      </div>";
				print"	</div>\n";
				print"	<div class=\"arrow-down-tri \">
                                        </div>\n";
				print"<div class=\"arrow-down-tri inner-Tri-Down inner-Tri\">
						<h1 class=\"triTitle2\">$titleArray[$j]</h1>\n
						<div class = \"triContent2\">
					<div class=\"skewedContainer2 skewedContainer\">
                			<span class=\"skewedText2 skewedText\">
                             ";
				$testTextSplitArray[1] = "-" . $testTextSplitArray[1];
				strlen($testText[0]>315)? print"String is too long": print"$testTextSplitArray[1]";
				// At this point one must increment what text element we're using.
				// This will be done when switching over to the arrays of text.
				// We must also split this string at 144 in order to make it fit again
                		print"	</span>
                			</div>
						</div>
				      </div>";
				print"<div class=\"arrow-down-tri img-Tri-Down img-Tri\">";
				print"
<div class=\"wrap wrap2\">\n
	<div class=\"crop crop2\">\n
      		<img class=\"tri-image tri-image2\"src=\"https://s3.amazonaws.com/uifaces/faces/twitter/brad_frost/128.jpg\">\n
   	</div>\n
</div>\n
				";

				print"</div>";
				print"<div class=\"divider divider-Down\"></div>";
                                $j++;
				$k++;
                                print"</div>";
				print"<div id=\"tri-Container2\">";
				print"	  <div class=\"arrow-up-tri \">
                                       </div>\n";
				print"<div class=\"arrow-up-tri inner-Tri-Up inner-Tri\">
					<div class = \"triContent1\">
					<div class=\"skewedContainer\">
                			<span class=\"skewedText\">";
				$testTextSplitArray[0] = $testTextSplitArray[0] . "-";
				strlen($testText[0]>315)? print"String is too long": print"$testTextSplitArray[0]";
                		print"	</span>
                			</div>
					  </div>
				</div>";
				$k++;
				print"<div class=\"arrow-up-tri img-Tri-Up img-Tri\">";
				print"
<div class=\"wrap\">\n
	<div class=\"crop\">\n
      		<img class=\"tri-image\"src=\"https://s3.amazonaws.com/uifaces/faces/twitter/brad_frost/128.jpg\">\n
   	</div>\n
</div>\n
				";
				print"</div>";
				print"<div class=\"divider divider-Up\"></div>";
				print"          
					<div class=\"arrow-down-tri \">
                                        </div>\n";
				print"<div class=\"arrow-down-tri inner-Tri-Down inner-Tri\">
						<h1 class=\"triTitle2\">$titleArray[$j]</h1>\n
						<div class = \"triContent2\">
					<div class=\"skewedContainer2 skewedContainer\">
                			<span class=\"skewedText2 skewedText\">
			     ";
				$testTextSplitArray[1] = "-" . $testTextSplitArray[1] ;
				strlen($testText[0]>315)? print"String is too long": print"$testTextSplitArray[1]";
                		print"	</span>
                			</div>
						</div>
					</div>";
				print"<div class=\"arrow-down-tri img-Tri-Down img-Tri\">";
				print"
<div class=\"wrap wrap2\">\n
	<div class=\"crop crop2\">\n
      		<img class=\"tri-image tri-image2\"src=\"https://s3.amazonaws.com/uifaces/faces/twitter/brad_frost/128.jpg\">\n
   	</div>\n
</div>\n
				";
				print"</div>";
				print"<div class=\"divider divider-Down\"></div>";
                                $j++;
				$k++;
                                print"</div>";
                                print"</div>";
                        }
?>
