jQuery(document).ready(function($){
  $('.tourney-tabs p').on( "click", function() {
    var myId = $(this)[0].id;
    $(this).addClass('active').siblings().addClass('inactive').removeClass('active');
    if($( ".tournaments-list" ).find(myId)){
      $( ".tournaments-list ."+myId ).addClass('display-show').removeClass('display-hide').siblings().addClass('display-hide').removeClass('display-show');
    }
  });

  var waypoint = new Waypoint({
    element: document.getElementById('to_top'),
    handler: function(direction) {
      if(direction=='down') {
        console.log(this.element.id + ' triggers at ' + this.triggerPoint)
        $('.to-top').removeClass('d-none')
      }
      else {
        $('.to-top').addClass('d-none')
      }
    },
    offset: '10%'
  });

  var waypoint = new Waypoint({
    element: document.getElementById('home_banner_section'),
    handler: function(direction) {
      console.log('10%')
      var id;
      var audio = $("audio");
      id = $("#home_banner_section").find(audio)[0].play();
      id = $("#home_banner_section").find(audio)[0].volume= 0.1;
    },
    offset: '10%'
  });
  var waypoint = new Waypoint({
    element: document.getElementById('teams_pause'),
    handler: function(direction) {
      var id;
      var audio = $("audio");
      id = $("#home_banner_section").find(audio)[0].pause();
      console.log('90%')
    },
    offset: '10%'
  });

  $('.autoplay').slick({
    slidesToShow: 4,
    slidesToScroll: 1,
    autoplay: true,
    arrows: false,
    pauseOnHover: true,
    autoplaySpeed: 2000,
  });
  $('.participants-slick').slick({
    slidesToShow: 4,
    slidesToScroll: 2,
    autoplay: true,
    arrows: false,
    pauseOnHover: true,
    autoplaySpeed: 1000,
    responsive: [
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 3,
          autoplaySpeed: 2000,
          infinite: true,
          arrows: false,
          dots: false,
        }
      },
      {
        breakpoint: 576,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2,
          autoplaySpeed: 2000,
          infinite: true,
          arrows: false,
          dots: false,
        }
      }
    ],
  });

});