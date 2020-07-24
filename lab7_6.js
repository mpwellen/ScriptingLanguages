var tID;

function stopAnimate() {
	clearInterval(tID);
} // end stopAnimate function

function animateScript() {
	var position = 256;
	const interval = 100;
	const diff = 256;

	tID = setInterval ( () => {

	
	document.getElementById("image").style.backgroundPosition = `-${position}px 0px`;

if (position < 1536)
	{ position = position + diff;}
 // increment position by 256each time
 else 
 { position = 256; }
// reset position 

}
, interval ); // end of setInerval function

} // end of animateScripr function

function leftArrowPressed() {
            var element = document.getElementById("demo");
			element.style.left=parseInt(element.style.left)-5;
			animateScript();
            //element.style.left = parseInt(element.style.left) - 5 + 'px';
            }

function rightArrowPressed() {
	var element = document.getElementById("demo");
	element.style.left = parseInt(element.style.left) + 5 + 'px';
	animateScript();

}

function upArrowPressed() {
	var element = document.getElementById("demo");
	element.style.top = parseInt(element.style.top) - 5 + 'px';
	animateScript();
	stopAnimate();
}

function downArrowPressed() {
	var element = document.getElementById("demo");
	element.style.top = parseInt(element.style.top) + 5 + 'px';
	animateScript();
	stopAnimate();
}

 function moveSelection(evt) {
                switch (evt.keyCode) {
                    case 37:
                    leftArrowPressed();
                    break;
                    case 39:
                    rightArrowPressed();
                    break;
                    case 38:
                    upArrowPressed();
                    break;
                    case 40:
                    downArrowPressed();
                    break;
                    }
                };

function docReady()
        {
          
          window.addEventListener('keydown', moveSelection);
        }
		