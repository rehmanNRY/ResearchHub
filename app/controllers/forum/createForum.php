<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

if (!isset($_SESSION['user'])) {
    header('Location: ../../../../index.php');
    exit();
}

require_once '../../models/Forum.php'; // Include the Forum model
require_once '../../config/Database.php'; // Include the DB connection

// Instantiate the Database connection
$database = new Database();
$conn = $database->conn; // Get the database connection

$user = $_SESSION['user']; // Assuming this contains logged-in user data
$userId = $user['user_id'];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'] ?? '';
    $content = $_POST['content'] ?? '';

    if (!empty($title) && !empty($content)) {
        // Save the forum data in the database
        $forum = new Forum($conn); // Pass the database connection
        $createSuccess = $forum->createForum($userId, $title, $content);

        if ($createSuccess) {
            $_SESSION['success'] = "Forum created successfully.";
            header('Location: ../../views/forum/createForum.php');
        } else {
            $_SESSION['error'] = "Failed to create forum.";
        }
    } else {
        $_SESSION['error'] = "Title and content are required.";
    }
}
?>
