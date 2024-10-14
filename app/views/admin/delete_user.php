<?php
include '../../controllers/AdminController.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $controller = new AdminController();
    $user_id = $_POST['user_id'];

    // Delete the user
    $result = $controller->deleteUser($user_id);

    if ($result) {
        header('Location: admin_dashboard_view.php?message=User deleted successfully');
    } else {
        echo "Failed to delete user.";
    }
}
