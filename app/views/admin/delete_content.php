<?php
include '../../controllers/AdminController.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $controller = new AdminController();
    $flag_id = $_POST['flag_id'];

    // Delete the flagged content
    $result = $controller->deleteFlaggedContent($flag_id);

    if ($result) {
        header('Location: admin_dashboard_view.php?message=Content deleted successfully');
    } else {
        echo "Failed to delete content.";
    }
}
?>
