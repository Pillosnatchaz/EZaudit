<?php
// Include the database helper class
include "DbHelper.php";

// Check if the 'id' parameter is present in the URL
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = intval($_GET['id']); // Sanitize the ID

    try {
        // Create a new database connection
        $dbHelper = new DbHelper();
        $conn = $dbHelper->connect();

        // Prepare the DELETE query
        $stmt = $conn->prepare("DELETE FROM tblaudit_form_construction WHERE id = ?");
        $stmt->execute([$id]);

        // Check if any row was deleted
        if ($stmt->rowCount() > 0) {
            // Redirect to the dashboard with a success message
            header("Location: ../webpages/dashboard.php?message=deleted");
            exit();
        } else {
            echo "Error: Record not found or could not be deleted.";
        }
    } catch (Exception $e) {
        echo "Error: " . $e->getMessage();
    }
} else {
    echo "Invalid ID.";
}
