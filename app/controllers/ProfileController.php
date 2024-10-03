<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
require_once __DIR__ . '/../config/Database.php';
require_once __DIR__ . '/../models/Profile.php';

$db = new Database();
$profile = new Profile($db);

// Check if the user is logged in
if (!isset($_SESSION['user'])) {
    header('Location: ../../../index.php');
    exit();
}

$user_id = $_SESSION['user']['user_id'];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_FILES['profilePic']) && $_FILES['profilePic']['error'] === 0) {
        $file = $_FILES['profilePic'];
        $uploadDirectory = __DIR__ . '/../../public/uploads/profile_pics/';  // Absolute path of the "uploads" folder

        // Make sure the uploads directory exists, create it if not
        if (!is_dir($uploadDirectory)) {
            mkdir($uploadDirectory, 0777, true);
        }

        // Get file details
        $fileName = basename($file['name']); // Get the original file name
        $fileTmpPath = $file['tmp_name']; // Temporary uploaded file
        $fileSize = $file['size']; // Size of the uploaded file
        $fileError = $file['error']; // Any upload error
        $targetPath = $uploadDirectory . $fileName;  // Full path to move the file

        // Check if the file was uploaded without errors
        if ($fileError === 0) {
            if (move_uploaded_file($fileTmpPath, $targetPath)) {
                // Save the file path in the database
                if ($profile->updateProfilePic($user_id, $fileName)) {
                    $_SESSION['success'] = "Profile picture updated successfully!";
                } else {
                    $_SESSION['error'] = "Error updating profile picture in database!";
                }
                header('Location: ../views/profile/editProfile.php');
                exit();
            } else {
                echo 'Failed to upload file. Could not move file.';
            }
        } else {
            echo 'File upload error: ' . $fileError;
        }
    } else {
        echo 'No file uploaded or file upload error.';
    }
}


// Handle Bio Update
if (isset($_POST['updateBio'])) {
    $bio = $_POST['bio'];
    if ($profile->updateBio($user_id, $bio)) {
        $_SESSION['success'] = "Bio updated successfully!";
    } else {
        $_SESSION['error'] = "Error updating bio!";
    }
    header('Location: ../views/profile/editProfile.php');
    exit();
}

// Handle Add Affiliation
if (isset($_POST['addAffiliation'])) {
    $institution_name = $_POST['institution_name'];
    $department = $_POST['department'];
    $position = $_POST['position'];
    $start_date = $_POST['start_date'];
    $end_date = $_POST['end_date'];

    if ($profile->addAffiliation($user_id, $institution_name, $department, $position, $start_date, $end_date)) {
        $_SESSION['success'] = "Affiliation added successfully!";
    } else {
        $_SESSION['error'] = "Error adding affiliation!";
    }
    header('Location: ../views/profile/editProfile.php');
    exit();
}

// Handle Delete Affiliation
if (isset($_POST['deleteAffiliation'])) {
    $affiliation_id = $_POST['affiliation_id'];
    if ($profile->deleteAffiliation($affiliation_id, $user_id)) {
        $_SESSION['success'] = "Affiliation deleted successfully!";
    } else {
        $_SESSION['error'] = "Error deleting affiliation!";
    }
    header('Location: ../views/profile/editProfile.php');
    exit();
}

// Handle Add Interest
if (isset($_POST['addInterest'])) {
    $interest = $_POST['interest'];
    if ($profile->addInterest($user_id, $interest)) {
        $_SESSION['success'] = "Interest added successfully!";
    } else {
        $_SESSION['error'] = "Error adding interest!";
    }
    header('Location: ../views/profile/editProfile.php');
    exit();
}

// Handle Delete Interest
if (isset($_POST['deleteInterest'])) {
    $interest_id = $_POST['interest_id'];
    if ($profile->deleteInterest($interest_id, $user_id)) {
        $_SESSION['success'] = "Interest deleted successfully!";
    } else {
        $_SESSION['error'] = "Error deleting interest!";
    }
    header('Location: ../views/profile/editProfile.php');
    exit();
}
