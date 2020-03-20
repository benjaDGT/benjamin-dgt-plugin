$(function() {
  /*----------------------------------------------------------------------------------*/
  /* BASIC SLIDER
  /*----------------------------------------------------------------------------------*/
  var $basicSlider = $(".ms-basic-slider");
  if($basicSlider.length) {
    $basicSlider.greatSlider({
      type: 'swipe',
      lazyLoad: true,
      navSpeed: 500,
      nav: true,
      bullets: true,
      items: 1,
      autoDestroy: true,
      layout: {
        bulletDefaultStyles: false,
        wrapperBulletsClass: 'ms-gs-wrapper-bullets',
        resizeClass: 'ms-resize'
      }
    });
  }

  /*----------------------------------------------------------------------------------*/
  /* AGENT SLIDER
  /*----------------------------------------------------------------------------------*/
  var $basicSlider = $(".ms-agent-slider");
  if($basicSlider.length) {
    $basicSlider.greatSlider({
      type: 'swipe',
      //lazyLoad: true,
      navSpeed: 500,
      nav: false,
      bullets: true,
      items: 1,
      autoDestroy: true,
      layout: {
        bulletDefaultStyles: false,
        wrapperBulletsClass: 'ms-gs-wrapper-bullets',
        resizeClass: 'ms-resize'
      },
      breakPoints: {
        640: {
          lazyLoad: false,
          items: 2
        },
        991: {
          lazyLoad: false,
          items: 3
        }
      }
    });
  }

  /*----------------------------------------------------------------------------------*/
  /* PROJECTS
  /*----------------------------------------------------------------------------------*/
  /*var $projectSlider = $("#ms-project-slider");
  if($projectSlider.length) {
    $projectSlider.greatSlider({
      type: 'swipe',
      lazyLoad: true,
      navSpeed: 500,
      nav: false,
      bullets: true,
      items: 1,
      autoDestroy: true,
      layout: {
        bulletDefaultStyles: false,
        wrapperBulletsClass: 'ms-gs-wrapper-bullets',
        resizeClass: 'ms-resize'
      }
    });
  }

  var $bannerSlider = $("#ms-banner-slider");
  if($bannerSlider.length) {
    $bannerSlider.greatSlider({
      type: 'swipe',
      lazyLoad: true,
      navSpeed: 500,
      nav: false,
      bullets: true,
      items: 2,
      autoDestroy: true,
      layout: {
        bulletDefaultStyles: false,
        wrapperBulletsClass: 'ms-gs-wrapper-bullets',
        resizeClass: 'ms-resize'
      },breakPoints: {
        768: {
          items: 3,
          slideBy: 3,
          nav: false
        },
        1440: {
          items: 3,
          slideBy: 3,
          nav: true
        }
      },
    });
  }

  var $videoSlider = $("#ms-video-slider");
  if($videoSlider.length) {
    $videoSlider.greatSlider({
      type: 'swipe',
      lazyLoad: false,
      navSpeed: 500,
      nav: true,
      bullets: true,
      items: 1,
      autoDestroy: true,
      drag: false,
      layout: {
        bulletDefaultStyles: false,
        wrapperBulletsClass: 'ms-gs-wrapper-bullets',
        resizeClass: 'ms-resize'
      },
      onStepStart: function(){
        $videoSlider.find('.ms-item').removeClass('active');
        $videoSlider.find('.ms-play').removeClass('ms-active-video');
        var $iframes = $videoSlider.find('iframe');
        if($iframes.length) {
          $iframes.each(function(){
            var $iframeSrc = $(this).attr('src');
            if($iframeSrc.indexOf('youtu') !== -1) {
              $(this).get(0).contentWindow.postMessage('{"event":"command","func":"' + 'pauseVideo' + '","args":""}', '*');
            }
          });
        }
      },
    });
  }*/


  /********** SLIDER VIDEO ***********/
  var $videoSlider = $("#slider-video");
  if($videoSlider.length) {
    $videoSlider.greatSlider({
      type: 'swipe',
      lazyLoad: false,
      navSpeed: 500,
      nav: true,
      bullets: true,
      items: 1,
      autoDestroy: true,
      drag: false,
      layout: {
        bulletDefaultStyles: false,
        wrapperBulletsClass: 'ms-gs-wrapper-bullets',
        resizeClass: 'ms-resize'
      }
    });
  }

  $(document).on('click', '.ms-play', function() {
    if(!$(this).hasClass('ms-active-video')){
      $(this).addClass('ms-active-video');
      $(this).parent('.ms-item').addClass('active');
      $(this).parent('.ms-item.active').find('.gs-cover').css({'opacity':'0'});
      var $iframes = $(this).parent('.ms-item.active').find('iframe');
      if($iframes.length) {
        $iframes.get(0).contentWindow.postMessage('{"event":"command","func":"' + 'playVideo' + '","args":""}', '*');
      }else{
        $(this).parent('.ms-item').find('.gs-video').trigger('play');
      }
    }else{
      $(this).removeClass('ms-active-video');
      $(this).parent('.ms-item').find('.gs-cover').css({'opacity':'1'});
      var $iframes = $(this).parent('.ms-item.active').find('iframe');
      if($iframes.length) {
        $iframes.get(0).contentWindow.postMessage('{"event":"command","func":"' + 'pauseVideo' + '","args":""}', '*');
      }else{
        $(this).parent('.ms-item').find('.gs-video').trigger('pause');
      }
      $(this).parent('.ms-item').removeClass('active');
    }
  });

  $(document).on('click', '.btn-down', function() {
    var $nextSection = $(this).attr('data-step');
    var $nextSectionTop = ($($nextSection).offset().top) - 100;
    $('html, body').animate({scrollTop: $nextSectionTop}, 900);
  });

  $(document).on('click', '.btn-down-form', function() {
    var $nextSection = $(this).attr('data-step');
    var $nextSectionTop = ($($nextSection).offset().top) - 100;
    $('html, body').animate({scrollTop: $nextSectionTop}, 900);
    $('#request-demo form .gform_body .gfield .medium:eq(0)').focus();
  });

  /*-----------------------------------------------------------------------------------------------------*/
  /* CARGA POR DEMANDA
  /*-----------------------------------------------------------------------------------------------------*/
  function chekSectionAnimate(){
    $('.ms-animate').each(function(e) {
      var sectionId = $("#"+$(this).attr('id'));
      if (is_in_view(sectionId)){
        $(this).addClass('ms-loaded-animate').removeClass('ms-animate');
        sectionId.find('[data-img]').each(function(e) { 
          if($(this).attr('data-real-type')=="image"){

            $(this).attr('src',$(this).attr('data-img')).on('load', function() {
              $(this).removeAttr('data-img').addClass('ms-loaded');
            });

          }else if($(this).attr('data-real-type')=="video"){

            var urlVideo = $(this).attr('data-img');
            $(this).html("<video id='idx-video' autoplay='' loop='' muted='' controls='' class='video-layer ms-opacity' src='"+urlVideo+"'></video>");
            $(this).removeAttr('data-img');

          }else if($(this).attr('data-real-type')=="background"){

            var urlImg = $(this).attr('data-img');
            $(this).css({"background-image":"url("+urlImg+")"});
            $(this).removeAttr('data-img data-real-type');
          }
        });
      }
    });
  }

  function is_in_view(elem) {
    var docViewTop = 0;  
    var docViewBottom = 0;  
    var elemTop = 0;  
    var elemBottom = 0;  
    docViewTop = $(window).scrollTop();  
    //docViewBottom = docViewTop + $(window).height();  
    elemTop = ($(elem).offset().top) - 500;  
    elemBottom = elemTop + $(elem).height();
    //return ((elemBottom > docViewTop) && (elemTop < docViewTop));
    return (elemTop < docViewTop);
  }

  function headerStyle() {
    if($('.ms-home #header').length){
      var windowpos = $(window).scrollTop();
      if (windowpos >= 200) {
        $('.ms-home #header').addClass('active');
        //$('.scroll-to-top').fadeIn(300);
      } else {
        $('.ms-home #header').removeClass('active');
        //$('.scroll-to-top').fadeOut(300);
      }
    }
  }
  
  headerStyle();

  $(document).ready(function() { chekSectionAnimate();});
  $(window).scroll(function() { chekSectionAnimate(); headerStyle(); });


  /*-----------------------------------------------------------------------------------------------------*/
  /* TESTEANDO SLIDER DE VIDEO FORMATO 2
  /*-----------------------------------------------------------------------------------------------------*/
  /*var $worksSlider = $("#works-video");
  if($worksSlider.length) {
    $worksSlider.greatSlider({
      type: 'swipe',
      lazyLoad: false,
      navSpeed: 500,
      nav: false,
      bullets: true,
      items: 1,
      autoDestroy: true,
      autoHeight: true,

      drag: false,
      touch: false,
      dragHand: false,

      layout: {
        bulletDefaultStyles: false,
        wrapperBulletsClass: 'ms-gs-wrapper-bullets',
        resizeClass: 'ms-resize'
      },
      
      breakPoints: {
        768: {
          tems: 1,
          nav: false,
          bullets: true
        },
        1600: {
          items: 1,
          nav: true,
          bullets: false
        }
      },
      onStepStart: function(){
        $worksSlider.find('.ms-item').removeClass('play-video');
        var $videoActive = $worksSlider.find('.ms-video-created');
        if($videoActive.length) {
          $videoActive.each(function(){
            var $videoActive = $(this).attr('src');
            if($videoActive.indexOf('youtu') !== -1) {
              $(this).get(0).contentWindow.postMessage('{"event":"command","func":"' + 'pauseVideo' + '","args":""}', '*');
            }else{
              $(this).trigger('pause');
            }
          });
        }
      },
    });
  }

  $(document).on('click', '.ms-btn-play', function() {
    var $parent = $(this).parents('.ms-item');
    var $videoUrl = $(this).attr('data-video');
    var $videoType = $(this).attr('data-type');
    var $videoCreated = $parent.find('.ms-video-created');

    if($parent.hasClass('play-video')){

      pauseVideoFrame($videoType, $parent);

    }else{

      $parent.find('.ms-img-work').addClass('fadeOut').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
        $parent.addClass('play-video');
        $(this).removeClass('fadeOut');
      });

      if(!$videoCreated.length) {
        createVideoFrame($videoType, $videoUrl, $parent);
      }else{
        playVideoFrame($videoType, $parent);
      }
    }
  });

  $(window).load(function(){
    var ifv = $(".ms-video-gif");
    if (ifv.length) {
      var iframeVideo = ifv.attr("data-video");
      ifv.html('<iframe width="643" height="360" src="'+iframeVideo+'" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>');
    }
  });*/

}());


/*
function createVideoFrame(videoType, videoUrl, parent){
  switch (videoType) {
    case 'video':
      parent.find('.ms-video').append('<video class="ms-video-created" src="'+videoUrl+'" autoplay=""></video>');
      break;

    case 'youtube':
      parent.find('.ms-video').append('<iframe class="ms-video-created" src="'+videoUrl+'"></iframe>');
      break;
  }
}

function playVideoFrame(videoType, parent){
  switch (videoType) {
    case 'video':
      parent.find('.ms-video-created').trigger('play');
      break;

    case 'youtube':
      parent.find('.ms-video-created').get(0).contentWindow.postMessage('{"event":"command","func":"' + 'playVideo' + '","args":""}', '*');
      break;
  }
}

function pauseVideoFrame(videoType, parent){
  switch (videoType) {
    case 'video':
      parent.find('.ms-video-created').trigger('pause');
      break;

    case 'youtube':
      parent.find('.ms-video-created').get(0).contentWindow.postMessage('{"event":"command","func":"' + 'pauseVideo' + '","args":""}', '*');
      break;
  }
  parent.removeClass('play-video');
}*/