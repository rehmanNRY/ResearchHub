<?php
if (session_status() === PHP_SESSION_NONE) {
  session_start();
}

if (!isset($_SESSION['user'])) {
  header('Location: ../../../index.php');
  exit();
}

include '../partials/_navbar.php';


include '../../controllers/AnalyticsController.php';

$user_id = $_SESSION['user']['user_id'];

$controller = new AnalyticsController();
$analytics = $controller->getUserAnalytics($user_id);
?>

<div class="relative container mx-auto my-12 lg:my-20 md:px-20 px-4">

  <!-- Analytics Dashboard Header -->
  <h1 class="text-white text-5xl lg:text-7xl font-extrabold mb-16 text-center pt-7">Analytics <span class="inline-block relative">Dashboard
      <img src="https://silver-sunshine-319abc.netlify.app/assets/curve-DplsLMf8.png" class="absolute top-full left-0 w-full xl:-mt-2" width="624" height="28" alt="Curve">
    </span></h1>

  <!-- Research Contributions Section -->
  <section class="mb-12 bg-gray-900 p-8 rounded-lg shadow-lg">
    <h2 class="text-3xl lg:text-4xl font-semibold text-gray-200 mb-4">Research Contributions</h2>
    <ul class="text-white space-y-3">
      <li class="flex items-center bg-gray-800 rounded-lg p-4 transition duration-200 hover:bg-gray-600">
        <i class="bx bx-download text-xl mr-3"></i>
        Total Downloads: <span class="pl-2 font-semibold"><?php echo $analytics['downloads']; ?></span>
      </li>
      <li class="flex items-center bg-gray-800 rounded-lg p-4 transition duration-200 hover:bg-gray-600">
        <i class="bx bx-star text-xl mr-3"></i>
        Total Citations: <span class="pl-2 font-semibold"><?php echo $analytics['citations']; ?></span>
      </li>
      <li class="flex items-center bg-gray-800 rounded-lg p-4 transition duration-200 hover:bg-gray-600">
        <i class="bx bx-message-square-detail text-xl mr-3"></i>
        Forum Contributions: <span class="pl-2 font-semibold"><?php echo $analytics['forum_contributions']; ?></span>
      </li>
      <li class="flex items-center bg-gray-800 rounded-lg p-4 transition duration-200 hover:bg-gray-600">
        <i class="bx bx-comment text-xl mr-3"></i>
        Forum Comments: <span class="pl-2 font-semibold"><?php echo $analytics['comments']; ?></span>
      </li>
      <li class="flex items-center bg-gray-800 rounded-lg p-4 transition duration-200 hover:bg-gray-600">
        <i class="bx bx-file text-xl mr-3"></i>
        Project Contributions: <span class="pl-2 font-semibold"><?php echo $analytics['project_contributions']; ?></span>
      </li>
    </ul>
  </section>

  <!-- Top Cited Resources Section -->
  <section class="mb-12 bg-gray-900 p-8 rounded-lg shadow-lg">
    <h2 class="text-3xl lg:text-4xl font-semibold text-gray-200 mb-4">Top Cited Resources</h2>
    <ul class="text-white space-y-3">
      <?php foreach ($analytics['top_cited'] as $resource): ?>
        <li class="flex items-center bg-gray-800 rounded-lg p-4 transition duration-200 hover:bg-gray-600">
          <i class="bx bx-book text-xl mr-3"></i>
          <?php echo htmlspecialchars($resource['title']) . ' - Citations: <span class="pl-2 font-semibold">' . htmlspecialchars($resource['citations']) . '</span>'; ?>
        </li>
      <?php endforeach; ?>
    </ul>
  </section>

  <!-- Top Downloaded Resources Section -->
  <section class="mb-12 bg-gray-900 p-8 rounded-lg shadow-lg">
    <h2 class="text-3xl lg:text-4xl font-semibold text-gray-200 mb-4">Top Downloaded Resources</h2>
    <ul class="text-white space-y-3">
      <?php foreach ($analytics['top_downloaded'] as $resource): ?>
        <li class="flex items-center bg-gray-800 rounded-lg p-4 transition duration-200 hover:bg-gray-600">
          <i class="bx bx-download text-xl mr-3"></i>
          <?php echo htmlspecialchars($resource['title']) . ' - Downloads: <span class="pl-2 font-semibold">' . htmlspecialchars($resource['downloads']) . '</span>'; ?>
        </li>
      <?php endforeach; ?>
    </ul>
  </section>

  <!-- User Activity Timeline Section -->
  <section class="mb-12 bg-gray-900 p-8 rounded-lg shadow-lg">
    <h2 class="text-3xl lg:text-4xl font-semibold text-gray-200 mb-4">User Activity Timeline</h2>
    <ul class="text-white space-y-3">
      <?php foreach ($analytics['activity_timeline'] as $activity): ?>
        <li class="flex items-center bg-gray-800 rounded-lg p-4 transition duration-200 hover:bg-gray-600">
          <i class="bx bx-time text-xl mr-3"></i>
          <?php echo htmlspecialchars($activity['timestamp']) . ' - ' . htmlspecialchars($activity['type']) . ': <span class="pl-2 font-semibold">' . htmlspecialchars($activity['item']) . '</span>'; ?>
        </li>
      <?php endforeach; ?>
    </ul>
  </section>

  <!-- Contributions Over Time Section -->
  <section class="bg-gray-900 p-8 rounded-lg shadow-lg">
    <h2 class="text-3xl lg:text-4xl font-semibold text-gray-200 mb-4">Contributions Over Time</h2>
    <ul class="text-white space-y-3">
      <?php foreach ($analytics['contributions_over_time'] as $contribution): ?>
        <li class="flex items-center bg-gray-800 rounded-lg p-4 transition duration-200 hover:bg-gray-600">
          <i class="bx bx-calendar text-xl mr-3"></i>
          <?php echo htmlspecialchars($contribution['month']) . ' - Contributions: <span class="pl-2 font-semibold">' . htmlspecialchars($contribution['contributions']) . '</span>'; ?>
        </li>
      <?php endforeach; ?>
    </ul>
  </section>
</div>
<?php include '../partials/_footer.php' ?>