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
  <header class="bg-[#131214] p-4">
    <div class="max-w-7xl mx-auto flex justify-between items-center">
      <!-- Logo -->
      <a href="/researchhub_project/index.php" class="flex items-center">
        <img src="https://lobehub.com/_next/static/media/logo.98482105.png" alt="Logo" class="w-10 h-10 mr-2">
        <span class="text-white text-2xl font-semibold">ResearchHub</span>
      </a>

      <!-- Navigation Links (Hidden on mobile, visible on larger screens) -->
      <nav class="hidden md:flex gap-6">
        <a href="/researchhub_project/index.php" class="text-[#aaaaaa] hover:text-white transition">Home</a>
        <a href="#" class="text-[#aaaaaa] hover:text-white transition">About</a>
        <a href="#" class="text-[#aaaaaa] hover:text-white transition">Services</a>
        <a href="#" class="text-[#aaaaaa] hover:text-white transition">Blog</a>
        <a href="#" class="text-[#aaaaaa] hover:text-white transition">Contact</a>
      </nav>
      <?php

      if($isLoggedIn){
        echo '<a href="/researchhub_project/app/views/auth/logout.php" class="hidden md:inline-block bg-red-400 hover:bg-red-500 text-black px-4 py-2 rounded-lg font-semibold transition">Logout</a>';
      }else{
        echo '<div class="hidden md:inline-block">
         <a href="/researchhub_project/app/views/auth/login.php" class="text-[#aaaaaa] hover:text-white transition mr-2">Login</a>
         <a href="/researchhub_project/app/views/auth/signup.php" class="bg-yellow-400 hover:bg-yellow-500 text-black px-4 py-2 rounded-lg font-semibold transition">Get Started</a>
       </div>';
      }
      ?>
       

      <!-- Mobile Menu Button (Visible on mobile, hidden on larger screens) -->
      <button id="mobile-menu-button" class="md:hidden text-white text-2xl">
        <i class="bx bx-menu"></i>
      </button>
    </div>

    <!-- Mobile Navigation Menu (Hidden by default) -->
    <nav id="mobile-menu" class="hidden md:hidden mt-4">
      <a href="/researchhub_project/index.php" class="block py-2 text-[#aaaaaa] hover:text-white">Home</a>
      <a href="#" class="block py-2 text-[#aaaaaa] hover:text-white">About</a>
      <a href="#" class="block py-2 text-[#aaaaaa] hover:text-white">Services</a>
      <a href="#" class="block py-2 text-[#aaaaaa] hover:text-white">Blog</a>
      <a href="#" class="block py-2 text-[#aaaaaa] hover:text-white">Contact</a>
      <?php
        if($isLoggedIn){
          echo '<a href="/researchhub_project/app/views/auth/logout.php" class="block py-2 bg-red-400 hover:bg-red-500 text-black rounded-lg mt-2 text-center">Logout</a>';
        }else{
          echo '<a href="/researchhub_project/app/views/auth/login.php" class="block py-2 text-[#aaaaaa] hover:text-white">Signin</a>
        <a href="/researchhub_project/app/views/auth/signup.php" class="block py-2 bg-yellow-400 hover:bg-yellow-500 text-black rounded-lg mt-2 text-center">Get Started</a>';
        }
      ?>
    </nav>
  </header>
  <main class="min-h-96 bg-[#131214] text-gray-100 overflow-x-hidden">