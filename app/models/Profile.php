<?php
class Profile {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    // Update Bio
    public function updateBio($user_id, $bio) {
        $query = "UPDATE users SET bio = ? WHERE user_id = ?";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param('si', $bio, $user_id);
        return $stmt->execute();
    }

    // Add Affiliation
    public function addAffiliation($user_id, $institution_name, $department, $position, $start_date, $end_date) {
        $query = "INSERT INTO affiliations (user_id, institution_name, department, position, start_date, end_date) VALUES (?, ?, ?, ?, ?, ?)";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param('isssss', $user_id, $institution_name, $department, $position, $start_date, $end_date);
        return $stmt->execute();
    }

    // Delete Affiliation
    public function deleteAffiliation($affiliation_id, $user_id) {
        $query = "DELETE FROM affiliations WHERE affiliation_id = ? AND user_id = ?";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param('ii', $affiliation_id, $user_id);
        return $stmt->execute();
    }

    // Add Research Interest
    public function addInterest($user_id, $interest) {
        $query = "INSERT INTO research_interests (user_id, interest) VALUES (?, ?)";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param('is', $user_id, $interest);
        return $stmt->execute();
    }

    // Delete Research Interest
    public function deleteInterest($interest_id, $user_id) {
        $query = "DELETE FROM research_interests WHERE interest_id = ? AND user_id = ?";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param('ii', $interest_id, $user_id);
        return $stmt->execute();
    }

    // Get User Affiliations
    public function getAffiliations($user_id) {
        $query = "SELECT * FROM affiliations WHERE user_id = ?";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param('i', $user_id);
        $stmt->execute();
        return $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
    }

    // Get User Interests
    public function getInterests($user_id) {
        $query = "SELECT * FROM research_interests WHERE user_id = ?";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param('i', $user_id);
        $stmt->execute();
        return $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
    }

    // Get User details
    public function getUserDetail($user_id) {
        $query = "SELECT * FROM users WHERE user_id = ?";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param('i', $user_id);
        $stmt->execute();
        return $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
    }

    public function updateProfilePic($user_id, $fileName) {
      $query = "UPDATE users SET profile_picture = ? WHERE user_id = ?";
      $stmt = $this->db->prepare($query);
      $stmt->bind_param('si', $fileName, $user_id);
      return $stmt->execute();
    }
}
