<?php

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

if (isset($_SESSION['user'])) {
    header('Location: ../app.php');
    exit();
}

include '../partials/_navbar.php'

?>

<section class="my-32 max-w-lg mx-auto bg-[#111111] rounded-lg p-8 border border-[#333333] shadow-lg">
    <h2 class="text-3xl font-bold text-center text-white mb-6">Sign Up</h2>

    <!-- Form Starts Here -->
    <form action="../../controllers/Auth.php" method="POST">

        <!-- Full Name Field -->
        <div class="mb-6">
            <label for="full_name" class="block text-gray-400 text-lg font-semibold mb-2">Full Name</label>
            <input type="text" id="full_name" name="full_name" class="w-full p-3 rounded-md bg-[#1b1b1b] border border-[#333333] text-white focus:outline-none focus:ring-2 focus:ring-yellow-400" placeholder="Enter your full name" required>
        </div>

        <!-- Username Field -->
        <div class="mb-6">
            <label for="username" class="block text-gray-400 text-lg font-semibold mb-2">Username</label>
            <input type="text" id="username" name="username" class="w-full p-3 rounded-md bg-[#1b1b1b] border border-[#333333] text-white focus:outline-none focus:ring-2 focus:ring-yellow-400" placeholder="Enter your username" required>
        </div>

        <!-- Email Field -->
        <div class="mb-6">
            <label for="email" class="block text-gray-400 text-lg font-semibold mb-2">Email</label>
            <input type="email" id="email" name="email" class="w-full p-3 rounded-md bg-[#1b1b1b] border border-[#333333] text-white focus:outline-none focus:ring-2 focus:ring-yellow-400" placeholder="Enter your email" required>
        </div>

        <!-- Password Field -->
        <div class="mb-6">
            <label for="password" class="block text-gray-400 text-lg font-semibold mb-2">Password</label>
            <input type="password" id="password" name="password" class="w-full p-3 rounded-md bg-[#1b1b1b] border border-[#333333] text-white focus:outline-none focus:ring-2 focus:ring-yellow-400" placeholder="Enter your password" required>
        </div>

        <!-- Submit Button -->
        <div class="text-center">
            <button type="submit" name="signup" class="w-full p-3 rounded-lg bg-yellow-400 text-black font-bold hover:bg-yellow-500 transition duration-300">Sign Up</button>
        </div>

    </form>

    <?php include '../partials/_footer.php' ?>