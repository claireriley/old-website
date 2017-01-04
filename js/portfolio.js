
$(document).ready(function() {
    $(".fancybox").fancybox(); // for images
    $("#name").bigtext(); // for name resizing
});

/* highlights current page open in navbar */
$(function(){
  $('a').each(function() {
    if ($(this).prop('href') == window.location.href) {
      $(this).addClass('current');
    }
  });
});