<?php 

class updateQuestionare1 extends DbHelper {

    public function updateData($id, $auTitle, $auLocation, $auDOA, $auAU, $checklist1, $checklist2, $checklist3, $checklist4, $checklist5, $checklist6, $checklist7, $checklist8, $checklist9, $checklist10, $equipment_condition, $Chemicals_storing, $evacuation_route, $general_comments) {
        // Prepare the SQL statement
        $stmt = $this->connect()->prepare('UPDATE tblaudit_form_construction SET title = ?, aulocation = ?, date_of_audit = ?, prepared_by = ?, checklist_permit = ?, checklist_emergency = ?, checklist_insurance = ?, checklist_induction = ?, checklist_first_aid = ?, checklist_map = ?, checklist_structure = ?, checklist_lighting = ?, checklist_storage = ?, checklist_hazards = ?, equipment_condition = ?, chemicals_storing = ?, evacuation_route = ?, general_comments = ? WHERE id = ? ;');

        $result = $stmt->execute([$auTitle, $auLocation, $auDOA, $auAU, $checklist1, $checklist2, $checklist3, $checklist4, $checklist5, $checklist6, $checklist7, $checklist8, $checklist9, $checklist10, $equipment_condition, $Chemicals_storing, $evacuation_route, $general_comments, $id]);
        if ($result) {
            echo "Record updated successfully.";
        } else {
            echo "Error updating record.";
        }
    }
}