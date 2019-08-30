(function($) {
  $(function() {
    const $searchField = $('#masthead .search-field');
    const $searchButton = $('#masthead .icon-search');
    const $label = $searchButton.siblings('label');

    console.log($searchField);

    $searchButton.on('click', function(event) {
      console.log('click');
      // Prevent default behavior of hypertext reference
      event.preventDefault();
      // Animate Label on Click
      $label.animate({ width: '200px' }),
        // Focus on Label Input Search Field
        $label.children('[type="search"]').focus();
    }),
      // When leaving focus or clicking away, hide the label
      $searchField.on('blur', function() {
        '' === $searchField.val() &&
          $('#masthead label').animate({
            width: '0'
          });
      });
  });
})(jQuery);

// header reverse header
