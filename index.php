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
		<?php
		require 'headerFrontend.php';
		?>
	<div class='Header'>
	</div>
	      <div class = "container-fluid">	
                      <div class="row">
                          <div class="main col-xs-12 col-sm-12  col-md-12" >
				<?php
				require 'main.php';
				?>
 
                          </div>
                      </div>
	      </div>	
		<div class='footerUpper'>
			<?php
				require "footer.php";
			?>
		</div>
	</body>
</html>

