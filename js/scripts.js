$(document).ready(function(){
  $('.js-menu').on('click', function(){
    $(this).toggleClass('--x');
    $('.esm-header').toggleClass('-open');
    $('body').toggleClass('-overflowhidden');
  });
});
