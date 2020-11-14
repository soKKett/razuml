$(window).on('load', function() {
  $('.phonewrapper .fa').each(function() {
    if ($(this).hasClass('hidden')) {
      $(this).next('.phtext').css({'margin-left': '0em'});
    }
  });
});