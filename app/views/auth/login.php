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

<div class="relative container mx-auto my-12 lg:my-20 md:px-20 px-4">
  <div class="relative z-1 flex items-center h-auto mb-5 p-8 border border-[#ffffff1a] rounded-3xl overflow-hidden lg:p-20 xl:h-auto bg-gradient-to-r from-gray-950 to-gray-900">
    <div class="absolute top-0 left-8 w-full h-full pointer-events-none md:w-1/2 md:block hidden">
      <img class="w-full h-full object-cover" alt="Login Form" src="https://silver-sunshine-319abc.netlify.app/assets/service-1-bvSONSha.png">
    </div>

    <div class="relative z-1 max-w-[28rem] w-full ml-auto text-white lg:w-1/2 xl:w-3/5">
      <h4 class="text-3xl font-bold mb-6">Login</h4>
      <form action="../../controllers/Auth.php" method="POST">
        <div class="mb-6 text-gray-400">Enter your credentials to access your account</div>
        <div class="flex flex-col mb-6">
          <label class="text-base mb-2" for="username">Username</label>
          <input class="bg-gray-800 py-3 px-4 text-base rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600" id="username" type="text" placeholder="Username" name="username">
        </div>
        <div class="flex flex-col mb-6">
          <label class="text-base mb-2" for="password">Password</label>
          <input class="bg-gray-800 py-3 px-4 text-base rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600" id="password" type="password" placeholder="Password" name="password">
        </div>
        <button class="w-full py-3 bg-purple-600 hover:bg-purple-700 text-white font-bold rounded-full transition-all" type="submit" name="login">Login</button>
      </form>
      <div class="text-center mt-6">
        <a class="text-base text-purple-500 hover:underline" href="#">Forgot Password?</a>
      </div>
      <div class="text-center mt-4">
        <a class="text-base text-purple-500 hover:underline" href="#">Don't have an account? Sign up</a>
      </div>
    </div>
  </div>

  <!-- AI Generating Message -->
  <div class="items-center h-[3.5rem] px-6 bg-gray-800/80 rounded-[1.7rem] absolute left-4 right-4 bottom-4 border-[#ffffff1a] border lg:left-1/2 lg:right-auto lg:bottom-8 lg:-translate-x-1/2 text-base md:flex hidden">
    <img class="w-5 h-5 mr-4" src="https://silver-sunshine-319abc.netlify.app/assets/loading-CllQEGx_.png" alt="Loading">
    Researchers are here
  </div>
</div>

<?php include '../partials/_footer.php' ?>