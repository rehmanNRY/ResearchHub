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

$projects = $projectController->listProjects();

include '../partials/_navbar.php'


?>

<div class="relative container mx-auto my-12 lg:my-20 md:px-20 px-4">
    <h1 class="text-3xl font-bold text-white mb-6">All Projects</h1>
    <ul class="space-y-6">
      <!-- PHP Loop to generate project list -->
      <?php foreach ($projects as $project): ?>
      <li class="bg-gray-700 p-6 rounded-lg hover:bg-gray-600 transition-all">
        <a href="repository.php?id=<?php echo $project['id']; ?>" class="block text-white">
          <h3 class="text-xl font-semibold mb-2"><?php echo $project['title']; ?></h3>
          <p class="text-gray-400"><?php echo substr($project['description'], 0, 50) . '...'; ?></p>
        </a>
      </li>
      <?php endforeach; ?>
    </ul>
</div>

<?php include '../partials/_footer.php' ?>
