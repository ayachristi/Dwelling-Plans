$(document).ready(function() {
            $(".checkbox").change(function() {
                updateTotalPrice($(this));
            });

            function updateTotalPrice(checkbox) {
                let total_price = 0;
                checkbox.closest('.modal').find('.checkbox:checked').each(function() {
                    let item_price = parseFloat($(this).data('price'));
                    if (!isNaN(item_price)) { 
                        total_price += item_price;
                    }
                });
                checkbox.closest('.modal').find('.total-price').text("Total Price: PHP " + total_price.toFixed(2));
                $('#total_price_' + checkbox.val()).val(total_price);
            }

            updateTotalPrice();
        });