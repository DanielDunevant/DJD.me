<!-- PHP for "DJD" © 2018, author(s): "Daniel J. Dunevant" -->
		<?php

	$testText =array( "You should be able to  figure out my name. I'm a bit of a renaissance man. I'm a aspiring computer 
	scientist, artist of CSS, as well as the  other  renaisance stuff blah blah blah. The point is I'm a life
	long learner of all that interests me. At this point that's: mathematics, computers, and the arts. Yeah,  
        that's about it.");

			$titleArray=array("About me");
			$imageArray=array("DanielPic","danielSide" );
			//only works for $numHexes of 6 and 2
			$numHexes=1;
			$j=0;
			print"<div class = \"hexContainer\">\n";
			for($i = 0;$i<$numHexes;$i++)
			{
				$testTextSplitArray = str_split($testText[0],175);
				print"<div class = \"hexPair\">\n";
				print"   <div class=\"hexagon\">\n";
  				print"       <p class=\"hexTitle\">$titleArray[$j]</p>\n";
				print"       <div class=\"hexContent\">\n";
				print"	<div class=\"skewedContainerVert skewedContainerRightVert\">
                			<span class=\"skewedTextVert\">
                                                                                </pre>";
				$testTextSplitArray[0] = $testTextSplitArray[0] . "-";
				if($i<$numHexes){strlen($testText[0]>350)? print"String is too long": print"$testTextSplitArray[0]";}

                		print"	</span>
                			</div>";
				print"          <div class = \"skewedRect skewedLeft\">";
  				print"	           <img class=\"hexImg hexImgLeft\" src=\"images/$imageArray[$j].jpg\">\n";
				$j++;
				print"          </div>";
				print"	     </div>\n";
				print"   </div>\n";
				print"   <div class=\"hexagon2 \" >\n";
  				print"	     <p class=\"hexTitle\">$titleArray[$j]</p>\n";
				print"       <div class=\"hexContent \">\n";
				print"	<div class=\"skewedContainerVert skewedContainerLeftVert \">
                			<span class=\"skewedTextVert\">
                                                                                </pre>";
				$testTextSplitArray[1] = "-".$testTextSplitArray[1] ;
				if($i<$numHexes){strlen($testText[0]>350)? print"String is too long": print"$testTextSplitArray[1]";}

                		print"	</span>
                			</div>";
				print"          <div class = \"skewedRect skewedRight\">";
  				print"	           <img class=\"hexImg hexImgRight\" src=\"images/$imageArray[$j].jpg\">\n";
				$j++;
				print"          </div>";
				print"	     </div>\n";
				print"   </div>\n";
				print"</div>\n";
			}
			print"</div>";
		?>
