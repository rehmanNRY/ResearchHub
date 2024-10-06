<?php

class Forum
{
    private $db;

    public function __construct($conn)
    {
        $this->db = $conn;
    }

    public function createForum($userId, $title, $content)
    {
        $query = "INSERT INTO forums (user_id, title, content) VALUES (?, ?, ?)";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param('iss', $userId, $title, $content);

        return $stmt->execute();
    }

    // Method to get all forums with user details and comments
    public function getAllForums()
    {
        $query = "
            SELECT 
                forums.id AS forum_id, 
                forums.title, 
                forums.content, 
                forums.created_at AS forum_created_at, 
                users.user_id AS forum_user_id, 
                users.full_name AS forum_user_full_name, 
                users.profile_picture AS forum_user_profile_picture,
                comments.id AS comment_id,
                comments.content AS comment_content,
                comments.created_at AS comment_created_at,
                comments.user_id AS comment_user_id,
                comment_user.full_name AS comment_user_full_name,
                comment_user.profile_picture AS comment_user_profile_picture
            FROM forums 
            INNER JOIN users ON forums.user_id = users.user_id
            LEFT JOIN comments ON forums.id = comments.forum_id
            LEFT JOIN users AS comment_user ON comments.user_id = comment_user.user_id
            ORDER BY forums.created_at DESC, comments.created_at ASC
        ";

        $result = $this->db->query($query);

        if ($result->num_rows > 0) {
            $forums = [];
            while ($row = $result->fetch_assoc()) {
                $forumId = $row['forum_id'];
                // Initialize forum array if it doesn't exist
                if (!isset($forums[$forumId])) {
                    $forums[$forumId] = [
                        'id' => $forumId,
                        'title' => $row['title'],
                        'content' => $row['content'],
                        'created_at' => $row['forum_created_at'],
                        'user' => [
                            'user_id' => $row['forum_user_id'],
                            'full_name' => $row['forum_user_full_name'],
                            'profile_picture' => $row['forum_user_profile_picture'],
                        ],
                        'comments' => []
                    ];
                }

                // Check if there is a comment
                if ($row['comment_id'] !== null) {
                    $forums[$forumId]['comments'][] = [
                        'id' => $row['comment_id'],
                        'content' => $row['comment_content'],
                        'created_at' => $row['comment_created_at'],
                        'user' => [
                            'user_id' => $row['comment_user_id'],
                            'full_name' => $row['comment_user_full_name'],
                            'profile_picture' => $row['comment_user_profile_picture'],
                        ]
                    ];
                }
            }
            return array_values($forums); // Return re-indexed array
        }

        return [];
    }
}
