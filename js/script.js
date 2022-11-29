$(document).ready(function() {
  $(".dropdown-trigger").dropdown({
    coverTrigger: false
  });
  restartCarousel();

});

$(document).ready(function() {
  $('.parallax').parallax();
});

$(document).ready(function() {
  $('.sidenav').sidenav();
  $('.modal').modal();
})


$(document).ready(function() {
  $('.carousel').carousel({
      fullWidth: true,
      indicators: true
  })
})

var carouselWait;
var carouselTimer;

function nextCarousel() {
  $('.carousel.carousel-slider.next').carousel('next');
  $('.carousel.carousel-slider.prev').carousel('prev');
};

function restartCarousel() {
  carouselTimer = setInterval(nextCarousel, 5000);
};


var mavariable = 0;  /* work */
var leftpos = 650;
var toppos = 500;
var randomleft = (-200) + Math.floor(Math.random() * 400);
var randomtop = (-200) + Math.floor(Math.random() * 400);

$( ".pop-image" ).click(function() {
  if (mavariable == 0) { /* work */
    $( ".easteregg-1" ).css( "display", "block" );
  }
  mavariable = 1;
});


Interval()
var baseInterval;

function Move() {
  if (mavariable == 1) { /* work */
    leftpos += randomleft;
    toppos += randomtop;
    $( ".easteregg-1" ).css( "left", leftpos );
    $( ".easteregg-1" ).css( "top", toppos );
    randomleft = Math.floor(Math.random() * 400) - 200;
    randomtop = Math.floor(Math.random() * 400) - 200;
  }
};

function Interval() {
  baseInterval = setInterval(Move, 200);
};

$( ".easteregg-1" ).click(function() {
  $( ".easteregg-1" ).css( "display", "none" );
  $( ".youwin" ).css( "display", "block" );
});




$( ".responsive-img" ).click(function() {
  $( ".easteregg-2-1" ).addClass( "animate__animated animate__shakeY animate__infinite" );
  $( ".easteregg-2-2" ).addClass( "animate__animated animate__shakeY animate__infinite" );
  $( ".easteregg-2-3" ).addClass( "animate__animated animate__shakeY animate__infinite" );
  $( ".easteregg-2-4" ).addClass( "animate__animated animate__shakeY animate__infinite" );
  $( ".easteregg-2-5" ).addClass( "animate__animated animate__shakeY animate__infinite" );
  $( ".easteregg-2-6" ).addClass( "animate__animated animate__shakeY animate__infinite" );
  $( ".easteregg-2-7" ).addClass( "animate__animated animate__shakeY animate__infinite" );
  $( ".easteregg-2-8" ).addClass( "animate__animated animate__shakeY animate__infinite" );
  $( ".easteregg-2-9" ).addClass( "animate__animated animate__shakeY animate__infinite" );
  $( ".easteregg-2-10" ).addClass( "animate__animated animate__shakeY animate__infinite" );
  $( ".easteregg-2-11" ).addClass( "animate__animated animate__shakeY animate__infinite" );
  $( ".easteregg-2-12" ).addClass( "animate__animated animate__shakeY animate__infinite" );
  $( ".easteregg-2-1" ).css( "display", "block" );
  $( ".easteregg-2-2" ).css( "display", "block" );
  $( ".easteregg-2-1" ).css( "left", "10%" );
  $( ".easteregg-2-2" ).css( "left", "23%" );
  $( ".easteregg-2-1" ).css( "top", "2100" );
  $( ".easteregg-2-2" ).css( "top", "1500" );
  $( ".easteregg-2-3" ).css( "display", "block" );
  $( ".easteregg-2-3" ).css( "left", "53%" );
  $( ".easteregg-2-3" ).css( "top", "1900" );
  $( ".easteregg-2-4" ).css( "display", "block" );
  $( ".easteregg-2-4" ).css( "left", "15%" );
  $( ".easteregg-2-4" ).css( "top", "1800" );
  $( ".easteregg-2-5" ).css( "display", "block" );
  $( ".easteregg-2-5" ).css( "left", "67%" );
  $( ".easteregg-2-5" ).css( "top", "1600" );
  $( ".easteregg-2-6" ).css( "display", "block" );
  $( ".easteregg-2-6" ).css( "left", "42%" );
  $( ".easteregg-2-6" ).css( "top", "1700" );
  $( ".easteregg-2-7" ).css( "display", "block" );
  $( ".easteregg-2-7" ).css( "left", "34%" );
  $( ".easteregg-2-7" ).css( "top", "1400" );
  $( ".easteregg-2-8" ).css( "display", "block" );
  $( ".easteregg-2-8" ).css( "left", "22%" );
  $( ".easteregg-2-8" ).css( "top", "1800" );
  $( ".easteregg-2-9" ).css( "display", "block" );
  $( ".easteregg-2-9" ).css( "left", "78%" );
  $( ".easteregg-2-9" ).css( "top", "1400" );
  $( ".easteregg-2-10" ).css( "display", "block" );
  $( ".easteregg-2-10" ).css( "left", "20%" );
  $( ".easteregg-2-10" ).css( "top", "2100" );
  $( ".easteregg-2-11" ).css( "display", "block" );
  $( ".easteregg-2-11" ).css( "left", "76%" );
  $( ".easteregg-2-11" ).css( "top", "2200" );
  $( ".easteregg-2-12" ).css( "display", "block" );
  $( ".easteregg-2-12" ).css( "left", "76%" );
  $( ".easteregg-2-12" ).css( "top", "1800" );
});


$('#play').on('click', function () { 
    var obj = document.createElement('audio');
    obj.src = '../video/song.mp3'; 
    obj.play(); 
});
