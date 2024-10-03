<?php

class Resource {
    private $db;

    public function __construct($conn) {
        $this->db = $conn;
    }

    public function uploadResource($userId, $title, $description, $category, $filePath) {
        $query = "INSERT INTO resources (user_id, title, description, category, file_path) VALUES (?, ?, ?, ?, ?)";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param('issss', $userId, $title, $description, $category, $filePath);

        return $stmt->execute();
    }
}

