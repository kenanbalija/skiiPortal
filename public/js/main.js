// Hello.
//
// This is The Scripts used for ___________ Theme
//
//
function main() {

(function () {
   'use strict';

   /* ==============================================
  	Testimonial Slider
  	=============================================== */

  	$('a.page-scroll').click(function() {
        if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
          var target = $(this.hash);
          target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
          if (target.length) {
            $('html,body').animate({
              scrollTop: target.offset().top - 40
            }, 900);
            return false;
          }
        }
      });

    /*====================================
    Show Menu on Book
    ======================================*/
    $(window).bind('scroll', function() {
        // var navHeight = $(window).height() - 850;
        if ($(window).scrollTop()) {
            $('.navbar-default').addClass('on');

        } else {
            $('.navbar-default').removeClass('on');
        }

    });

    $('body').scrollspy({
        target: '.navbar-default',
        offset: 80
    });

  	$(document).ready(function() {
  	  $("#team").owlCarousel({

  	      navigation : false, // Show next and prev buttons
  	      slideSpeed : 300,
  	      paginationSpeed : 400,
  	      autoHeight : true,
  	      itemsCustom : [
				        [0, 1],
				        [450, 2],
				        [600, 2],
				        [700, 2],
				        [1000, 4],
				        [1200, 4],
				        [1400, 4],
				        [1600, 4]
				      ],
  	  });

  	  $("#clients").owlCarousel({

  	      navigation : false, // Show next and prev buttons
  	      slideSpeed : 300,
  	      paginationSpeed : 400,
  	      autoHeight : true,
  	      itemsCustom : [
				        [0, 1],
				        [450, 2],
				        [600, 2],
				        [700, 2],
				        [1000, 4],
				        [1200, 5],
				        [1400, 5],
				        [1600, 5]
				      ],
  	  });

      $("#testimonial").owlCarousel({
        navigation : false, // Show next and prev buttons
        slideSpeed : 300,
        paginationSpeed : 400,
        singleItem:true
        });

  	});

  	/*====================================
    Portfolio Isotope Filter
    ======================================*/
    $(window).load(function() {
        var $container = $('#lightbox');
        $container.isotope({
            filter: '*',
            animationOptions: {
                duration: 750,
                easing: 'linear',
                queue: false
            }
        });
        $('.cat a').click(function() {
            $('.cat .active').removeClass('active');
            $(this).addClass('active');
            var selector = $(this).attr('data-filter');
            $container.isotope({
                filter: selector,
                animationOptions: {
                    duration: 750,
                    easing: 'linear',
                    queue: false
                }
            });
            return false;
        });

    });



}());


}
main();
//
// var vid = document.getElementById("bgvid");
// var pauseButton = document.querySelector("#polina button");
//
// if (window.matchMedia('(prefers-reduced-motion)').matches) {
//     vid.removeAttribute("autoplay");
//     vid.pause();
//     pauseButton.innerHTML = "Paused";
// }
//
// function vidFade() {
//     vid.classList.add("stopfade");
// }
//
// vid.addEventListener('ended', function()
// {
// // only functional if "loop" is removed
//     vid.pause();
// // to capture IE10
//     vidFade();
// });
//
//
// pauseButton.addEventListener("click", function() {
//     vid.classList.toggle("stopfade");
//     if (vid.paused) {
//         vid.play();
//         pauseButton.innerHTML = "Pause";
//     } else {
//         vid.pause();
//         pauseButton.innerHTML = "Paused";
//     }
// })

