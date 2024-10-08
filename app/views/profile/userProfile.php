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
echo var_dump($user_data);
echo var_dump($affiliations);
echo  var_dump($interests);

?>


<section class="min-h-screen bg-gray-900 text-gray-200 font-sans py-12">
  <div class="container mx-auto px-6 lg:px-12">
    <!-- Profile Header -->
    <div class="bg-gradient-to-r from-purple-700 to-purple-900 text-white p-8 rounded-lg shadow-xl flex justify-between items-center mb-12">
      <div class="flex items-center space-x-6">
        <!-- Profile Picture -->
        <img src="https://via.placeholder.com/100" alt="User Avatar" class="w-24 h-24 rounded-full shadow-lg border-4 border-purple-500">
        <div>
          <h1 class="text-4xl font-bold">John Doe</h1>
          <p class="text-sm text-purple-300">Researcher at XYZ University</p>
          <p class="text-sm">Followers: <span class="font-semibold">300</span> | Following: <span class="font-semibold">180</span></p>
        </div>
      </div>
      <div class="flex">
        <button class="bg-gradient-to-r from-green-500 to-teal-500 text-white px-4 py-2 rounded-lg shadow-md hover:from-green-600 hover:to-teal-600">Edit Profile</button>
        <!-- Follow/Unfollow Button (Do not show if viewing your own profile) -->
        <?php if ($loggedInUserId != $viewedUserId): ?>
          <div>
            <?php if ($isFollowing): ?>
              <form method="POST" action="unfollow.php">
                <input type="hidden" name="follower_id" value="<?php echo $loggedInUserId; ?>">
                <input type="hidden" name="followed_id" value="<?php echo $viewedUserId; ?>">
                <button type="submit" class="unfollow">Unfollow</button>
              </form>
            <?php else: ?>
              <form method="POST" action="follow.php">
                <input type="hidden" name="follower_id" value="<?php echo $loggedInUserId; ?>">
                <input type="hidden" name="followed_id" value="<?php echo $viewedUserId; ?>">
                <button type="submit">Follow</button>
              </form>
            <?php endif; ?>
          </div>
        <?php endif; ?>
      </div>
    </div>

    <div class="bg-purple-800 p-6 rounded-lg shadow-xl">
      <h2 class="text-2xl font-bold mb-4">Bio</h2>
      <p class="text-gray-300 mb-4">I'm a passionate researcher in the field of machine learning and data science, with a focus on building models that can process natural language effectively. Currently working on AI-based predictive analytics at XYZ University.</p>
      <h3 class="text-xl font-semibold mb-2">Research Interests</h3>
      <p class="text-purple-400 mb-2">Machine Learning, Data Science, Natural Language Processing, AI Ethics</p>
    </div>
    <!-- Followers and Following Section -->
    <div class="followers-following">
      <div>
        <h3>Followers</h3>
        <?php if ($followers->num_rows > 0): ?>
          <ul>
            <?php while ($follower = $followers->fetch_assoc()): ?>
              <li><?php echo htmlspecialchars($follower['full_name']) . " (" . htmlspecialchars($follower['username']) . ")"; ?></li>
            <?php endwhile; ?>
          </ul>
        <?php else: ?>
          <p>No followers yet.</p>
        <?php endif; ?>
      </div>

      <div>
        <h3>Following</h3>
        <?php if ($following->num_rows > 0): ?>
          <ul>
            <?php while ($followed = $following->fetch_assoc()): ?>
              <li><?php echo htmlspecialchars($followed['full_name']) . " (" . htmlspecialchars($followed['username']) . ")"; ?></li>
            <?php endwhile; ?>
          </ul>
        <?php else: ?>
          <p>Not following anyone.</p>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>

<?php include '../partials/_footer.php' ?>