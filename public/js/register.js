var select = document.querySelector('#selectRegisterCountry');
var selectProvince = document.querySelector('#selectRegisterProvince');
var provinceDiv = document.querySelector('#provinceDiv');
provinceDiv.style.display = 'none'; //oculto el select de provincias cuando no se seleccionó Argentina
var nameInput = document.querySelector('#name');
var userNameInput = document.querySelector('#user_name');
var emailInput = document.querySelector('#email');
var passwordInput = document.querySelector('#password');
var passwordConfirmInput = document.querySelector('#password-confirm');
// var options = select.children;
// console.log(options);


//Lleno el select con los paises de la API
fetch("https://restcountries.eu/rest/v2/all")
.then(function(response){
  return response.json();
})
.then(function(data){
  for (var prop in data) {
    var option = document.createElement("option");                   // Create a <option> node
    var textnode = document.createTextNode(data[prop].name);         // Create a text node
    option.appendChild(textnode);                                    // Append the text to <option>
    select.appendChild(option);                                      // Append <option> to <select>
  }

})
.catch(function(error){
  console.log("The error was: " + error);
})


//En caso de que se haya elegido Argentina, se llena un nuevo select con las provincias de la API
select.onchange = function(){
  if (this.value == 'Argentina') {
    fetch("https://dev.digitalhouse.com/api/getProvincias")
    .then(function(response){
      return response.json();
    })
    .then(function(data){
      for (var prop in data.data) {
        // console.log(data.data[prop].state);
        provinceDiv.style.display = 'flex'; //visualizo el select
        var optionProvince = document.createElement("option");                                    // Create a <option> node
        var textnode = document.createTextNode(data.data[prop].state);                            // Create a text node
        optionProvince.appendChild(textnode);                                                     // Append the text to <option>
        selectProvince.appendChild(optionProvince);                                               // Append <option> to <select>
      }
    })
    .catch(function(error){
      console.log("The error was: " + error);
    })
  } else {
    provinceDiv.style.display = 'none';
  }
}

//VALIDACIONES
nameInput.onblur = function () {
  if (this.value == '' && document.querySelector('.name_error').innerHTML == '') {
    document.querySelector('.name_error').append('El campo nombre está vacío');
  } else {
    document.querySelector('.name_error').innerHTML = '';
  }
}

userNameInput.onblur = function () {
  if (this.value == '' && document.querySelector('.userName_error').innerHTML == '') {
    document.querySelector('.userName_error').append('El campo usuario está vacío');
  } else {
    document.querySelector('.userName_error').innerHTML = '';
  }
}

function isValidEmail(email) {
  return /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/.test(email);
}
emailInput.onblur = function () {
  if (this.value == '' && document.querySelector('.email_error').innerHTML == '') {
    document.querySelector('.email_error').append('El campo email está vacío');
  } else {
    document.querySelector('.email_error').innerHTML = '';
    if (isValidEmail(this.value) == false) {
      document.querySelector('.email_error').innerHTML = 'El email es incorrecto';
    }
  }

}

passwordInput.onblur = function () {
  if (this.value == '' && document.querySelector('.password_error').innerHTML == '') {
    document.querySelector('.password_error').append('El campo contraseña está vacío');
  } else {
    if (this.value.length < 8) {
      document.querySelector('.password_error').innerHTML = 'La contraseña debe tener al menos 8 (ocho) caracteres';
    } else {
      document.querySelector('.password_error').innerHTML = '';
    }
  }
}

passwordConfirmInput.onblur = function () {
  if (this.value == '' && document.querySelector('.passConfirm_error').innerHTML == '') {
    document.querySelector('.passConfirm_error').append('El campo confirmar contraseña está vacío');
  } else {
    document.querySelector('.passConfirm_error').innerHTML = '';
  }
}
