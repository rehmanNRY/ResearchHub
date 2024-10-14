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

<section class="min-h-screen text-gray-200 font-sans py-16">
  <div class="container mx-auto px-6 lg:px-12">
    <!-- Profile Header -->
    <div class="bg-gradient-to-r from-purple-600 to-indigo-700 text-white p-10 rounded-xl shadow-lg flex flex-col md:flex-row justify-between items-center mb-12 transition-all transform hover:shadow-2xl">
      <div class="flex items-center space-x-8">
        <!-- Profile Picture -->
        <div class="relative">
          <img src="<?= '/researchhub_project/public/uploads/profile_pics/' . htmlspecialchars($user_data[0]['profile_picture']) ?>" alt="User Avatar" class="w-28 h-28 rounded-full border-4 border-indigo-500 shadow-lg transition-transform transform">
          <div class="absolute bottom-0 right-0 w-6 h-6 bg-green-500 border-2 border-white rounded-full"></div> <!-- Online Status -->
        </div>
        <div>
          <h1 class="text-5xl font-extrabold"><?php echo htmlspecialchars($user_data[0]['full_name']); ?></h1>
          <?php if ($affiliations && $affiliations[0] ): ?>
          <p class="text-sm text-purple-200 mt-1"><?php echo htmlspecialchars($affiliations[0]['position']) . " at " . htmlspecialchars($affiliations[0]['institution_name']); ?></p>
          <?php endif; ?>
          <p class="mt-2 text-sm">Followers: <span class="font-semibold"><?php echo $followers->num_rows; ?></span> | Following: <span class="font-semibold"><?php echo $following->num_rows; ?></span></p>
        </div>
      </div>
      <div class="mt-6 md:mt-0">
        <!-- Follow/Unfollow/Edit Button -->
        <?php if ($loggedInUserId == $viewedUserId): ?>
          <a href="/researchhub_project/app/views/profile/editProfile.php" class="bg-gradient-to-r from-green-400 to-teal-500 text-white px-6 py-3 rounded-lg shadow-lg transition-transform transform">Edit Profile</a>
        <?php else: ?>
          <div>
            <?php if ($isFollowing): ?>
              <form method="POST" action="unfollow.php">
                <input type="hidden" name="follower_id" value="<?php echo $loggedInUserId; ?>">
                <input type="hidden" name="followed_id" value="<?php echo $viewedUserId; ?>">
                <button type="submit" class="bg-gradient-to-r from-red-500 to-red-600 text-white px-6 py-3 rounded-lg shadow-lg transition-transform transform">Unfollow</button>
              </form>
            <?php else: ?>
              <form method="POST" action="follow.php">
                <input type="hidden" name="follower_id" value="<?php echo $loggedInUserId; ?>">
                <input type="hidden" name="followed_id" value="<?php echo $viewedUserId; ?>">
                <button type="submit" class="bg-gradient-to-r from-blue-500 to-blue-600 text-white px-6 py-3 rounded-lg shadow-lg transition-transform transform">Follow</button>
              </form>
            <?php endif; ?>
          </div>
        <?php endif; ?>
      </div>
    </div>

    <!-- Bio Section -->
    <div class="bg-gray-800 p-8 rounded-xl shadow-lg mb-8 hover:shadow-2xl transition-all transform">
  <h2 class="text-3xl font-bold mb-4">Bio</h2>
  <p class="text-gray-300 leading-relaxed mb-4">
    <?php 
      if (!isset($user_data[0]['bio']) || trim($user_data[0]['bio']) === '') {
        echo "There is no bio set.";
      } else {
        echo htmlspecialchars($user_data[0]['bio']);
      }
    ?>
  </p>
  
  <h3 class="text-2xl font-semibold mb-2">Research Interests</h3>
  <?php if (empty($interests)): ?>
    <p class="text-gray-300">There are no research interests set.</p>
  <?php else: ?>
    <ul class="list-disc list-inside text-purple-400 space-y-1">
      <?php foreach ($interests as $interest): ?>
        <li><?php echo htmlspecialchars($interest['interest']); ?></li>
      <?php endforeach; ?>
    </ul>
  <?php endif; ?>
</div>


    <!-- Followers and Following Section -->
    <div class="bg-gray-900 p-8 rounded-xl shadow-lg hover:shadow-2xl transition-all transform">
      <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        <!-- Followers Section -->
        <div>
          <h3 class="text-3xl font-bold text-white mb-4">Followers</h3>
          <?php if ($followers->num_rows > 0): ?>
            <ul class="space-y-6">
              <?php while ($follower = $followers->fetch_assoc()): ?>
                <li class="flex items-center space-x-6 p-4 bg-gray-800 rounded-lg shadow hover:bg-gray-700 transition-all transform">
                  <!-- Profile Picture -->
                  <img src="<?= '/researchhub_project/public/uploads/profile_pics/' . htmlspecialchars($follower['profile_picture']) ?>" alt="Follower Avatar" class="w-14 h-14 rounded-full shadow-lg">
                  <!-- User Details -->
                  <div>
                    <p class="font-semibold text-lg text-white"><?php echo htmlspecialchars($follower['full_name']); ?></p>
                    <p class="text-sm text-gray-400">@<?php echo htmlspecialchars($follower['username']); ?></p>
                  </div>
                </li>
              <?php endwhile; ?>
            </ul>
          <?php else: ?>
            <p class="text-gray-500">No followers yet.</p>
          <?php endif; ?>
        </div>

        <!-- Following Section -->
        <div>
          <h3 class="text-3xl font-bold text-white mb-4">Following</h3>
          <?php if ($following->num_rows > 0): ?>
            <ul class="space-y-6">
              <?php while ($followed = $following->fetch_assoc()): ?>
                <li class="flex items-center space-x-6 p-4 bg-gray-800 rounded-lg shadow hover:bg-gray-700 transition-all transform">
                  <!-- Profile Picture -->
                  <img src="<?= '/researchhub_project/public/uploads/profile_pics/' . htmlspecialchars($followed['profile_picture']); ?>" alt="Followed Avatar" class="w-14 h-14 rounded-full shadow-lg">
                  <!-- User Details -->
                  <div>
                    <p class="font-semibold text-lg text-white"><?php echo htmlspecialchars($followed['full_name']); ?></p>
                    <p class="text-sm text-gray-400">@<?php echo htmlspecialchars($followed['username']); ?></p>
                  </div>
                </li>
              <?php endwhile; ?>
            </ul>
          <?php else: ?>
            <p class="text-gray-500">Not following anyone yet.</p>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</section>


<?php include '../partials/_footer.php'; ?>