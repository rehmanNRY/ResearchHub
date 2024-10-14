<?php
require_once __DIR__ . '/../config/Database.php';

class AnalyticsModel {
    private $db;

    public function __construct() {
        $this->db = new Database();
    }

    // Total downloads for resources
    public function getDownloadCounts($user_id) {
        $sql = "SELECT SUM(downloads) as total_downloads FROM resources WHERE user_id = " . $this->db->escape_string($user_id);
        $result = $this->db->query($sql);
        return $result->fetch_assoc()['total_downloads'];
    }

    // Total citation count for a user
    public function getCitationCounts($user_id) {
        $sql = "SELECT SUM(citations) as total_citations FROM resources WHERE user_id = " . $this->db->escape_string($user_id);
        $result = $this->db->query($sql);
        return $result->fetch_assoc()['total_citations'];
    }

    // Total number of forum posts by the user
    public function getUserForumContributions($user_id) {
        $sql = "SELECT COUNT(id) as total_forums FROM forums WHERE user_id = " . $this->db->escape_string($user_id);
        $result = $this->db->query($sql);
        return $result->fetch_assoc()['total_forums'];
    }

    // Total number of comments made by the user in forums
    public function getUserComments($user_id) {
        $sql = "SELECT COUNT(id) as total_comments FROM comments WHERE user_id = " . $this->db->escape_string($user_id);
        $result = $this->db->query($sql);
        return $result->fetch_assoc()['total_comments'];
    }

    // Total number of projects the user contributed to
    public function getProjectContributions($user_id) {
        $sql = "SELECT COUNT(id) as total_projects FROM contributions WHERE user_id = " . $this->db->escape_string($user_id);
        $result = $this->db->query($sql);
        return $result->fetch_assoc()['total_projects'];
    }

    // Top cited resources for a user
    public function getTopCitedResources($user_id, $limit = 5) {
        $sql = "SELECT title, citations FROM resources WHERE user_id = " . $this->db->escape_string($user_id) . " ORDER BY citations DESC LIMIT " . $this->db->escape_string($limit);
        $result = $this->db->query($sql);
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    // Most downloaded resources for a user
    public function getTopDownloadedResources($user_id, $limit = 5) {
        $sql = "SELECT title, downloads FROM resources WHERE user_id = " . $this->db->escape_string($user_id) . " ORDER BY downloads DESC LIMIT " . $this->db->escape_string($limit);
        $result = $this->db->query($sql);
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    // User's recent activity timeline (uploads, forum posts, etc.)
    public function getUserActivityTimeline($user_id) {
        // Combine data from resources, forums, and contributions
        $sql = "
            (SELECT 'Resource Upload' as type, title as item, uploaded_at as timestamp FROM resources WHERE user_id = " . $this->db->escape_string($user_id) . ")
            UNION
            (SELECT 'Forum Post' as type, title as item, created_at as timestamp FROM forums WHERE user_id = " . $this->db->escape_string($user_id) . ")
            UNION
            (SELECT 'Project Contribution' as type, title as item, created_at as timestamp FROM projects WHERE user_id = " . $this->db->escape_string($user_id) . ")
            ORDER BY timestamp DESC LIMIT 10";
        
        $result = $this->db->query($sql);
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    // Contributions over time (e.g., per month)
    public function getContributionsOverTime($user_id) {
        $sql = "SELECT COUNT(*) as contributions, DATE_FORMAT(uploaded_at, '%Y-%m') as month FROM resources WHERE user_id = " . $this->db->escape_string($user_id) . " GROUP BY month ORDER BY month ASC";
        $result = $this->db->query($sql);
        return $result->fetch_all(MYSQLI_ASSOC);
    }
}
