
    var SITEURL = '';
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $('body').on('click', '.buy_now', function(e) {
        var totalAmount = $(this).attr("data-amount");
        var product_id = $(this).attr("data-id");
        var options = {
            "key": "rzp_test_D0rNyMaRKPIjWc",
            "amount": (totalAmount * 100), // 2000 paise = INR 20
            "name": "Tutsmake",
            "description": "Payment",
            "image": "//www.tutsmake.com/wp-content/uploads/2018/12/cropped-favicon-1024-1-180x180.png",
            "handler": function(response) {
                window.location.href = SITEURL + '/' + 'paysuccess?payment_id=' + response
                    .razorpay_payment_id + '&product_id=' + product_id + '&amount=' + totalAmount;
            },
            "prefill": {
                "contact": '9988665544',
                "email": 'tutsmake@gmail.com',
            },
            "theme": {
                "color": "#528FF0"
            }
        };
        var rzp1 = new Razorpay(options);
        rzp1.open();
        e.preventDefault();
    });
    /*document.getElementsClass('buy_plan1').onclick = function(e){
    rzp1.open();
    e.preventDefault();
    }*/
