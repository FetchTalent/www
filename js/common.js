$(document).ready(function() {

	$('.menu .item[data-tab]').tab();

  $("#sandwich").on("click", function() {
    $(this).toggleClass("active");
    $("body").toggleClass("menubar-in");
  });

  $(".play").on("click", function() {
    $('.fetch-1').hide();
    $('.section-1 .ui.embed').show();
  });

});