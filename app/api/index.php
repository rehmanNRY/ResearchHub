<?php
// Include required files
require_once '../app/config/Database.php';
require_once '../app/controllers/thread/ThreadController.php';
require_once '../app/controllers/comment/CommentController.php';

// Instantiate the Database
$db = new Database();

// Define routing logic
$request_uri = $_SERVER['REQUEST_URI'];
$base_url = '/researchhub_project/api/';

// Strip the base URL from the request URI to get the route
$route = str_replace($base_url, '', $request_uri);

// Example of routing
if ($route === 'thread/all') {
    // Pass the $db object to the ThreadController when instantiating it
    $controller = new ThreadController($db);
    $controller->getAllThreads();
} elseif ($route === 'comment/create') {
    // Pass the $db object to the CommentController when instantiating it
    $controller = new CommentController($db);
    // Assume parameters (e.g., $thread_id, $user_id, $content) are retrieved from the request
    $controller->createComment($thread_id, $user_id, $content);
} else {
    // Send a 404 error if no matching route is found
    header('HTTP/1.0 404 Not Found');
    echo json_encode(['error' => 'Route not found']);
}
