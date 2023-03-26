/*==============================================================*/
// Klev Contact Form  JS
/*==============================================================*/
(function ($) {
    "use strict"; // Start of use strict
    $("#contactForm").validator().on("submit", function (event) {
        if (event.isDefaultPrevented()) {
            formError();
            submitMSG(false, "Please fill all the required form fields");
            // handle the invalid form...
        } else {
            var phone = $("#phone").val();
            if (!$.isNumeric(phone)) {
                formError();
                submitMSG(false,'Please enter a valid phone number');
            }
            // everything looks good!
            event.preventDefault();
            submitForm(phone);
        }
    });


    function submitForm(phone){
        // Initiate Variables With Form Content
        var name = $("#name").val();
        var email = $("#email").val();
        var msg_subject = $("#subject").val();
        var message = $("#message").val();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            type: "POST",
            url: "/contact-us/store",
            data: "name=" + name + "&email=" + email + "&subject=" + msg_subject + "&phone=" + phone + "&message=" + message,
            success : function(text){
                if (text == "success"){
                    formSuccess();
                } else {
                    console.log(text);
                    formError();
                    submitMSG(false,text);
                }
            }
        });
    }

    function formSuccess(){
        $("#contactForm")[0].reset();
        submitMSG(true, "Your Message has been Submitted!")
    }

    function formError(){
        $("#contactForm").removeClass().addClass('shake animated').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
            $(this).removeClass();
        });
    }

    function submitMSG(valid, msg){
        if(valid){
            var msgClasses = "h4 text-left tada animated text-success";
        } else {
            var msgClasses = "h4 text-left text-danger";
        }
        $("#msgSubmit").removeClass().addClass(msgClasses).text(msg);
    }
}(jQuery)); // End of use strict
