<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

require 'd-fetch.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $fetcher = new dashboardFetch();
    $data = $fetcher->getDataById($id);

    if ($data) {
        // Populate form fields with the fetched data
        //section 1
        $id = htmlspecialchars($data['id']);
        $title = htmlspecialchars($data['title']);
        $aulocation = htmlspecialchars($data['aulocation']);
        $date_of_audit = htmlspecialchars($data['date_of_audit']);
        $prepared_by = htmlspecialchars($data['prepared_by']);
        //section 2
        $doc_permit_system = $data['checklist_permit'] == "permit to work exist" ? "checked" : "";
        $doc_worker_SOSprocedure = $data['checklist_emergency'] == "Proper scaffolding in place" ? "checked" : "";
        $doc_worker_insurance = $data['checklist_insurance'] == "Employers liability insurance is displayed" ? "checked" : "";
        $doc_visitor_inducted = $data['checklist_induction'] == "All visitors or workers to site is inducted" ? "checked" : "";
        $doc_firstaid_poster = $data['checklist_first_aid'] == "First aid poster is displayed" ? "checked" : "";
        $doc_local_hospital_map = $data['checklist_map'] == "Location map to a local hospital is available" ? "checked" : "";
        //section 3
        $safeplace_stable_structure = $data['checklist_structure'] == "working structure is stable" ? "checked" : "";
        $safeplace_workarea_lit = $data['checklist_lighting'] == "working area and interior is lit properly" ? "checked" : "";
        $safeplace_material_safestored = $data['checklist_storage'] == "Material is safely stored" ? "checked" : "";
        $safeplace_hazard_spillage = $data['checklist_hazards'] == "There is no trip hazard or spillage" ? "checked" : "";
        //section 4
        $equipment_condition = htmlspecialchars($data['equipment_condition']);
        $Chemicals_storing = htmlspecialchars($data['chemicals_storing']);
        $evacuation_route = htmlspecialchars($data['evacuation_route']);
        //section 5
        $general_comments = htmlspecialchars($data['general_comments']);
        $signature_path = htmlspecialchars($data['signature_path']);
    } else {
        echo "Invalid ID or data not found.";
        exit;
    }
} else {
    echo "No ID provided.";
    exit;
}

