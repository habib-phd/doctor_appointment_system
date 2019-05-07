function validatePost() {
    var flg = 0;
    var numberRegex = /^[+-]?\d+(\.\d+)?([eE][+-]?\d+)?$/;
    if ($("#email_appointment").is(":visible") == true) {
        if(numberRegex.test($('#email_appointment').val()))
        {
            if($('#email_appointment').val().length < 11 || $('#email_appointment').val().length > 14){
                $("#email_appointment").addClass('invalid');
                $("#error_email").html('Invalid mobile number');
                if (flg == 0) {
                    flg += 1;
                }
            }else{
                $("#patient_phone").val($('#email_appointment').val());
            }
        }else{
            if ($.trim($('#email_appointment').val()) == "") {
                $("#email_appointment").addClass('invalid');
                $("#error_email").html('Email is required');
                if (flg == 0) {
                    flg += 1;
                }
            } else {
                if (!valid_a_email($.trim($('#email_appointment').val()))) {
                    $("#email_appointment").addClass('invalid');
                    $("#error_email").html('Invalid email address');
                    if (flg == 0) {
                        flg += 1;
                    }
                } else {
                    $("#error_email").html('');
                    $("#email_appointment").removeClass('invalid');
                }
            }
        }
    }
    if ($("#user_name").is(":visible") == true) {
        if ($.trim($('#user_name').val()) == "") {
            $("#user_name").addClass('invalid');
            $("#error_name").html('Name is required');
            if (flg == 0) {
                flg += 1;
            }
        } else {
            var name = $('#user_name').val();
            if (!validate_name($.trim($('#user_name').val())) || name.length > 30) {
                $("#error_name").html('Invalid name enter only characters and upto 30 characters');
                if (flg == 0) {
                    flg += 1;
                }
            } else {
                $("#user_name").removeClass('invalid');
                $("#error_name").html('');
            }
        }
    }
    if ($(".appointment-from #patient_phone").is(":visible") == true && $(".appointment-from #patient_phone").not(':hidden') ) {
        if ($.trim($('.appointment-from #patient_phone').val()) == "") {
            $(".appointment-from #patient_phone").addClass('invalid');
            $("#error_phone").html('Please enter phone number');
            if (flg == 0) {
                flg += 1;
            }
        } else {
            var phone_number = $('.appointment-from #patient_phone').val();
            if (!phonenumber($.trim($('.appointment-from #patient_phone').val())) || phone_number.length > 16) {
                $("#error_phone").html('Please enter a valid number');
                $(".appointment-from #patient_phone").addClass('invalid');
                if (flg == 0) {
                    flg += 1;
                }
            } else {
                $("#error_phone").html('');
                $(".appointment-from #patient_phone").removeClass('invalid');
            }
        }
    }
    if ($("#user_pass").is(":visible") == true) {
        var paswrd = $('#user_pass').val();
        if ($.trim($('#user_pass').val()) == "" || paswrd.length > 16) {
            $("#user_pass").addClass('invalid');
            $("#error_pass").html('Please enter password upto 16 characters');
            if (flg == 0) {
                flg += 1;
            }
        } else {
            $("#error_pass").html('');
            $("#user_pass").removeClass('invalid');
        }
    }
    if (flg == 0) {
        return true;
    } else {
        return false;
    }
}

$(function () {
    $('#modalGetDemo, #demo-modal').on('shown.bs.modal', function (e) {
        $('#user_name').val('');
        $('#user_phone').val('');
        $('#user_city').val('');
    });
    $('#signup-modal').on('shown.bs.modal', function (e) {
        $('#error, #error_doctor').children('p').replaceWith('');
        $('#signupsubmit, #signupsubmit_doctor').removeAttr('disabled');
        $('#signup_name_doctor').val('');
        $('#phone_doctor').val('');
        $('#signup_email_doctor').val('');
        $('#signup_password_doctor').val('');
        $('#signup_specialization').prop('selectedIndex', 0);
        $('#signup_specialization_name').val('');
        $('#place_name').val('');
        $('#signup_city').val('');
    });

    $('#signup_specialization').on('change', function() {
        if($(this).find('option:selected').text() != '') {
            $('#signup_specialization_name').val($(this).find('option:selected').text());
        }
    });

    $('.scroll').click(function () {
        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            if (target.length) {
                $('html,body').animate({
                    scrollTop: target.offset().top
                }, 1000);
                return false;
            }
        }
    });

    $('#doctorSignUpCheck').change(function () {
        if (this.checked)
            $('#doctorSignUpForm').fadeIn('slow');
        else
            $('#doctorSignUpForm').fadeOut('slow');
    });

    $('#forgot-password').click(function () {
        $('#login-form').hide('slow');
        $('#forgot-pasword-data').show('slow');
    });

    $('#remember-password').click(function () {
        $('#forgot-pasword-data').hide('slow');
        $('#login-form').show('slow');
    });

}); // end of document ready function   

function validatelogin() {
    var flg = 0;
    var btnLogin = $('.js-btn-login');
    btnLogin.attr('disabled', 'disabled');
    btnLogin.addClass('loading');
    var numberRegex = /^[+-]?\d+(\.\d+)?([eE][+-]?\d+)?$/;
    if(numberRegex.test($('#email').val())) {
        if($('#email').val().length < 11 || $('#email').val().length > 14){
            $("#email").addClass('invalid');
            $("#login_error_email").html('Invalid mobile number');
            if (flg == 0) {
                flg += 1;
            }
        }
    } else {
        if ($.trim($('#email').val()) == "") {
            $("#email").addClass('invalid');
            $("#login_error_email").html('Please enter email');
            if (flg == 0) {
                flg += 1;
            }
        } else {
            if (!valid_a_email($.trim($('#email').val()))) {
                $("#email").addClass('invalid');
                $("#login_error_email").html('Invalid email address');
                if (flg == 0) {
                    flg += 1;
                }
            } else {
                $("#email").removeClass('invalid');
                $("#login_error_email").html('');
            }
        }
    }
    if ($.trim($('#login_password').val()) == "") {
        $("#login_password").addClass('invalid');
        $("#login_password_error").html('Please enter password');
        if (flg == 0) {
            flg += 1;
        }
    } else {
        $("#login_password_error").html('');
        $("#login_password").removeClass('invalid');
    }
    if (flg == 0) {
        return true;
    } else {
        btnLogin.removeAttr("disabled");
        btnLogin.removeClass('loading');
        return false;
    }
}

function validatesignup() {
    var flg = 0;
    if ($.trim($('#signup_name').val()) == "") {
        $("#signup_name").addClass('invalid');
        $("#signup_error_name").html('Please enter Name');
        if (flg == 0) {
            flg += 1;
        }
    } else {
        var name = $('#signup_name').val();
        if (!validate_name($.trim($('#signup_name').val())) || name.length > 30) {
            $("#signup_name").addClass('invalid');
            $("#signup_error_name").html('Invalid name enter only characters and upto 30 characters');
            if (flg == 0) {
                flg += 1;
            }
        } else {
            $("#signup_name").removeClass('invalid');
            $("#signup_error_name").html('');
        }
    }
    var pass = $('#signup_password').val();
    if ($.trim($('#signup_password').val()) == "" || pass.length > 16) {
        $("#signup_password").addClass('invalid');
        $("#signup_password_error").html('Please enter password upto 16 charaters');
        flg += 1;
    } else {
        $("#signup_password_error").html('');
        $("#signup_password").removeClass('invalid');
    }
    /*if ($.trim($('#retype-password').val()) == "") {
        $("#retype-password").addClass('invalid');
        $("#signup_error_repeat_pass").html('Please repeat password');
        if (flg == 0) {
            flg += 1;
        }
    } else {
        $("#signup_error_repeat_pass").html('');
        $("#retype-password").removeClass('invalid');
    }*/
    var numberRegex = /^[+-]?\d+(\.\d+)?([eE][+-]?\d+)?$/;
    if(numberRegex.test($('#signup_email').val())) {
        if($('#signup_email').val().length < 11 || $('#signup_email').val().length > 14){
            $("#signup_email").addClass('invalid');
            $("#signup_error_email").html('Invalid mobile number');
            if (flg == 0) {
                flg += 1;
            }
        }
    } else {
        if ($.trim($('#signup_email').val()) == "") {
            $("#signup_email").addClass('invalid');
            $("#signup_error_email").html('Email or mobile number is required');
            if (flg == 0) {
                flg += 1;
            }
        } else {
            if (!valid_a_email($.trim($('#signup_email').val()))) {
                $("#signup_error_email").html('Invalid email or mobile number');
                if (flg == 0) {
                    flg += 1;
                }
            } else {
                $("#signup_error_email").html('');
                $("#signup_email").removeClass('invalid');
            }
        }
    }
    if ($.trim($('input#phone').val()) == "") {
        $("input#phone").addClass('invalid');
        $("#signup_error_phone").html('Please enter phone number');
        if (flg == 0) {
            flg += 1;
        }
    } else {
        var phone_number = $('input#phone').val();
        if (!phonenumber_signup($.trim($('input#phone').val())) || phone_number.length > 16) {
            $("input#phone").addClass('invalid');
            $("#signup_error_phone").html('Please enter a valid number upto 16 digits');
            if (flg == 0) {
                flg += 1;
            }
        } else {
            $("#signup_error_phone").html('');
            $("#phone").removeClass('invalid');
        }
    }
    if (flg == 0) {
        return true;
    } else {
        return false;
    }
}

// $('#doctors-signup').find('input').each(function() {
//     $(this).on('keyup', function() {
//         validatesignup_doctorperson();
//     });
// });

function validatesignup_doctorperson() {
    var flg = 0;
	var name = $.trim($('#signup_name_doctor').val());
    if (name.length < 3 || !validate_name(name) || name.length > 30) {
        $("#signup_name_doctor").addClass('invalid');
		$("#signup_error_name_doctor").html('Invalid name! Enter proper name with upto 30 characters');
        flg += 1;
    } else {
		$("#signup_name_doctor").removeClass('invalid');
		$("#signup_error_name_doctor").html('');
    }
    // Password
    var doctor_pass = $.trim($('#signup_password_doctor').val());
    if (doctor_pass.length<4 || doctor_pass.length > 16) {
        $("#signup_password_doctor").addClass('invalid');
        $("#signup_password_error_doctor").html('Please enter a password upto 16 characters');
        flg += 1;
    } else {
        $("#signup_password_error_doctor").html('');
        $("#signup_password_doctor").removeClass('invalid');
    }
    /*if ($.trim($('#retype-password_doctor').val()) && $.trim($('#signup_password_doctor').val())) {
        if ($.trim($('#retype-password_doctor').val()) != $.trim($('#signup_password_doctor').val())) {
            $("#signup_error_repeat_pass_doctor").html('Passwords dont match');
            $("#retype-password_doctor").addClass('invalid');
            if (flg == 0) {
                flg += 1;
            }
        } else {
            $("#signup_error_repeat_pass_doctor").html('');
            $("#retype-password_doctor").removeClass('invalid');
        }
    }*/
    // Email
    if ($.trim($('#signup_email_doctor').val()) == "") {
        $("#signup_email_doctor").addClass('invalid');
        $("#signup_error_email_doctor").html('Email is required');
        flg = 1;
    } else {
        if (!valid_a_email($.trim($('#signup_email_doctor').val()))) {
            $("#signup_error_email_doctor").html('Invalid email address');
            flg = 1;
        } else {
            $("#signup_error_email_doctor").html('');
            $("#signup_email_doctor").removeClass('invalid');
        }
    }
    // Phone
	var phone = $.trim($('#phone_doctor').val());
    if (phone == "" || !phonenumber_signup(phone) || phone.length > 16) {
        $("#phone_doctor").addClass('invalid');
        $("#signup_error_phone_doctor").html('Please enter valid phone number');
        flg = 1;
    } else {
		$("#signup_error_phone_doctor").html('');
		$("#phone_doctor").removeClass('invalid');
    }
    //if($('#doctorSignUpCheck').prop('checked')) {
    if ($.trim($('#signup_education').val()) == "" || !validate_education($.trim($('#signup_education').val()))) {
        $("#signup_education").addClass('invalid');
        $("#signup_error_education").html('Please enter educational details');
        flg = flag+1;
    } else {
		$("#signup_error_education").html('');
		$("#signup_education").removeClass('invalid');
    }
    //}
    //if($('#doctorSignUpCheck').prop('checked')) {
    // Place
    if ($.trim($('#place_name').val()) == "") {
        $("#place_name").addClass('invalid');
        $("#signup_error_clinic").html('Please enter your practice location');
        flg = 1;
    } else {
        $("#signup_error_clinic").html('');
        $("#place_name").removeClass('invalid');
    }
    //}
    //if($('#doctorSignUpCheck').prop('checked')) {
    // City
    if ($.trim($('#signup_city').val()) == "") {
        $("#signup_city").addClass('invalid');
        $("#signup_error_city").html('Please enter your city');
        flg = 1;
    } else {
        $("#signup_error_city").html('');
        $("#signup_city").removeClass('invalid');
    }
    //}
    //if($('#doctorSignUpCheck').prop('checked')) {
	/* var pmdc_val = $('#signup_pmdc').val();
    if (pmdc_val.length > 0) {
        if (!pmdc_validate($.trim(pmdc_val)) || pmdc_val.length > 15) {
            $("#signup_pmdc").addClass('invalid');
            $("#signup_error_pmdc").html('PMDC number must be less than 15, and not all numeric and contain a dash');

        } else {
            $("#signup_error_pmdc").html('');
            $("#signup_pmdc").removeClass('invalid');
        }
    }*/
    //}
    if (flg == 0) {
        return true;
    } else {
        return false;
    }
}

function validate_name(name) {
    filter = /^[a-zA-Z]+(([\'\,\.\- ][a-zA-Z ])?[a-zA-Z\/]*)*$/;
    if (!(filter.test(name))) {
        return false;
    } else {
        return true;
    }
}

function validate_update_user_info() {
    var flg = 0;
    if ($.trim($('#user_nicename').val()) == "") {
        $("#user_nicename").addClass('invalid');
        $("#update_name_error").html('Please enter Name');
        if (flg == 0) {
            flg += 1;
        }
    } else {
        var name = $('#user_nicename').val();
        if (!validate_name($.trim($('#user_nicename').val())) || name.length > 32) {
            $("#user_nicename").addClass('invalid');
            $("#update_name_error").html('Invalid name enter only characters and upto 30 characters');
            if (flg == 0) {
                flg += 1;
            }
        } else {
            $("#user_nicename").removeClass('invalid');
            $("#update_name_error").html('');
        }
    }
    if ($.trim($('#user_phone').val()) == "") {
        $("#user_phone").addClass('invalid');
        $("#update_phone_error").html('Please enter phone number');
        if (flg == 0) {
            flg += 1;
        }
    } else {
        var phone_number = $('#user_phone').val();
        if (!phonenumber_signup($.trim($('#user_phone').val())) || phone_number.length > 16) {
            $("#user_phone").addClass('invalid');
            $("#update_phone_error").html('Please enter a valid number upto 16 digits');
            if (flg == 0) {
                flg += 1;
            }
        } else {
            $("#update_phone_error").html('');
            $("#user_phone").removeClass('invalid');
        }
    }
    if ($("#pmdc_id").length > 0) {
        var pmdc_val = $('#pmdc_id').val();
        if (pmdc_val.length > 0) {
            if (!pmdc_validate($.trim(pmdc_val)) || pmdc_val.length > 15) {
                $("#pmdc_id").addClass('invalid');
                $("#error_pmdc_update").html('PMDC number must be less than 15, and not all numeric and contain a dash');
                if (flg == 0) {
                    flg += 1;
                }
            } else {
                $("#error_pmdc_update").html('');
                $("#pmdc_id").removeClass('invalid');
            }
        }
    }
    if (flg == 0) {
		return true;
    } else {
		return false;
    }
}

function valid_a_email(email) {
    filter = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    if (!(filter.test(email))) {
        return false;
    } else {
        return true;
    }
}

function phonenumber(phone) {
    //filter = /^((\+92)|(0092)|(055))-{0,1}\d{3}-{0,1}\d{7}$|^\d{11}$|^\d{4}-\d{7}$/;
    //filter = /^((\+92)|0)[.\- ]?[0-9][.\- ]?[0-9][.\- ]?[0-9]$/;
    filter = /^[\d\s]+$/;
    if (!(filter.test(phone))) {
        return false;
    } else {
        return true;
    }
}

function phonenumber_signup(phone) {
    filter = /^[\d\s]+$/;
    if (!(filter.test(phone))) {
        return false;
    } else {
        return true;
    }
}

function pmdc_validate(pmdc) {
    pmd_filter = /^[a-zA-Z0-9\-]+$/;
    if (!(pmd_filter.test(pmdc))) {
        return false;
    } else {
        return true;
    }
}

function validate_education(education) {
    filter = /^[a-zA-Z]+(([\'\,\.\-\][a-zA-Z ])?[a-zA-Z]*)*$/;
    if (!(filter.test(education))) {
        return false;
    } else {
        return true;
    }
}

function validate_payment_submit() {
    var flg = 0;
    if ($.trim($('#total-fee').val()) == "") {
        $("#total-fee").addClass('invalid');
        $("#total-fee_error").html('Please enter Total amount');
        if (flg == 0) {
            flg += 1;
        }
    } else {
        var total_fee = $('#total-fee').val();
        if (total_fee < 0) {
            $("#total-fee").addClass('invalid');
            $("#total-fee_error").html('Fee Charges canot be less that 0 please enter correct amount');
            if (flg == 0) {
                flg += 1;
            }
        } else {
            $("#total-fee_error").html('');
            $("#total-fee").removeClass('invalid');
        }
    }
    var discount = $('#discount').val();
    if (discount < 0) {
        $("#discount").addClass('invalid');
        $("#discount_error").html('Discount canot be less that 0 please enter correct amount');
        if (flg == 0) {
            flg += 1;
        }
    } else {
        $("#discount_error").html('');
        $("#discount").removeClass('invalid');
    }
    if ($.trim($('#amount_paid').val()) == "") {
        $("#amount_paid").addClass('invalid');
        $("#amount_paid_error").html('Please enter amount paid');
        if (flg == 0) {
            flg += 1;
        }
    } else {
        var amount_paid = $('#amount_paid').val();
        if (amount_paid < 0) {
            $("#amount_paid").addClass('invalid');
            $("#amount_paid_error").html('Amount paid canot be less that 0 please enter correct amount');
            if (flg == 0) {
                flg += 1;
            }
        } else {
            $("#amount_paid_error").html('');
            $("#amount_paid").removeClass('invalid');
        }
    }
    var balance = $('#balance').val();
    if (balance < 0) {
        $("#balance").addClass('invalid');
        $("#balance_error").html('Balance canot be less that 0 please enter correct amount');
        if (flg == 0) {
            flg += 1;
        }
    } else {
        $("#balance_error").html('');
        $("#balance").removeClass('invalid');
    }
    var total = $('#total').val();
    if (total < 0) {
        $("#total").addClass('invalid');
        $("#total_error").html('Total amount canot be less that 0 please enter correct amount');
        if (flg == 0) {
            flg += 1;
        }
    } else {
        $("#total _error").html('');
        $("#total").removeClass('invalid');
    }
    if (flg == 0) {
        return true;
    } else {
        return false;
    }
}

function validate_payment_update() {
    var flg = 0;
    if ($.trim($('#edit_total-fee').val()) == "") {
        $("#edit_total-fee").addClass('invalid');
        $("#edit_total-fee_error").html('Please enter Total amount');
        if (flg == 0) {
            flg += 1;
        }
    } else {
        var total_fee = $('#edit_total-fee').val();
        if (total_fee < 0) {
            $("#edit_total-fee").addClass('invalid');
            $("#edit_total-fee_error").html('Fee Charges canot be less that 0 please enter correct amount');
            if (flg == 0) {
                flg += 1;
            }
        } else {
            $("#edit_total-fee_error").html('');
            $("#edit_total-fee").removeClass('invalid');
        }
    }
    var discount = $('#edit_discount').val();
    if (discount < 0) {
        $("#edit_discount").addClass('invalid');
        $("#edit_discount_error").html('Discount canot be less that 0 please enter correct amount');
        if (flg == 0) {
            flg += 1;
        }
    } else {
        $("#edit_discount_error").html('');
        $("#edit_discount").removeClass('invalid');
    }
    if ($.trim($('#edit_amount_paid').val()) == "") {
        $("#edit_amount_paid").addClass('invalid');
        $("#edit_amount_paid_error").html('Please enter amount paid');
        if (flg == 0) {
            flg += 1;
        }
    } else {
        var amount_paid = $('#edit_amount_paid').val();
        if (amount_paid < 0) {
            $("#edit_amount_paid").addClass('invalid');
            $("#edit_amount_paid_error").html('Amount paid canot be less that 0 please enter correct amount');
            if (flg == 0) {
                flg += 1;
            }
        } else {
            $("#edit_amount_paid_error").html('');
            $("#edit_amount_paid").removeClass('invalid');
        }
    }
    var balance = $('#edit_balance').val();
    if (balance < 0) {
        $("#edit_balance").addClass('invalid');
        $("#edit_balance_error").html('Balance canot be less that 0 please enter correct amount');
        if (flg == 0) {
            flg += 1;
        }
    } else {
        $("#edit_balance_error").html('');
        $("#edit_balance").removeClass('invalid');
    }
    var total = $('#edit_total').val();
    if (total < 0) {
        $("#edit_total").addClass('invalid');
        $("#edit_total_error").html('Total amount canot be less that 0 please enter correct amount');
        if (flg == 0) {
            flg += 1;
        }
    } else {
        $("#edit_total _error").html('');
        $("#edit_total").removeClass('invalid');
    }
    if ($.trim($('#edit_payment_note').val()) == "") {
        $("#edit_payment_note").addClass('invalid');
        $("#edit_payment_note_error").html('Please enter Total amount');
        if (flg == 0) {
            flg += 1;
        }
    } else {
        $("#edit_payment_note").removeClass('invalid');
        $("#edit_payment_note_error").html('');
    }
    if (flg == 0) {
        return true;
    } else {
        return false;
    }
}

function validate_order() {
    var flg = 0;
    if ($.trim($('#delivery_name').val()) == "") {
        $("#delivery_name").addClass('invalid');
        $("#delivery_name_error").html('Please enter Name');
        if (flg == 0) {
            flg += 1;
        }
    } else {
        var name = $('#delivery_name').val();
        if (!validate_name($.trim($('#delivery_name').val())) || name.length > 30) {
            $("#delivery_name").addClass('invalid');
            $("#delivery_name_error").html('Invalid name enter');
            if (flg == 0) {
                flg += 1;
            }
        } else {
            $("#delivery_name").removeClass('invalid');
            $("#delivery_name_error").html('');
        }
    }
    if ($.trim($('#order_phone').val()) == "") {
        $("#order_phone").addClass('invalid');
        $("#order_phone_error").html('Please enter phone number');
        if (flg == 0) {
            flg += 1;
        }
    } else {
        var phone_number = $('#order_phone').val();
        if (!phonenumber($.trim($('#order_phone').val())) || phone_number.length > 16 || phone_number.length < 11) {
            $("#order_phone_error").html('Please enter a valid number');
            $("#order_phone").addClass('invalid');
            if (flg == 0) {
                flg += 1;
            }
        } else {
            $("#order_phone_error").html('');
            $("#order_phone").removeClass('invalid');
        }
    }
    if (flg == 0) {
        return true;
    } else {
        return false;
    }
}

function validate_order_labs() {
    var flg = 0;
    if ($.trim($('#lab_patient_name').val()) == "") {
        $("#lab_name").addClass('invalid');
        $("#lab_name_error").html('Please enter Name');
        if (flg == 0) {
            flg += 1;
        }
    } else {
        var name = $('#lab_patient_name').val();
        if (!validate_name($.trim($('#lab_patient_name').val())) || name.length > 30) {
            $("#lab_name").addClass('invalid');
            $("#lab_name_error").html('Invalid name enter');
            if (flg == 0) {
                flg += 1;
            }
        } else {
            $("#lab_patient_name").removeClass('invalid');
            $("#lab_name_error").html('');
        }
    }
    if ($.trim($('#lab_patient_phone').val()) == "") {
        $("#lab_patient_phone").addClass('invalid');
        $("#lab_phone_error").html('Please enter phone number');
        if (flg == 0) {
            flg += 1;
        }
    } else {
        var phone_number = $('#lab_patient_phone').val();
        if (!phonenumber($.trim($('#lab_patient_phone').val())) || phone_number.length > 16 || phone_number.length < 11) {
            $("#lab_phone_error").html('Please enter a valid number');
            $("#lab_patient_phone").addClass('invalid');
            if (flg == 0) {
                flg += 1;
            }
        } else {
            $("#lab_phone_error").html('');
            $("#lab_patient_phone").removeClass('invalid');
        }
    }
    if ($.trim($('#city_lab').val()) == "") {
        $("#city_lab").addClass('invalid');
        $("#lab_city_error").html('City is required');
        if (flg == 0) {
            flg += 1;
        }
    } else {
        $("#city_lab").removeClass('invalid');
        $("#lab_city_error").html('');

    }
    if (flg == 0) {
        return true;
    } else {
        return false;
    }
}
