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
$milestones = $projectController->getMilestones($projectId);
$project = $projectController->getProjectRepository($projectId);

if (isset($_POST['create_milestone'])) {
    $title = $_POST['title'];
    $description = $_POST['description'];
    $dueDate = $_POST['due_date'];
    $userId = $_SESSION['user']['user_id'];
    $projectController->createMilestone($projectId, $title, $description, $dueDate, $userId);
    header("Location: milestones.php?id=$projectId");
    exit;
}

if (isset($_POST['delete_milestone'])) {
    $milestoneId = $_POST['milestone_id'];
    $userId = $_SESSION['user']['user_id'];
    $projectController->deleteMilestone($milestoneId, $userId);
    header("Location: milestones.php?id=$projectId");
    exit;
}

include '../partials/_navbar.php'

?>
<div class="relative container mx-auto my-12 lg:my-20 md:px-20 px-4">
    
    <!-- Milestone Title -->
    <h1 class="text-3xl font-bold text-white mb-6">Milestones for <?php echo $project['title']; ?></h1>

    <!-- Milestone Creation Form (for project owner) -->
    <?php if ($_SESSION['user']['user_id'] == $project['user_id']): ?>
    <div class="mb-8">
      <form method="POST" class="space-y-6">
        <div>
          <input class="w-full bg-gray-800 py-3 px-4 text-base text-white rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600" type="text" name="title" placeholder="Milestone Title" required />
        </div>
        <div>
          <textarea class="w-full bg-gray-800 py-3 px-4 text-base text-white rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600" name="description" placeholder="Milestone Description"></textarea>
        </div>
        <div>
          <input class="w-full bg-gray-800 py-3 px-4 text-white rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600" type="date" name="due_date" required />
        </div>
        <button class="w-full py-3 bg-purple-600 hover:bg-purple-700 text-white font-bold rounded-full transition-all" type="submit" name="create_milestone">Create Milestone</button>
      </form>
    </div>
    <?php endif; ?>

    <!-- Milestone List -->
    <ul class="space-y-6">
      <?php foreach ($milestones as $milestone): ?>
      <li class="bg-gray-700 p-6 rounded-lg shadow-lg">
        <h3 class="text-2xl font-semibold text-white mb-2"><?php echo $milestone['title']; ?></h3>
        <p class="text-gray-400 mb-4"><?php echo $milestone['description']; ?></p>
        <p class="text-gray-400 mb-4">Due Date: <?php echo $milestone['due_date']; ?></p>
        
        <!-- Delete Milestone Button -->
        <form method="POST" class="flex space-x-4">
          <input type="hidden" name="milestone_id" value="<?php echo $milestone['id']; ?>" />
          <button class="px-4 py-2 bg-red-600 hover:bg-red-700 text-white font-bold rounded-full transition-all" type="submit" name="delete_milestone">Delete Milestone</button>
        </form>
      </li>
      <?php endforeach; ?>
    </ul>
</div>
<?php include '../partials/_footer.php' ?>
