$(document).ready(function () {
  $(".links li a")
    .hover(
      function () {
        var str = $(this).attr("data-tooltip");
        $('<p class="tooltip"></p>').text(str).appendTo("body").fadeIn(600);
      },
      function () {
        $(".tooltip").remove();
      }
    )
    .mousemove(function (e) {
      var mouseX = e.pageX + 20;
      var mouseY = e.pageY;
      $(".tooltip").css({ top: mouseY, left: mouseX });
    });
});
