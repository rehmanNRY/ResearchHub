<?php
include '../../controllers/AdminController.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $controller = new AdminController();
    $flag_id = $_POST['flag_id'];

    // Approve the flagged content
    $result = $controller->approveFlaggedContent($flag_id);

    if ($result) {
        header('Location: admin_dashboard_view.php?message=Content approved successfully');
    } else {
        echo "Failed to approve content.";
    }
}
?>
