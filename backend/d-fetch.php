<?php 

require 'DBhelper.php';

class dashboardFetch extends DbHelper {

    public function getData() {
        // Prepare the SQL statement
        $stmt = $this->connect()->prepare('SELECT id, title, aulocation, date_of_audit, prepared_by FROM tblaudit_form_construction; ');
        $stmt->execute();  // Execute the query

        // Fetch all data and return it
        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
        // Close the statement
        $stmt = null;

        return $data;  // Return the fetched data
    }

    public function getDataByID($id) {

        $stmt = $this->connect()->prepare("SELECT * FROM tblaudit_form_construction WHERE id = ?");

        $stmt->execute([$id]);

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
