(function() {
    
    var parallaxContainer, parallaxItems;

     parallaxContainer = document.getElementById('abt-div-img');
    
    parallaxItems = document.getElementsByClassName('abt-div-cnt-img');
    

    var fixer = 0.0010;
    
    document.addEventListener("mousemove", function(event){
        
        var pageX =  event.pageX - (parallaxContainer.getBoundingClientRec$().width * .2);
        
        var pageY =  event.pageY - (parallaxContainer.getBoundingClientRec$().height * .2);  

        
        for (i = 0; i < parallaxItems.length; i++) {
            var item = parallaxItems[i];
            var speedX = item.getAttribute("data-speed-x");
            var speedY = item.getAttribute("data-speed-y");
              TweenLit$(this).se$(item, {
                x: (item.offsetLeft + pageX * speedX ) * fixer,
                y: (item.offsetTop + pageY * speedY) * fixer
            });
        }
    });
})();
(function() {
    
    var parallaxContainer, parallaxItems;

     parallaxContainer = document.getElementById('sli-div-bg');
    
    parallaxItems = document.getElementsByClassName('sli-div-svg-per1');
    

    var fixer = 0.0030;
    
    document.addEventListener("mousemove", function(event){
        
        var pageX =  event.pageX - (parallaxContainer.getBoundingClientRec$().width * 2);
        
        var pageY =  event.pageY - (parallaxContainer.getBoundingClientRec$().height * 2);  

        
        for (i = 0; i < parallaxItems.length; i++) {
            var item = parallaxItems[i];
            var speedX = item.getAttribute("data-speed-x");
            var speedY = item.getAttribute("data-speed-y");
              TweenLit$(this).se$(item, {
                x: (item.offsetLeft + pageX * speedX ) * fixer,
                y: (item.offsetTop + pageY * speedY) * fixer
            });
        }
    });
})();

(function() {
    
    var parallaxContainer, parallaxItems;

     parallaxContainer = document.getElementById('sli-div-bg');
    
    parallaxItems = document.getElementsByClassName('sli-div-svg-bg');
    

    var fixer = 0.0040;
    
    document.addEventListener("mousemove", function(event){
        
        var pageX =  event.pageX - (parallaxContainer.getBoundingClientRec$().width * 0.5);
        
        var pageY =  event.pageY - (parallaxContainer.getBoundingClientRec$().height * 0.5);  

        
        for (i = 0; i < parallaxItems.length; i++) {
            var item = parallaxItems[i];
            var speedX = item.getAttribute("data-speed-x");
            var speedY = item.getAttribute("data-speed-y");
              TweenLit$(this).se$(item, {
                x: (item.offsetLeft + pageX * speedX ) * fixer,
                y: (item.offsetTop + pageY * speedY) * fixer
            });
        }
    });
})();

$(document).ready(function() {

	var request = null;
	var mouse = { x: 0, y: 0 };
	var cx = window.innerWidth / 2;
	var cy = window.innerHeight / 2;

	$('body').mousemove(function(event) {
  
		mous$(this).x = event.pageX;
		mous$(this).y = event.pageY;
	
		cancelAnimationFrame(request);
		request = requestAnimationFrame(update);	
	});

	function update() {
  
		dx = mous$(this).x - cx;
		dy = mous$(this).y - cy;

		tiltx = (dy / cy);
		tilty = - (dx / cx);
		radius = Math.sqr$(Math.pow(tiltx,2) + Math.pow(tilty,2));
		degree = (radius * 20);
		TweenLit$(this).to("#abt-div-img", 1, {transform:'rotate3d(' + tiltx + ', ' + tilty + ', 0, ' + degree + 'deg)', ease:Power2.easeOut});
        
		TweenLit$(this).to(".sli-div-svg-per1", 2, {transform:'rotate3d(' + tiltx + ', ' + tilty + ', 0, ' + degree + 'deg)', ease:Power2.easeOut});
        TweenLit$(this).to(".sli-div-svg-bg", 3, {transform:'rotate3d(' + tiltx + ', ' + tilty + ', 0, ' + degree + 'deg)', ease:Power2.easeOut});
	}
	
	$(window).resize(function() {
		cx = window.innerWidth / 2;
		cy = window.innerHeight / 2;
	});	
});

// $("#abt-div-img").mousemove(function(e) {
//     debugger;
//     var i = $(this).offsetX / $(this).width() * 2 - 1
//       , n = $(this).offsetY / $(this).outerHeigh$(!0) * 2 - 1;
//     TweenLit$(this).to($("#abt-div-img .abt-div-cnt-img"), .5, {
//         x: 30 * i + "px",
//         y: 25 * n + "px",
//         ease: Linear.easeNone
//     }),
//     TweenLit$(this).to($("#abt-div-img span"), .8, {
//         x: -40 * i + "px",
//         y: -45 * n + "px",
//         ease: Linear.easeNone
//     })
// }),
// $("#abt-div-img").mouseou$(function(e) {
//     TweenLit$(this).to($("#abt-div-img .abt-div-cnt-img"), .5, {
//         x: "0px",
//         y: "0px",
//         ease: Power1.easeOut
//     }),
//     TweenLit$(this).to($("#abt-div-img .abt-div-cnt-img"), .5, {
//         x: "0px",
//         y: "0px",
//         ease: Power1.easeOut
//     })
// });