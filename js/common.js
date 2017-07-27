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

$('#menu .item').click(function(){
	var type = $(this).data('type');
	if(type == 'popular'){
		$('#menu .item').removeClass('active');
		$(this).addClass('active');
		$('.content .item').hide(300);
		setTimeout(function(){$('.content .item.image').show(300);}, 300);
	}else{
		$('#menu .item').removeClass('active');
		$(this).addClass('active');
		$('.content .item').hide(300);
		setTimeout(function(){$('.content .item').show(300);}, 200);
	}
});
// инициализация маски без 9ки
// $("input[name=phone]").mask("+7(999)99-99-99"); // (раскоментировать если надо)

// инициализация маски с 9кой (для рус сайтов)
// $("input[name=phone]").mask("+7(988)888-88-88"); // (раскоментировать если надо)