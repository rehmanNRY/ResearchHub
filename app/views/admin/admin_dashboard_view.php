<?php
if (session_status() === PHP_SESSION_NONE) {
  session_start();
}

if (!isset($_SESSION['user']) || $_SESSION['user']['username'] !== 'admin4466') {
  header('Location: ../../../index.php');
  exit();
}

include '../partials/_navbar.php';
include '../../controllers/AdminController.php';

$controller = new AdminController();
$users = $controller->getAllUsers();
$flagged_content = $controller->getFlaggedContent();
$activity = $controller->getPlatformActivity();


?>
<div class="relative container mx-auto my-12 lg:my-20 px-6 lg:px-12">

<!-- Admin Dashboard Header -->
<div class="flex items-center justify-between mb-12">
  <h1 class="text-4xl lg:text-6xl font-extrabold text-gray-50 tracking-wide">Admin Dashboard</h1>
  <button class="bg-blue-600 hover:bg-blue-500 text-white py-2 px-6 rounded-lg shadow-lg transition-transform transform hover:scale-105">Admin Tools</button>
</div>

<!-- Platform Activity Section -->
<section class="bg-gradient-to-r from-purple-700 to-indigo-800 text-white p-6 rounded-lg shadow-xl mb-12">
  <h2 class="text-2xl font-semibold mb-4">Platform Activity</h2>
  <ul class="space-y-3 text-lg">
    <li class="flex justify-between"><span>Total Users:</span> <span><?php echo $activity['total_users']; ?></span></li>
    <li class="flex justify-between"><span>Total Resources:</span> <span><?php echo $activity['total_resources']; ?></span></li>
    <li class="flex justify-between"><span>Flagged Content:</span> <span><?php echo $activity['flagged_content']; ?></span></li>
  </ul>
</section>

<!-- Users Section -->
<section class="bg-gray-900 p-6 rounded-lg shadow-xl mb-12">
  <h2 class="text-2xl font-semibold text-gray-50 mb-6">Users</h2>
  <div class="overflow-x-auto">
    <table class="min-w-full text-white border-collapse">
      <thead class="bg-gray-800">
        <tr class="text-left">
          <th class="pb-3 pt-6 px-4 pl-6">ID</th>
          <th class="pb-3 pt-6 px-4">Username</th>
          <th class="pb-3 pt-6 px-4">Email</th>
          <th class="pb-3 pt-6 px-4">Join Date</th>
          <th class="pb-3 pt-6 px-4">Status</th>
          <th class="pb-3 pt-6 px-4">Actions</th>
        </tr>
      </thead>
      <tbody class="divide-y divide-gray-700 bg-gray-800">
        <?php foreach ($users as $user): ?>
        <tr class="hover:bg-gray-700 transition-colors">
          <td class="py-4 px-4 pl-6"><?php echo $user['user_id']; ?></td>
          <td class="py-4 px-4"><?php echo $user['username']; ?></td>
          <td class="py-4 px-4"><?php echo $user['email']; ?></td>
          <td class="py-4 px-4"><?php echo $user['created_at']; ?></td>
          <td class="py-4 px-4"><?php echo $user['status']; ?></td>
          <td class="py-4 px-4 space-x-4">
            <form action="edit_user_form.php" method="POST" class="inline-block">
              <input type="hidden" name="user_id" value="<?php echo $user['user_id']; ?>">
              <button type="submit" class="bg-blue-500 hover:bg-blue-400 text-white py-2 px-4 rounded-md shadow-md transition-transform transform hover:scale-105">Edit</button>
            </form>
            <form action="delete_user.php" method="POST" onsubmit="return confirm('Are you sure?')" class="inline-block">
              <input type="hidden" name="user_id" value="<?php echo $user['user_id']; ?>">
              <button type="submit" class="bg-red-500 hover:bg-red-400 text-white py-2 px-4 rounded-md shadow-md transition-transform transform hover:scale-105">Delete</button>
            </form>
          </td>
        </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
</section>

<!-- Flagged Content Section -->
<section class="bg-gray-900 p-6 rounded-lg shadow-xl">
  <h2 class="text-2xl font-semibold text-gray-50 mb-6">Flagged Content</h2>
  <div class="overflow-x-auto">
    <table class="min-w-full text-white border-collapse">
      <thead class="bg-gray-800">
        <tr class="text-left">
          <th class="py-3 px-4">ID</th>
          <th class="py-3 px-4">Resource Title</th>
          <th class="py-3 px-4">Type</th>
          <th class="py-3 px-4">User ID</th>
          <th class="py-3 px-4">Reason</th>
          <th class="py-3 px-4">Date</th>
          <th class="py-3 px-4">Actions</th>
        </tr>
      </thead>
      <tbody class="divide-y divide-gray-700 bg-gray-800">
        <?php foreach ($flagged_content as $content): ?>
        <tr class="hover:bg-gray-700 transition-colors">
          <td class="py-4 px-4"><?php echo $content['flag_id']; ?></td>
          <td class="py-4 px-4"><?php echo $content['title']; ?></td>
          <td class="py-4 px-4"><?php echo $content['type']; ?></td>
          <td class="py-4 px-4"><?php echo $content['user_id']; ?></td>
          <td class="py-4 px-4"><?php echo $content['reason']; ?></td>
          <td class="py-4 px-4"><?php echo $content['created_at']; ?></td>
          <td class="py-4 px-4 space-x-4">
            <form action="approve_content.php" method="POST" class="inline-block">
              <input type="hidden" name="flag_id" value="<?php echo $content['flag_id']; ?>">
              <button type="submit" class="bg-green-500 hover:bg-green-400 text-white py-2 px-4 rounded-md shadow-md transition-transform transform hover:scale-105">Approve</button>
            </form>
            <form action="delete_content.php" method="POST" onsubmit="return confirm('Are you sure?')" class="inline-block">
              <input type="hidden" name="flag_id" value="<?php echo $content['flag_id']; ?>">
              <button type="submit" class="bg-red-500 hover:bg-red-400 text-white py-2 px-4 rounded-md shadow-md transition-transform transform hover:scale-105">Delete</button>
            </form>
          </td>
        </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
</section>


</div>


<?php include '../partials/_footer.php' ?>