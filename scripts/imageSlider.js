//---------------------------------------------------------------
// File  : imageSlider.js
// Author: Dominic Eaton
//
//
//---------------------------------------------------------------

var imgcount = 1;
var total = 5;

function trasnList(element) {
	var list = document.getElementById(element);
}

function transition(element) {
		imgDelay = 3500; // 5 seconds
		var Image = document.getElementById(element);

		setTimeout(function() {
			slide(Image, 1);
		}, imgDelay)
}



function beginShow(element) {
	var imgDelay = 3000; // 3 seconds
	setTimeout(function() {
		slide(element, 1);
	}, imgDelay)

}

function slide(element, x) {
	var delay=1150;
	imgcount = imgcount + x;
	if(imgcount > total)
		imgcount = 1;
	else if (imgcount < 1)
		imgcount = total;

	fadeOut(element);
	setTimeout(function() {
		element.src = "Images/imgslider_pics/img" + imgcount + ".jpg";
		fadeIn(element);
	}, delay);
}

function fadeIn(elem) {
	elem.style.transition = "opacity 1.0s linear 0.5s";
	elem.style.opacity = 1;
}

function fadeOut(elem) {
	elem.style.transition = "opacity 1.0s linear 0s";
	elem.style.opacity = 0;
}
