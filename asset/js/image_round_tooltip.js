$(document).ready(function () {
  function setupImageContainer(container) {
    var images = container.find(".image-round");
    if (images.length > 3) {
      var excessImages = images.slice(3);
      var moreImages = $(
        '<div class="more-images" data-toggle="tooltip-image">+' +
          excessImages.length +
          "</div>"
      );
      var tooltip = $('<div class="tooltip-image"></div>');

      excessImages.each(function () {
        $(this).appendTo(tooltip);
        $(this).css({
          width: "40px",
          height: "40px",
          "margin-left": "-10px",
        });
      });

      moreImages.append(tooltip);
      container.append(moreImages);
    }
  }

  $(".image-container").each(function () {
    setupImageContainer($(this));
  });
});
