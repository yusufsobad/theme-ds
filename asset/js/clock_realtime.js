function updateTime() {
  var now = new Date();
  var hours = String(now.getHours()).padStart(2, "0");
  var minutes = String(now.getMinutes()).padStart(2, "0");
  var seconds = String(now.getSeconds()).padStart(2, "0");

  $("#clock").html(
    hours +
      '<span class="blink">:</span>' +
      minutes +
      '<span class="blink">:</span>' +
      seconds
  );
}

function blinkColon() {
  $(".blink").fadeToggle(500);
}

setInterval(updateTime, 1000);
setInterval(blinkColon, 500);
