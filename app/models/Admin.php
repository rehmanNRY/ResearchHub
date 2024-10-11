<?php
require_once '../config/Database.php';

class Admin {
    private $db;

    public function __construct() {
        $this->db = new Database();
    }

    // Get all users
    public function getUsers() {
        $sql = "SELECT * FROM users ORDER BY created_at DESC";
        return $this->db->query($sql);
    }

    // Get all forums
    public function getForums() {
        $sql = "SELECT * FROM forums ORDER BY created_at DESC";
        return $this->db->query($sql);
    }

    // Get all comments on forums
    public function getComments($forum_id) {
        $sql = "SELECT comments.*, users.full_name FROM comments 
                INNER JOIN users ON comments.user_id = users.user_id
                WHERE forum_id = ? ORDER BY created_at DESC";
        $stmt = $this->db->prepare($sql);
        $stmt->bind_param("i", $forum_id);
        $stmt->execute();
        return $stmt->get_result();
    }

    // Ban a user (update their status)
    public function banUser($user_id) {
        $sql = "UPDATE users SET status = 'banned' WHERE user_id = ?";
        $stmt = $this->db->prepare($sql);
        $stmt->bind_param("i", $user_id);
        return $stmt->execute();
    }

    // Unban a user (update their status)
    public function unbanUser($user_id) {
        $sql = "UPDATE users SET status = 'active' WHERE user_id = ?";
        $stmt = $this->db->prepare($sql);
        $stmt->bind_param("i", $user_id);
        return $stmt->execute();
    }

    // Delete a comment
    public function deleteComment($comment_id) {
        $sql = "DELETE FROM comments WHERE id = ?";
        $stmt = $this->db->prepare($sql);
        $stmt->bind_param("i", $comment_id);
        return $stmt->execute();
    }

    // Get user statistics (activity, resource uploads, etc.)
    public function getUserStats($user_id) {
        $sql = "SELECT COUNT(*) as post_count, COUNT(DISTINCT project_id) as project_count FROM resources 
                WHERE user_id = ?";
        $stmt = $this->db->prepare($sql);
        $stmt->bind_param("i", $user_id);
        $stmt->execute();
        return $stmt->get_result()->fetch_assoc();
    }
}
