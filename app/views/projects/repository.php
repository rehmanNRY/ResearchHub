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
$project = $projectController->getProjectRepository($projectId);

$rootFolder = "../../../public/uploads/projects/" . $project['root_folder'];
$files = scandir($rootFolder);

// Handle project deletion
if (isset($_POST['delete'])) {
    $userId = $_SESSION['user']['user_id'];
    $projectController->deleteProject($projectId, $userId);
    header("Location: projects_list.php");
    exit;
}

// Handle allow_edit toggle
if (isset($_POST['toggle_allow_edit'])) {
    $userId = $_SESSION['user']['user_id'];
    $allowEdit = $project['allow_edit'] ? 0 : 1;
    $projectController->updateAllowEdit($projectId, $allowEdit, $userId);
    header("Location: repository.php?id=$projectId");
    exit;
}
$isProjectOwner = ($_SESSION['user']['user_id'] == $project['user_id']);

include '../partials/_navbar.php'

?>

<div class="relative container mx-auto my-12 lg:my-20 md:px-20 px-4">
    
    <!-- Project Title and Description -->
    <h1 class="text-3xl font-bold text-white mb-6"><?php echo $project['title']; ?></h1>
    <p class="text-gray-400 mb-8"><?php echo $project['description']; ?></p>

    <!-- Manage Milestones and Task Board (for project owner) -->
    <?php if ($isProjectOwner): ?>
    <div class="mb-8">
      <a href="milestones.php?id=<?php echo $projectId; ?>" class="text-purple-500 hover:underline mr-4">Manage Milestones</a>
      <a href="task_board.php?id=<?php echo $projectId; ?>" class="text-purple-500 hover:underline">Manage Task Board</a>
    </div>
    <?php endif; ?>

    <!-- Delete and Toggle Edit Buttons (for project owner) -->
    <?php if ($isProjectOwner): ?>
    <div class="mb-8 flex space-x-4">
      <form method="POST">
        <button class="px-4 py-2 bg-red-600 hover:bg-red-700 text-white font-bold rounded-full transition-all" name="delete">Delete Project</button>
      </form>
      
      <form method="POST">
        <button class="px-4 py-2 bg-blue-600 hover:bg-blue-700 text-white font-bold rounded-full transition-all" name="toggle_allow_edit">
          <?php echo $project['allow_edit'] ? 'Disable Editing' : 'Enable Editing'; ?>
        </button>
      </form>
    </div>
    <?php endif; ?>

    <!-- Files in Repository -->
    <h2 class="text-2xl font-semibold text-white mb-4">Files in Repository</h2>
    <ul class="space-y-4">
      <?php foreach ($files as $file): ?>
        <?php if ($file != '.' && $file != '..'): ?>
        <li class="bg-gray-700 p-4 rounded-lg hover:bg-gray-600 transition-all">
          <a href="edit_file.php?id=<?php echo $projectId; ?>&file=<?php echo urlencode($file); ?>" class="text-white">
            <?php echo $file; ?>
          </a>
        </li>
        <?php endif; ?>
      <?php endforeach; ?>
    </ul>

    <!-- View Contributions -->
    <div class="mt-8">
      <a href="contributions.php?id=<?php echo $projectId; ?>" class="text-purple-500 hover:underline">View Contributions</a>
    </div>

</div>
