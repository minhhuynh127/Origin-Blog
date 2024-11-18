$(document).ready(function () {
  $("#menu-page-menu li").hover(
    // on mouse
    function () {
      $(this)
        .find("ul:first")
        .css({ visibility: "visible", display: "none" })
        .show(400);
    },
    // un mouse
    function () {
      $(this).find("ul:first").css({ visibility: "hidden" });
    }
  );
});
