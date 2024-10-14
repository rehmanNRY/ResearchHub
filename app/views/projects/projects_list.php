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

include '../partials/_navbar.php';

?>

<div class="relative container mx-auto my-12 lg:my-20 md:px-20 px-4">
  <h1 class="text-4xl font-extrabold text-white mb-8 tracking-tight"></h1>
  <div class="bg-gradient-to-r from-purple-600 to-indigo-600 text-white p-8 rounded-lg shadow-xl flex justify-between items-center mb-12 animate-fadeIn">
    <h1 class="text-5xl font-extrabold tracking-tight">All Projects (Total: <?php echo count($projects); ?>)</h1>
    <a href="/researchhub_project/app/views/projects/create_project.php" class="bg-gradient-to-r from-green-400 via-teal-400 to-blue-400 text-white px-6 py-3 rounded-full shadow-lg transition duration-300 transform hover:scale-110 hover:bg-opacity-90">Upload Resource</a>
  </div>
  <ul class="space-y-8">
    <!-- PHP Loop to generate project list -->
    <?php foreach ($projects as $project): ?>
      <li class="bg-gradient-to-r from-gray-800 via-gray-700 to-gray-800 p-8 rounded-lg hover:shadow-xl transition-all transform hover:scale-105">
        <div class="flex justify-between items-center">
          <a href="repository.php?id=<?php echo $project['id']; ?>" class="block text-white w-3/4">
            <h3 class="text-2xl font-semibold mb-4 transition duration-300 ease-in-out hover:text-teal-400">
              <?php echo $project['title']; ?>
            </h3>
            <p class="text-gray-400 transition duration-300 ease-in-out hover:text-gray-300">
              <?php echo substr($project['description'], 0, 50) . '...'; ?>
            </p>
            <div class="mt-4 text-gray-400 text-sm">
              <span class="inline-flex items-center">
                <svg class="w-5 h-5 mr-2 text-teal-400" fill="currentColor" viewBox="0 0 20 20">
                  <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-11H9v4H7v2h6v-2h-2V7z" clip-rule="evenodd"></path>
                </svg>
                Created at: <?php echo date('F j, Y, g:i a', strtotime($project['created_at'])); ?>
              </span>
              <span class="ml-4 inline-flex items-center">
                <svg class="w-5 h-5 mr-2 text-teal-400" fill="currentColor" viewBox="0 0 20 20">
                  <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-11H9v4H7v2h6v-2h-2V7z" clip-rule="evenodd"></path>
                </svg>
                User ID: <?php echo $project['user_id']; ?>
              </span>
            </div>
          </a>
          <?php if ($_SESSION['user']['user_id'] == $project['user_id']): ?>
            <div class="flex space-x-3">
              <a href="repository.php?id=<?php echo $project['id']; ?>" class="bg-teal-500 hover:bg-teal-600 text-white px-4 py-2 rounded-lg shadow-md transition duration-300 transform hover:scale-105">Edit</a>
              <a href="repository.php?id=<?php echo $project['id']; ?>" class="bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded-lg shadow-md transition duration-300 transform hover:scale-105">Delete</a>
            </div>
          <?php endif; ?>

        </div>
        <div class="mt-4">
          <span class="bg-purple-500 text-white px-3 py-1 rounded-full text-xs font-semibold mr-2">Allow Edit: <?php echo $project['allow_edit'] ? 'Yes' : 'No'; ?></span>
          <span class="bg-blue-500 text-white px-3 py-1 rounded-full text-xs font-semibold mr-2">Root Folder: <?php echo $project['root_folder']; ?></span>
        </div>
      </li>
    <?php endforeach; ?>
  </ul>
</div>

<style>
  /* Fade-in animation for list items */
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



<?php include '../partials/_footer.php' ?>