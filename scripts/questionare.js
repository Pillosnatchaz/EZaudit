$("#form-audit-questionare1").submit(function (event) {
    event.preventDefault();

    var req ;
    var $form = $(this);
    var $inputs = $form.find("input, select, button, textarea");


    //default value for checklist
    if (!$("#doc_permit_system").prop("checked")) {
        $("#doc_permit_system").val('No');
    } else {
        $("#doc_permit_system").val('permit to work exist');
    }

    if (!$("#doc_worker_SOSprocedure").prop("checked")) {
        $("#doc_worker_SOSprocedure").val('No');
    } else {
        $("#doc_worker_SOSprocedure").val('Proper scaffolding in place');
    }

    if (!$("#doc_worker_insurance").prop("checked")) {
        $("#doc_worker_insurance").val('No');
    } else {
        $("#doc_worker_insurance").val('Employers liability insurance is displayed');
    }

    if (!$("#doc_visitor_inducted").prop("checked")) {
        $("#doc_visitor_inducted").val('No');
    } else {
        $("#doc_visitor_inducted").val('All visitors or workers to site is inducted');
    }

    if (!$("#doc_firstaid_poster").prop("checked")) {
        $("#doc_firstaid_poster").val('No');
    } else {
        $("#doc_firstaid_poster").val('First aid poster is displayed');
    }

    if (!$("#doc_local_hospital_map").prop("checked")) {
        $("#doc_local_hospital_map").val('No');
    } else {
        $("#doc_local_hospital_map").val('Location map to a local hospital is available');
    }

    //section 3

    if (!$("#safeplace_stable_structure").prop("checked")) {
        $("#safeplace_stable_structure").val('No');
    } else {
        $("#safeplace_stable_structure").val('working structure is stable');

    }if (!$("#safeplace_workarea_lit").prop("checked")) {
        $("#safeplace_workarea_lit").val('No');
    } else {
        $("#safeplace_workarea_lit").val('working area and interior is lit properly');
    }

    if (!$("#safeplace_material_safestored").prop("checked")) {
        $("#safeplace_material_safestored").val('No');
    } else {
        $("#safeplace_material_safestored").val('Material is safely stored');
    }

    if (!$("#safeplace_hazard_spillage").prop("checked")) {
        $("#safeplace_hazard_spillage").val('No');
    } else {
        $("#safeplace_hazard_spillage").val('There is no trip hazard or spillage');
    }

    var formData = new FormData(this); // Automatically grabs all form inputs, including files


    // Basic client-side validation
    if ($("#input-auTitle").val() === "" || $("#input-auLocation").val() === "" || $("#signature").val() === "") {
        Swal.fire('Please fill in the form correctly!');
        return false;
    }  
    
    // Prevent duplicate requests
    if (req) req.abort();

    $inputs.prop("disabled", true);

    req = $.ajax({
        url: "../backend/questionare-inc.php",
        type: "POST",
        data: formData,
        processData: false, // Prevent jQuery from automatically transforming the FormData object
        contentType: false, // Needed to send multipart/form-data
    });

    req.done(function (response, textStatus, jqXHR) {
        Swal.fire({
            title: '<strong>Your form has been uploaded!</strong>',
            icon: 'success',
            html: 'Go to Dashboard to check the result',
            confirmButtonText: '<a href="../webpages/dashboard.php" class="text-white text-decoration-none">Dashboard</a>',
        });
    });

    req.fail(function (jqXHR, textStatus, errorThrown) {
        console.error("The following error occurred: " + textStatus, errorThrown);
    });

    req.always(function () {
        $inputs.prop("disabled", false);
    });
    
});