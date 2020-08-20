(function ($) {
    $(document).ready(function () {
        $('.content').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
            fade: true,
            asNavFor: '.content-nav'
        });

        $('.content-nav').slick({
            slidesToShow: 6,
            swipeToSlide: true,
            arrows: false,
            focusOnSelect: true,
            asNavFor: '.content'
        });

        $('.instant-quote-button').click(function() {
            $(this).hide();
            $(this).parent('.carousel-caption').addClass('open');
            $(this).parents(".carousel").carousel("pause");
            $(this).siblings("form").show();
        });

        $('.send_message').click(function (e) {
            e.preventDefault();

            var error = false;
            var form = $(this).parents("form");
            var rooms_list = form.find(".rooms_list");
            var package_list = form.find(".package_list");
            var other_rooms = form.find(".other_rooms");
            var btn = $(this);

            //Error messages
            form.find("input.required, textarea.required, select.required").each(function () {
                if ($(this).val().length == 0) {
                    error = true;
                    $(this).parent().addClass("has-error");
                    $(this).siblings(".error").fadeIn(500);
                } else {
                    $(this).parent().removeClass("has-error");
                    $(this).siblings(".error").fadeOut(500);
                }
            });

            if (rooms_list.length > 0) {
                var img_no_checked = 0;
                rooms_list.find("input[type=checkbox]:checked").each(function () {
                    img_no_checked++
                });

                if (img_no_checked == 0 && other_rooms.val().length == 0) {
                    error = true;
                    form.find('.img_check_error').fadeIn(500);
                } else {
                    form.find('.img_check_error').fadeOut(500);
                }
            }

            if (package_list.length > 0) {
                var package_no_checked = 0;
                package_list.find("input[type=checkbox]:checked").each(function () {
                    package_no_checked++
                });

                if (package_no_checked == 0) {
                    error = true;
                    form.find('.img_check_error').fadeIn(500);
                } else {
                    form.find('.img_check_error').fadeOut(500);
                }
            }

            if (error == false) {
                btn.attr({'disabled': 'true', 'value': 'Sending...'});
                btn.siblings(".error").fadeOut(500);

                $.post("/includes/email/send_email.php", form.serialize(), function (result) {
                    //Debug - coincides with the debug in the email php file
                            console.log(result);

                    if (result == 'sent') {
                        btn.siblings(".success").fadeIn(500);
                    } else {
                        btn.siblings("." + result).fadeIn(500);
                        btn.removeAttr('disabled').attr('value', 'Submit');
                    }
                });
            } else {
                btn.siblings(".validation").fadeIn(500);
            }
        });
    });
}(jQuery));