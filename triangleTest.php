
<!DOCTYPE html>
<html>
	<head>
        	<style>
              		.arrow-up {
                  		width:  0; 
		  		height: 0; 
		  		position:relative;
		  		display:inline-block;
                  		border-left: 320px solid transparent;
                  		border-right: 320px solid transparent; 
                  		border-bottom: 560px solid black;
               		}

              		.arrow-down {
                 		 width: 0; 
                 		 height:0; 
		 		 position:relative;
		 		 display:inline-block;
                 		 border-left: 320px solid transparent;
                  		 border-right: 320px solid transparent;
                  		 border-top: 560px solid #f00;
			}
			.arrows{
				margin-left:0px;
				margin-right:-319px;
			}
			.hexagon{
				position:absolute;
				height:1200px;
				width:1200px;
				border:5px solid #FF0000;
			}

	      		#divTest{
				position:relative;
				height: 300px;
				border: 3px solid #736294;
				width:300px;
				background-color: #00FFFF;
				color: #00FFFF;
				left: 20px;
				display: inline-block;
				opacity: 1;
	      		}	
              		.arrow-right {
                	 	 width: 0; 
                	 	 height: 0; 
                  		 border-top: 60px solid transparent;
                  		 border-bottom: 60px solid transparent;
                  		 border-left: 60px solid green;
              		}

              		.arrow-left {
                  		width: 0; 
                  		height: 0; 
                  		border-top: 10px solid transparent;
                  		border-bottom: 10px solid transparent; 
                  		border-right:10px solid blue; 
	      		}
      		</style>
   	</head>
	<body>
		<div class = "hexagon">	
        		<div class="arrow-up arrows"></div>
        		<div class="arrow-down arrows"></div>
        		<div class="arrow-up arrows"></div>
        		<div class="arrow-down arrows"></div>
        		<div class="arrow-up arrows"></div>
			<div class="arrow-down arrows"></div>
		</div>
   	</body>
</html>
