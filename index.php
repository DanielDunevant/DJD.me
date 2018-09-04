<!DOCTYPE html>
	<head>
		<meta http-equiv="content-type" content="text/html" charset="UTF-8" />
		<meta charset="UTF-8" />
		<meta name = "viewport" content="width=device-width,initial-scale=1">
		<meta name="author" content="DJD.io" />
		<title>DJD.io</title>
<?php


require'headerBackend.php';
?>
	</head>
	<body>
		<div id ="bodyForeground">
			<?php
				require 'headerFrontend.php';
				require 'hexLinks.php';
			?>
			<div class='Header'>
			</div>
                        <div id="bodyContent">
				<?php
					require 'main.php';
				?>
 
                        </div>
			<?php
				require "footer.php";
			?>
		<!--<div class='footerUpper'>
		</div-->
		</div>
	</body>
</html>

