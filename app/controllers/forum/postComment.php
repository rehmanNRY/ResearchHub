<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

if (!isset($_SESSION['user'])) {
    header('Location: ../../../../index.php');
    exit();
}

require_once '../../models/Comment.php'; // Include the Comment model
require_once '../../config/Database.php'; // Include the DB connection

// Instantiate the Database connection
$database = new Database();
$conn = $database->conn; // Get the database connection

$user = $_SESSION['user']; // Assuming this contains logged-in user data
$userId = $user['user_id'];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $forumId = $_POST['forum_id'] ?? 0; // Get the forum ID from POST data
    $content = $_POST['content'] ?? '';

    if (!empty($forumId) && !empty($content)) {
        // Save the comment data in the database
        $comment = new Comment($conn); // Pass the database connection
        $createSuccess = $comment->createComment($forumId, $userId, $content);

        if ($createSuccess) {
            $_SESSION['success'] = "Comment posted successfully.";
            header("Location: ../../views/forum/allForums.php"); // Redirect to the forum view page
            exit();
        } else {
            $_SESSION['error'] = "Failed to post comment.";
        }
    } else {
        $_SESSION['error'] = "Forum ID and content are required.";
    }
}
?>
