<?php
class User {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function signup($full_name, $username, $email, $password) {
        $passwordHash = password_hash($password, PASSWORD_DEFAULT); // Hash the password
        $query = "INSERT INTO users (full_name, username, email, password) VALUES ('$full_name', '$username', '$email', '$passwordHash')";
        $result = $this->db->query($query);
        // return $result;
        if($result){
            $query = "SELECT * FROM users WHERE username = '$username'";
            $result = $this->db->query($query);
            if ($result->num_rows > 0) {
                $user = $result->fetch_assoc();
                $_SESSION['user'] = $user;
                return true;
            }
            return false;
        }
    }

    public function login($username, $password) {
        $username = $this->db->escape_string($username);
        $query = "SELECT * FROM users WHERE username = '$username'";
        $result = $this->db->query($query);

        if ($result->num_rows > 0) {
            $user = $result->fetch_assoc();
            if (password_verify($password, $user['password'])) {
                $_SESSION['user'] = $user;
                return true;
            }
        }
        return false;
    }
    
}

