/**
 * @author Author "Mohamed Elsayed"
 * @author Author Email "me@mohamedelsayed.net"
 * @link http://www.mohamedelsayed.net
 * @copyright Copyright (c) 2019 Programming by "http://www.mohamedelsayed.net"
 */
//var contactformflag;
jQuery(document).ready(function () {
    jQuery("form#contact-form").submit(function (e) {
        e.preventDefault();
    });
    jQuery("#contact-form input, #contact-form textarea").on("change paste keyup", function () {
        validate_required_input(jQuery(this));
    });
//    jQuery('a').each(function () {
//        var a = new RegExp('/' + window.location.host + '/');
//        if (!a.test(this.href)) {
//            jQuery(this).attr('target', '_blank');
//        }
//    });
//    jQuery().UItoTop({easingType: 'easeOutQuart'});
//    jQuery("header nav ul li a").click(function () {
//        jQuery("#ftheme").removeClass('in');
//    });
});
function validate_contact_us_form() {
    var custom_form_error = 0;
    var focused = 0;
//    validateNotEmptyCaptcha(jQuery('#g-recaptcha-response'));
    jQuery('#contact-form input, #contact-form textarea').each(function () {
        validate_required_input(jQuery(this));
    });
    jQuery('#contact-form input, #contact-form textarea').each(function () {
        if (jQuery(this).hasClass('error')) {
            custom_form_error = 1;
            if (focused == 0) {
                focused = 1;
                jQuery(this).focus();
            }
        }
    });
//    if (contactformflag == 1) {
    if (custom_form_error === 0) {
        jQuery.ajax({
            url: base_url + '/contact-us-form',
            type: 'POST',
            data: jQuery('form#contact-form').serialize(),
            async: false,
            beforeSend: function () {
                jQuery('#sendmessage').hide();
                jQuery('#errormessage').hide();
                jQuery('#sendmail_ajaxLoading').show();
            },
            success: function (result) {
                error = result.error;
                jQuery('#sendmail_ajaxLoading').hide();
                if (error == 0) {
                    jQuery('#sendmessage').show();
                } else {
                    jQuery('#errormessage').show();
                }
                jQuery("form#contact-form")[0].reset();
            }
        });
    }
//    } else {
//        return false;
//    }
}
function validate_required_input(obj) {
    var val = obj.val();
    var input_name = obj.attr('name');
    var error = 0;
    if (jQuery.trim(val).length !== 0) {
        error = 0;
    } else {
        error = 1;
    }
    if (input_name == 'email') {
        if (!isValidEmailAddress(val)) {
            error = 1;
        } else {
            error = 0;
        }
    }
    if (error == 0) {
        if (obj.hasClass('error')) {
            obj.removeClass("error");
        }
    } else {
        if (!(obj.hasClass('error'))) {
            obj.addClass("error");
        }
    }
}
function isValidEmailAddress(emailAddress) {
    var pattern = new RegExp(/^((([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+(\.([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+)*)|((\x22)((((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(([\x01-\x08\x0b\x0c\x0e-\x1f\x7f]|\x21|[\x23-\x5b]|[\x5d-\x7e]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(\\([\x01-\x09\x0b\x0c\x0d-\x7f]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))))*(((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(\x22)))@((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?$/i);
    return pattern.test(emailAddress);
}
function isNumeric(n) {
    return !isNaN(parseFloat(n)) && isFinite(n);
}
//function validateNotEmptyCaptcha(obj) {
//    var x = obj.val();
//    if (x == '') {
//        jQuery('.g-recaptcha').addClass('me_error');
//        contactformflag = 0;
//    } else {
//        jQuery('.g-recaptcha').removeClass('me_error');
//        contactformflag = 1;
//    }
//}