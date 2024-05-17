// Membuka accordion pertama dengan kelas 'open-one' saat halaman dimuat
var $firstOpenOne = $(".card-accordion.open-one").first();
$firstOpenOne.addClass("open");
$firstOpenOne.find(".card-content").show();

$(".card-header .icon-toggle").click(function (event) {
  event.stopPropagation(); // Mencegah event bubbling ke elemen parent
  var $card = $(this).closest(".card-accordion");

  if ($card.hasClass("open-one")) {
    // Tutup semua accordion dengan kelas 'open-one' kecuali yang diklik
    $(".card-accordion.open-one")
      .not($card)
      .each(function () {
        $(this).removeClass("open");
        $(this).find(".card-content").slideUp();
      });
  }

  // Toggle the clicked accordion
  $card.toggleClass("open");
  $card.find(".card-content").slideToggle();
});
