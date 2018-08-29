var isNameExpanding = true;

var endPositions=   [45 ,102,150,200,225,275,315,370,420,470,545,602,650,700,747,800,850,900,950,980,1010];
var startPositions= [430,450,450,450,450,450,488,499,499,499,550,550,550,550,550,550,550,550,621,650 ,679];
var cover1= document.getElementById("cover1");
var cover2= document.getElementById("cover2");
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
		setTimeout(function(){
		cover1.style.display =  'none'; 
		cover2.style.display =  'inline-block'; 
		},1500);

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
		setTimeout(function(){
		cover1.style.display =  'inline-block'; 
		cover2.style.display =  'none'; 
		},1500);
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
