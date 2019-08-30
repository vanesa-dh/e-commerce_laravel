//VALIDACIONES
var emailInput = document.querySelector('#email');
var passwordInput = document.querySelector('#password');

function isValidEmail(email) {
  return /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/.test(email);
}

emailInput.onblur = function () {
  if (this.value == '' && document.querySelector('.email_error').innerHTML == '') {
    document.querySelector('.email_error').append('El campo email está vacío');
  } else {
    document.querySelector('.email_error').innerHTML = '';
    if (isValidEmail(this.value) == false) {
      document.querySelector('.email_error').innerHTML = 'El email tiene un formato incorrecto';
    }
  }
}

passwordInput.onblur = function () {
  if (this.value == '' && document.querySelector('.password_error').innerHTML == '') {
    document.querySelector('.password_error').append('El campo contraseña está vacío');
  } else {
      document.querySelector('.password_error').innerHTML = '';
  }
}
