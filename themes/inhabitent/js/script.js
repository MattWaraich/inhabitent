(function($) {
  $('#masthead')
    .find('.search-submit')
    .on('click', function() {
      $(this)
        .siblings('.search-field')
        .toggleClass('expand');
    });
})(jQuery);
// IIFE

// (function ($) {


//   // TODO remove the body append
//   $('body').append('');
  

// }) (jQuery);
