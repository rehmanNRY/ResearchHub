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
    <h1 class="text-3xl font-bold text-white mb-6">Contributions</h1>

    <!-- Contributions Table -->
    <div class="overflow-x-auto">
      <table class="min-w-full table-auto text-white">
        <thead>
          <tr class="bg-gray-800">
            <th class="py-3 px-6 text-left font-semibold text-gray-400">User ID</th>
            <th class="py-3 px-6 text-left font-semibold text-gray-400">Full Name</th>
            <th class="py-3 px-6 text-left font-semibold text-gray-400">Last Contribution</th>
          </tr>
        </thead>
        <tbody class="divide-y divide-gray-700">
          <?php foreach ($contributions as $contribution): ?>
          <tr class="bg-gray-900">
            <td class="py-4 px-6"><?php echo $contribution['user_id']; ?></td>
            <td class="py-4 px-6"><?php echo $contribution['full_name']; ?></td>
            <td class="py-4 px-6"><?php echo $contribution['last_contribution']; ?></td>
          </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>

</div>



<?php include '../partials/_footer.php' ?>
