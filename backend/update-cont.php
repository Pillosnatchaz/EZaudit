<?php

class UpdateCont extends updateQuestionare1 {

    private $id;
    private $title;
    private $aulocation;
    private $date_of_audit;
    private $prepared_by;
    private $doc_permit_system;
    private $doc_worker_SOSprocedure;
    private $doc_worker_insurance;
    private $doc_visitor_inducted;
    private $doc_firstaid_poster;
    private $doc_local_hospital_map;
    private $safeplace_stable_structure;
    private $safeplace_workarea_lit;
    private $safeplace_material_safestored;
    private $safeplace_hazard_spillage;
    private $equipment_condition;
    private $Chemicals_storing;
    private $evacuation_route;
    private $general_comments;
    //private $signature_path;

    public function __construct($id, $title, $aulocation, $date_of_audit, $prepared_by, $doc_permit_system, $doc_worker_SOSprocedure, $doc_worker_insurance, $doc_visitor_inducted, $doc_firstaid_poster, $doc_local_hospital_map, $safeplace_stable_structure, $safeplace_workarea_lit, $safeplace_material_safestored,  $safeplace_hazard_spillage, $equipment_condition, $Chemicals_storing, $evacuation_route, $general_comments) {

        $this->id = $id;
        $this->title = $title;
        $this->aulocation = $aulocation;
        $this->date_of_audit = $date_of_audit;
        $this->prepared_by = $prepared_by;
        $this->doc_permit_system = $doc_permit_system;
        $this->doc_worker_SOSprocedure = $doc_worker_SOSprocedure;
        $this->doc_worker_insurance = $doc_worker_insurance;
        $this->doc_visitor_inducted = $doc_visitor_inducted;
        $this->doc_firstaid_poster = $doc_firstaid_poster;
        $this->doc_local_hospital_map = $doc_local_hospital_map;
        $this->safeplace_stable_structure = $safeplace_stable_structure;
        $this->safeplace_workarea_lit = $safeplace_workarea_lit;
        $this->safeplace_material_safestored = $safeplace_material_safestored;
        $this->safeplace_hazard_spillage = $safeplace_hazard_spillage;
        $this->equipment_condition = $equipment_condition;
        $this->Chemicals_storing = $Chemicals_storing;
        $this->evacuation_route = $evacuation_route;
        $this->general_comments = $general_comments;
        //$this->signature_path = $signature_path;

    }

    public function updateTable() {
        
        if($this->emptyInput() == false) {
            header("location: ../dashboard_update.php?error=emptyinput");
            exit();
        }

        if($this->invalidName() == false) {
            header("location: ../dashboard_update.php?error=invalidUsername");
            exit();
        }

        if($this->invalidLocation() == false) {
            header("location: ../dashboard_update.php?error=invalidAuditLocation");
            exit();
        }

        if($this->invalidTitle() == false) {
            header("location: ../dashboard_update.php?error=invaludTitle");
            exit();
        }

            if($this->invalidGeneralComments() == false) {
            header("location: ../dashboard_update.php?error=invalidGeneralComments");
            exit();
        }

        $this->updateData($this->id, $this->title, $this->aulocation, $this->date_of_audit, $this->prepared_by, $this->doc_permit_system, $this->doc_worker_SOSprocedure, $this->doc_worker_insurance, $this->doc_visitor_inducted, $this->doc_firstaid_poster, $this->doc_local_hospital_map, $this->safeplace_stable_structure, $this->safeplace_workarea_lit, $this->safeplace_material_safestored, $this->safeplace_hazard_spillage, $this->equipment_condition, $this->Chemicals_storing, $this->evacuation_route, $this->general_comments );

    }

    private function emptyInput() {
        $result;
        
        if (empty($this->title) || empty($this->aulocation) || empty($this->date_of_audit) || empty($this->prepared_by) || empty($this->general_comments)) {
            $result = false;
        } else {
            $result = true;
        } return $result;

    }

    private function invalidName() {
        $result;

        if(!preg_match("/^[a-zA-Z0-9 ]*$/", $this->prepared_by)) {
            $result = false;
        } else {
            $result = true;
        } return $result; 
        
    }

    private function invalidLocation() {
        $result;

        if(!preg_match("/^[a-zA-Z0-9 ,-]*$/", $this->aulocation)) {
            $result = false;
        } else {
            $result = true;
        } return $result; 
        
    }

    private function invalidTitle() {
        $result;

        if(!preg_match("/^[a-zA-Z0-9 .-]*$/", $this->title)) {
            $result = false;
        } else {
            $result = true;
        } return $result; 
        
    }

    private function invalidGeneralComments() {
        $result;

        if(!preg_match("/^[a-zA-Z0-9 .-\/,]*$/", $this->general_comments)) {
            $result = false;
        } else {
            $result = true;
        } return $result; 
        
    }


}