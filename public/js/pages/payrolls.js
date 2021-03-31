"use strict";

// Class definition
var KTContactsAdd = function () {
    // Base elements
    var wizardEl;
    var formEl;
    var validator;
    var wizard;
    var avatar;


    let messages = {
        'ar': {
            "please fill the required data":"الرجاء مليء الحقول المطلوبة",
            "The operation has been done successfully !":"لقد تمت العملية بنجاح !",
            "Attendance and leave have been recorded":"لقد تمت عملية تسجيل حضورك وانصرافك",
        }
    };

    let locator = new KTLocator(messages);

    // Private functions
    var initWizard = function () {
        // Initialize form wizard
        wizard = new KTWizard('kt_contacts_add', {
            startStep: 1, // initial active step number
            clickableSteps: true  // allow step clicking
        });

        // Validation before going to next page
        wizard.on('beforeNext', function(wizardObj) {
            if (validator.form() !== true) {
                wizardObj.stop();  // don't go to the next step
            }
        })

        // Change event
        wizard.on('change', function(wizard) {
            KTUtil.scrollTop();
        });
    }

    var initValidation = function() {
        validator = formEl.validate({
            // Validate only visible fields
            ignore: ":hidden",

            // Validation rules
            rules: {
                date: {
                    required: true
                },
            },

            // Display error
            invalidHandler: function(event, validator) {
                KTUtil.scrollTop();

                swal.fire({
                    "title": "",
                    "text": locator.__("please fill the required data"),
                    "type": "error",
                    "buttonStyling": false,
                    "confirmButtonClass": "btn btn-brand btn-sm btn-bold"
                });
            },

            // Submit valid form
            submitHandler: function (form) {

            }
        });
    }

    var initSubmit = function() {
        var btn = formEl.find('[data-ktwizard-type="action-submit"]');

        btn.on('click', function(e) {
            e.preventDefault();

            if (validator.form()) {
                // See: src\js\framework\base\app.js
                KTApp.progress(btn);
                //KTApp.block(formEl);

                // See: http://malsup.com/jquery/form/#ajaxSubmit
                formEl.ajaxSubmit({
                    success: function(response) {
                        KTApp.unprogress(btn);
                        //KTApp.unblock(formEl);
                        swal.fire({
                            "title": "",
                            "text": locator.__("The operation has been done successfully !"),
                            "type": "success",
                            "confirmButtonClass": "btn btn-secondary"
                        });

                    }
                });
            }
        });
    }

    var initAvatar = function() {
        avatar = new KTAvatar('kt_contacts_add_avatar');
    }

    return {
        // public functions
        init: function() {
            formEl = $('#kt_contacts_add_form');

            initWizard();
            initValidation();
            initSubmit();
            initAvatar();
        }
    };
}();

jQuery(document).ready(function() {
    var timeDisplay = $("#time");
    function refreshTime() {
        var dateString = new Date().toLocaleString("en-US", {timeZone: "Asia/Riyadh"});
        var formattedString = dateString.replace(", ", " - ");
        timeDisplay.val(formattedString);
    }
    setInterval(refreshTime, 1000);
    $('.kt-selectpicker').selectpicker();

    KTContactsAdd.init();
});
