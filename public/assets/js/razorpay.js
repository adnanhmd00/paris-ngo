$('#donate').click(function() {
    var name = $('#name').val();
    var email = $('#email').val();
    var phone = $('#phone').val();
    var amount = $('#amount').val();
    var key = $('#key').val();
    var token = $('#token').val();
    alert(token)

    var options = {
        'key' : key,
        'amount': amount * 100,
        'name': name,
        'image': '{{ asset("assets/images/logo.png") }}',
        'handler': function(response) {
            // alert(response.razorpay_payment_id);
            $.post("/razorpay-payment",{
                name: name,
                email: email,
                phone: phone,
                amount: amount,
                transaction_id: response.razorpay_payment_id,
                _token : token,
            },
            function(data, status){
                alert("Data: " + data + "\nStatus: " + status);
            });
        },
        prefill: {
            'name': name,
            'email': email,
            'contact': phone,
        },
        'theme': {
            'color': '#4479BD'
        }
    };

    var rzp1 = new Razorpay(options);
    rzp1.open();
    // e.preventDefault();
});