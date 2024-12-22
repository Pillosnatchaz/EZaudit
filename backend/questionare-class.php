<?php

class Questionare1 extends DbHelper {

    protected function inputDataQuestionare1($auTitle, $auLocation, $auDOA, $auAU, $checklist1, $checklist2, $checklist3, $checklist4, $checklist5, $checklist6, $checklist7, $checklist8, $checklist9, $checklist10, $equipment_condition, $Chemicals_storing, $evacuation_route, $general_comments, $signaturePath) {
        $stmt = $this->connect()->prepare('INSERT INTO tblaudit_form_construction (title, aulocation, date_of_audit, prepared_by, checklist_permit, checklist_emergency, checklist_insurance, checklist_induction, checklist_first_aid, checklist_map, checklist_structure, checklist_lighting, checklist_storage, checklist_hazards, equipment_condition, chemicals_storing, evacuation_route, general_comments, signature_path) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?);');

        // $stmt = $this->connect()->prepare('INSERT INTO tblaudit_form_construction (title, aulocation, date_of_audit, prepared_by, checklist_permit, checklist_emergency, checklist_insurance, checklist_induction, checklist_first_aid, checklist_map, checklist_structure, checklist_lighting, checklist_storage, checklist_hazards, equipment_condition, chemicals_storing, evacuation_route, general_comment) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?);');

        if(!$stmt->execute(array($auTitle, $auLocation, $auDOA, $auAU, $checklist1, $checklist2, $checklist3, $checklist4, $checklist5, $checklist6, $checklist7, $checklist8, $checklist9, $checklist10, $equipment_condition, $Chemicals_storing, $evacuation_route, $general_comments, $signaturePath))) {
            $stmt=null;
            header("Location: ../webpages/auditorQuestionare.php?error=stmtfailed");
            exit();
        }

        $stmt=null;
    }

    protected function checkData($auTitle, $auDOA) {
        $stmt = $this->connect()->prepare('SELECT title FROM tblaudit_form_construction WHERE title = ? AND date_of_audit = ?;');

        if(!$stmt->execute(array($auTitle, $auDOA))) {
            $stmt = null;
            header("Location: ../webpages/auditorQuestionare.php?error=alreadyExist");
            exit();
        }
        $resultCheck;
        if($stmt->rowCount() > 0) {
            $resultCheck = false;
        } else {
            $resultCheck = true;
        } 
        
        return $resultCheck;
    }
}