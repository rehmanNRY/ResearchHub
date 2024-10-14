<?php

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
require_once __DIR__ . '/../config/Database.php';
require_once __DIR__ . '/../models/Follow.php';

class FollowController {
    private $db;
    public $followModel;

    public function __construct() {
        $this->db = new Database();   // Create a new Database connection
        $this->followModel = new Follow($this->db); // Create a Follow model instance
    }

    // Handle follow request
    public function followUser($follower_id, $followed_id) {
        if ($this->followModel->isFollowing($follower_id, $followed_id)) {
            return "Already following this user.";
        } else {
            $this->followModel->follow($follower_id, $followed_id);
            return "Successfully followed the user.";
        }
    }

    // Handle unfollow request
    public function unfollowUser($follower_id, $followed_id) {
        if ($this->followModel->isFollowing($follower_id, $followed_id)) {
            $this->followModel->unfollow($follower_id, $followed_id);
            return "Successfully unfollowed the user.";
        } else {
            return "You are not following this user.";
        }
    }

    // Display followers of a user
    public function showFollowers($user_id) {
        return $this->followModel->getFollowers($user_id);
    }

    // Display the users someone is following
    public function showFollowing($user_id) {
        return $this->followModel->getFollowing($user_id);
    }
}
