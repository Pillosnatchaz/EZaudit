$("#form-login").submit(function (event) {
    event.preventDefault();
    var req ;
    var auID = document.getElementById("input-auID").value;
    var email = document.getElementById("input-email").value;
    var pwd = document.getElementById("input-Password").value;
    var response = grecaptcha.getResponse();

   
    if (auID === "" || email === "" || pwd === "") {
        Swal.fire('Please fill in the form correctly!')
        return false;
    }      
    
    else if (response.length == 0) {
        Swal.fire('Please verify you are not a robot!')
        return false;
    }

    else if (!/^([0-9]+)$/.test(auID)) {
        Swal.fire('Invalid characters in Name!')
        return false;
    } 
    
    
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
            url: "../backend/login-inc.php",
            type: "post",
            data: serializedData
        });

        request.done(function (response, textStatus, jqXHR) {
           
            Swal.fire({
                title: '<strong>Login Successfully!</strong>',
                icon: 'success',
                html: 'Proceed to dashboard by clicking the button below:',
                focusConfirm: true,
                allowOutsideClick: false,
                confirmButtonColor: '#3FBFED',
                confirmButtonText: '<a href="../webpages/dashboard.php" class="text-white text-decoration-none">Dashboard</a>',
            }) 
        });

        // request.done(function (response, textStatus, jqXHR) {
        //     try {
        //         // Parse the response (if the server returns JSON)
        //         var res = JSON.parse(response);

        //         if (res.status === "success") {
        //             Swal.fire({
        //                 title: '<strong>Login Successful!</strong>',
        //                 icon: 'success',
        //                 html: 'Redirecting to your dashboard...',
        //                 timer: 3000,
        //                 showConfirmButton: false
        //             }).then(() => {
        //                 // Redirect to the dashboard after 3 seconds
        //                 window.location.href = "../webpages/dashboard.php";
        //             });
        //         } else {
        //             Swal.fire('Login Failed!', res.message, 'error');
        //         }
        //     } catch (e) {
        //         Swal.fire('An error occurred!', 'Please try again later.', 'error');
        //     }
        // });

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