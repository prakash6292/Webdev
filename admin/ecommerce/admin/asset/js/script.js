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

// ----------Start Category Script----------
$(function () {
//----------Start Category Validation------
  $('#category_form').validate({
    rules: {
      parent_category: {
        required: true,
      },
      category_name: {
        required: true,
      },
    },
    messages: {
      parent_category: {
        required: "Please Select Parent Category",
      },
      category_name: {
        required: "Please Enter Category Name",
      },
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
  //----------End Category Validation------
  
  $("#category_table").DataTable({
    "responsive": true, "lengthChange": true, "autoWidth": false,
  });

}); 
// ----------Start Category Script

// ----------delete confirmation alert----
function checkdelete(){
  return confirm('Are You Sure You want To Delete?');
}
// ----------end delete confirmation alert----

// ----------Start product Script--------
$(function() {
  
  //----------Start product Validation------
  $('#product_form').validate({
    ignore: [],
    debug: false,
    rules: {
      product_name: {
        required: true,
      },
      product_price: {
        required: true,
      },
       parent_category_id: {
        required: true,
      },
       is_active: {
        required: true,
      },
      show_when: {
        required: true,
      },
      description: {
          required: function () {
          CKEDITOR.instances.description.updateElement();
        },
        minlength: 3
      }
    },
    messages: {
      product_name: {
        required: "Please Enter Product Name",
      },
      product_price: {
        required: "Please Enter Product Price",
      },
      parent_category_id: {
        required: "Please Select Category Name",
      },
      is_active: {
        required: "Please Select Status",
      },
      show_when: {
        required: "Please Select Date",
      },
      description: {
        required: "Please Enter Description",
      }
    },
    errorElement: 'span',
    errorPlacement: function (error, element) {
      error.addClass('invalid-feedback');
      element.closest('.row .col-sm-9').append(error);
    },
    highlight: function (element, errorClass, validClass) {
      $(element).addClass('is-invalid');
    },
    unhighlight: function (element, errorClass, validClass) {
      $(element).removeClass('is-invalid');
    }
  });
  //----------End product Validation------
  // -----Start datepicker -----
  $( "#show_when" ).datepicker({
    dateFormat: 'dd/mm/yy'
  });
  // -----end datepicker -----

  // DataTable
  $("#product_table").DataTable({
    "responsive": true, "lengthChange": true, "autoWidth": false,
  });
  
});
// ----------End product Script--------
