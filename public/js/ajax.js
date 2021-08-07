
$(function () {
  $("form").attr("novalidate", "novalidate");
  $.fn.is_valid = (function () {
    let input_parent = ".form-group, [class^='col-']";
    $(this).addClass("was-validated");
    $(this).find(".error_msgIcon").remove();
    $(this).find(".is-invalid").removeClass("is-invalid");
    $(this).find(input_parent).removeClass("has-danger");
    var errorFlag = false;
    // RegEx Variables
    nam = /^[a-zA-Z ]+$/;
    tel = /^\d+$/;
    mob = /^[0-9]{10}$/;
    email = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
    web = /^(http:\/\/www\.|https:\/\/www\.|http:\/\/|https:\/\/)?[a-z0-9]+([\-\.]{1}[a-z0-9]+)*\.[a-z]{2,5}(:[0-9]{1,5})?(\/.*)?$/;
    stpas = /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{6,16}$/;
    $(this).find("input.mobile").each(function () {
      if (!mob.test($(this).val())) {
        $(this).addClass("is-invalid");
        $(this).closest(input_parent).append('<div class="error_msgIcon">Please enter only 10 digit numeric value.</div>');
        errorFlag = true;
      }
    });
    $(this).find("input.name").each(function () {
      if (!nam.test($(this).val())) {
        $(this).addClass("is-invalid");
        $(this).closest(input_parent).append('<div class="error_msgIcon">Please don\'t include any special characters or numeric value.</div>');
        errorFlag = true;
      }
    });
    $(this).find("input, select, textarea").each(function () {
      if ($(this).prop("required") && $(this).val() == "") {
        $(this).addClass("is-invalid");
        $(this).closest(input_parent).append('<div class="error_msgIcon">Please fill required field.</div>');
        errorFlag = true;
      }
      if ($(this).attr("type") == "tel" && !tel.test($(this).val()) && !$(this).hasClass("mobile")) {
        $(this).addClass("is-invalid");
        $(this).closest(input_parent).append('<div class="error_msgIcon">Please enter only numeric value.</div>');
        errorFlag = true;
      }
      if ($(this).attr("type") == "email" && $(this).val() != "" && !email.test($(this).val())) {
        $(this).addClass("is-invalid");
        $(this).closest(input_parent).append('<div class="error_msgIcon">Please enter valid Email ID.</div>');
        errorFlag = true;
      }
      if (!web.test($(this).val()) && $(this).hasClass("web") && $(this).val() != "") {
        $(this).addClass("is-invalid");
        $(this).closest(input_parent).append('<div class="error_msgIcon">Please Enter Valid Website url</div>');
        errorFlag = true;
      }
    });
    if ($(this).find(".password").val() != $(this).find(".confirm-password").val()) {
      $(this).addClass("is-invalid");
      $(this).find(".confirm-password").closest(input_parent).append("<div class='error_msgIcon'>Confirm password didn't match.</div>");
      errorFlag = true;
    }
    return !errorFlag;
  });
  $("form").on("submit", function (e) {
    is_valid = $(this).is_valid();
    if (!is_valid) {
      e.preventDefault();
    }
  });
});



$(function () {


  $("#inquiry_form").on('submit', function (e) {
    e.preventDefault();

    var url = $(this).attr('action');
    var name = $('.name').val();
    var email = $('.email').val();
    var user_mobile = $('.mobile').val();
    var message = $('.message').val();

    is_valid = $(this).is_valid();
    if (is_valid) {
      $.ajax({
        url: url,
        type: "POST",
        headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
        data: {
          name: name,
          email: email,
          user_mobile: user_mobile,
          message: message
        },
        success: function (response) {

          if (response.status) {
            document.getElementById("inquiry_form").reset();
            $("#ajax_message").html();
            $("#ajax_message").html("Inquiry Send Successfully");
          }
          else {
            $("#ajax_message").html();
            $("#ajax_message").html('failed');
          }

        },
      });
    }
  });

})

$("#search_form").on('keyup change', function (e) {
  e.preventDefault();

  var url = $(this).attr('data-url');
  var search = $('#search').val();


  $.ajax({
    url: url,
    type: "POST",
    headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
    data: {
      search: search,
    },
    success: function (response) {

      $(".search-list").html('');
      $(".search-list").append(response);

    },
  });
});

$(".productfilter").on('keyup change', function (e) {
  e.preventDefault();

  var url = $('#baseUrl').data('url');

  var search = [];

  $('input[name="searchtext[]"]:checked').each(function () {
    search.push($(this).val());
  });

  var name = $('.name').val();
  var namec = $('.namec').val();

  $.ajax({
    url: url,
    type: "GET",
    headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
    data: {
      search: search,
      name: name,
      namec: namec,
    },
    success: function (response) {

      $("#prod_list").html(response);

      $('.lazy-load').each(function (event) {
        let self = $(this);
        self.attr('src', self.data('src')).removeAttr('data-src');

        self.on('load', function () {
          $(this).removeClass('lazy-load');
          $(this).addClass('singletop');
        });
      });

    },
  });

});

