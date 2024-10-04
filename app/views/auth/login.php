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

<section class="py-32 flex justify-center items-center">
  <div class="w-full max-w-md rounded-lg p-8 border shadow-lg bg-[#0d001a] border-[#3d014c]">
    <h2 class="text-3xl font-bold text-center text-white mb-6">Login</h2>

    <!-- Login Form -->
    <form action="../../controllers/Auth.php" method="POST">
      
      <!-- Username Field -->
      <div class="mb-6">
        <label for="username" class="block text-[#b399ff] text-lg font-semibold mb-2">Username</label>
        <input type="text" id="username" name="username" class="w-full p-3 rounded-md bg-[#1a0033] border border-[#4b0066] text-white focus:outline-none focus:ring-2 focus:ring-[#e6b3ff]" placeholder="Enter your username" required>
      </div>
      
      <!-- Password Field -->
      <div class="mb-6">
        <label for="password" class="block text-[#b399ff] text-lg font-semibold mb-2">Password</label>
        <input type="password" id="password" name="password" class="w-full p-3 rounded-md bg-[#1a0033] border border-[#4b0066] text-white focus:outline-none focus:ring-2 focus:ring-[#e6b3ff]" placeholder="Enter your password" required>
      </div>
      
      <!-- Submit Button -->
      <div class="text-center">
        <button type="submit" name="login" class="w-full p-3 rounded-lg bg-[#b366ff] text-white font-bold hover:bg-[#d19fff] transition duration-300">Login</button>
      </div>
      
    </form>

    <!-- Extra Links -->
    <div class="mt-4 text-center">
      <p class="text-[#b399ff]">Don't have an account? <a href="/researchhub_project/app/views/auth/signup.php" class="text-[#d19fff] hover:underline">Sign Up</a></p>
      <p class="text-[#b399ff] mt-2"><a href="#" class="text-[#d19fff] hover:underline">Forgot Password?</a></p>
    </div>
  </div>
</section>


<?php include '../partials/_footer.php' ?>