$(function() {
    var base_url = $('body').data('base-url');
    // Burger Toggle
    const body = $('body');
    var status = 1;
    $('.menu-burger').click(function() {
        body.toggleClass('nav-responsive');
        if (status == 1) { 
            body.css("overflowY", "hidden"); 
            status = 0;
        } else {
            body.css("overflowY", "scroll"); 
            console.log(0);
            status = 1;
        }
    });
    // Login Event Code
    $('#eventLoginCodeForm').submit(function(e) {
        e.preventDefault();
        var fd = new FormData(this);
        $.ajax({
            url: base_url + "users/Users/login_code",
            dataType: 'text',
            cache: false,
            contentType: false,
            processData: false,
            data: fd,
            type: 'POST',
            beforeSend:function() {
                $('#btnSubmit').html('<i class="fas fa-sync fa-spin"></i>');
            },
            success: function (result) {
                $('#btnSubmit').html('');
                $('.error-container').show(0);
                var result = JSON.parse(result);
                if(result.status == 200) {
                    $('.error-container').html(result.message).delay(2000).hide(0);
                    setTimeout(function() {
                        window.location.href = base_url + "users/login";
                    },1000);
                } else {
                    $('.error-container').html(result.message).delay(2000).hide(0);
                    $('.error').text('');
                }
            }
        });
    });

    // Register User
    $('#registerForm').submit(function(e) {
        e.preventDefault();
        var fd = new FormData(this);
        fd.append('account', '');
        $.ajax({
            url: "Users/register_user",
            dataType: 'text',
            cache: false,
            contentType: false,
            processData: false,
            data: fd,
            type: 'POST',
            beforeSend:function() {
                $('#btnSubmit').html('<i class="fas fa-sync fa-spin"></i>');
            },
            success: function (result) {
                $('#btnSubmit').html('Register');
                var result = JSON.parse(result);
                if(result.status == 200) {
                    toastr.success(result.message);
                } else {
                    toastr.warning(result.message);
                }
            }
        });
    });


});
