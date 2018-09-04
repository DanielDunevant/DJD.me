<!DOCTYPE html>
<html>
        <head>
                <link rel = "stylesheet" type = "text/css"href="css/divContainsImg.css">
                <link rel = "stylesheet" type = "text/css"href="css/triDivTest.css">
                <!-- Latest compiled and minified CSS -->
                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
                <!-- jQuery library -->
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
                <!-- Latest compiled JavaScript -->
                <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        </head>
	<body>
		<div class="original-image">
		 	<p>original image</p>
  			<img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/14179/image.png">
		</div>

		<div class="image">
  			<p>object-fit: fill</p>
  			<img class="object-fit_fill" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/14179/image.png">
		</div>

		<div class="image">
 	 		<p>object-fit: contain</p>
  			<img class="object-fit_contain" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/14179/image.png">
		</div>

		<div class="image">
  			<p>object-fit: cover</p>
  			<img class="object-fit_cover" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/14179/image.png">
		</div>

		<div class="image">
  			<p>object-fit: none</p>
  			<img class="object-fit_none" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/14179/image.png">
		</div>

		<div class="image">
 	 		<p>object-fit: scale-down</p>
  			<img class="object-fit_scale-down" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/14179/image.png">
		</div>
		<div class="arrow-up-tri img-Tri-Up img-Tri image">
			<img class="object-fit_none" src="images/smilingEmoji.png">
	        </div>
	</body>
</html>
