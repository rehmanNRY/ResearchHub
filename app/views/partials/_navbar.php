<?php
if (session_status() === PHP_SESSION_NONE) {
  session_start(); // Start the session only if it hasn't been started yet
}

$isLoggedIn = false;
if (isset($_SESSION['user'])) {
  $user = $_SESSION['user'];
  $isLoggedIn = true;
} else {
  $isLoggedIn = false;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ResearchHub - Collaboration & knowledge sharing</title>
  <meta name="description" content="ResearchHub is a web application designed to facilitate collaboration and knowledge sharing
among researchers, academics, and students.">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="shortcut icon" href="/researchhub_project/public/favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="/researchhub_project/public/styles/style.css">
</head>

<body>

  <div class="fixed top-0 left-0 w-full z-50 bg-[#0e0c15e6] backdrop-blur-sm">
    <nav class="border-b border-[#251325FF] relative flex items-center justify-between gap-2 font-medium container mx-auto px-2 py-4"><a class="mt-1 items-center flex text-base font-bold transition-transform hover:scale-110" href="/researchhub_project/index.php"><img src="https://lobehub.com/_next/static/media/logo.98482105.png" class="w-10 mr-2" alt=""><span class="text-white font-bold text-2xl">ResearchHub</span></a>
      <div class="block ml-auto mb-2 lg:hidden">
        <div class="relative lg:mr-2"><button class="bg-purple-800 text-white flex items-center justify-center w-10 h-10 rounded-full relative mt-2 lg:mt-0 hover:opacity-75"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
              <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
              <path d="M14.235 19c.865 0 1.322 1.024 .745 1.668a3.992 3.992 0 0 1 -2.98 1.332a3.992 3.992 0 0 1 -2.98 -1.332c-.552 -.616 -.158 -1.579 .634 -1.661l.11 -.006h4.471z" stroke-width="0" fill="currentColor"></path>
              <path d="M12 2c1.358 0 2.506 .903 2.875 2.141l.046 .171l.008 .043a8.013 8.013 0 0 1 4.024 6.069l.028 .287l.019 .289v2.931l.021 .136a3 3 0 0 0 1.143 1.847l.167 .117l.162 .099c.86 .487 .56 1.766 -.377 1.864l-.116 .006h-16c-1.028 0 -1.387 -1.364 -.493 -1.87a3 3 0 0 0 1.472 -2.063l.021 -.143l.001 -2.97a8 8 0 0 1 3.821 -6.454l.248 -.146l.01 -.043a3.003 3.003 0 0 1 2.562 -2.29l.182 -.017l.176 -.004z" stroke-width="0" fill="currentColor"></path>
            </svg></button>
          <div class="bg-white text-purple-900 top-14 -right-10 absolute w-[calc(100vw-1.5rem)] max-w-[24rem] transition origin-top-right rounded-lg shadow-xl overflow-hidden z-10 lg:right-0 scale-0">
            <div class="flex bg-[#0e0c15e6] p-4 justify-between">
              <h3 class="text-white font-bold text-xl">Notifications</h3>
            </div>
            <ul class="max-h-[34rem] overflow-auto">
              <li class="font-bold text-center p-2">No new notifications</li>
            </ul>
          </div>
        </div>
      </div><button class="w-7 space-y-2 lg:hidden" id="mobile-menu-button">
        <div class="w-full h-0.5 rounded-full origin-top-right bg-white transition rotate-0"></div>
        <div class="w-full h-0.5 rounded-full bg-white transition opacity-100"></div>
        <div class="w-full h-0.5 rounded-full origin-bottom-right bg-white transition rotate-0"></div>
      </button>
      <div class="absolute top-14 right-2 bg-[#0e0c15e6] z-50 w-44 shadow-[2px_5px_10px_#18102866] rounded-xl px-2 py-4 flex flex-col-reverse items-center origin-top-right transition lg:shadow-none lg:static lg:w-auto lg:p-0 lg:flex-row lg:scale-100 scale-0" id="navbar-menu">
        <ul class="flex flex-col gap-3 items-center mt-4 lg:flex-row lg:gap-2 mr-2 lg:mt-0 text-gray-400">
          <li><a class="p-2 hover:text-purple-300 lg:px-3 relative" href="/researchhub_project/app/views/resource/resourceDiscovery.php">Resource Discovery</a></li>
          <li><a class="p-2 hover:text-purple-300 lg:px-3 relative" href="/researchhub_project/app/views/resource/uploadResource.php">Upload Resource</a></li>
          <li><a class="p-2 hover:text-purple-300 lg:px-3 relative" href="/researchhub_project/app/views/forum/allForums.php">Forums</a></li>
          <li><a class="p-2 hover:text-purple-300 lg:px-3 relative" href="/researchhub_project/app/views/forum/createForum.php">Create Forum</a></li>
          <li><a class="p-2 hover:text-purple-300 lg:px-3 relative" href="/researchhub_project/app/views/projects/projects_list.php">Projects</a></li>
          <li><a class="p-2 hover:text-purple-300 lg:px-3 relative" href="/researchhub_project/app/views/projects/create_project.php">Create Project</a></li>
          <li><a class="p-2 hover:text-purple-300 lg:px-3 relative" href="/researchhub_project/app/views/analysis/analytics_view.php">Analytics</a></li>
        </ul>
      <?php if (!$isLoggedIn): ?>
        <a class="bg-yellow-500 text-black font-semibold px-4 py-2 rounded-md hover:bg-opacity-75" href="/researchhub_project/app/views/auth/login.php">Login</a>
        <a class="rounded-lg bg-purple-600 py-2 px-4 text-white hover:opacity-80 ml-3" href="/researchhub_project/app/views/auth/signup.php">Signup</a>
      <?php else: ?>
        <div class="hidden lg:block">
          <div class="relative lg:mr-2"><button class="bg-[#0e0c15e6] text-white flex items-center justify-center w-10 h-10 rounded-full relative mt-2 lg:mt-0 hover:opacity-75"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                <path d="M14.235 19c.865 0 1.322 1.024 .745 1.668a3.992 3.992 0 0 1 -2.98 1.332a3.992 3.992 0 0 1 -2.98 -1.332c-.552 -.616 -.158 -1.579 .634 -1.661l.11 -.006h4.471z" stroke-width="0" fill="currentColor"></path>
                <path d="M12 2c1.358 0 2.506 .903 2.875 2.141l.046 .171l.008 .043a8.013 8.013 0 0 1 4.024 6.069l.028 .287l.019 .289v2.931l.021 .136a3 3 0 0 0 1.143 1.847l.167 .117l.162 .099c.86 .487 .56 1.766 -.377 1.864l-.116 .006h-16c-1.028 0 -1.387 -1.364 -.493 -1.87a3 3 0 0 0 1.472 -2.063l.021 -.143l.001 -2.97a8 8 0 0 1 3.821 -6.454l.248 -.146l.01 -.043a3.003 3.003 0 0 1 2.562 -2.29l.182 -.017l.176 -.004z" stroke-width="0" fill="currentColor"></path>
              </svg></button>
            <div class="bg-white text-purple-900 top-14 -right-10 absolute w-[calc(100vw-1.5rem)] max-w-[24rem] transition origin-top-right rounded-lg shadow-xl overflow-hidden z-10 lg:right-0 scale-0">
              <div class="flex bg-[#0e0c15e6] p-4 justify-between">
                <h3 class="text-white font-bold text-xl">Notifications</h3>
              </div>
              <ul class="max-h-[34rem] overflow-auto">
                <li class="font-bold text-center p-2">No new notifications</li>
              </ul>
            </div>
          </div>
        </div>
        <a class="bg-yellow-500 text-black font-semibold px-4 py-2 rounded-md hover:bg-opacity-75 mr-4" href="/researchhub_project/app/views/auth/logout.php">logout</a>
        <a class="h-10 text-center" href="/researchhub_project/app/views/profile/userProfile.php?user_id=<?= $user['user_id']?>"><img class="h-10 w-10 rounded-full object-cover scale-110 lg:mr-2 hover:ring hover:ring-purple-700" src="<?= '/researchhub_project/public/uploads/profile_pics/' . htmlspecialchars($user['profile_picture']) ?>" alt="user profile"></a>
      </div>
      <?php endif; ?>
    </nav>
    <?php if ($isLoggedIn): ?>
    <a class="block bg-n-6 text-white text-center font-medium p-3.5 transition hover:opacity-90" href="/researchhub_project/app/views/profile/editProfile.php">Welcome 🤗 You can change your profile information here<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon" class="inline-block w-4 h-4 ml-2">
        <path fill-rule="evenodd" d="M3 10a.75.75 0 0 1 .75-.75h10.638L10.23 5.29a.75.75 0 1 1 1.04-1.08l5.5 5.25a.75.75 0 0 1 0 1.08l-5.5 5.25a.75.75 0 1 1-1.04-1.08l4.158-3.96H3.75A.75.75 0 0 1 3 10Z" clip-rule="evenodd"></path>
      </svg></a>
    <?php endif; ?>
  </div>

  <main class="pt-24 overflow-x-hidden ">