<?php
session_start();
require_once '../../controllers/FollowController.php'; // Include the FollowController

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $follower_id = $_POST['follower_id'];
    $followed_id = $_POST['followed_id'];

    $followController = new FollowController();
    $followController->unfollowUser($follower_id, $followed_id);

    header("Location: userProfile.php?user_id=$followed_id"); // Redirect back to the profile page
    exit();
}
