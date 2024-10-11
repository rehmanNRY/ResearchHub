<?php

require_once __DIR__ . '/../../config/Database.php';
require_once __DIR__ . '/../../models/Project.php';

class ProjectController {
    private $db;
    private $projectModel;

    public function __construct($db) {
        $this->db = $db;
        $this->projectModel = new Project($db);
    }

    // Handle project creation
    public function createProject($title, $description, $files, $allow_edit, $userId) {
        $folderName = $this->createUniqueFolder($title);
        $allowEdit = $allow_edit===1 ? 1 : 0; // Check if allow_edit is selected

        // Move uploaded files into the created folder
        $this->moveFilesToFolder($files, $folderName);

        // Save project details into the database
        $this->projectModel->create($title, $description, $folderName, $allowEdit, $userId);
    }

    // Get all projects
    public function listProjects() {
        return $this->projectModel->getAllProjects();
    }

    // Get specific project and its repository
    public function getProjectRepository($projectId) {
        return $this->projectModel->getProjectById($projectId);
    }

    // Delete a project
public function deleteProject($projectId, $userId) {
    // Get the project details before deletion to retrieve the folder name
    $project = $this->projectModel->getProjectById($projectId);

    if ($project['user_id'] == $userId) {
        // First, delete all tasks related to the project
        $this->deleteProjectTasks($projectId);
        
        // Then, delete all milestones related to the project
        $this->deleteProjectMilestones($projectId);
        
        // Delete all contributions related to the project
        $this->deleteProjectContributions($projectId);

        // Finally, delete the project from the database
        $this->projectModel->deleteProject($projectId, $userId);

        // Delete the project folder from local storage
        $this->deleteProjectFolder($project['root_folder']);
    } else {
        echo "You do not have permission to delete this project.";
    }
}
// Helper function to delete tasks related to the project
private function deleteProjectTasks($projectId) {
    $this->projectModel->deleteTasksByProjectId($projectId);
}

// Helper function to delete milestones related to the project
private function deleteProjectMilestones($projectId) {
    $this->projectModel->deleteMilestonesByProjectId($projectId);
}


// Helper function to delete contributions related to the project
private function deleteProjectContributions($projectId) {
    $this->projectModel->deleteContributionsByProjectId($projectId);
}

    
    // Helper function to delete a project's folder from the file system
    private function deleteProjectFolder($folderName) {
        $rootPath = "/xampp/htdocs/researchhub_project/public/uploads/projects/" . $folderName;
        
        // Ensure the directory exists
        if (is_dir($rootPath)) {
            $this->deleteDirectoryRecursively($rootPath);
        }
    }
    
    // Recursive function to delete a folder and all its contents
    private function deleteDirectoryRecursively($dir) {
        // Check if the provided directory exists
        if (!is_dir($dir)) {
            return;
        }
    
        // Loop through the directory to delete files and subdirectories
        $files = scandir($dir);
        foreach ($files as $file) {
            if ($file != '.' && $file != '..') {
                $filePath = $dir . '/' . $file;
                if (is_dir($filePath)) {
                    // Recursively delete subfolders
                    $this->deleteDirectoryRecursively($filePath);
                } else {
                    // Delete the file
                    unlink($filePath);
                }
            }
        }
    
        // Remove the empty directory
        rmdir($dir);
    }
    

    // Toggle allow_edit option
    public function updateAllowEdit($projectId, $allowEdit, $userId) {
        $this->projectModel->updateAllowEdit($projectId, $allowEdit, $userId);
    }

    // Save user contribution
    public function saveContribution($projectId, $userId, $fullName) {
        $this->projectModel->saveContribution($projectId, $userId, $fullName);
    }

    // Get all contributions for a project
    public function getContributions($projectId) {
        return $this->projectModel->getContributions($projectId);
    }

    // Helper function to create a unique folder name
    private function createUniqueFolder($title) {
        $folderName = substr($title, 0, 32) . '_' . time();
        $rootPath = "/xampp/htdocs/researchhub_project/public/uploads/projects/" . $folderName;
        mkdir($rootPath, 0777, true);
        return $folderName;
    }

    // Helper function to move uploaded files to the folder
    private function moveFilesToFolder($files, $folderName) {
        $rootPath = "/xampp/htdocs/researchhub_project/public/uploads/projects/" . $folderName;
        foreach ($files['name'] as $key => $fileName) {
            $tmpName = $files['tmp_name'][$key];
            move_uploaded_file($tmpName, $rootPath . '/' . $fileName);
        }
    }

    


    // Task Management
    public function createTask($projectId, $title, $description, $userId) {
        $project = $this->projectModel->getProjectById($projectId);
        if ($project['user_id'] == $userId) {
            $this->projectModel->createTask($projectId, $title, $description);
        }
    }

    public function getTasks($projectId) {
        return $this->projectModel->getTasksByProject($projectId);
    }

    public function updateTaskStatus($taskId, $status, $userId) {
        $task = $this->projectModel->getTaskById($taskId);
        $project = $this->projectModel->getProjectById($task['project_id']);
        if ($project['user_id'] == $userId) {
            $this->projectModel->updateTaskStatus($taskId, $status);
        }
    }

    public function deleteTask($taskId, $userId) {
        $task = $this->projectModel->getTaskById($taskId);
        $project = $this->projectModel->getProjectById($task['project_id']);
        if ($project['user_id'] == $userId) {
            $this->projectModel->deleteTask($taskId);
        }
    }

    // Milestone Management
    public function createMilestone($projectId, $title, $description, $dueDate, $userId) {
        $project = $this->projectModel->getProjectById($projectId);
        if ($project['user_id'] == $userId) {
            $this->projectModel->createMilestone($projectId, $title, $description, $dueDate);
        }
    }

    public function getMilestones($projectId) {
        return $this->projectModel->getMilestonesByProject($projectId);
    }

    public function deleteMilestone($milestoneId, $userId) {
        $milestone = $this->projectModel->getMilestoneById($milestoneId);
        $project = $this->projectModel->getProjectById($milestone['project_id']);
        if ($project['user_id'] == $userId) {
            $this->projectModel->deleteMilestone($milestoneId);
        }
    }
}