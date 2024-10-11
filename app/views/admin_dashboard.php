<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Admin Dashboard</h1>

        <div class="section">
            <h2>Users</h2>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($users as $user): ?>
                    <tr>
                        <td><?= $user['user_id'] ?></td>
                        <td><?= $user['full_name'] ?></td>
                        <td><?= $user['email'] ?></td>
                        <td><?= $user['status'] ?></td>
                        <td>
                            <?php if ($user['status'] == 'active'): ?>
                                <a href="ban_user.php?id=<?= $user['user_id'] ?>">Ban</a>
                            <?php else: ?>
                                <a href="unban_user.php?id=<?= $user['user_id'] ?>">Unban</a>
                            <?php endif; ?>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>

        <div class="section">
            <h2>Forums</h2>
            <table>
                <thead>
                    <tr>
                        <th>Forum ID</th>
                        <th>Title</th>
                        <th>Created By</th>
                        <th>Created At</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($forums as $forum): ?>
                    <tr>
                        <td><?= $forum['id'] ?></td>
                        <td><?= $forum['title'] ?></td>
                        <td><?= $forum['user_id'] ?></td>
                        <td><?= $forum['created_at'] ?></td>
                        <td><a href="view_forum_comments.php?id=<?= $forum['id'] ?>">View Comments</a></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>

        <div class="section">
            <h2>Comments</h2>
            <table>
                <thead>
                    <tr>
                        <th>Comment ID</th>
                        <th>Forum ID</th>
                        <th>User</th>
                        <th>Content</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($comments as $comment): ?>
                    <tr>
                        <td><?= $comment['id'] ?></td>
                        <td><?= $comment['forum_id'] ?></td>
                        <td><?= $comment['full_name'] ?></td>
                        <td><?= $comment['content'] ?></td>
                        <td>
                            <a href="delete_comment.php?id=<?= $comment['id'] ?>">Delete</a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
