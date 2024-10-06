<?php
require_once '../../config/Database.php';
require_once '../../models/Resource.php';

$database = new Database();
$conn = $database->conn;
$resource = new Resource($conn);

// Pagination settings
$limit = 5; // Number of resources per page
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$offset = ($page - 1) * $limit;

// Fetch filter parameters
$search = isset($_GET['search']) ? $_GET['search'] : '';
$category = isset($_GET['category']) ? $_GET['category'] : '';
$author = isset($_GET['author']) ? $_GET['author'] : '';
$date = isset($_GET['date']) ? $_GET['date'] : '';
$citations = isset($_GET['citations']) ? (int)$_GET['citations'] : 0;

// Get resources with filters applied
$resources = $resource->getFilteredResources($limit, $offset, $search, $category, $author, $date, $citations);

// Return response as JSON
header('Content-Type: application/json');
echo json_encode($resources);
