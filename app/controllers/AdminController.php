<?php
require_once __DIR__ . '/../models/AdminModel.php';
require_once __DIR__ . '/../config/Database.php';

class AdminController {
    private $model;
    
    private $db;

    public function __construct() {
        $this->model = new AdminModel();
    }

    public function getAllUsers() {
        return $this->model->getAllUsers();
    }

    public function getUserById($user_id) {
        return $this->model->getUserById($user_id);
    }

    public function updateUser($user_id, $data) {
        return $this->model->updateUser($user_id, $data);
    }

    public function updateUserStatus($user_id, $status) {
        return $this->model->updateUserStatus($user_id, $status);
    }

    public function deleteUser($user_id) {
        return $this->model->deleteUser($user_id);
    }

    public function getFlaggedContent() {
        return $this->model->getFlaggedContent();
    }

    public function deleteFlaggedContent($flag_id) {
        return $this->model->deleteFlaggedContent($flag_id);
    }

    public function approveFlaggedContent($flag_id) {
        return $this->model->approveFlaggedContent($flag_id);
    }

    public function logViolation($user_id, $violation_reason) {
        return $this->model->logViolation($user_id, $violation_reason);
    }

    public function getUserViolations($user_id) {
        return $this->model->getUserViolations($user_id);
    }

    public function getPlatformActivity() {
        return $this->model->getPlatformActivity();
    }
    
}
