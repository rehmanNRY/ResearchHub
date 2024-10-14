<?php
class Follow {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    // Function to follow a user
    public function follow($follower_id, $followed_id) {
        $follower_id = $this->db->escape_string($follower_id);
        $followed_id = $this->db->escape_string($followed_id);

        $sql = "INSERT INTO followers (follower_id, followed_id) VALUES ('$follower_id', '$followed_id')";

        return $this->db->query($sql);
    }

    // Function to unfollow a user
    public function unfollow($follower_id, $followed_id) {
        $follower_id = $this->db->escape_string($follower_id);
        $followed_id = $this->db->escape_string($followed_id);

        $sql = "DELETE FROM followers WHERE follower_id = '$follower_id' AND followed_id = '$followed_id'";

        return $this->db->query($sql);
    }

    // Function to check if a user is following another user
    public function isFollowing($follower_id, $followed_id) {
        $follower_id = $this->db->escape_string($follower_id);
        $followed_id = $this->db->escape_string($followed_id);

        $sql = "SELECT * FROM followers WHERE follower_id = '$follower_id' AND followed_id = '$followed_id'";

        $result = $this->db->query($sql);

        return $result->num_rows > 0;
    }

    // Get followers of a user
    public function getFollowers($user_id) {
        $user_id = $this->db->escape_string($user_id);

        $sql = "SELECT users.user_id, users.username, users.full_name, users.profile_picture FROM followers
                JOIN users ON followers.follower_id = users.user_id
                WHERE followers.followed_id = '$user_id'";

        return $this->db->query($sql);
    }

    // Get the users a person is following
    public function getFollowing($user_id) {
        $user_id = $this->db->escape_string($user_id);

        $sql = "SELECT users.user_id, users.username, users.full_name, users.profile_picture FROM followers
                JOIN users ON followers.followed_id = users.user_id
                WHERE followers.follower_id = '$user_id'";

        return $this->db->query($sql);
    }
}
