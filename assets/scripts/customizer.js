(function($) {
  // Site title
  wp.customize('blogname', function(value) {
    value.bind(function(to) {
      $('.brand').text(to);
    });
  });
})(jQuery);

(function($) {
  // Site title
  $('.navbar-toggle').click(function() {
      // $('i#mobile-bars').toggleClass('fa-minus-square-o fa-plus');
      console.log($(this));
  });
  
})(jQuery);

