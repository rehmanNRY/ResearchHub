<?php
include '../../controllers/AdminController.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $controller = new AdminController();
    $user_id = $_POST['user_id'];

    // Gather user data from the form submission
    $data = [
        'username' => $_POST['username'],
        'email'    => $_POST['email'],
        'status'   => $_POST['status'],
    ];

    // Update user details
    $result = $controller->updateUser($user_id, $data);

    if ($result) {
        header('Location: admin_dashboard_view.php?message=User updated successfully');
    } else {
        echo "Failed to update user.";
    }
}
?>
