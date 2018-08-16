<!DOCTYPE html>
<html>
	<head>
		<link rel = "stylesheet" type = "text/css"href="css/stylesAni.css">
	</head>	
        <body>

		<script src="javascripts/animationTest.js">
                </script>
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

        </body>
</html>
