$('.js-accordion-trigger').bind('click', function(e){
  jQuery(this).parent().find('.accordion-content').slideToggle('fast');  // apply the toggle to the ul
  jQuery(this).parent().toggleClass('is-expanded');
  e.preventDefault();
});

$(document).ready(function(){
  $('.slider').slick({
  	arrows: false,
  	dots: true,
  	autoplay: true,
  	autoplaySpeed: 5000
  });
});