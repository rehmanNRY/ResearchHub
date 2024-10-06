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

$forum = new Forum($conn);

// Fetch all forums with user details
$forums = $forum->getAllForums();

// Return the data as JSON
header('Content-Type: application/json');
echo json_encode($forums);
?>
