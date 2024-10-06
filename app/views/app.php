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
 <div class="relative flex flex-col items-center text-center h-auto p-8 border border-[#ffffff1a] rounded-3xl overflow-hidden lg:p-20">
    <!-- Background image -->
    <div class="absolute top-0 right-0 w-full h-full pointer-events-none md:block hidden -z-10">
      <img class="w-full h-full object-cover filter blur-lg" alt="Banner" src="https://t3.ftcdn.net/jpg/07/99/70/64/360_F_799706447_nDggWg5rEG0oJr6zrm5XVBHZYHmT3pyw.jpg">
      <!-- Dark overlay -->
      <div class="absolute top-0 right-0 w-full h-full bg-black opacity-80"></div>
    </div>
  
    <div class="relative z-1 max-w-[40rem] w-full text-white">
      <h1 class="text-5xl font-bold mb-6">Welcome to Our Platform</h1>
      <p class="text-lg mb-8 text-gray-300">Explore our services and transform the way you work with cutting-edge AI solutions. Join us today to experience seamless integration and advanced features.</p>

      <div class="flex justify-center space-x-4">
        <a href="#" class="px-6 py-3 bg-purple-600 hover:bg-purple-700 text-white font-bold rounded-full transition-all">Get Started</a>
        <a href="#" class="px-6 py-3 bg-transparent border border-white hover:bg-gray-800 text-white font-bold rounded-full transition-all">Learn More</a>
      </div>
    </div>
  </div>

  <!-- Profile Overview -->
  <div class="grid grid-cols-1 md:grid-cols-3 gap-8 my-10">
    <!-- Profile Card -->
    <div class="bg-n-7 border border-[#251325FF] p-6 rounded-xl shadow-xl hover:shadow-2xl">
      <h2 class="text-2xl font-bold mb-4 flex items-center">
        <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
        </svg>
        Profile Overview
      </h2>
      <div class="flex items-center space-x-4 mb-4">
        <img class="w-16 h-16 rounded-full border-2 border-purple-400" src="https://via.placeholder.com/64" alt="Profile Picture">
        <div>
          <p class="text-xl font-semibold">John Doe</p>
          <p class="text-sm text-purple-300">Researcher at XYZ University</p>
        </div>
      </div>
      <p class="mb-2"><strong>Research Interests:</strong> Machine Learning, Data Science</p>
      <p class="mb-4"><strong>Followers:</strong> 120 | <strong>Following:</strong> 85</p>
      <a href="#" class="text-purple-400 hover:text-purple-300">View Full Profile</a>
    </div>

    <!-- Upload Resources -->
    <div class="bg-n-7 border border-[#251325FF] p-6 rounded-xl shadow-xl hover:shadow-2xl">
      <h2 class="text-2xl font-bold mb-4 flex items-center">
        <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l6 6M10 10l6-6"></path>
        </svg>
        Upload Resources
      </h2>
      <p>Share your latest research, articles, datasets, and more.</p>
      <button class="bg-gradient-to-r from-green-500 to-teal-500 text-white px-4 py-2 mt-4 rounded-lg shadow-md hover:from-green-600 hover:to-teal-600 focus:outline-none">Upload Now</button>
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
      <button class="bg-gradient-to-r from-pink-500 to-red-500 text-white px-4 py-2 mt-4 rounded-lg shadow-md hover:from-pink-600 hover:to-red-600 focus:outline-none">Explore Projects</button>
    </div>
  </div>

  <div class="grid grid-cols-1 md:grid-cols-2 gap-4 text-white mb-10">
    <!-- Continue Learning Card -->
    <div class="bg-n-7 border border-[#251325FF] p-6 rounded-xl">
      <div class="flex justify-between mb-4">
        <h2 class="text-lg font-bold">Continue learning</h2>
        <a href="#" class="text-purple-400 hover:underline">See all courses</a>
      </div>
      <div class="space-y-4">
        <!-- Course 1 -->
        <div class="bg-gray-700 p-4 rounded-lg flex items-center justify-between">
          <div>
            <h3 class="text-md font-semibold">Introduction to financial management</h3>
            <p class="text-sm text-gray-400">by Sam Harris</p>
            <div class="mt-2">
              <div class="h-1 w-full bg-gray-600 rounded-full overflow-hidden">
                <div class="h-full bg-purple-500 w-1/2"></div>
              </div>
              <p class="text-sm text-gray-400 mt-1 flex items-center">
                <span class="flex -space-x-1 overflow-hidden">
                  <!-- Use placeholder icons for user avatars -->
                  <img class="w-6 h-6 rounded-full border border-gray-200" src="https://via.placeholder.com/150" alt="">
                  <img class="w-6 h-6 rounded-full border border-gray-200" src="https://via.placeholder.com/150" alt="">
                </span>
                +10 more
              </p>
            </div>
          </div>
        </div>
        <!-- Course 2 -->
        <div class="bg-gray-700 p-4 rounded-lg flex items-center justify-between">
          <div>
            <h3 class="text-md font-semibold">Basic of Business Analytics</h3>
            <p class="text-sm text-gray-400">by John Hill</p>
            <div class="mt-2">
              <div class="h-1 w-full bg-gray-600 rounded-full overflow-hidden">
                <div class="h-full bg-purple-500 w-3/4"></div>
              </div>
              <p class="text-sm text-gray-400 mt-1 flex items-center">
                <span class="flex -space-x-1 overflow-hidden">
                  <img class="w-6 h-6 rounded-full border border-gray-200" src="https://via.placeholder.com/150" alt="">
                  <img class="w-6 h-6 rounded-full border border-gray-200" src="https://via.placeholder.com/150" alt="">
                </span>
                +10 more
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Latest Event Card -->
    <div class="bg-n-7 border border-[#251325FF] p-6 rounded-xl">
      <div class="flex justify-between mb-4">
        <h2 class="text-lg font-bold">Latest event</h2>
        <a href="#" class="text-purple-400 hover:underline">See all events</a>
      </div>
      <div class="bg-purple-700 p-4 rounded-lg flex items-center">
        <div class="w-16 h-16 bg-gray-300 rounded-lg mr-4">
          <!-- Placeholder Image for Event -->
          <img src="https://via.placeholder.com/150" class="w-full h-full object-cover" alt="">
        </div>
        <div>
          <h3 class="text-md font-semibold">Business talk #34</h3>
          <p class="text-sm text-gray-400">Influence of AI for your business in 2023.</p>
          <p class="text-sm text-gray-400">Artem Friedman, AI Engineer</p>
        </div>
      </div>
    </div>

    <!-- Your Experts Card -->
    <div class="bg-n-7 border border-[#251325FF] p-6 rounded-xl">
      <div class="flex justify-between mb-4">
        <h2 class="text-lg font-bold">Your experts</h2>
        <a href="#" class="text-purple-400 hover:underline">See all experts</a>
      </div>
      <div class="grid grid-cols-2 gap-4">
        <!-- Expert 1 -->
        <div class="flex items-center">
          <div class="w-16 h-16 bg-gray-300 rounded-lg mr-4">
            <!-- Placeholder Image for Expert -->
            <img src="https://via.placeholder.com/150" class="w-full h-full object-cover" alt="">
          </div>
          <div>
            <h3 class="text-md font-semibold">Sean Morgan</h3>
            <p class="text-sm text-gray-400">Head of Operations</p>
            <div class="flex items-center text-gray-400 text-xs">
              <i class='bx bxl-microsoft mr-1'></i> Microsoft
            </div>
          </div>
        </div>
        <!-- Expert 2 -->
        <div class="flex items-center">
          <div class="w-16 h-16 bg-gray-300 rounded-lg mr-4">
            <img src="https://via.placeholder.com/150" class="w-full h-full object-cover" alt="">
          </div>
          <div>
            <h3 class="text-md font-semibold">Jane Williams</h3>
            <p class="text-sm text-gray-400">Senior Business Analyst</p>
            <div class="flex items-center text-gray-400 text-xs">
              <i class='bx bxl-stripe mr-1'></i> Stripe
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Trending Articles Card -->
    <div class="bg-n-7 border border-[#251325FF] p-6 rounded-xl">
      <div class="flex justify-between mb-4">
        <h2 class="text-lg font-bold">Trending articles</h2>
        <a href="#" class="text-purple-400 hover:underline">See all articles</a>
      </div>
      <div class="space-y-4">
        <!-- Article 1 -->
        <div class="flex items-center">
          <div class="w-16 h-16 bg-gray-300 rounded-lg mr-4">
            <!-- Placeholder Image for Article -->
            <img src="https://via.placeholder.com/150" class="w-full h-full object-cover" alt="">
          </div>
          <div>
            <h3 class="text-md font-semibold">Bill Walsh leadership lessons</h3>
            <p class="text-sm text-gray-400">Willis Harris • 23 Feb 2023</p>
          </div>
        </div>
        <!-- Article 2 -->
        <div class="flex items-center">
          <div class="w-16 h-16 bg-gray-300 rounded-lg mr-4">
            <img src="https://via.placeholder.com/150" class="w-full h-full object-cover" alt="">
          </div>
          <div>
            <h3 class="text-md font-semibold">All you need to know about business</h3>
            <p class="text-sm text-gray-400">Sam Willis • 14 Feb 2023</p>
          </div>
        </div>
        <!-- Article 3 -->
        <div class="flex items-center">
          <div class="w-16 h-16 bg-gray-300 rounded-lg mr-4">
            <img src="https://via.placeholder.com/150" class="w-full h-full object-cover" alt="">
          </div>
          <div>
            <h3 class="text-md font-semibold">Identify your ideal customer</h3>
            <p class="text-sm text-gray-400">Lana Huberman • 11 Feb 2023</p>
          </div>
        </div>
      </div>
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
      <button class="bg-gradient-to-r from-blue-500 to-indigo-500 text-white px-4 py-2 mt-4 rounded-lg shadow-md hover:from-blue-600 hover:to-indigo-600 focus:outline-none">Join Discussions</button>
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
      <button class="bg-gradient-to-r from-green-500 to-teal-500 text-white px-4 py-2 mt-4 rounded-lg shadow-md hover:from-green-600 hover:to-teal-600 focus:outline-none">View Network</button>
    </div>
  </div>

</section>



<?php include './partials/_footer.php' ?>