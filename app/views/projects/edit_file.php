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
$fileName = urldecode($_GET['file']);

$project = $projectController->getProjectRepository($projectId);
$filePath = "../../../public/uploads/projects/" . $project['root_folder'] . "/" . $fileName;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  // Save the updated file content
  file_put_contents($filePath, $_POST['file_content']);
  // Save the contribution
  if ($_SESSION['user']['user_id'] != $project['user_id']) {
    $userId = $_SESSION['user']['user_id'];
    $fullName = $_SESSION['user']['full_name'];
    $projectController->saveContribution($projectId, $userId, $fullName);
  }
  echo "File updated successfully!";
}

$content = file_get_contents($filePath);

$allowEdit = $project['allow_edit'];
$isOwner = $_SESSION['user']['user_id'] == $project['user_id'];
include '../partials/_navbar.php'

?>


<!-- JavaScript to handle button visibility -->
<script>
  function onContribute() {
    document.getElementById('edit-file').style.display = 'none';
    document.getElementById('file-content').style.display = 'none';
    document.getElementById('cancel-button').style.display = 'inline';
    document.getElementById('editable-form').style.display = 'block';
  }

  function onCancel() {
    document.getElementById('edit-file').style.display = 'inline';
    document.getElementById('cancel-button').style.display = 'none';
    document.getElementById('editable-form').style.display = 'none';
    document.getElementById('file-content').style.display = 'block';
  }
</script>

<div class="relative container mx-auto my-12 lg:my-20 md:px-20 px-4">
  <div class="bg-gradient-to-r from-purple-600 to-indigo-600 text-white p-7 rounded-lg shadow-xl flex justify-between items-center mb-12 animate-fadeIn">
    <h1 class="text-3xl font-extrabold tracking-tight">File: <?php echo htmlspecialchars($fileName); ?></h1>
    <?php if ($allowEdit || $isOwner): ?>
      <div class="">
        <button id="edit-file" onclick="onContribute()" class="bg-gradient-to-r from-green-400 via-teal-400 to-blue-400 text-white px-6 py-3 rounded-full shadow-lg transition duration-300 transform hover:scale-110 hover:bg-opacity-90">Contribute in this file</button>
        <button id="cancel-button" style="display:none;" onclick="onCancel()" class="px-4 py-2 text-white bg-gray-600 hover:bg-gray-700 rounded-md transition duration-300">Cancel</button>
      </div>
    <?php endif; ?>
  </div>


  <!-- Editable Form (Hidden by Default) -->
  <div id="editable-form" style="display:none;">
    <form method="POST" class="mb-6">
      <textarea name="file_content" rows="10" class="w-full p-4 text-white bg-gray-900 border border-gray-700 rounded-lg focus:outline-none focus:border-blue-500"><?php echo htmlspecialchars($content); ?></textarea>
      <button type="submit" class="mt-4 px-6 py-2 text-white bg-gradient-to-r from-teal-400 to-green-500 hover:bg-green-700 rounded-md transition duration-300">Save Changes</button>
    </form>
  </div>

  <!-- File Content Display -->
  <div id="file-content" class="p-6 bg-gray-900 border border-gray-700 rounded-lg text-white">
    <?php echo nl2br(htmlspecialchars($content)); ?>
  </div>

</div>