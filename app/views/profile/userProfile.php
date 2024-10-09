<?php
if (session_status() === PHP_SESSION_NONE) {
  session_start();
}

if (!isset($_SESSION['user'])) {
  header('Location: ../../../index.php');
  exit();
}

require_once '../../controllers/FollowController.php'; // Include the FollowController

$loggedInUserId = $_SESSION['user']['user_id']; // The logged-in user's ID
$viewedUserId = $_GET['user_id']; // The user profile being viewed

// Initialize the FollowController
$followController = new FollowController();

// Get the details of the viewed user (you might need a UserController for this)
$user = $_SESSION['user'];

// Check if logged-in user is following this user
$isFollowing = $followController->followModel->isFollowing($loggedInUserId, $viewedUserId);

// Fetch the followers and following list of the viewed user
$followers = $followController->showFollowers($viewedUserId);
$following = $followController->showFollowing($viewedUserId);

include '../../controllers/ProfileController.php';
// Instantiate Profile class
$profile = new Profile($db);

// Get Affiliations and Interests
$affiliations = $profile->getAffiliations($viewedUserId);
$interests = $profile->getInterests($viewedUserId);
$user_data = $profile->getUserDetail($viewedUserId);


include '../partials/_navbar.php';


?>

<section class="min-h-screen bg-gray-900 text-gray-200 font-sans py-12">
  <div class="container mx-auto px-6 lg:px-12">
    <!-- Profile Header -->
    <div class="bg-gradient-to-r from-purple-700 to-purple-900 text-white p-8 rounded-lg shadow-xl flex justify-between items-center mb-12">
      <div class="flex items-center space-x-6">
        <!-- Profile Picture -->
        <img src="<?= '/researchhub_project/public/uploads/profile_pics/' . htmlspecialchars($user_data[0]['profile_picture']) ?>" alt="User Avatar" class="w-24 h-24 rounded-full shadow-lg border-4 border-purple-500">
        <div>
          <h1 class="text-4xl font-bold"><?php echo htmlspecialchars($user_data[0]['full_name']); ?></h1>
          <?php if ($affiliations && $affiliations[0] ): ?>

          <p class="text-sm text-purple-300"><?php echo htmlspecialchars($affiliations[0]['position']) . " at " . htmlspecialchars($affiliations[0]['institution_name']); ?></p>
          <?php endif; ?>

          <p class="text-sm">Followers: <span class="font-semibold"><?php echo $followers->num_rows; ?></span> | Following: <span class="font-semibold"><?php echo $following->num_rows; ?></span></p>
        </div>
      </div>
      <div class="flex">
        <!-- Follow/Unfollow Button -->
        <?php if ($loggedInUserId == $viewedUserId): ?>
          <button class="bg-gradient-to-r from-green-500 to-teal-500 text-white px-4 py-2 rounded-lg shadow-md hover:from-green-600 hover:to-teal-600">Edit Profile</button>
          <?php else: ?>
          <div>
            <?php if ($isFollowing): ?>
              <form method="POST" action="unfollow.php">
                <input type="hidden" name="follower_id" value="<?php echo $loggedInUserId; ?>">
                <input type="hidden" name="followed_id" value="<?php echo $viewedUserId; ?>">
                <button type="submit" class="bg-gradient-to-r from-red-500 to-red-600 text-white px-4 py-2 rounded-lg shadow-md hover:from-red-600 hover:to-red-700 transition duration-200">Unfollow</button>
              </form>
            <?php else: ?>
              <form method="POST" action="follow.php">
                <input type="hidden" name="follower_id" value="<?php echo $loggedInUserId; ?>">
                <input type="hidden" name="followed_id" value="<?php echo $viewedUserId; ?>">
                <button type="submit" class="bg-gradient-to-r from-blue-500 to-blue-600 text-white px-4 py-2 rounded-lg shadow-md hover:from-blue-600 hover:to-blue-700 transition duration-200">Follow</button>
              </form>
            <?php endif; ?>
          </div>
        <?php endif; ?>
      </div>
    </div>

    <div class="bg-purple-800 p-6 rounded-lg shadow-xl">
      <h2 class="text-2xl font-bold mb-4">Bio</h2>
      <p class="text-gray-300 mb-4"><?php echo htmlspecialchars($user_data[0]['bio']); ?></p>
      <h3 class="text-xl font-semibold mb-2">Research Interests</h3>
      <ul class="text-purple-400 mb-2">
        <?php foreach ($interests as $interest): ?>
          <li><?php echo htmlspecialchars($interest['interest']); ?></li>
        <?php endforeach; ?>
      </ul>
    </div>

    <!-- Followers and Following Section -->
    <div class="bg-gray-800 p-6 rounded-lg shadow-xl mt-8">
      <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        <!-- Followers Section -->
        <div>
          <h3 class="text-2xl font-bold text-white mb-4">Followers</h3>
          <?php if ($followers->num_rows > 0): ?>
            <ul class="space-y-4">
              <?php while ($follower = $followers->fetch_assoc()): ?>
                <li class="flex items-center space-x-4 p-4 bg-gray-700 rounded-lg shadow hover:bg-gray-600 transition-all">
                  <!-- Profile Picture -->
                  <img 
                  src="<?= '/researchhub_project/public/uploads/profile_pics/' . htmlspecialchars($follower['profile_picture']) ?>"
                  alt="User Avatar" class="w-12 h-12 rounded-full object-cover">
                  <!-- User Details -->
                  <div>
                    <p class="font-semibold text-white"><?php echo htmlspecialchars($follower['full_name']); ?></p>
                    <p class="text-sm text-gray-400">@<?php echo htmlspecialchars($follower['username']); ?></p>
                  </div>
                </li>
              <?php endwhile; ?>
            </ul>
          <?php else: ?>
            <p class="text-gray-400">No followers yet.</p>
          <?php endif; ?>
        </div>

        <!-- Following Section -->
        <div>
          <h3 class="text-2xl font-bold text-white mb-4">Following</h3>
          <?php if ($following->num_rows > 0): ?>
            <ul class="space-y-4">
              <?php while ($followed = $following->fetch_assoc()): ?>
                <li class="flex items-center space-x-4 p-4 bg-gray-700 rounded-lg shadow hover:bg-gray-600 transition-all">
                  <!-- Profile Picture -->
                  <img 
                  src="<?= '/researchhub_project/public/uploads/profile_pics/' . htmlspecialchars($followed['profile_picture']); ?>" alt="User Avatar" class="w-12 h-12 rounded-full object-cover">

                  <!-- User Details -->
                  <div>
                    <p class="font-semibold text-white"><?php echo htmlspecialchars($followed['full_name']); ?></p>
                    <p class="text-sm text-gray-400">@<?php echo htmlspecialchars($followed['username']); ?></p>
                  </div>
                </li>
              <?php endwhile; ?>
            </ul>
          <?php else: ?>
            <p class="text-gray-400">Not following anyone.</p>
          <?php endif; ?>
        </div>
      </div>
    </div>

  </div>
</section>

<?php include '../partials/_footer.php'; ?>