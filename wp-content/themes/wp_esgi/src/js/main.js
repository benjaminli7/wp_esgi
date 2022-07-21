$(document).ready(function () {
  ajaxizePageLinks();
  $("#s").attr("placeholder", "Type something to search...");
  $("#comment").attr("placeholder", "Message");

  $(".hamburger").click(function () {
    $(".menu-flex").addClass("open");
    $(".site-header").addClass("menu-open");
    $(".hamburger").toggleClass("hide");
    $(".close").toggleClass("hide");
    $(".custom-logo").addClass("custom-logo-active");
  });

  $(".close").click(function () {
    $(".menu-flex").removeClass("open");
    $(".site-header").removeClass("menu-open");
    $(".hamburger").toggleClass("hide");
    $(".close").toggleClass("hide");
    $(".custom-logo").removeClass("custom-logo-active");
  });
});

function showPage(page) {
  console.log(page);
  $.ajax({
    url: esgi.ajaxURL,
    type: "POST",
    data: {
      action: "load_posts",
      page: page,
    },
  }).done(function (reponse) {
    $("#post-list-wrapper").html(reponse);
  });
}

function ajaxizePageLinks() {
  var page = 1;
  $(".page-numbers").click(function (e) {
    e.preventDefault();

    var currentPage = $(".page-numbers.current").html();
    if ($(this).hasClass("next")) {
      page = Number(currentPage) + 1;
    } else if ($(this).hasClass("prev")) {
      page = Number(currentPage) - 1;
    } else {
      page = $(this).html();
    }
    showPage(page);

    const nextState = {};
    const nextTitle = "Page - " + page;
    const nextURL = $(this).attr("href");
    window.history.replaceState(nextState, nextTitle, nextURL);
  });
}
