		<?php

	$testText =array( "This is a long string meant to fill up the  whole polygon thing. There of course is a point at
	which I'll soon run out of room in this container. Let's find out what can be done to make this all fit in two
	of these skewed containers. We just need to make it split at 144 and end at 288. This is test. placeholder");
			$textArray=array("Yes","no","Maybe","Perhaps?","This is the  testing of the thing.
			The thing is the  test. That's great!","Wow! I think that we need to think about
			thinking. I need to  wow! Look at this test. Perhaps it should do things yeah!",
			"yep","uhuh?","Yeah","what the heck!", "yeeeet" ,"Now it will work?","Or Maybe
			 now for sure");
			$titleArray=array("Title1 is long very","This short2","Place3","Holders4","5","6",
			"7","8","9","10","11","12","13","14");
			$imageArray=array("","This short2","Place3","Holders4","5","6");
			//only works for $numHexes of 6 and 2
			$numHexes=6;
			$j=0;
			print"<div class = \"hexContainer\">\n";
			for($i = 0;$i<$numHexes;$i++)
			{
				$testTextSplitArray = str_split($testText[0],158);
				print"<div class = \"hexPair\">\n";
				print"   <div class=\"hexagon  \">\n";
  				print"       <p class=\"hexTitle\">$titleArray[$j]</p>\n";
				print"       <div class=\"hexContent \">\n";
				print"	<div class=\"skewedContainer\">
                			<span class=\"skewedText\">
                                                                                </pre>";
				$testTextSplitArray[0] = $testTextSplitArray[0] . "-";
				if($i<$numHexes){strlen($testText[0]>315)? print"String is too long": print"$testTextSplitArray[0]";}

                		print"	</span>
                			</div>";
				$j++;
  				print"	           <img class=\"hexImg text\" src=\"images/smilingEmoji.png\">\n";
				print"	     </div>\n";
				print"   </div>\n";
				print"   <div class=\"hexagon2 \" >\n";
  				print"	     <p class=\"hexTitle\">$titleArray[$j]</p>\n";
				print"       <div class=\"hexContent \">\n";
				print"	<div class=\"skewedContainer\">
                			<span class=\"skewedText\">
                                                                                </pre>";
				$testTextSplitArray[1] = $testTextSplitArray[1] . "-";
				if($i<$numHexes){strlen($testText[0]>315)? print"String is too long": print"$testTextSplitArray[0]";}

                		print"	</span>
                			</div>";
				$j++;
  				print"	           <img class=\"hexImg text\" src=\"images/smilingEmoji.png\">\n";
				print"	     </div>\n";
				print"   </div>\n";
				print"</div>\n";
			}
			print"</div>";
		?>
