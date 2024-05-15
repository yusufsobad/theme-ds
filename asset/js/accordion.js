$(document).ready(function () {
  $(".card-header").click(function () {
    var $card = $(this).parent(".card-accordion");
    $card.toggleClass("open");
    $card.find(".card-content").slideToggle();
  });
});
