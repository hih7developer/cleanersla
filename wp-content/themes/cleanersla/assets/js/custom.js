!!window['addEventListener'] && new WOW().init();

$(document).ready(function($) {
	var nav = $('.cus_nav_outr');
	$(window).scroll(function() {
		if ($(this).scrollTop() > 200) {
			nav.addClass("hdr_fix");
		} else {
			nav.removeClass("hdr_fix");
		}
	});
}); 

/* Banner slider*/
var swiper = new Swiper('.banner_slider', {
      slidesPerView: 1,
      loop:true,
      speed: 1500,
      spaceBetween: 0,
      autoHeight: true, 
       pagination: {
        el: '.swiper-pagination',
           clickable: true,
      },
      // autoplay: {
      //   delay: 5000,
      //   disableOnInteraction: false,
      // },
     breakpoints: {
     320: {
     slidesPerView: 1,
     spaceBetween: 15,
     },
     }
});
$.fn.equalHeights = function(){
  var max_height = 0;
  $(this).each(function(){
    max_height = Math.max($(this).height(), max_height);
  });
  $(this).each(function(){
    $(this).height(max_height);
  });
};

$(document).ready(function(){
  $('.service_info').equalHeights();
});
$(document).ready(function(){
  $('.pricelist_info').equalHeights();
});
