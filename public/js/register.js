var select = document.querySelector('#selectRegisterCountry');
var selectProvince = document.querySelector('#selectRegisterProvince');
var provinceDiv = document.querySelector('#provinceDiv');
provinceDiv.style.display = 'none';
// var options = select.children;
// console.log(options);

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


select.onchange = function(){
  if (this.value == 'Argentina') {
    fetch("https://dev.digitalhouse.com/api/getProvincias")
    .then(function(response){
      return response.json();
    })
    .then(function(data){
      for (var prop in data.data) {
        // console.log(data.data[prop].state);
        provinceDiv.style.display = 'flex';
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
