function mostrarSenha() {
    var x = document.getElementById('inputPassword');
    if (x.type === "password") {
      x.type = "text";
    } else {
      x.type = "password";
    }
  }

  //admin usuarios

    function togglePassword2(id, id2) {
    document.getElementById(id).type === 'password' ? document.getElementById(id).type = 'text' : document.getElementById(id).type = 'password';
    //document.getElementById('1olho').toggleClass("fa-eye fa-eye-slash");
    document.getElementById(id2).className === "far fa-fw fa-eye-slash field_icon" ? document.getElementById(id2).className = "far fa-fw fa-eye field_icon" : document.getElementById(id2).className = "far fa-fw fa-eye-slash field_icon";
    };