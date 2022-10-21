$(".myAlert-top").hide();
$("#sponsor_student").click(function () {
    var name = $("#spname").val();
    var email = $("#spemail").val();
    var phone = $("#spphone").val();
    var amount = $("#spamount").val();
    var key = $("#key").val();
    var token = $("#token").val();
    if (name == "" || email == "" || phone == "" || amount == "") {
        alert("All fields are mandatory");
    } else {
        var options = {
            key: key,
            amount: amount * 100,
            name: name,
            image: '{{ asset("assets/images/logo.png") }}',
            handler: function (response) {
                // alert(response.razorpay_payment_id);
                $.post(
                    "/razorpay-payment",
                    {
                        name: name,
                        email: email,
                        phone: phone,
                        amount: amount,
                        transaction_id: response.razorpay_payment_id,
                        _token: token,
                    },
                    function (data, status) {
                        $(".myAlert-top").show();
                        $("#rzp").modal('hide');

                    }

                );
            },
            prefill: {
                name: name,
                email: email,
                contact: phone,
            },
            theme: {
                color: "#4479BD",
            },
        };

        var rzp1 = new Razorpay(options);
        rzp1.open();
    }
    // e.preventDefault();
});
