<?php
class Project {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    // Create a new project
    public function create($title, $description, $folderName, $allow_edit, $userId) {
        // $allow_edit = 1;
        $stmt = $this->db->prepare("INSERT INTO projects (title, description, root_folder, allow_edit, user_id) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("sssii", $title, $description, $folderName, $allow_edit, $userId);
        return $stmt->execute();
    }

    // Get all projects
    public function getAllProjects() {
        $result = $this->db->query("SELECT * FROM projects");
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    // Get a specific project by ID
    public function getProjectById($id) {
        $stmt = $this->db->prepare("SELECT * FROM projects WHERE id = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        return $stmt->get_result()->fetch_assoc();
    }

    // Delete a project
    public function deleteProject($id, $userId) {
        $stmt = $this->db->prepare("DELETE FROM projects WHERE id = ? AND user_id = ?");
        $stmt->bind_param("ii", $id, $userId);
        return $stmt->execute();
    }

    // Update allow_edit option
    public function updateAllowEdit($id, $allowEdit, $userId) {
        $stmt = $this->db->prepare("UPDATE projects SET allow_edit = ? WHERE id = ? AND user_id = ?");
        $stmt->bind_param("iii", $allowEdit, $id, $userId);
        return $stmt->execute();
    }

    // Save contribution details
    public function saveContribution($projectId, $userId, $fullName) {
        // Check if this user already contributed
        $stmt = $this->db->prepare("SELECT * FROM contributions WHERE project_id = ? AND user_id = ?");
        $stmt->bind_param("ii", $projectId, $userId);
        $stmt->execute();
        $result = $stmt->get_result();

        $now = date('Y-m-d H:i:s');

        if ($result->num_rows > 0) {
            // Update last contribution time
            $stmt = $this->db->prepare("UPDATE contributions SET last_contribution = ? WHERE project_id = ? AND user_id = ?");
            $stmt->bind_param("sii", $now, $projectId, $userId);
        } else {
            // Insert new contribution
            $stmt = $this->db->prepare("INSERT INTO contributions (project_id, user_id, full_name, last_contribution) VALUES (?, ?, ?, ?)");
            $stmt->bind_param("iiss", $projectId, $userId, $fullName, $now);
        }
        $stmt->execute();
    }

    // Get all contributions for a project
    public function getContributions($projectId) {
        $stmt = $this->db->prepare("SELECT * FROM contributions WHERE project_id = ?");
        $stmt->bind_param("i", $projectId);
        $stmt->execute();
        return $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
    }

        // Task Management
        public function createTask($projectId, $title, $description) {
            $stmt = $this->db->prepare("INSERT INTO tasks (project_id, title, description) VALUES (?, ?, ?)");
            $stmt->bind_param("iss", $projectId, $title, $description);
            return $stmt->execute();
        }
    
        public function getTasksByProject($projectId) {
            $stmt = $this->db->prepare("SELECT * FROM tasks WHERE project_id = ?");
            $stmt->bind_param("i", $projectId);
            $stmt->execute();
            return $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
        }
    
        public function updateTaskStatus($taskId, $status) {
            $stmt = $this->db->prepare("UPDATE tasks SET status = ? WHERE id = ?");
            $stmt->bind_param("si", $status, $taskId);
            return $stmt->execute();
        }
    
        public function deleteTask($taskId) {
            $stmt = $this->db->prepare("DELETE FROM tasks WHERE id = ?");
            $stmt->bind_param("i", $taskId);
            return $stmt->execute();
        }

        public function getTaskById($taskId) {
            $stmt = $this->db->prepare("SELECT * FROM tasks WHERE id = ?");
            $stmt->bind_param("i", $taskId);
            $stmt->execute();
            return $stmt->get_result()->fetch_assoc();
        }
    
        // Milestone Management
        public function createMilestone($projectId, $title, $description, $dueDate) {
            $stmt = $this->db->prepare("INSERT INTO milestones (project_id, title, description, due_date) VALUES (?, ?, ?, ?)");
            $stmt->bind_param("isss", $projectId, $title, $description, $dueDate);
            return $stmt->execute();
        }
    
        public function getMilestonesByProject($projectId) {
            $stmt = $this->db->prepare("SELECT * FROM milestones WHERE project_id = ?");
            $stmt->bind_param("i", $projectId);
            $stmt->execute();
            return $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
        }
    
        public function deleteMilestone($milestoneId) {
            $stmt = $this->db->prepare("DELETE FROM milestones WHERE id = ?");
            $stmt->bind_param("i", $milestoneId);
            return $stmt->execute();
        }

        public function getMilestoneById($milestoneId) {
            $stmt = $this->db->prepare("SELECT * FROM milestones WHERE id = ?");
            $stmt->bind_param("i", $milestoneId);
            $stmt->execute();
            return $stmt->get_result()->fetch_assoc();
        }
    
public function deleteContributionsByProjectId($projectId) {
    $query = "DELETE FROM contributions WHERE project_id = ?";
    $stmt = $this->db->prepare($query);
    $stmt->bind_param('i', $projectId);
    return $stmt->execute();
}

// In Project.php (Model)

// Delete tasks related to a project
public function deleteTasksByProjectId($projectId) {
    $query = "DELETE FROM tasks WHERE project_id = ?";
    $stmt = $this->db->prepare($query);
    $stmt->bind_param('i', $projectId);
    return $stmt->execute();
}

// Delete milestones related to a project
public function deleteMilestonesByProjectId($projectId) {
    $query = "DELETE FROM milestones WHERE project_id = ?";
    $stmt = $this->db->prepare($query);
    $stmt->bind_param('i', $projectId);
    return $stmt->execute();
}



    }