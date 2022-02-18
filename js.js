$(document).ready(function () {
  var scrollLink = $(".scroll");

  // 捲動動畫
  scrollLink.click(function (e) {
    e.preventDefault();
    $("body,html").animate(
      {
        scrollTop: $(this.hash).offset().top,
      },
      500
    );
  });

  // 切換active
  $(window).scroll(function () {
    var scrollbarLocation = $(this).scrollTop();

    scrollLink.each(function () {
      var sectionOffset = $(this.hash).offset().top - 20;
      if (sectionOffset <= scrollbarLocation) {
        $(this).parent().addClass("active");
        $(this).parent().siblings().removeClass("active");
      }
    });
  });

  $(".nav-link").hover(
    function () {
      $(this).addClass("btn btn-secondary");
    },
    function () {
      $(this).removeClass("btn btn-secondary");
    }
  );
});
$(".carousel-item:first").addClass("active");
$(".portflio").find(".card:odd").addClass("featured bg-inverse text-white");
$(".portflio").find(".card:even").addClass("bg-info");
$(".portflio").find(".card-header:odd").addClass("bg-danger text-uppercase");
$(".portflio").find(".card-header:even").addClass("bg-primary text-white");

function login() {
  $.post(
    "api/chk.php",
    {
      acc: $("#acc").val(),
      pw: $("#pw").val(),
    },
    (chk) => {
      if (parseInt(chk)) {
        location.href = "back/index.php";
      } else {
        alert(`
                こんぺここんぺここんぺこー！
                        登入失敗peko~
                `);
      }
    }
  );
}
