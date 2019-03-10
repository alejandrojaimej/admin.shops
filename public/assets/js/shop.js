//hacer funcion  addToCart()
console.log('hacer funcion addToCart()');

function addToCart(product_id = false){
    if(product_id === false){return false;}
    $.ajax({
        url: '/cart/add',
        type: "post",
        data: {product_id: product_id},
        success: function (response) {
        },
        error: function(jqXHR, textStatus, errorThrown) {
        }
      });
}