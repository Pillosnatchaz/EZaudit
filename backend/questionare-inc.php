<?php

session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $auTitle = $_POST["auTitle"];
    $auLocation = $_POST["auLocation"];
    $auDOA = $_POST["auDOA"];
    $auAU = $_POST["auAU"];

    //section 2
    $checklist1 = isset($_POST["doc_permit_system"]) ? $_POST["doc_permit_system"] : 'NO permit to work';
    $checklist2 = isset($_POST["doc_worker_SOSprocedure"]) ? $_POST["doc_worker_SOSprocedure"] : 'NO proper scaffolding	';
    $checklist3 = isset($_POST["doc_worker_insurance"]) ? $_POST["doc_worker_insurance"] : 'NO employer insurance	';
    $checklist4 = isset($_POST["doc_visitor_inducted"]) ? $_POST["doc_visitor_inducted"] : 'NO enterance log	';
    $checklist5 = isset($_POST["doc_firstaid_poster"]) ? $_POST["doc_firstaid_poster"] : 'NO first aid poster	';
    $checklist6 = isset($_POST["doc_local_hospital_map"]) ? $_POST["doc_local_hospital_map"] : 'NO map to hospital	';

    //section 3
    $checklist7 = isset($_POST["safeplace_stable_structure"]) ? $_POST["safeplace_stable_structure"] : 'NOT safe	';
    $checklist8 = isset($_POST["safeplace_workarea_lit"]) ? $_POST["safeplace_workarea_lit"] : 'NOT properly lit	';
    $checklist9 = isset($_POST["safeplace_material_safestored"]) ? $_POST["safeplace_material_safestored"] : 'NOT stored safely	';
    $checklist10 = isset($_POST["safeplace_hazard_spillage"]) ? $_POST["safeplace_hazard_spillage"] : 'NOT safe	';

    //section 4
    $equipment_condition = $_POST["equipment_condition"];
    $Chemicals_storing = $_POST["Chemicals_storing"];
    $evacuation_route = $_POST["evacuation_route"];

    //section 5
    $general_comments = $_POST["general_comments"];
    $signaturePath = null;
    
    if (isset($_FILES['signature']) && $_FILES['signature']['error'] === UPLOAD_ERR_OK) {
        $fileTmpPath = $_FILES['signature']['tmp_name'];
        $cleanFileName = preg_replace('/[^a-zA-Z0-9_\-\.]/', '_', $_FILES['signature']['name']);
        $fileName = uniqid() . '_' . $cleanFileName;
        $fileNameCmps = explode(".", $fileName);
        $fileExtension = strtolower(end($fileNameCmps));
        $allowedfileExtensions = ['jpg', 'jpeg', 'png'];

        // Check directory
        $uploadFileDir = '../uploads/';
        if (!is_dir($uploadFileDir)) {
            mkdir($uploadFileDir, 0755, true);
        }

        // Check file size
        if ($_FILES['signature']['size'] > 2 * 1024 * 1024) {
            echo 'File size exceeds the maximum limit of 2MB.';
            exit();
        }

        // Validate MIME type
        $finfo = finfo_open(FILEINFO_MIME_TYPE);
        $mimeType = finfo_file($finfo, $fileTmpPath);
        finfo_close($finfo);

        if (!in_array($fileExtension, $allowedfileExtensions) || !in_array($mimeType, ['image/jpeg', 'image/png'])) {
            echo 'Invalid file type. Allowed types: jpg, jpeg, png.';
            exit();
        }

        $signaturePath = $uploadFileDir . $fileName;
        if (!move_uploaded_file($fileTmpPath, $signaturePath)) {
            echo 'Error moving the file to the upload directory.';
            exit();
        }
    }


    // Include required files
    include "DBhelper.php";
    include "questionare-class.php";
    include "questionare-cont-class.php";

    $questionare1 = new Questionare1Cont($auTitle, $auLocation, $auDOA, $auAU, $checklist1, $checklist2, $checklist3, $checklist4, $checklist5, $checklist6, $checklist7, $checklist8, $checklist9, $checklist10, $equipment_condition, $Chemicals_storing, $evacuation_route, $general_comments, $signaturePath);

    $questionare1->inputData($auTitle, $auLocation, $auDOA, $auAU, $checklist1, $checklist2, $checklist3, $checklist4, $checklist5, $checklist6, $checklist7, $checklist8, $checklist9, $checklist10, $equipment_condition, $Chemicals_storing, $evacuation_route, $general_comments, $signaturePath);

    //header("Location: ../webpages/auditQuestionare.php?error=none");
    exit();

}
