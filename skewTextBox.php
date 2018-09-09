
<!DOCTYPE html>
<html>
        <head>
                <link rel = "stylesheet" type = "text/css"href="css/skewTextBox.css">
                <!-- Latest compiled and minified CSS -->
                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
                <!-- jQuery library -->
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
                <!-- Latest compiled JavaScript -->
                <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        </head>
	<body>
		<?
		$textVar = "What else  can I write here?
				How will this effect the way
				it looks? Let\'s find out. How
				 many words can be seen in this
				system? A few more?"
		$stringLength = 0;
		$reversedTxt= reverseText($textVar);
		function reverseText($reverseThis)
		{
			$i=0;
			$reversed='';
			$a_Space=' ';
			$stringLength = strlen($reverseThis)=$countDown;
			for($i=0;$i<$stringLength;$i++)
			{
				$reversed = $reversed.$a_Space;
				$reversed[$i] = $reverseThis[$countDown];
				$countDown--;
			}
			return $reversed;
		}
		?>
		<div class="skewedContainer">
		<span class="skewedText">
		<pre>                                                                                                                                       </pre>
		<?php 
		printf($textVar);
		?>
		</span>
		</div>
		<div class="skewedContainer2 skewedContainer">
		<span class="skewedText2 skewedText`">
		<pre>                                                                                                                                       </pre>
		<?php 
		print "$reversedTxt";
		?>
		</span>
		</div>
		<?php 
		print "$reversedTxt";
		?>
	</body>
</html>
