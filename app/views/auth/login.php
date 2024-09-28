<?php include '../partials/_navbar.php' ?>

<section class="py-32 flex justify-center items-center bg-[#131214]">
  <div class="w-full max-w-md bg-[#111111] rounded-lg p-8 border border-[#333333] shadow-lg">
    <h2 class="text-3xl font-bold text-center text-white mb-6">Login</h2>

    <!-- Login Form -->
    <form  action="../../controllers/main.php" method="POST">
      
      <!-- Username Field -->
      <div class="mb-6">
        <label for="username" class="block text-gray-400 text-lg font-semibold mb-2">Username</label>
        <input type="text" id="username" name="username" class="w-full p-3 rounded-md bg-[#1b1b1b] border border-[#333333] text-white focus:outline-none focus:ring-2 focus:ring-yellow-400" placeholder="Enter your username" required>
      </div>
      
      <!-- Password Field -->
      <div class="mb-6">
        <label for="password" class="block text-gray-400 text-lg font-semibold mb-2">Password</label>
        <input type="password" id="password" name="password" class="w-full p-3 rounded-md bg-[#1b1b1b] border border-[#333333] text-white focus:outline-none focus:ring-2 focus:ring-yellow-400" placeholder="Enter your password" required>
      </div>
      
      <!-- Submit Button -->
      <div class="text-center">
        <button type="submit" name="login" class="w-full p-3 rounded-lg bg-yellow-400 text-black font-bold hover:bg-yellow-500 transition duration-300">Login</button>
      </div>
      
    </form>

    <!-- Extra Links -->
    <div class="mt-4 text-center">
      <p class="text-gray-400">Don't have an account? <a href="/researchhub_project/app/views/auth/signup.php" class="text-yellow-400 hover:underline">Sign Up</a></p>
      <p class="text-gray-400 mt-2"><a href="#" class="text-yellow-400 hover:underline">Forgot Password?</a></p>
    </div>
  </div>
</section>

<?php include '../partials/_footer.php' ?>
