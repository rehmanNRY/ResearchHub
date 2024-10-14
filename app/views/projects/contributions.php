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
$contributions = $projectController->getContributions($projectId);
include '../partials/_navbar.php'

?>

<div class="relative container mx-auto my-12 lg:my-20 md:px-20 px-4">
  
  <!-- Contributions Title -->
  <div class="bg-gradient-to-r from-purple-600 to-indigo-600 text-white p-8 rounded-lg shadow-xl flex justify-between items-center mb-12 animate-fadeIn">
    <h1 class="text-5xl font-extrabold tracking-tight">Contributions (Total: <?php echo count($contributions); ?>)</h1>
    <a href="/researchhub_project/app/views/projects/repository.php?id=<?php echo $projectId; ?>" class="bg-gradient-to-r from-green-400 via-teal-400 to-blue-400 text-white px-6 py-3 rounded-full shadow-lg transition duration-300 transform hover:scale-110 hover:bg-opacity-90">Make contribution</a>
  </div>
  <!-- Contributions Table -->
  <div class="overflow-x-auto bg-gray-800 rounded-lg shadow-lg p-6">
    <table class="min-w-full table-auto text-white">
      <thead>
        <tr class="bg-gradient-to-r from-gray-700 via-gray-800 to-gray-900 text-left text-gray-400 uppercase tracking-wider text-sm font-bold">
          <th class="py-4 px-6">User ID</th>
          <th class="py-4 px-6">Full Name</th>
          <th class="py-4 px-6">Last Contribution</th>
        </tr>
      </thead>
      <tbody class="divide-y divide-gray-700">
        <?php foreach ($contributions as $contribution): ?>
        <tr class="bg-gray-900">
          <td class="py-4 px-6 font-medium text-indigo-400"><?php echo $contribution['user_id']; ?></td>
          <td class="py-4 px-6 font-medium text-pink-400"><?php echo $contribution['full_name']; ?></td>
          <td class="py-4 px-6 text-gray-300"><?php echo $contribution['last_contribution']; ?></td>
        </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>

</div>


<?php include '../partials/_footer.php' ?>
