(function($) {

	/*-----------------------------------------------------------------------------------------------------*/
	/* Cambiando el placeholder del input de autocomplete
	/*-----------------------------------------------------------------------------------------------------*/
// 	$("#flex_idx_single_autocomplete_input").attr('placeholder','Begin your search here');

	/*-----------------------------------------------------------------------------------------------------*/
	/* Botón next
	/*-----------------------------------------------------------------------------------------------------*/
	var $btnNextStep = $(".ms-next-step");
	if($btnNextStep.length) {
	  $btnNextStep.click(function(){
	    var $nextContent = ($($(this).attr('data-step')).offset().top) - 80;
	    $('html, body').animate({ scrollTop: $nextContent }, 800);
	  });
	}

	/*-----------------------------------------------------------------------------------------------------*/
	/* Botón Scroll Top
	/*-----------------------------------------------------------------------------------------------------*/
	var $msScrollUp = $('#page-scroll-up');
	$(window).scroll(function() {
	  if ($(window).scrollTop() > 300) {
	    $msScrollUp.addClass('show');
	  } else {
	    $msScrollUp.removeClass('show');
	  }
	});

	$msScrollUp.on('click', function(e) {
	  e.preventDefault();
	  $('html, body').animate({scrollTop:0}, '300');
	});

	/*-----------------------------------------------------------------------------------------------------*/
	/* Generando slider de testimoniales en el home
	/*-----------------------------------------------------------------------------------------------------*/
	var $testimonialSlider = $("#testimonial-slider");
	if($testimonialSlider.length) {
	  $testimonialSlider.greatSlider({
	    type: 'swipe',
	    navSpeed: 1000,
	    lazyLoad: true,
	    nav: false,
	    bullets: true,
	    items: 1,
	    autoDestroy: true,
	    autoHeight: true,
	    startPosition: 1,
	    layout: {
				bulletDefaultStyles: false,
				wrapperBulletsClass: 'clidxboost-gs-wrapper-bullets',
				resizeClass: 'ms-resize',
				arrowPrevContent: 'Prev',
				arrowNextContent: 'Next',
	    },
	    onInited: function(){
	    	var $a = 0;
	    	var $bulletBtn = $testimonialSlider.find(".gs-bullet");
	    	if($bulletBtn.length){
					$bulletBtn.each(function() {
						$a += 1;
						$(this).text($a);
					});
	    	}
	    }
	  });
	}

	/*-----------------------------------------------------------------------------------------------------*/
	/* Generando slider de areas en el home
	/*-----------------------------------------------------------------------------------------------------*/
	var $condoAreaSlider = $("#ms-condo-slider");
	if($condoAreaSlider.length) {
	  $condoAreaSlider.greatSlider({
	    type: 'swipe',
	    navSpeed: 1000,
	    lazyLoad: true,
	    nav: false,
	    bullets: true,
	    items: 1,
	    autoDestroy: true,
	    layout: {
	      bulletDefaultStyles: false,
	      wrapperBulletsClass: 'clidxboost-gs-wrapper-bullets',
	      resizeClass: 'ms-resize',

	      arrowPrevContent: 'Prev',
				arrowNextContent: 'Next',
	    },
	    breakPoints: {
	      768: {
	        items: 2,
	        nav: true,
	        bullets: false
	      },
	      991: {
	        items: 3
	      },
	      1024: {
	        items: 4
	      }
	    },
	    onInited: function(){
	    	var $a = 0;
	    	var $bulletBtn = $condoAreaSlider.find(".gs-bullet");
	    	if($bulletBtn.length){
					$bulletBtn.each(function() {
						$a += 1;
						$(this).text($a);
					});
	    	}
	    }
	  });
	}

	/*-----------------------------------------------------------------------------------------------------*/
	/* Activando clase en el formato 2 del header
	/*-----------------------------------------------------------------------------------------------------*/
	loadHeaderColor(".ms-header-transparent");
	function loadHeaderColor(element){
	  var headerTransparent = $(element);
	  if(headerTransparent.length){
	    if($("body").hasClass("ms-header-transparent")){
	      var headerHeight = $("#header").outerHeight();
	      $(window).scroll(function() {
	        if ($(window).scrollTop() > headerHeight) {
	          headerTransparent.addClass('headerColor');
	        } else {
	          headerTransparent.removeClass('headerColor');
	        }
	      });
	    }
	  }
	}

	/*-----------------------------------------------------------------------------------------------------*/
	/* Acoordeon menu resposnive en el footer
	/*-----------------------------------------------------------------------------------------------------*/
	var acc = document.getElementsByClassName("accordion");
	var i;
	for (i = 0; i < acc.length; i++) {
		acc[i].addEventListener("click", function() {
			console.log('ok');
		this.classList.toggle("active");
		});
	}

	/*-----------------------------------------------------------------------------------------------------*/
	/* Carga por demanda en el home
	/*-----------------------------------------------------------------------------------------------------*/
	function chekSectionAnimate(){
	  var elementSection = $('.ms-animate');
	  if(elementSection.length){
	    elementSection.each(function(e) {
	      var sectionId = $("#"+$(this).attr('id'));
	      if (is_in_view(sectionId)){
	        $(this).addClass('ms-loaded-animate').removeClass('ms-animate');
	        sectionId.find('[data-img]').each(function(e) { 
	          if($(this).attr('data-real-type') == "image"){
	            $(this).attr('src',$(this).attr('data-img')).on('load', function() {
	              $(this).removeAttr('data-img').addClass('ms-loaded');
	            });
	          }else if($(this).attr('data-real-type') == "video"){
	            var urlVideo = $(this).attr('data-img');
	            $(this).html("<video id='idx-video' autoplay='' loop='' muted='' controls='' class='video-layer ms-opacity' src='"+urlVideo+"'></video>");
	            $(this).removeAttr('data-img');
	          }
	        });
	      }
	    });
	  }
	}

	function is_in_view(elem) {
	  var docViewTop = 0;  
	  var docViewBottom = 0;  
	  var elemTop = 0;  
	  var elemBottom = 0;  
	  docViewTop = $(window).scrollTop();  
	  docViewBottom = docViewTop + $(window).height();  
	  elemTop = $(elem).offset().top;  
	  elemBottom = elemTop + $(elem).height();
	  return ((elemBottom > docViewTop) && (elemTop < docViewBottom));
	}

	$(window).load(function() { chekSectionAnimate(); });
	$(window).scroll(function() { chekSectionAnimate(); });

	WebFont.load({
		google: {
			//Activar los fonts necesarios para tu proyecto
			//families: ['Open+Sans:300,400,600,700,800','Montserrat:300,500,600,700','Oswald:300,400,600,700','Roboto+Condensed:300,400,700','BioRhyme:300,400,700']
			families: ['Open+Sans:300,400,600,700,800&display=swap']
		}
	});

  	/*-----------------------------------------------------------------------------------------------------*/
	/* Request details Modal
	/*-----------------------------------------------------------------------------------------------------*/
	$(document).on('click', '.ms-show-form', function(e) {
		e.preventDefault();
		$('body').addClass('ms-active-form');
	});

	$(document).on('click', '.ms-close-modal', function(){
		$('body').removeClass('ms-active-form');
	});

	$(document).on('click', '.ms-active-form .sweet-alert button.confirm', function () {
		$('body').removeClass('ms-active-form');
	});

	$(document).on('click', '.vd-play', function(e) {
		e.preventDefault();
		var $iframeVideo = creaIframeVideo($(this));
		if ($iframeVideo) {
		  var $wrapperVideo = $('#wrapper-video');
		  $wrapperVideo = $("body");
		  $wrapperVideo.append('<div class="video-inside"><div class="iframe">' + $iframeVideo + '</div><button class="close-vi"><span class="op-icon-close">x</span></button><div class="bg-close"></div></div>');
		  setTimeout(function(){
			//$wrapperVideo.find('.video-inside').css('top','0');
			$wrapperVideo.find('.video-inside').addClass('ms-show-video');
		  }, 500)
		}
	});
	
	$(document).on('click', '.close-vi, .bg-close', function(){
		var $elParent = $(this).parent();
		//$("body").find('.video-inside').css('left','-100%');
		$("body").find('.video-inside').removeClass('ms-show-video');
		setTimeout(function(){
		  $elParent.remove();
		}, 1200)
	});

	/**********/
	/*-----------------------------------------------------------------------------------------------------*/
	/* REPRODUCTOR DE VIDEO
	/*-----------------------------------------------------------------------------------------------------*/
	var $document = $(document);
	function creaIframeVideo(elBoton){
	var $urlVideo = elBoton.attr('data-video');
		if ($urlVideo !== undefined) {
		var $urlVideo = $urlVideo.toString();
		if ($urlVideo.indexOf('youtube') !== -1) {
			var et = $urlVideo.lastIndexOf('&')
			if(et !== -1){
			$urlVideo = $urlVideo.substring(0, et)
			}
			var embed = $urlVideo.indexOf('embed');
			if (embed !== -1) {
			$urlVideo = 'https://www.youtube.com/watch?v=' + $urlVideo.substring(embed + 6, embed + 17);
			}
			var srcVideo = 'https://www.youtube.com/embed/' + $urlVideo.substring($urlVideo.length - 11, $urlVideo.length) + '?autoplay=1';
		} else if ($urlVideo.indexOf('vimeo') !== -1) { // es un video de Vimeo, EJM: https://vimeo.com/206418873
			var srcVideo = 'https://player.vimeo.com/video/' + $urlVideo.substring(($urlVideo.indexOf('.com') + 5), $urlVideo.length).replace('/', '');
		} else {
		var srcVideo = $urlVideo;
				}
		return '<video width="100%" autoplay loop="loop" style="max-height: 100%"><source src="' + srcVideo + '" type="video/mp4"></video>';
		} else {
		alert('No video assigned.');
		return false;
		}
	}

	/********* ANIMACION TEXTO HOME *******/
	var wrapQuotes = $("#ms-change-text");
	if(wrapQuotes.length) {
		var quotes = $(".quotes");
		var quoteIndex = -1;
		showNextQuote();
	}
  
	function showNextQuote() {
		++quoteIndex;
		$(".quotes").removeClass("active active_span");
		quotes.eq(quoteIndex % quotes.length)
			  .addClass("active")
			.fadeIn(300,function(){
				$(this).addClass("active_span")
			})
			.delay(4000)
			.fadeOut(900, showNextQuote);
	}
  
}(jQuery));
