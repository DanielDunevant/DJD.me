		<?php

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
				print"<div class = \"hexPair\">\n";
				print"   <div class=\"hexagon  \">\n";
  				print"       <p class=\"hexTitle\">$titleArray[$j]</p>\n";
				print"       <div class=\"hexContent \">\n";
				print"	           <span class=\"text\">$textArray[$j]</span>\n";
				$j++;
  				print"	           <img class=\"hexImg text\" src=\"images/smilingEmoji.png\">\n";
				print"	     </div>\n";
				print"   </div>\n";
				print"   <div class=\"hexagon2 \" >\n";
  				print"	     <p class=\"hexTitle\">$titleArray[$j]</p>\n";
				print"       <div class=\"hexContent \">\n";
  				print"	           <span class=\"text\">$textArray[$j]</span>\n";
				$j++;
  				print"	           <img class=\"hexImg text\" src=\"images/smilingEmoji.png\">\n";
				print"	     </div>\n";
				print"   </div>\n";
				print"</div>\n";
			}
			print"</div>";
		?>
