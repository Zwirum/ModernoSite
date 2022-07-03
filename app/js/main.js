$(function () {
  $(".rate-star").rateYo({
    rating: 5,
    starWidth: "12px",
    readOnly: true
  });

  $('.product-slider__inner').slick({
    dots: true,
    arrows: false,
    slidesToShow: 4,
    slidesToScroll: 4,
    responsive: [
      {
        breakpoint: 1900,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 3,
          infinite: true,
          dots: true
        }
      },
      {
        breakpoint: 1441,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1
        }
      },
      {
        breakpoint: 801,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      },
    ]
  });

  $(".js-range-slider").ionRangeSlider({
    type: "double",
    min: 0,
    max: 1000,
    from: 0,
    to: 600,
    prefix: "$"
  });
  $('.icon-th-list').on('click', function () {
    $('.product__item').addClass('list');
    $('.icon-th-list').addClass('active');
    $('.icon-th-large').removeClass('active');
  });

  $('.icon-th-large').on('click', function () {
    $('.product__item').removeClass('list');
    $('.icon-th-large').addClass('active');
    $('.icon-th-list').removeClass('active');
  });

  $('.product-one__tubs .tab, .setiings__tubs .tab').on('click', function (event) {
    var id = $(this).attr('data-id');
    $('.product-one__tubs, .setiings__tubs').find('.tab-item').removeClass('active-tab').hide();
    $('.product-one__tubs .tabs, .setiings__tubs .tabs').find('.tab').removeClass('active');
    $(this).addClass('active');
    $('#' + id).addClass('active-tab').fadeIn();
    return false;
  });

  $('.menu__btn').on('click', function () {
    $('.menu__list').slideToggle();
  });

  $('.header__btn-menu').on('click', function () {
    $('.header__box').toggleClass('active');
  });

  $('input[type="file"], select').styler();


  if($('.products__inner-box').length){
    var mixer = mixitup('.products__inner-box',{
      animation: {
        duration: 110
      }
    });
  }

  $('.content').css({
    'paddingTop': $('header').height() + 'px'
  });

  let ShuffleLettersVar;

  if($('.search__inner-title').length){
    shuffleLetters(document.querySelector('.search__inner-title'));
  }
  if($('.text__head').length){
    let elems = document.querySelectorAll('.text__head');
    for (let elem of elems){
      shuffleLetters(elem);
    }
  }
  if($('.aside__item-sales > span').length){
    ShuffleLettersVar = 1;
  }
  if($('.author__title > span').length){
    ShuffleLettersVar = 2;
  }

  $(window).scroll(function(){
    switch(ShuffleLettersVar){
      case 2: {
        if($(this).scrollTop() > ($('.author').offset().top - 400)){
          shuffleLetters(document.querySelector('.author__title > span'));
          ShuffleLettersVar = 0;
        };
        break;
      }
      case 1: {
        if($(this).scrollTop() > ($('.aside__item-sales').offset().top - 700)){
          shuffleLetters(document.querySelector('.aside__item-sales > span'));
          ShuffleLettersVar = 0;
        };
        break;
      }
    }
  });  
  
  wow = new WOW(
    {
    boxClass:     'wow',      // default
    animateClass: 'animated', // default
    offset:       0,          // default
    mobile:       true,       // default
    live:         true        // default
  }
  )
  wow.init();

  $('body').stellar({
    positionProperty: 'transform'
  });
});