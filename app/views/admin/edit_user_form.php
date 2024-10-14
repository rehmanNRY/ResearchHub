<?php
if (session_status() === PHP_SESSION_NONE) {
  session_start();
}

if (!isset($_SESSION['user']) || $_SESSION['user']['username'] !== 'admin4466') {
  header('Location: ../../../index.php');
  exit();
}

include '../partials/_navbar.php';
include '../../controllers/AdminController.php';
$controller = new AdminController();
$user = $controller->getUserById($_POST['user_id']);
?>



<section class="relative py-36 overflow-hidden md:px-0 px-2">
  <div class="relative z-1 max-w-[62rem] mx-auto text-center mb-10 z-10">
    <h1 class="text-6xl font-bold mb-6 leading-tight">Edit User
      <span class="inline-block relative">Details
        <img src="https://silver-sunshine-319abc.netlify.app/assets/curve-DplsLMf8.png" class="absolute top-full left-0 w-full xl:-mt-2" width="624" height="28" alt="Curve">
      </span>
    </h1>
    <p class="max-w-3xl mx-auto mb-6 text-n-2 text-xl leading-8">Edit the user details as an Admin or ResearchHub platform.</p>
  </div>
  <div class="relative max-w-3xl mx-auto">
    <div class="relative p-0.5 rounded-3xl bg-conic-gradient z-10">
      <div class="relative bg-n-8 rounded-3xl p-10">
        <!-- Forum Form Section -->
        <form class="space-y-6" method="POST" action="edit_user.php">
          <input type="hidden" name="user_id" value="<?php echo $user['user_id']; ?>">
          <div class="space-y-4">
            <!-- Title -->
            <div>
              <label for="username" class="text-gray-400">Username</label>
              <input type="text" name="username" value="<?php echo $user['username']; ?>" required id="username" placeholder="Enter new username" class="mt-2 w-full px-4 py-3 bg-gray-800 text-white border border-gray-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600">
            </div>

            <!-- Content -->
            <div>
              <label for="email" class="text-gray-400">Email</label>
              <input type="email" name="email" value="<?php echo $user['email']; ?>" required id="email" placeholder="New Email" class="mt-2 w-full px-4 py-3 bg-gray-800 text-white border border-gray-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600" />
            </div>

            <div class="mb-4">
              <label for="status" class="block text-gray-300 mb-1">Status:</label>
              <select name="status" class="w-full p-2 bg-gray-700 text-white border border-gray-600 rounded-md focus:outline-none focus:border-blue-500">
                <option value="active" <?php if ($user['status'] == 'active') echo 'selected'; ?>>Active</option>
                <option value="suspended" <?php if ($user['status'] == 'suspended') echo 'selected'; ?>>Suspended</option>
              </select>
            </div>
          </div>

          <!-- Submit Button -->
          <div class="flex justify-end">
            <button type="submit" class="bg-purple-600 hover:bg-purple-700 text-white px-6 py-3 rounded-full transition ease-in-out duration-300 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:ring-opacity-50">
              Update User
            </button>
          </div>
        </form>
      </div>
    </div>
    <div class="absolute -top-[54%] left-1/2 w-[234%] -translate-x-1/2 md:-top-[46%] md:w-[138%] lg:-top-[104%] -z-10">
      <img src="https://silver-sunshine-319abc.netlify.app/assets/hero-background-DUbyVUlq.jpg" class="w-full" width="1440" height="1800" alt="hero">
    </div>
    <div class="absolute left-1/2 w-[78rem] aspect-square border border-[#ffffff1a] rounded-full -translate-x-1/2 top-1/2 -translate-y-1/2">
      <div class="absolute top-1/2 left-1/2 w-[65.875rem] aspect-square border border-[#ffffff1a] rounded-full -translate-x-1/2 -translate-y-1/2"></div>
      <div class="absolute top-1/2 left-1/2 w-[51.375rem] aspect-square border border-[#ffffff1a] rounded-full -translate-x-1/2 -translate-y-1/2"></div>
      <div class="absolute top-1/2 left-1/2 w-[36.125rem] aspect-square border border-[#ffffff1a] rounded-full -translate-x-1/2 -translate-y-1/2"></div>
      <div class="absolute top-1/2 left-1/2 w-[23.125rem] aspect-square border border-[#ffffff1a] rounded-full -translate-x-1/2 -translate-y-1/2"></div>
      <span style="width: 100%; height: 100%; display: inline-block; user-select: none; pointer-events: none; position: relative; top: 0px; left: 0px; z-index: initial;">
        <span style="backface-visibility: hidden; position: relative; width: 100%; height: 100%; display: inline-block; user-select: initial; pointer-events: initial; will-change: auto; transform: translate3d(-5.4477px, 22.837px, 0px);">
          <div class="absolute bottom-1/2 left-1/2 w-0.25 h-1/2 origin-bottom rotate-[46deg]">
            <div class="w-2 h-2 -ml-1 -mt-36 bg-gradient-to-b from-[#DD734F] to-[#1A1A32] rounded-full transition-transform duration-500 ease-out translate-y-0 opacity-100"></div>
          </div>
          <div class="absolute bottom-1/2 left-1/2 w-0.25 h-1/2 origin-bottom -rotate-[56deg]">
            <div class="w-4 h-4 -ml-1 -mt-32 bg-gradient-to-b from-[#DD734F] to-[#1A1A32] rounded-full transition-transform duration-500 ease-out translate-y-0 opacity-100"></div>
          </div>
          <div class="absolute bottom-1/2 left-1/2 w-0.25 h-1/2 origin-bottom rotate-[54deg]">
            <div class="hidden w-4 h-4 -ml-1 mt-[12.9rem] bg-gradient-to-b from-[#B9AEDF] to-[#1A1A32] rounded-full xl:block transit transition-transform duration-500 ease-out translate-y-0 opacity-100"></div>
          </div>
          <div class="absolute bottom-1/2 left-1/2 w-0.25 h-1/2 origin-bottom -rotate-[65deg]">
            <div class="w-3 h-3 -ml-1.5 mt-52 bg-gradient-to-b from-[#B9AEDF] to-[#1A1A32] rounded-full transition-transform duration-500 ease-out translate-y-0 opacity-100"></div>
          </div>
          <div class="absolute bottom-1/2 left-1/2 w-0.25 h-1/2 origin-bottom -rotate-[85deg]">
            <div class="w-6 h-6 -ml-3 -mt-3 bg-gradient-to-b from-[#88E5BE] to-[#1A1A32] rounded-full transition-transform duration-500 ease-out translate-y-0 opacity-100"></div>
          </div>
          <div class="absolute bottom-1/2 left-1/2 w-0.25 h-1/2 origin-bottom rotate-[70deg]">
            <div class="w-6 h-6 -ml-3 -mt-3 bg-gradient-to-b from-[#88E5BE] to-[#1A1A32] rounded-full transition-transform duration-500 ease-out translate-y-0 opacity-100"></div>
          </div>
        </span></span>
    </div>
  </div>
</section>


<?php include '../partials/_footer.php' ?>