// ----------start change password script---------
$(function () {
  $('#changepwd_form').validate({
    rules: {
      old_pwd: {
        required: true,
      },
      new_pwd: {
        required: true,
        minlength: 5
      },
      re_pwd: {
        required: true,
        minlength: 5,
        equalTo: "#new_pwd"
      },
    },
    messages: {
      old_pwd: {
        required: "Please Enter Old Password",
      },
      new_pwd: {
        required: "Please Enter Password",
        minlength: "Your password must be at least 5 characters long"
      },
      re_pwd: {
        required: "Please Enter Retype password",
        minlength: "Your Retype Password must be at least 5 characters long"
      }
    },
    errorElement: 'span',
    errorPlacement: function (error, element) {
      error.addClass('invalid-feedback');
      element.closest('.form-group .col-sm-9').append(error);
    },
    highlight: function (element, errorClass, validClass) {
      $(element).addClass('is-invalid');
    },
    unhighlight: function (element, errorClass, validClass) {
      $(element).removeClass('is-invalid');
    }
  });
});
// ----------end change password script---------


// ----------start login script---------
$(function () {
  // --------------Login Form Validation------------
  $('#login_form').validate({
    rules: {
      email: {
        required: true,
        email: true
      },
      password: {
        required: true,
        minlength: 5
      }
    },
    messages: {
      email: {
        required: "Please Enter Email",
      },
      password: {
        required: "Please Enter Password",
        minlength: "Please Enter Password at least 5 Character Long"
      }
    },
    errorElement: 'span',
    errorPlacement: function (error, element) {
      error.addClass('invalid-feedback');
      element.closest('.input-group').append(error);
    },
    highlight: function (element, errorClass, validClass) {
      $(element).addClass('is-invalid');
    },
    unhighlight: function (element, errorClass, validClass) {
      $(element).removeClass('is-invalid');
    }
  });
  // --------------End Login Validation------------
});
// ----------end login script---------


// ----------start Forgot script---------
$(function () {
  // --------------Forgot Form Validation------------
  $('#forgot_password').validate({
    rules: {
      email: {
        required: true,
        email: true
      },
    },
    messages: {
      email: {
        required: "Please Enter Email",
      },
    },
    errorElement: 'span',
    errorPlacement: function (error, element) {
      error.addClass('invalid-feedback');
      element.closest('.input-group ').append(error);
    },
    highlight: function (element, errorClass, validClass) {
      $(element).addClass('is-invalid');
    },
    unhighlight: function (element, errorClass, validClass) {
      $(element).removeClass('is-invalid');
    }
  });
  // --------------End Forgot Validation------------
});
// ----------end Forgot script---------

