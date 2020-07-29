
			$(document).ready(function() {
   $(window).on('scroll', function() {
    if($(window).scrollTop() < 1000) {
      $('.hero').css('background-size', 130 + parseInt($(window).scrollTop() / 5) + '%');
      $('.hero h1').css('top', 50 + ($(window).scrollTop() * .1) + '%');
      $('.hero h1').css('opacity', 1 - ($(window).scrollTop() * .003));
    }
     
     if($(window).scrollTop() >= $('.content-wrapper').offset().top - 100) {
       $('.nav-bg').removeClass('bg-hidden');
       $('.nav-bg').addClass('bg-visible');
     } else {
       $('.nav-bg').removeClass('bg-visible');
       $('.nav-bg').addClass('bg-hidden');
     }
  });
});
        $(document).ready(function() {
   $(window).on('scroll', function() {
    if($(window).scrollTop() < 1000) {
      $('.page').css('background-size', 130 + parseInt($(window).scrollTop() / 5) + '%');
      $('.page h1').css('top', 50 + ($(window).scrollTop() * .1) + '%');
      $('.page h1').css('opacity', 1 - ($(window).scrollTop() * .003));
    }
     
     if($(window).scrollTop() >= $('.content-wrapper').offset().top - 100) {
       $('.nav-bg').removeClass('bg-hidden');
       $('.nav-bg').addClass('bg-visible');
     } else {
       $('.nav-bg').removeClass('bg-visible');
       $('.nav-bg').addClass('bg-hidden');
     }
  });
});
       // oul carousel
$('.owl-carousel').owlCarousel({
loop:true,
margin:10,
nav:true,
responsive:{
  0:{
      items:1
  },
  600:{
      items:1
  },
  1000:{
      items:1
  }
  }
});


// scroll reveal
  window.sr = ScrollReveal();
sr.reveal(".feature-wrapper",{duration:1000});
sr.reveal(".fas",{duration:1000});
sr.reveal(".col-md-6",{duration:1000});
sr.reveal(".col-md-3",{duration:1000});
sr.reveal(".col-md-6",{duration:1000});
sr.reveal(".col-md-5",{duration:1000});
sr.reveal(".col-md-7",{duration:1000});
sr.reveal(".herodiv",{duration:1000});
sr.reveal(".btn",{duration:1000});
sr.reveal(".item",{duration:1000});


   
    // carousel
    $(function() {
  $('#carousel').carouFredSel({
    direction: 'right',
    items: {
      visible: 1,
      start: -1
    },
    scroll: {
      duration: 1000,
      timeoutDuration: 3000
    },
    pagination: '#pager'
  });
});


//  counter
$('.count').each(function () {
    $(this).prop('Counter',0).animate({
        Counter: $(this).text()
    }, {

        duration: 2000,
        easing: 'swing',
        step: function (now) {
            $(this).text(Math.ceil(now));
        }
    });
});


// header image parallaxScrolling Effect


