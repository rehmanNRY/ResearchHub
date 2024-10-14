<?php

class Resource
{
    private $db;

    public function __construct($conn)
    {
        $this->db = $conn;
    }

    public function uploadResource($userId, $title, $description, $category, $filePath)
    {
        $query = "INSERT INTO resources (user_id, title, description, category, file_path) VALUES (?, ?, ?, ?, ?)";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param('issss', $userId, $title, $description, $category, $filePath);

        return $stmt->execute();
    }

    public function getFilteredResources($limit, $offset, $search, $category, $author, $date, $citations) {
        $query = "SELECT r.id AS resource_id, r.title, r.description, r.category, r.file_path, r.uploaded_at, u.user_id, u.full_name, r.citations 
                  FROM resources r
                  JOIN users u ON r.user_id = u.user_id
                  WHERE 1=1"; // Base query
    
        // Adding filters based on parameters
        if (!empty($search)) {
            $query .= " AND (r.title LIKE ? OR r.description LIKE ?)";
            $searchTerm = "%$search%";
        }
    
        if (!empty($category)) {
            $query .= " AND r.category = ?";
        }
    
        if (!empty($author)) {
            $query .= " AND u.full_name LIKE ?";
            $authorTerm = "%$author%";
        }
    
        if (!empty($date)) {
            $query .= " AND DATE(r.uploaded_at) = ?";
        }
    
        if ($citations > 0) {
            $query .= " AND r.citations >= ?";
        }
    
        $query .= " ORDER BY r.uploaded_at DESC LIMIT ? OFFSET ?";
    
        $stmt = $this->db->prepare($query);
    
        // Bind parameters dynamically
        $params = [];
        $paramTypes = ''; // To determine parameter types
    
        // Bind search term
        if (!empty($search)) {
            $params[] = $searchTerm;
            $params[] = $searchTerm;
            $paramTypes .= 'ss'; // two strings
        }
    
        // Bind category
        if (!empty($category)) {
            $params[] = $category;
            $paramTypes .= 's'; // string
        }
    
        // Bind author
        if (!empty($author)) {
            $params[] = $authorTerm;
            $paramTypes .= 's'; // string
        }
    
        // Bind date
        if (!empty($date)) {
            $params[] = $date;
            $paramTypes .= 's'; // string
        }
    
        // Bind citations
        if ($citations > 0) {
            $params[] = $citations;
            $paramTypes .= 'i'; // integer
        }
    
        // Bind limit and offset
        $params[] = $limit;
        $params[] = $offset;
        $paramTypes .= 'ii'; // two integers
    
        $stmt->bind_param($paramTypes, ...$params); // Unpack parameters
    
        $stmt->execute();
        $result = $stmt->get_result();
    
        $resources = [];
        while ($row = $result->fetch_assoc()) {
            $resources[] = $row;
        }
    
        return $resources;
    }
    
    


}
