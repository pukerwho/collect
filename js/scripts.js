$(window).scroll(function(){
  var h_scroll = $(this).scrollTop();
  if ($(document).width() < 992) {
    if (h_scroll > 56) {
      $('.header_bottom').addClass('shadow-lg')
    } else {
      $('.header_bottom').removeClass('shadow-lg')
    }
  }
  if ($(document).width() > 993) {
    if (h_scroll > 110) {
      $('.header_bottom').addClass('header_bottom_fixed')
    } else {
      $('.header_bottom').removeClass('header_bottom_fixed')
    }
  }
})

//Плавный скролл
$(document).on('click', '.header_bottom a[href^="#"]', function (event) {
  event.preventDefault();
  var target = $($.attr(this, 'href'));
  var targetScroll =  target.offset().top - 110;
  $('html, body').animate({
      scrollTop: targetScroll
  }, 500);
});

//Анимация
$('.header_botom.collect-animate').addClass('collect-show');
$('.welcome.collect-animate').addClass('collect-show');

//Мобильное меню
$('.mobile_menu').on('click', function(){
  $(this).toggleClass('active');
  $('.mobile_cover').toggleClass('active');
});

$('.mobile_cover li a').on('click', function(){
  $('.mobile_menu').removeClass('active');
  $('.mobile_cover').removeClass('active');
})

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