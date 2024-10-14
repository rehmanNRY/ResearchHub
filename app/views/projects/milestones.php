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
    <h1 class="text-4xl font-extrabold text-transparent bg-gradient-to-r from-white via-purple-300 to-pink-500 bg-clip-text mb-8">Milestones for <?php echo $project['title']; ?></h1>

    <!-- Milestone Creation Form (for project owner) -->
    <?php if ($_SESSION['user']['user_id'] == $project['user_id']): ?>
    <div class="mb-8">
      <form method="POST" class="space-y-6">
        <div>
          <input class="w-full bg-gray-800 py-4 px-5 text-base text-white rounded-lg focus:outline-none focus:ring-4 focus:ring-purple-600 transition-all" type="text" name="title" placeholder="Milestone Title" required />
        </div>
        <div>
          <textarea class="w-full bg-gray-800 py-4 px-5 text-base text-white rounded-lg focus:outline-none focus:ring-4 focus:ring-purple-600 transition-all" name="description" placeholder="Milestone Description"></textarea>
        </div>
        <div>
          <input class="w-full bg-gray-800 py-4 px-5 text-white rounded-lg focus:outline-none focus:ring-4 focus:ring-purple-600 transition-all" type="date" name="due_date" required />
        </div>
        <button class="w-full py-3 bg-gradient-to-r from-purple-600 to-indigo-600 hover:from-purple-700 hover:to-indigo-700 text-white font-bold rounded-full transition-all" type="submit" name="create_milestone">Create Milestone</button>
      </form>
    </div>
    <?php endif; ?>

    <!-- Milestone List -->
    <ul class="space-y-8">
      <?php foreach ($milestones as $milestone): ?>
      <li class="bg-gray-800 p-6 rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300 ease-in-out">
        <h3 class="text-2xl font-semibold text-indigo-400 mb-2"><?php echo $milestone['title']; ?></h3>
        <p class="text-gray-300 mb-4"><?php echo $milestone['description']; ?></p>
        <p class="text-gray-400 mb-4">Due Date: <?php echo $milestone['due_date']; ?></p>
        
        <!-- Delete Milestone Button -->
        <?php if ($_SESSION['user']['user_id'] == $project['user_id']): ?>
          <form method="POST" class="flex">
            <input type="hidden" name="milestone_id" value="<?php echo $milestone['id']; ?>" />
            <button onclick="return confirm('Are you sure you want to delete this milestone?');" class="px-4 py-2 bg-red-600 hover:bg-red-700 text-white font-bold rounded-full transition-all" type="submit" name="delete_milestone">Delete Milestone</button>
          </form>
        <?php endif; ?>
      </li>
      <?php endforeach; ?>
    </ul>
</div>


<?php include '../partials/_footer.php' ?>
