var select = document.querySelector('#selectRegister');
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
