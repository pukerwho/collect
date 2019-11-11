$('.toogle-menu').on('click', function(e) {
  e.preventDefault;
  $(this).toggleClass('toogle-menu_active');
  $('.slide-menu').toggleClass('slide-menu_active');
  $('.menu li').toggleClass('animate-left');
});

$(window).scroll(function(){
  var h_scroll = $(this).scrollTop();
  if (h_scroll > 56) {
    $('header').addClass('header__fixed')
  } else {
    $('header').removeClass('header__fixed')
  }
})

//Плавный скролл
$(document).on('click', '.header_bottom a[href^="#"]', function (event) {
  event.preventDefault();
  var target = $($.attr(this, 'href'));
  var targetScroll =  target.offset().top;
  $('html, body').animate({
      scrollTop: targetScroll
  }, 500);
});

var swiperMainWelcome = function() {
  if ($(document).width() > 760) {
    var swiperWelcome = new Swiper('.swiper-welcome-container', {
      slidesPerView: 1,
      centeredSlides: true,
      effect: 'fade',
      loop: true,
      pagination: {
        el: '.swiper-welcome-pagination',
      },
      navigation: {
        nextEl: '.swiper-welcome-next',
        prevEl: '.swiper-welcome-prev',
      },
    })
  } else {
    var swiperWelcome = new Swiper('.swiper-welcome-container', {
      slidesPerView: 1,
      centeredSlides: true,
      effect: 'fade',
      loop: true,
      autoplay: {
        delay: 5000,
      },
      pagination: {
        el: '.swiper-welcome-pagination',
      },
      navigation: {
        nextEl: '.swiper-welcome-next',
        prevEl: '.swiper-welcome-prev',
      },
    })
  }
}

swiperMainWelcome();
if ($(document).width() < 760) {
  let textH = document.querySelectorAll('h2');
  for (text of textH) {
    let t = text.innerText;
    let tNext = text.nextSibling.nextSibling;
    tNext.innerText = t;
  }
}