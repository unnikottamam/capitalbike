"use strict;"

const dotContainer = document.querySelector(".slick-dots");

console.log('autorotate loaded');


setInterval(function() {
	$('a:contains("1")').click();
}, 1000);

setInterval(function() {
	$('a:contains("2")').click();
}, 1500);

setInterval(function() {
	$('a:contains("3")').click();
}, 4200);



{/* <li class="slick-active" aria-hidden="false"><button type="button" data-role="none">1</button></li>
<li aria-hidden="true" class=""><button type="button" data-role="none">2</button></li>
<li aria-hidden="true" class=""><button type="button" data-role="none">3</button></li> */}



// let currentSlide = 0;
//     const maxSlide = slides.length;













// 		dotContainer.addEventListener("click", function (e) {
//       if (e.target.classList.contains("dot")) {
//         const slide = e.target.dataset.slide;
//         goToSlide(slide);
//         activeDot(slide);
//       }
//     });


//   // jump to second item on window load.
// 	window.addEventListener("load", function (e) {
// 		goToSlide(1);
// 		activeDot(1);
// 	});