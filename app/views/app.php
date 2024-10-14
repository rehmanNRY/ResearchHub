<?php
if (session_status() === PHP_SESSION_NONE) {
  session_start();
}

if (!isset($_SESSION['user'])) {
  header('Location: ../../index.php');
  exit();
}

include './partials/_navbar.php'

?>



<section class="text-gray-200 container font-sans leading-relaxed antialiased flex flex-col mx-auto px-8 my-20">
 <!-- Welcome Banner -->
 <div class="relative flex flex-col items-center text-center h-auto p-8 border border-[#ffffff1a] rounded-3xl overflow-hidden lg:p-16">
    <!-- Background image -->
    <div class="absolute top-0 right-0 w-full h-full pointer-events-none md:block hidden -z-10">
      <img class="w-full h-full object-cover" alt="Banner" src="../../public/images/banner-bg.png">
    </div>
    <div class="relative z-1 max-w-[40rem] w-full text-white">
      <h1 class="text-5xl font-bold mb-6">Welcome to Our Platform</h1>
      <p class="text-lg mb-8 text-gray-300">Explore our services and transform the way you work with cutting-edge AI solutions. Join us today to experience seamless integration and advanced features.</p>

      <div class="flex justify-center space-x-4">
        <a href="#" class="px-6 py-2 bg-purple-600 hover:bg-purple-700 border border-purple-600 text-white font-bold rounded-full transition-all">Get Started</a>
        <a href="#" class="px-6 py-2.5 bg-transparent border border-white hover:bg-gray-800 text-white font-bold rounded-full transition-all">Learn More</a>
      </div>
    </div>
  </div>

  <!-- Profile Overview -->
  <div class="grid grid-cols-1 md:grid-cols-2 gap-8 my-10">
    <!-- Upload Resources -->
    <div class="bg-n-7 border border-[#251325FF] p-6 rounded-xl shadow-xl hover:shadow-2xl">
      <h2 class="text-2xl font-bold mb-4 flex items-center">
        <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l6 6M10 10l6-6"></path>
        </svg>
        Upload Resources
      </h2>
      <p>Share your latest research, articles, datasets, and more.</p>
      <a href="/researchhub_project/app/views/resource/uploadResource.php" class="bg-gradient-to-r from-green-500 to-teal-500 text-white px-4 py-2 mt-4 rounded-lg shadow-md hover:from-green-600 hover:to-teal-600 focus:outline-none">Upload Now</a>
    </div>

    <!-- Collaborative Projects -->
    <div class="bg-n-7 border border-[#251325FF] p-6 rounded-xl shadow-xl hover:shadow-2xl">
      <h2 class="text-2xl font-bold mb-4 flex items-center">
        <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5V8l-7 7H7v5h10z"></path>
        </svg>
        Collaborative Projects
      </h2>
      <p>Join or create research projects and collaborate with peers.</p>
      <a href="/researchhub_project/app/views/projects/projects_list.php" class="bg-gradient-to-r from-pink-500 to-red-500 text-white px-4 py-2 mt-4 rounded-lg shadow-md hover:from-pink-600 hover:to-red-600 focus:outline-none">Explore Projects</a>
    </div>
  </div>

  <!-- Discussion Forums & Social Networking -->
  <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
    <!-- Discussion Forums -->
    <div class="bg-n-7 border border-[#251325FF] p-6 rounded-xl shadow-xl hover:shadow-2xl">
      <h2 class="text-2xl font-bold mb-4 flex items-center">
        <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19l-7-7 7-7M15 5h5v14h-5"></path>
        </svg>
        Discussion Forums
      </h2>
      <p>Engage in scholarly discussions, ask questions, and share insights.</p>
      <a href="/researchhub_project/app/views/forum/allForums.php" class="bg-gradient-to-r from-blue-500 to-indigo-500 text-white px-4 py-2 mt-4 rounded-lg shadow-md hover:from-blue-600 hover:to-indigo-600 focus:outline-none">Join Discussions</a>
    </div>

    <!-- Social Networking Features -->
    <div class="bg-n-7 border border-[#251325FF] p-6 rounded-xl shadow-xl hover:shadow-2xl">
      <h2 class="text-2xl font-bold mb-4 flex items-center">
        <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354v15.292M5.5 12H18.5"></path>
        </svg>
        Social Networking
      </h2>
      <p>Follow researchers, get notified about new publications, and stay connected with the community.</p>
      <a href="/researchhub_project/app/views/profile/editProfile.php" class="bg-gradient-to-r from-green-500 to-teal-500 text-white px-4 py-2 mt-4 rounded-lg shadow-md hover:from-green-600 hover:to-teal-600 focus:outline-none">View Network</a>
    </div>
  </div>

</section>



<?php include './partials/_footer.php' ?>