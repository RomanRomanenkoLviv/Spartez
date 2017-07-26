// Адаптация сайта при смене высоты или ширины
$( window ).resize(function() {
    responsiveJS();
});

// Функция плавного скроллинга якорных ссылок
$('a[href^="#"]').click(function(){
  var el = $(this).attr('href');
  $('body').animate({
    scrollTop: $(el).offset().top
  }, 800);
  return false;
});

// инициализация маски без 9ки
// $("input[name=phone]").mask("+7(999)99-99-99"); // (раскоментировать если надо)

// инициализация маски с 9кой (для рус сайтов)
// $("input[name=phone]").mask("+7(988)888-88-88"); // (раскоментировать если надо)