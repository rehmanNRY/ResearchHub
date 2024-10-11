<?php
require_once '../models/Admin.php';

class AdminController {
    private $adminModel;

    public function __construct() {
        $this->adminModel = new Admin();
    }

    // Display admin dashboard
    public function dashboard() {
        $users = $this->adminModel->getUsers();
        $forums = $this->adminModel->getForums();
        $comments = $this->adminModel->getComments($_GET['forum_id'] ?? 0);
        require 'Views/admin_dashboard.php';
    }

    // Ban a user
    public function banUser($user_id) {
        $this->adminModel->banUser($user_id);
        header('Location: admin_dashboard.php');
    }

    // Unban a user
    public function unbanUser($user_id) {
        $this->adminModel->unbanUser($user_id);
        header('Location: admin_dashboard.php');
    }

    // Delete a comment
    public function deleteComment($comment_id) {
        $this->adminModel->deleteComment($comment_id);
        header('Location: admin_dashboard.php');
    }
}
