$(document).ready(function(){
  alert('as');
  $('.js-menu').on('click', function(){
    $(this).toggleClass('--x');
    $('.esm-header').toggleClass('open');
  });
});
