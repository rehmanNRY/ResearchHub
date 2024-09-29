<?php
session_start();
$isLoggedIn = false;
if(isset($_SESSION['user'])){
  $user = $_SESSION['user'];
  $isLoggedIn = true;
}else{
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
  <link rel="shortcut icon" href="../../../public/favicon.ico" type="image/x-icon">
</head>

<body>

<header class="bg-white p-4 w-full top-0 z-50 shadow-sm border-b border-gray-200">
  <div class="max-w-7xl mx-auto flex justify-between items-center">
    <!-- Logo -->
    <a href="/researchhub_project/index.php" class="flex items-center">
      <img src="https://lobehub.com/_next/static/media/logo.98482105.png" alt="Logo" class="w-12 h-12 mr-2">
      <span class="text-gray-800 text-3xl font-bold">ResearchHub</span>
    </a>

    <!-- Navigation and Search Container -->
    <div class="flex items-center gap-8">
      <!-- Search Bar -->
      <div class="relative hidden md:flex items-center">
        <i class="bx bx-search text-gray-500 text-lg absolute left-3"></i>
        <input type="text" placeholder="Search..." class="pl-10 pr-4 py-2 bg-gray-100 text-gray-700 border border-gray-300 rounded-full focus:outline-none focus:ring-2 focus:ring-blue-500 transition duration-300 hover:bg-gray-200">
      </div>

      <!-- Navigation Links -->
      <nav class="hidden md:flex gap-6 items-center">
        <a href="/researchhub_project/index.php" class="text-gray-600 hover:text-blue-600 transition flex items-center">
          <i class="bx bx-home text-lg mr-1"></i> Home
        </a>
        <a href="#" class="text-gray-600 hover:text-blue-600 transition flex items-center">
          <i class="bx bx-info-circle text-lg mr-1"></i> About
        </a>
        <a href="#" class="text-gray-600 hover:text-blue-600 transition flex items-center">
          <i class="bx bx-cog text-lg mr-1"></i> Services
        </a>
        <a href="#" class="text-gray-600 hover:text-blue-600 transition flex items-center">
          <i class="bx bx-book text-lg mr-1"></i> Blog
        </a>
        <a href="#" class="text-gray-600 hover:text-blue-600 transition flex items-center">
          <i class="bx bx-envelope text-lg mr-1"></i> Contact
        </a>
      </nav>
    </div>

    <!-- User Profile or Authentication -->
    <div class="hidden md:flex items-center gap-4">
      <?php if ($isLoggedIn): ?>
        <div class="relative group">
          <img src="https://res.cloudinary.com/datvbo0ey/image/upload/v1726651746/3d%20avatar/5_xhf1vy.png" alt="User Profile" class="w-10 h-10 rounded-full cursor-pointer transition duration-300 transform hover:scale-105">
          <div class="absolute right-0 mt-2 w-48 bg-white text-gray-800 rounded-lg shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-opacity duration-300">
            <a href="#" class="block px-4 py-2 hover:bg-gray-100 transition">Profile</a>
            <a href="#" class="block px-4 py-2 hover:bg-gray-100 transition">Settings</a>
            <a href="/researchhub_project/app/views/auth/logout.php" class="block px-4 py-2 bg-red-500 hover:bg-red-600 text-center text-white rounded-b-lg transition">Logout</a>
          </div>
        </div>
      <?php else: ?>
        <div class="inline-block">
          <a href="/researchhub_project/app/views/auth/login.php" class="text-gray-600 hover:text-blue-600 transition mr-2">Login</a>
          <a href="/researchhub_project/app/views/auth/signup.php" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-lg font-semibold transition">Get Started</a>
        </div>
      <?php endif; ?>
    </div>

    <!-- Mobile Menu Button -->
    <button id="mobile-menu-button" class="md:hidden text-gray-700 text-2xl focus:outline-none transition duration-300 hover:text-blue-600">
      <i class="bx bx-menu"></i>
    </button>
  </div>

  <!-- Mobile Navigation Menu -->
  <nav id="mobile-menu" class="hidden md:hidden mt-4 bg-white p-4 rounded-lg shadow-lg">
    <a href="/researchhub_project/index.php" class="py-2 text-gray-600 hover:text-blue-600 flex items-center">
      <i class="bx bx-home mr-2"></i> Home
    </a>
    <a href="#" class="py-2 text-gray-600 hover:text-blue-600 flex items-center">
      <i class="bx bx-info-circle mr-2"></i> About
    </a>
    <a href="#" class="py-2 text-gray-600 hover:text-blue-600 flex items-center">
      <i class="bx bx-cog mr-2"></i> Services
    </a>
    <a href="#" class="py-2 text-gray-600 hover:text-blue-600 flex items-center">
      <i class="bx bx-book mr-2"></i> Blog
    </a>
    <a href="#" class="py-2 text-gray-600 hover:text-blue-600 flex items-center">
      <i class="bx bx-envelope mr-2"></i> Contact
    </a>
    <?php if ($isLoggedIn): ?>
      <a href="/researchhub_project/app/views/auth/logout.php" class="block py-2 bg-red-500 hover:bg-red-600 text-white rounded-lg text-center mt-2">Logout</a>
    <?php else: ?>
      <a href="/researchhub_project/app/views/auth/login.php" class="block py-2 text-gray-600 hover:text-blue-600">Signin</a>
      <a href="/researchhub_project/app/views/auth/signup.php" class="block py-2 bg-blue-500 hover:bg-blue-600 text-white rounded-lg mt-2 text-center">Get Started</a>
    <?php endif; ?>
  </nav>
</header>

  <main class="min-h-96 overflow-x-hidden">