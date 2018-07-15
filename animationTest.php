<!DOCTYPE html>
<html>
	<head>
		<script src="jquery-3.3.1.min.js"></script>
		<link rel = "stylesheet" type = "text/css"href="css/stylesAni.css">
	</head>	
	<style>
		#container {
 			width: 600px;
    			height: 400px;
       			position: relative;
        		background: yellow;
       	 		}
		#animate1 {
         		width: 50px;
            		height: 50px;
			position: absolute;
			left:200px;
			display: inline-block;
                	background-color: red;
                }
		#animate2 {
         		width: 50px;
            		height: 100px;
			position: absolute;
			left:200px;
			display: inline-block;
                	background-color: blue;
                }
		#animate3 {
         		width: 50px;
            		height: 50px;
			position: absolute;
			left:200px;
			display: inline-block;
			background-color: green;
		}
		#animate4 {
			width: 50px;
            		height: 100px;
			position: absolute;
			display: inline-block;
			left:250px;
			background-color: orange;
		}
		#animate5 {
			width: 50px;
            		height: 50px;
			position: absolute;
			display: inline-block;
			left:250px;
			background-color: lime;
		}
		#animate6 {
			width: 50px;
            		height: 100px;
			position: absolute;
			display: inline-block;
			left:250px;
			background-color:coral;
		}
		#animate7 {
			width: 50px;
            		height: 50px;
			position: absolute;
			display: inline-block;
			left:300px;
			background-color: teal;
		}
		#animate8 {
			width: 50px;
            		height: 100px;
			position: absolute;
			display: inline-block;
			left:300px;
			background-color: tan;
		}
		#animate9 {
			width: 50px;
            		height: 50px;
			position: absolute;
			display: inline-block;
			left:300px;
			background-color: crimson;
		}
        </style>
        <body>

		<p>
			<button onclick="Fun(true,9)">expand</button>
			<button onclick="Fun(false,9)">contract</button>
		</p>
		<div id ="container" onmouseover="Fun(true,9)" onmouseout="Fun(false,9)" >
			<?php	
				$animations = array('1','2','3','4','5','6','7','8','9');
				$numElements= count($animations)+1;
				for($i=1;$i<$numElements;$i++)
				{
					$newAnimation = 'animate'.$i;
					$newLetter = 'letter'.$i;
					print"<div id =\"$newAnimation\" src =\"$newLetter\" >$newAnimation</div>\n";
				}
			?>
                </div>

                <script>
			function Fun(isExpanding,numOfObjects)
			{
				var endPositions=   [50 ,100,150,200,250,300,350,400,450];
				var startPositions= [200,200,200,250,250,250,300,300,300];
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
				var newAnimation = "animate"+animateID;
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
							//document.write(currentPos);
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
							//document.write(currentPos);
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
