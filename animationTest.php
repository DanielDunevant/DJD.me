<!DOCTYPE html>
<html>
	<head>
		<link rel = "stylesheet" type = "text/css"href="css/stylesAni.css">
	</head>	
        <body>
		<div id ="container" onmouseover="Fun(true,21)" onmouseout="Fun(false,21)" >
                </div>

			<?php	
				$animations = array('1','2','3','4','5','6',
						    '7','8','9','10','11','12'
						    ,'13','14','15','16','17'
					    	    ,'18','19','20','21');
				$numElements= count($animations)+1;
				for($i=1;$i<$numElements;$i++)
				{
					$newAnimation = 'animate'.$i;
					$newLetter = 'images/letter'.$i.'.svg';
				//	print"<div id =\"$newAnimation\"  >$newAnimation\n";
					print"<img src = \"$newLetter\" id =\"letters$i\"/>\n";
				//	print"</div>\n";
				}
			?>
                <script>
			function Fun(isExpanding,numOfObjects)
			{
				var endPositions=   [50 ,107,150,200,220,270,320,375,420,470,550,607,650,700,750,800,850,900,950,1000,1057];
				var startPositions= [435,450,450,450,450,450,495,500,500,500,550,550,550,550,550,550,550,550,621,650 ,704];
				for(var i = 1;i<numOfObjects+1;i++)
				{
					//var elem = document.getElementById('animate'+i.toString());
					//var theCSSprop = window.getComputedStyle(elem,null).getPropertyValue("left");
					//theCSSprop = theCSSprop.substring(0,theCSSprop.length-2);
					//currentPos = parseInt(theCSSprop);
					var startPos= startPositions[i-1];
					myMoves(i.toString(),startPos,endPositions[i-1],isExpanding);
				}
			}
			function myMoves(animateID,startPos,endPos,isExpanding)
			{
				var startIsLessThanEnd= isLessThan(startPos,endPos);
				var newAnimation = "letters"+animateID;
				var elem = document.getElementById(newAnimation);
			     	if(isExpanding)
					var pos = startPos;
				else
					var pos = endPos;
               			var id = setInterval(frame, 5);
				function frame() {
					if(isExpanding)
					{
						var eleme = document.getElementById(newAnimation);
						var theCSSprop = window.getComputedStyle(eleme,null).getPropertyValue("left");
						theCSSprop = theCSSprop.substring(0,theCSSprop.length-2);
						currentPos = parseInt(theCSSprop);
						if(currentPos == endPos)
						{
							//document.g(currentPos);
							var nothing=0;
						}else{
                       					if (pos == endPos) {
								clearInterval(id);
								pos = startPos;
							} else {
								if(!startIsLessThanEnd)
									pos--;
								else
									pos++;
                        		       				//elem.style.top = pos + 'px'; 
                        						elem.style.left = pos + 'px'; 
							
							}
						}
						
					}else
					{
						var eleme = document.getElementById(newAnimation);
						var theCSSprop = window.getComputedStyle(eleme,null).getPropertyValue("left");
						theCSSprop = theCSSprop.substring(0,theCSSprop.length-2);
						currentPos = parseInt(theCSSprop);
						if(currentPos == startPos)
						{
							//document.g(currentPos);
							var nothing=0;
						}else
						{	
                       					if (pos == startPos) {
								clearInterval(id);
								pos = endPos;
							} else {
								if(!startIsLessThanEnd)
									pos++;
								else
									pos--;
                        		       				//elem.style.top = pos + 'px'; 
                        						elem.style.left = pos + 'px'; 
						
						}
						}
					
					}
				}
				
			}
			function isLessThan(num1,num2)
			{
				if(num1<num2)
					return true;
				else
					return false;
			}
			
                </script>

        </body>
</html>
