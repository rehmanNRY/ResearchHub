<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

if (!isset($_SESSION['user'])) {
    header('Location: ../../../index.php');
    exit();
}
include '../../config/Database.php';
include '../../controllers/projects/ProjectController.php';

$db = new Database();
$projectController = new ProjectController($db);

$projectId = $_GET['id'];
$tasks = $projectController->getTasks($projectId);
$project = $projectController->getProjectRepository($projectId);

if (isset($_POST['create_task'])) {
    $title = $_POST['title'];
    $description = $_POST['description'];
    $userId = $_SESSION['user']['user_id'];
    $projectController->createTask($projectId, $title, $description, $userId);
    header("Location: task_board.php?id=$projectId");
    exit;
}

if (isset($_POST['update_status'])) {
    $taskId = $_POST['task_id'];
    $status = $_POST['status'];
    $userId = $_SESSION['user']['user_id'];
    $projectController->updateTaskStatus($taskId, $status, $userId);
    header("Location: task_board.php?id=$projectId");
    exit;
}

if (isset($_POST['delete_task'])) {
    $taskId = $_POST['task_id'];
    $userId = $_SESSION['user']['user_id'];
    $projectController->deleteTask($taskId, $userId);
    header("Location: task_board.php?id=$projectId");
    exit;
}

include '../partials/_navbar.php'

?>
<div class="relative container mx-auto my-12 lg:my-20 md:px-20 px-4">
    
    <!-- Task Board Title -->
    <h1 class="text-3xl font-bold text-white mb-6">Task Board for <?php echo $project['title']; ?></h1>

    <!-- Task Creation Form (for project owner) -->
    <?php if ($_SESSION['user']['user_id'] == $project['user_id']): ?>
    <div class="mb-8">
      <form method="POST" class="space-y-6">
        <div>
          <input class="w-full bg-gray-800 py-3 px-4 text-base text-white rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600" type="text" name="title" placeholder="Task Title" required />
        </div>
        <div>
          <textarea class="w-full bg-gray-800 py-3 px-4 text-base text-white rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600" name="description" placeholder="Task Description"></textarea>
        </div>
        <button class="px-7 py-3 bg-purple-600 hover:bg-purple-700 text-white font-bold rounded-full transition-all" type="submit" name="create_task">Create Task</button>
      </form>
    </div>
    <?php endif; ?>

    <!-- Task List -->
    <ul class="space-y-6">
      <?php foreach ($tasks as $task): ?>
      <li class="bg-gray-700 p-6 rounded-lg shadow-lg">
        <h3 class="text-2xl font-semibold text-white mb-2"><?php echo $task['title']; ?></h3>
        <p class="text-gray-400 mb-4"><?php echo $task['description']; ?></p>
        <p class="text-gray-400 mb-4">Status: <?php echo $task['status']; ?></p>
        
        <!-- Task Status Update Form -->
        <form method="POST" class="space-y-4">
          <div>
            <select class="w-full bg-gray-800 py-3 px-4 text-white rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600" name="status">
              <option value="To Do" <?php echo $task['status'] == 'To Do' ? 'selected' : ''; ?>>To Do</option>
              <option value="In Progress" <?php echo $task['status'] == 'In Progress' ? 'selected' : ''; ?>>In Progress</option>
              <option value="Completed" <?php echo $task['status'] == 'Completed' ? 'selected' : ''; ?>>Completed</option>
            </select>
          </div>
          <div class="flex space-x-4">
            <input type="hidden" name="task_id" value="<?php echo $task['id']; ?>" />
            <button class="px-4 py-2 bg-blue-600 hover:bg-blue-700 text-white font-bold rounded-full transition-all" type="submit" name="update_status">Update Status</button>
            <button class="px-4 py-2 bg-red-600 hover:bg-red-700 text-white font-bold rounded-full transition-all" type="submit" name="delete_task">Delete Task</button>
          </div>
        </form>
      </li>
      <?php endforeach; ?>
    </ul>
  </div>

<?php include '../partials/_footer.php' ?>
