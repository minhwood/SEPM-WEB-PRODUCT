$(document).ready(function(){
    $(".quantity-input").change(function(){
        quantity = parseInt($(this).val())
        price_string = $(this).parent().parent().find(".price").html()
        price = price_string.slice(2)
        price = parseInt(price)
        subtotal = (price * quantity).toString()
        display_price = "$ "+subtotal
        
        $(this).parent().parent().find(".subtotal").html(display_price)
        total_price = 0
        $(".subtotal").each(function(){
           price_string = $(this).html()
           price = parseInt(price_string.slice(2))
           total_price = total_price + price
        });
        
        $(".total-price").html("$ "+total_price)
    });
});