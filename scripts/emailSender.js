$("#form-contact-us").submit(function (event) {
    event.preventDefault();
    var req ;
    var name = document.getElementById("input-name").value;
    var email = document.getElementById("input-email").value;
    var number = document.getElementById("input-number").value;
    var request = document.getElementById("input-request").value;
    var description = document.getElementById("input-description").value;
    var response = grecaptcha.getResponse();

   
    if (name === "" || email === "" || number === "" || request === "" || description === "") {
        Swal.fire('Please fill in the form correctly!')
        return false;
    }      
    
    else if (response.length == 0) {
        Swal.fire('Please verify you are not a robot!')
        return false;
    }

    else if (!/^([a-zA-Z'. -]+)$/.test(name)) {
        Swal.fire('Invalid characters in Name!')
        return false;
    } else if (!/^([0-9]+)$/.test(number)) {
        Swal.fire('Invalid characters in Phone Number!')
        return false;
    } else if (request == "-- Select Request --") {
        Swal.fire('Please Choose your Request type!')
        return false;
    } else if (!/^([a-zA-Z0-9'. ]+)$/.test(description)) {
        Swal.fire('Invalid characters in Description!')
        return false;
    }
    // else if (!validateEmail(email)) {
    //     Swal.fire('Please enter a valid Email address!')
    //     return false;
    // }
    
     else {

        console.log(req);
        if (req) {
            req.abort();
        }
        var $form = $(this);

        var $inputs = $form.find("input, select, button, textarea");

        var serializedData = $form.serialize();

        $inputs.prop("disabled", true);

        request = $.ajax({
            url: "../scripts/emailSender.php",
            type: "post",
            data: serializedData
        });

        request.done(function (response, textStatus, jqXHR) {
           
            Swal.fire({
                title: '<strong>Thanks for fill the form!</strong>',
                icon: 'success',
                html: 'We will reach you ASAP',
                showCancelButton: true,
                focusConfirm: true,
                allowOutsideClick: false,
                confirmButtonColor: '#3FBFED',
                confirmButtonText: '<a href="../webpages/index.php" class="text-white text-decoration-none">Home</a>',
                confirmButtonAriaLabel: 'Thumbs up, great!',
                cancelButtonText: '<a href="contact_us.php" class="text-white text-decoration-none">Stay This Page</a>',
                cancelButtonAriaLabel: 'Thumbs down'
            })
        });

        request.fail(function (jqXHR, textStatus, errorThrown) {
            console.error(
                "The following error occurred: " +
                textStatus, errorThrown
            );
        });

        request.always(function () {
            $inputs.prop("disabled", false);
        });

    }

});