<!DOCTYPE html>
<html>
	<head>
		<link rel = "stylesheet" type = "text/css"href="css/stylesAni.css">
	</head>	
        <body>

			<?php	
				$animations = array('1','2','3','4','5','6',
						    '7','8','9','10','11','12'
						    ,'13','14','15','16','17'
					    	    ,'18','19','20','21');
				$numElements= count($animations)+1;
				print"<div id =\"container\" onmouseover=\"FunExpand(true,21)\" onmouseout=\"FunContract(false,21)\" >\n";
				print"<div id =\"letterContainer\">\n ";
				for($i=1;$i<$numElements;$i++)
				{
					$newAnimation = 'animate'.$i;
					$newLetter = 'images/letter'.$i.'.svg';
					print"<img src = \"$newLetter\" class = \"allLetters\"  id =\"letters$i\"/>\n";
				}
				print"</div>\n";
				print"</div>\n";
			?>
	<script src="javascripts/animationTest.js">
		var isNameExpanding = true;
		
					var endPositions=   [50 ,107,150,200,220,270,320,375,420,470,550,607,650,700,750,800,850,900,950,1000,1057];
					var startPositions= [435,450,450,450,450,450,495,500,500,500,550,550,550,550,550,550,550,550,621,650 ,704];
			function FunExpand(isExpanding,numOfObjects)
			{
				if(isExpanding==true && isNameExpanding!=false)
				{
					for(var i = 1;i<numOfObjects+1;i++)
					{
						var startPos= startPositions[i-1];
						myMoves(i.toString(),startPos,endPositions[i-1],isExpanding);
					}
					isNameExpanding = false; 
				}
			}
			function FunContract(isExpanding,numOfObjects)
			{
				if(isExpanding==false && isNameExpanding!=true)
				{
					for(var i = 1;i<numOfObjects+1;i++)
					{
						var startPos= startPositions[i-1];
						myMoves(i.toString(),startPos,endPositions[i-1],isExpanding);
					}
					isNameExpanding = true;
				}
			}	
			function myMoves(animateID,startPos,endPos,isExpanding)
			{
				var moveRate = 4;
				var startIsLessThanEnd= isLessThan(startPos,endPos);
				var newAnimation = "letters" + animateID;
				var elem = document.getElementById(newAnimation);
			     	if(isExpanding)
					var pos = startPos;
				else
					var pos = endPos;
               			var id = setInterval(frame,.001 );
				function frame() {
					if(isExpanding)
					{
						var eleme = document.getElementById(newAnimation);
						var theCSSprop = window.getComputedStyle(eleme,null).getPropertyValue("left");
						theCSSprop = theCSSprop.substring(0,theCSSprop.length-2);
						currentPos = parseInt(theCSSprop);
						if((pos == endPos) && (pos!=startPos))
						{
							//document.g(currentPos);
							var nothing=0;
						}else{
                       					if (startIsLessThanEnd && pos >= endPos) {
								clearInterval(id);
                        					elem.style.left =  endPos+ 'px'; 
								pos = startPos;
							} else if(!startIsLessThanEnd && pos<=endPos){
								clearInterval(id);
                        					elem.style.left =  endPos+ 'px'; 
								pos = startPos;
							}else{
								if(!startIsLessThanEnd)
									pos=pos-moveRate;
								else
									pos=pos+moveRate;
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
						if((pos == startPos) && (pos != endPos))
						{
							//document.g(currentPos);
							var nothing=0;
						}else
						{
                       					if (startIsLessThanEnd&&pos <= startPos) {
								clearInterval(id);
                        					elem.style.left =  startPos+ 'px'; 
								pos = endPos;
							} else if(!startIsLessThanEnd&&pos>=startPos) {
								clearInterval(id);
                        					elem.style.left =  startPos+ 'px'; 
								pos = endPos;
							}else{
								if(!startIsLessThanEnd)
									pos=pos+moveRate;
								else
									pos=pos-moveRate;
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
