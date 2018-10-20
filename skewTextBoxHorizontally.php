<!DOCTYPE html>
<html>
        <head>
                <link rel = "stylesheet" type = "text/css"href="css/skewTextBoxHorizontally.css">
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
	of these skewed containers. This is just to  make the text box be full. I can type a bit more I think. ");
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
				$testTextSplitArray = str_split($testText[0],158);
				print "
					<div class=\"skewedContainer\">
                			<span class=\"skewedText\">
                                                                                </pre>";
				$testTextSplitArray[0] = $testTextSplitArray[0] . "-";
				if($k<$numOfTriBlocks){(strlen($testText[0])>315)? print"String is too long": print"$testTextSplitArray[0]";}
                		print"	</span>
				      </div>";
				$k++;
			//	print"		<img class=\"object-fit_cover\" src=\"images/smilingEmoji.png\">\n";
				print"
					<div class=\"skewedContainer2 skewedContainer\">
                			<span class=\"skewedText2 skewedText\">
                             ";
				$testTextSplitArray[1] = "-" . $testTextSplitArray[1];
				if($k<$numOfTriBlocks){(strlen($testText[0])>315)? print"String is too long": print"$testTextSplitArray[1]";}
                		print"	</span>
				      </div>";

                                $j++;
				$k++;
				print"
					<div class=\"skewedContainer\">
                			<span class=\"skewedText\">";
				$testTextSplitArray[0] = $testTextSplitArray[0] . "-";
				if($k<$numOfTriBlocks){(strlen($testText[0])>315)? print"String is too long": print"$testTextSplitArray[0]";}
                		print"	</span>
				</div>";
				$k++;
				print"
					<div class=\"skewedContainer2 skewedContainer\">
                			<span class=\"skewedText2 skewedText\">
			     ";
				$testTextSplitArray[1] = "-" . $testTextSplitArray[1] ;
				if($k<$numOfTriBlocks){(strlen($testText[0])>315)? print"String is too long": print"$testTextSplitArray[1]";}
                		print"	</span>
					</div>";
                                $j++;
				$k++;
                        }
?>
