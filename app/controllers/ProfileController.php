<?php
if (session_status() === PHP_SESSION_NONE) {
  session_start();
}
require_once '../config/Database.php';
require_once '../models/Profile.php';

$db = new Database();
$profile = new Profile($db);

// Check if the user is logged in
if (!isset($_SESSION['user'])) {
    header('Location: ../../../index.php');
    exit();
}

$user_id = $_SESSION['user']['user_id'];



// Fetch User Bio (assuming bio is stored in the users table)
$userQuery = "SELECT bio FROM users WHERE user_id = ?";
$stmt = $db->prepare($userQuery);
$stmt->bind_param('i', $user_id);
$stmt->execute();
$userResult = $stmt->get_result();
$userData = $userResult->fetch_assoc();
$bio = $userData['bio'] ?? '';

// Fetch Affiliations
$affiliations = $profile->getAffiliations($user_id);

// Fetch Interests
$interests = $profile->getInterests($user_id);



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
