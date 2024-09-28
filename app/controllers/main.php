<?php
session_start();
require_once '../config/Database.php';
require_once '../models/User.php';

$db = new Database();
$user = new User($db);

// Signup
if (isset($_POST['signup'])) {
    $full_name = $_POST['full_name'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    $signupResult = $user->signup($full_name, $username, $email, $password);
    
    if ($signupResult === true) {
        // Signup successful, redirect to index
        header('Location: ../../index.php');
        exit();
    } else {
        // Display error message
        $errorMessage = $signupResult;
    }
}

// Login
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    if ($user->login($username, $password)) {
        header('Location: ../../index.php');
    } else {
        echo "Invalid credentials.";
        header('Location: /researchhub_project/app/views/auth/login.php');
    }
}