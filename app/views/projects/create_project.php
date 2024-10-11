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

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $db->escape_string($_POST['title']);
    $description = $db->escape_string($_POST['description']);
    $files = $_FILES['project_files'];
    $allow_edit = intval($_POST['allow_edit']);

    // Assume logged-in user data is stored in session
    $userId = $_SESSION['user']['user_id'];

    $projectController->createProject($title, $description, $files, $allow_edit, $userId);
    header("Location: projects_list.php");
    exit;
}

include '../partials/_navbar.php'


?>


<div class="relative container mx-auto my-12 lg:my-20 md:px-20 px-4">
  <div class="relative z-1 flex items-center h-auto mb-5 p-8 border border-[#ffffff1a] rounded-3xl overflow-hidden lg:p-20 xl:h-auto bg-gradient-to-r from-gray-950 to-gray-900">
    <div class="absolute top-0 right-8 w-full h-full pointer-events-none md:w-1/2 md:block hidden">
      <img class="w-full h-full object-cover" alt="Signup Form" src="https://silver-sunshine-319abc.netlify.app/assets/service-1-bvSONSha.png">
    </div>

    <div class="relative z-1 max-w-[32rem] w-full mr-auto text-white lg:w-1/2">
      <h4 class="text-3xl font-bold mb-6">Create New Project</h4>
      <form method="POST" enctype="multipart/form-data">
        <div class="mb-6 text-n-3">Fill in the details below to create your project</div>

        <div class="flex flex-col mb-6">
          <label class="text-base text-n-1 mb-2" for="title">Project Title</label>
          <input class="bg-n-7 py-3 px-4 text-base text-n-1 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600" id="title" type="text" placeholder="Project Title" name="title" required>
        </div>


        <div class="flex flex-col mb-6">
          <label class="text-base mb-2" for="description">Project Description</label>
          <textarea class="bg-n-7 py-3 px-4 text-base text-n-1 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600" id="description" name="description" placeholder="Project Description" rows="4" required></textarea>
        </div>

        <div class="flex items-center mb-6">
          <label class="text-base mr-4" for="allow_edit">Allow other users to edit files:</label>
          <input required class="h-5 w-5 bg-n-7 rounded focus:outline-none focus:ring-2 focus:ring-purple-600" id="allow_edit" type="checkbox" name="allow_edit" value="1">
        </div>

        <div class="flex flex-col mb-6">
          <label class="text-base mb-2" for="project_files">Upload Project Files</label>
          <input required class="bg-n-7 py-3 px-4 text-base rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600" id="project_files" type="file" name="project_files[]" webkitdirectory multiple>
        </div>

        <button class="w-full py-3 bg-purple-600 hover:bg-purple-700 text-white font-bold rounded-full transition-all" type="submit">Create Project</button>
      </form>
    </div>
  </div>

</div>


<?php include '../partials/_footer.php' ?>