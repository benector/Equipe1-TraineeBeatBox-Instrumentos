function mostrarSenha() {
    var x = document.getElementById("inputPassword");
    if (x.type === "password") {
      x.type = "text";
    } else {
      x.type = "password";
    }
  }

  //admin usuarios

  $(document).on('click', '.toggle-password', function() {
    $(this).toggleClass("fa-eye fa-eye-slash");
    var input = $("#pass_log_id");
    input.attr('type') === 'password' ? input.attr('type','text') : input.attr('type','password')
    });

    $(document).on('click', '.toggle-password2', function() {
    $(this).toggleClass("fa-eye fa-eye-slash");
    var input = $("#pass_log_id2");
    input.attr('type') === 'password' ? input.attr('type','text') : input.attr('type','password')
    });