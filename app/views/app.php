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

<section class="text-gray-200 min-h-screen bg-gray-900 font-sans leading-relaxed antialiased flex flex-col">

  <!-- Main Content Section -->
  <section class="w-full py-12 px-6">
    <div class="max-w-7xl mx-auto">
      <!-- Welcome Banner -->
      <div class="bg-gradient-to-r from-purple-700 to-purple-900 text-white p-8 rounded-lg shadow-xl mb-10 flex justify-between items-center">
        <div>
          <h1 class="text-4xl font-extrabold mb-4">Welcome to <span class="text-yellow-300">ResearchHub</span>!</h1>
          <p class="text-lg">Empowering researchers, students, and academics to collaborate and share knowledge globally.</p>
        </div>
        <img class="w-20 h-20 rounded-full shadow-lg" src="https://via.placeholder.com/80" alt="Logo">
      </div>

      <!-- Profile Overview -->
      <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-12">
        <!-- Profile Card -->
        <div class="bg-purple-800 p-6 rounded-lg shadow-xl hover:shadow-2xl transform transition duration-300 hover:scale-105">
          <h2 class="text-2xl font-bold mb-4 flex items-center">
            <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
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
        <div class="bg-purple-800 p-6 rounded-lg shadow-xl hover:shadow-2xl transform transition duration-300 hover:scale-105">
          <h2 class="text-2xl font-bold mb-4 flex items-center">
            <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l6 6M10 10l6-6"></path></svg>
            Upload Resources
          </h2>
          <p>Share your latest research, articles, datasets, and more.</p>
          <button class="bg-gradient-to-r from-green-500 to-teal-500 text-white px-4 py-2 mt-4 rounded-lg shadow-md hover:from-green-600 hover:to-teal-600 focus:outline-none">Upload Now</button>
        </div>

        <!-- Collaborative Projects -->
        <div class="bg-purple-800 p-6 rounded-lg shadow-xl hover:shadow-2xl transform transition duration-300 hover:scale-105">
          <h2 class="text-2xl font-bold mb-4 flex items-center">
            <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5V8l-7 7H7v5h10z"></path></svg>
            Collaborative Projects
          </h2>
          <p>Join or create research projects and collaborate with peers.</p>
          <button class="bg-gradient-to-r from-pink-500 to-red-500 text-white px-4 py-2 mt-4 rounded-lg shadow-md hover:from-pink-600 hover:to-red-600 focus:outline-none">Explore Projects</button>
        </div>
      </div>

      <!-- Latest Research & Resources -->
      <div class="bg-purple-800 p-8 rounded-lg shadow-xl mb-12 hover:shadow-2xl transform transition duration-300 hover:scale-105">
        <h2 class="text-2xl font-bold mb-6">Discover the Latest Research</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
          <!-- Research Card -->
          <div class="bg-purple-700 p-6 rounded-lg shadow-md hover:shadow-lg">
            <h3 class="text-lg font-semibold mb-2">Deep Learning for NLP</h3>
            <p class="text-purple-400 mb-4">by Alice Johnson</p>
            <p class="text-purple-200">An in-depth study on neural networks and their application in natural language processing.</p>
            <a href="#" class="text-purple-300 hover:text-purple-100 mt-4 block">Read More</a>
          </div>

          <!-- Research Card -->
          <div class="bg-purple-700 p-6 rounded-lg shadow-md hover:shadow-lg">
            <h3 class="text-lg font-semibold mb-2">Climate Change and Its Impacts</h3>
            <p class="text-purple-400 mb-4">by Bob Smith</p>
            <p class="text-purple-200">Research focused on the long-term environmental effects of global climate change.</p>
            <a href="#" class="text-purple-300 hover:text-purple-100 mt-4 block">Read More</a>
          </div>

          <!-- Research Card -->
          <div class="bg-purple-700 p-6 rounded-lg shadow-md hover:shadow-lg">
            <h3 class="text-lg font-semibold mb-2">Quantum Computing: A Breakthrough</h3>
            <p class="text-purple-400 mb-4">by Clara Lewis</p>
            <p class="text-purple-200">Discover the latest advancements in quantum computing and its potential to revolutionize technology.</p>
            <a href="#" class="text-purple-300 hover:text-purple-100 mt-4 block">Read More</a>
          </div>
        </div>
      </div>

      <!-- Discussion Forums & Social Networking -->
      <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        <!-- Discussion Forums -->
        <div class="bg-purple-800 p-6 rounded-lg shadow-xl hover:shadow-2xl transform transition duration-300 hover:scale-105">
          <h2 class="text-2xl font-bold mb-4 flex items-center">
            <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19l-7-7 7-7M15 5h5v14h-5"></path></svg>
            Discussion Forums
          </h2>
          <p>Engage in scholarly discussions, ask questions, and share insights.</p>
          <button class="bg-gradient-to-r from-blue-500 to-indigo-500 text-white px-4 py-2 mt-4 rounded-lg shadow-md hover:from-blue-600 hover:to-indigo-600 focus:outline-none">Join Discussions</button>
        </div>

        <!-- Social Networking Features -->
        <div class="bg-purple-800 p-6 rounded-lg shadow-xl hover:shadow-2xl transform transition duration-300 hover:scale-105">
          <h2 class="text-2xl font-bold mb-4 flex items-center">
            <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354v15.292M5.5 12H18.5"></path></svg>
            Social Networking
          </h2>
          <p>Follow researchers, get notified about new publications, and stay connected with the community.</p>
          <button class="bg-gradient-to-r from-green-500 to-teal-500 text-white px-4 py-2 mt-4 rounded-lg shadow-md hover:from-green-600 hover:to-teal-600 focus:outline-none">View Network</button>
        </div>
      </div>
    </div>
  </section>
</section>


<?php include './partials/_footer.php' ?>