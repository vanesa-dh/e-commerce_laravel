var select = document.querySelector('#selectProduct');
var divProduct = document.querySelector('.productToDelete');
var productImage = document.querySelector('#productImage');
var divDescription = document.querySelector('.product_descripcion');
var divPrice = document.querySelector('.product_precio1');
divProduct.style.display = 'none';

select.onchange = function () {
  var productId = this.value;
  divProduct.style.display = 'flex';
}
