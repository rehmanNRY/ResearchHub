<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

if (!isset($_SESSION['user'])) {
    header('Location: ../../../../index.php');
    exit();
}

require_once '../../models/Resource.php'; // Include the Resource model
require_once '../../config/Database.php'; // Include the DB connection

// Instantiate the Database connection
$database = new Database();
$conn = $database->conn; // Get the database connection

$user = $_SESSION['user']; // Assuming this contains logged-in user data
$userId = $user['user_id'];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'] ?? '';
    $description = $_POST['description'] ?? '';
    $category = $_POST['category'] ?? '';
    
    // Check if a file is uploaded
    if (isset($_FILES['file']) && $_FILES['file']['error'] === UPLOAD_ERR_OK) {
        $fileTmpPath = $_FILES['file']['tmp_name'];
        $fileName = basename($_FILES['file']['name']);
        $uploadDir = __DIR__ . '/../../../public/uploads/resources/';
        $destPath = $uploadDir . $fileName;

        // Move the uploaded file to the destination path
        if (move_uploaded_file($fileTmpPath, $destPath)) {
            // Save the file path in the database
            $resource = new Resource($conn); // Pass the database connection
            $uploadSuccess = $resource->uploadResource($userId, $title, $description, $category, $fileName);

            if ($uploadSuccess) {
                $_SESSION['success'] = "Resource uploaded successfully.";
                header('Location: ../../views/resource/uploadResource.php');
            } else {
                $_SESSION['error'] = "Failed to upload resource.";
            }
        } else {
            $_SESSION['error'] = "Failed to move uploaded file.";
        }
    } else {
        $_SESSION['error'] = "No file uploaded or there was an error.";
    }

}


