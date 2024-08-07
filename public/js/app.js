$(document).ready(function () {
//   $(".jg_donate_now").click(function () {
    $(document).on("click", ".jg_donate_now", function(){
        $("#jg_curl_india").attr("href", $(this).data("ci-url"));
        $("#jg_curl_cn").attr("href", $(this).data("cc-url"));
        return false;
    });
  $("#nl_subscribe").click(function () {
    var post_url = $("#nl_sform").attr("action");
    var email = $("form#nl_sform input[name=email]").val();
    if (!AU.isEmail(email)) {
      $("form#nl_sform #err_email")
        .removeClass("hide__block")
        .html("Please enter valid Email Address.");
      $("form#nl_sform #err_email").addClass("show__block");
      return false;
    } else {
      $("form#nl_sform #err_email").addClass("hide__block").html("");
    }
    var serializeForm = $("#nl_sform").serialize();
    $.post(
      post_url,
      serializeForm,
      function (data) {
        $("form#nl_sform #err_email").removeClass("hide__block").html(data.msg);
        setTimeout(function () {
          $("form#nl_sform input[name=email]").val("");
          $("form#nl_sform #err_email").addClass("hide__block").html("");
        }, 3000);
      },
      "json"
    );
    return false;
  });

  $("#view_utl").click(function () {
    var speed = 10000;
    if (!$(".hidden_utl").hasClass("hide__block")) {
      $(".hidden_utl").addClass("hide__block").slideUp();
    } else {
      $(".hidden_utl").removeClass("hide__block").slideDown(speed);
    }
    return false;
  });

  if ($(".chk_active").length > 0) {
    $(".chk_active").each(function () {
      $(this).parent().css("display", "block");
    });
  }
});
