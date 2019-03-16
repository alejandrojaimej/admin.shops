
function addToCart(product_id = false){
    if(product_id === false){return false;}
    $.ajax({
        url: '/cart/add',
        type: "post",
        data: {product_id: product_id},
        success: function (response) {
            location.reload();
            /*let price = $('#product'+product_id+' .price').text() / $('#product'+product_id+' .quantity').text();
            $('#product'+product_id+' .quantity').text(response);
            $('#product'+product_id+' .price').text(price * response);*/
        },
        error: function(jqXHR, textStatus, errorThrown) {
        }
      });
}

function removeFromCart(product_id = false){
    if(product_id === false){return false;}
    $.ajax({
        url: '/cart/remove',
        type: "post",
        data: {product_id: product_id},
        success: function (response) {
            if(response > 0){
                location.reload();
                /*let price = $('#product'+product_id+' .price').text() / $('#product'+product_id+' .quantity').text();
                $('#product'+product_id+' .quantity').text(response);
                $('#product'+product_id+' .price').text(price * response);*/
            }else{
                location.reload();
                /*$('#product'+product_id).remove();*/
            }
        },
        error: function(jqXHR, textStatus, errorThrown) {
        }
      });
}