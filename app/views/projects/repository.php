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
  <div class="flex items-center justify-between mb-8">
  <h1 class="text-5xl font-bold text-white tracking-tight hover:underline transition-all duration-300 cursor-pointer">
    <?php echo $project['title']; ?>
  </h1>
  <!-- Delete and Toggle Edit Buttons (for project owner) -->
  <?php if ($isProjectOwner): ?>
    <div class="flex space-x-4">
      <form method="POST" class="relative group">
        <button class="px-5 py-2 bg-red-600 hover:bg-red-700 text-white rounded-lg transition-all duration-300 flex items-center">
          <svg class="w-5 h-5 mr-1 transition-transform group-hover:scale-110" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
          </svg>
          Delete Project
        </button>
      </form>

      <form method="POST" class="relative group">
        <button class="px-5 py-2 bg-blue-600 hover:bg-blue-700 text-white rounded-lg transition-all duration-300 flex items-center">
          <svg class="w-5 h-5 mr-1 transition-transform group-hover:scale-110" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12H9m0 0v4m0-4V8m0 4h6M10 8h6m-7 8h6m-7 0h1.5a3 3 0 003-3v-4.5A3 3 0 0015.5 8H18a3 3 0 013 3v4a3 3 0 01-3 3h-1.5a3 3 0 00-3-3H10z" />
          </svg>
          <?php echo $project['allow_edit'] ? 'Disable Editing' : 'Enable Editing'; ?>
        </button>
      </form>
    </div>
  <?php endif; ?>
</div>

<p class="text-gray-300 mb-6 text-lg leading-relaxed">
  <?php echo $project['description']; ?>
</p>

<div class="flex space-x-6 mb-8">
  <a href="contributions.php?id=<?php echo $projectId; ?>" class="bg-gradient-to-r from-purple-500 to-purple-700 text-white font-semibold px-5 py-2 rounded-lg hover:from-purple-600 hover:to-purple-800 transition-all duration-300">
    View Contributions
  </a>
  <a href="milestones.php?id=<?php echo $projectId; ?>" class="bg-gradient-to-r from-purple-500 to-purple-700 text-white font-semibold px-5 py-2 rounded-lg hover:from-purple-600 hover:to-purple-800 transition-all duration-300">
    Manage Milestones
  </a>
  <a href="task_board.php?id=<?php echo $projectId; ?>" class="bg-gradient-to-r from-purple-500 to-purple-700 text-white font-semibold px-5 py-2 rounded-lg hover:from-purple-600 hover:to-purple-800 transition-all duration-300">
    Manage Task Board
  </a>
</div>



  <!-- Files in Repository -->
  <h2 class="text-3xl font-semibold text-white mb-4">Files in Repository</h2>
  <ul class="space-y-4">
    <?php foreach ($files as $file): ?>
      <?php if ($file != '.' && $file != '..'): ?>
        <li class="bg-gray-800 p-4 rounded-lg hover:bg-gray-700 transition-all transform hover:scale-105">
          <a href="edit_file.php?id=<?php echo $projectId; ?>&file=<?php echo urlencode($file); ?>" class="text-white font-medium flex items-center">
            <span class="pr-2 text-2xl text-purple-500"><i class='bx bx-file'></i></span><?php echo ucwords($file); ?>
          </a>
        </li>
      <?php endif; ?>
    <?php endforeach; ?>
  </ul>
</div>

<style>
  /* Add smooth animation for buttons and links */
  button,
  a {
    transition: transform 0.3s ease-in-out, background-color 0.3s ease-in-out;
  }

  /* Hover effect on list items */
  li {
    opacity: 0;
    transform: translateY(20px);
    animation: fadeInUp 0.5s ease forwards;
  }

  li:nth-child(odd) {
    animation-delay: 0.1s;
  }

  li:nth-child(even) {
    animation-delay: 0.2s;
  }

  @keyframes fadeInUp {
    to {
      opacity: 1;
      transform: translateY(0);
    }
  }
</style>