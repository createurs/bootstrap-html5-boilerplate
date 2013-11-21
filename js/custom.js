// Variables
var isSticky = $('.affix');

$(document).ready(function() {

  // Sticky nav implementation
  $('.sticky-nav').affix({
    offset: $('.sticky-nav').position()
  });

  if (isSticky === true) {
    $('body').addClass('sticky');
  }

});
