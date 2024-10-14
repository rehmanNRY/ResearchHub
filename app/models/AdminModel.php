<?php
require_once __DIR__ . '/../config/Database.php';

class AdminModel {
    private $db;

    public function __construct() {
        $this->db = new Database();
    }

    // Fetch all users
    public function getAllUsers() {
        $sql = "SELECT user_id, username, email, created_at, status FROM users";
        return $this->db->query($sql)->fetch_all(MYSQLI_ASSOC);
    }

    // Fetch user by ID
    public function getUserById($user_id) {
        $sql = "SELECT * FROM users WHERE user_id = " . $this->db->escape_string($user_id);
        return $this->db->query($sql)->fetch_assoc();
    }

    // Edit a user's information
    public function updateUser($user_id, $data) {
        $sql = "UPDATE users SET username = '" . $this->db->escape_string($data['username']) . "', 
                                 email = '" . $this->db->escape_string($data['email']) . "', 
                                 status = '" . $this->db->escape_string(value: $data['status']) . "' 
                WHERE user_id = " . $this->db->escape_string($user_id);
        return $this->db->query($sql);
    }

    // Suspend or ban a user
    public function updateUserStatus($user_id, $status) {
        $sql = "UPDATE users SET status = '" . $this->db->escape_string($status) . "' WHERE user_id = " . $this->db->escape_string($user_id);
        return $this->db->query($sql);
    }

    // Delete a user
    public function deleteUser($user_id) {
        $sql = "DELETE FROM users WHERE user_id = " . $this->db->escape_string($user_id);
        return $this->db->query($sql);
    }    

    // Fetch flagged content
    public function getFlaggedContent() {
        $sql = "SELECT f.id as flag_id, r.title, f.user_id, f.reason, f.created_at 
        FROM flags f 
        JOIN resources r ON f.resource_id = r.id";
        return $this->db->query($sql)->fetch_all(MYSQLI_ASSOC);
    }

    // Remove flagged content
    public function deleteFlaggedContent($flag_id) {
        $sql = "DELETE FROM flags WHERE id = " . $this->db->escape_string($flag_id);
        return $this->db->query($sql);
    }

    // Approve flagged content
    public function approveFlaggedContent($flag_id) {
        $sql = "UPDATE flags SET status = 'approved' WHERE id = " . $this->db->escape_string($flag_id);
        return $this->db->query($sql);
    }

    // Track user violations
    public function logViolation($user_id, $violation_reason) {
        $sql = "INSERT INTO violations (user_id, reason, created_at) VALUES (" . 
                $this->db->escape_string($user_id) . ", '" . $this->db->escape_string($violation_reason) . "', NOW())";
        return $this->db->query($sql);
    }

    // Fetch violations for a user
    public function getUserViolations($user_id) {
        $sql = "SELECT * FROM violations WHERE user_id = " . $this->db->escape_string($user_id);
        return $this->db->query($sql)->fetch_all(MYSQLI_ASSOC);
    }

    // Platform activity monitoring
    public function getPlatformActivity() {
        $sql = "SELECT 
                    (SELECT COUNT(user_id) FROM users) as total_users,
                    (SELECT COUNT(id) FROM resources) as total_resources,
                    (SELECT COUNT(id) FROM flags WHERE status = 'pending') as flagged_content
                ";
        return $this->db->query($sql)->fetch_assoc();
    }
}
