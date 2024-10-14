<?php

class Comment
{
    private $db;

    public function __construct($conn)
    {
        $this->db = $conn;
    }

    // Method to create a comment for a specific forum
    public function createComment($forumId, $userId, $content)
    {
        $query = "INSERT INTO comments (forum_id, user_id, content) VALUES (?, ?, ?)";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param('iis', $forumId, $userId, $content);

        return $stmt->execute();
    }

    // Optional: Method to get comments for a specific forum
    public function getCommentsByForum($forumId)
    {
        $query = "SELECT comments.id, comments.content, comments.created_at, users.full_name, users.profile_picture 
                  FROM comments 
                  INNER JOIN users ON comments.user_id = users.user_id 
                  WHERE comments.forum_id = ?
                  ORDER BY comments.created_at ASC";

        $stmt = $this->db->prepare($query);
        $stmt->bind_param('i', $forumId);
        $stmt->execute();
        $result = $stmt->get_result();

        $comments = [];
        while ($row = $result->fetch_assoc()) {
            $comments[] = $row;
        }
        return $comments;
    }
}
