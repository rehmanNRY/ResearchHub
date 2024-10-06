<?php
if (session_status() === PHP_SESSION_NONE) {
  session_start();
}

if (!isset($_SESSION['user'])) {
  header('Location: ../../../index.php');
  exit();
}

include '../partials/_navbar.php';

?>

<section class="min-h-screen bg-gray-900 text-gray-200 font-sans py-12">
  <div class="container mx-auto px-6 lg:px-12">
    <!-- Page Header -->
    <div class="bg-gradient-to-r from-purple-700 to-purple-900 text-white p-8 rounded-lg shadow-xl flex justify-between items-center mb-12">
      <h1 class="text-4xl font-bold">Collaborative Projects</h1>
      <button class="bg-gradient-to-r from-green-500 to-teal-500 text-white px-6 py-3 rounded-lg shadow-md hover:from-green-600 hover:to-teal-600">Start New Project</button>
    </div>

    <!-- Search Bar -->
    <div class="mb-8">
      <div class="flex items-center bg-purple-800 p-4 rounded-lg shadow-lg">
        <input type="text" class="bg-gray-800 text-white w-full px-4 py-2 rounded-lg outline-none" placeholder="Search for projects, topics, or collaborators...">
        <button class="ml-4 bg-green-500 hover:bg-green-600 text-white px-6 py-2 rounded-lg shadow-md">Search</button>
      </div>
    </div>

    <!-- Filters -->
    <div class="bg-purple-800 p-6 rounded-lg shadow-lg mb-12">
      <h2 class="text-2xl font-bold text-white mb-4">Filter by</h2>
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
        <!-- Filter 1: Research Area -->
        <div>
          <label for="area" class="text-sm text-purple-300">Research Area</label>
          <select id="area" class="mt-2 w-full px-4 py-2 bg-gray-800 text-white rounded-lg outline-none">
            <option value="">All Areas</option>
            <option value="ml">Machine Learning</option>
            <option value="ai">Artificial Intelligence</option>
            <option value="data-science">Data Science</option>
            <option value="ethics">Ethics in AI</option>
            <option value="healthcare">Healthcare</option>
          </select>
        </div>
        <!-- Filter 2: Collaboration Status -->
        <div>
          <label for="status" class="text-sm text-purple-300">Collaboration Status</label>
          <select id="status" class="mt-2 w-full px-4 py-2 bg-gray-800 text-white rounded-lg outline-none">
            <option value="active">Active Projects</option>
            <option value="completed">Completed Projects</option>
            <option value="open">Open for Collaboration</option>
          </select>
        </div>
        <!-- Filter 3: Project Lead -->
        <div>
          <label for="lead" class="text-sm text-purple-300">Project Lead</label>
          <input type="text" id="lead" class="mt-2 w-full px-4 py-2 bg-gray-800 text-white rounded-lg outline-none" placeholder="Lead's name">
        </div>
        <!-- Filter 4: Start Date -->
        <div>
          <label for="start-date" class="text-sm text-purple-300">Start Date</label>
          <input type="date" id="start-date" class="mt-2 w-full px-4 py-2 bg-gray-800 text-white rounded-lg outline-none">
        </div>
      </div>
      <!-- Apply Filters Button -->
      <div class="mt-6 text-right">
        <button class="bg-green-500 hover:bg-green-600 text-white px-6 py-2 rounded-lg shadow-md">Apply Filters</button>
      </div>
    </div>

    <!-- Projects List -->
    <div class="space-y-6">
      <!-- Project Card 1 -->
      <div class="bg-purple-800 p-6 rounded-lg shadow-xl hover:shadow-2xl">
        <div class="flex justify-between items-center mb-4">
          <h3 class="text-lg font-semibold text-white">AI for Cancer Detection</h3>
          <div class="flex items-center space-x-2">
            <span class="text-sm text-purple-300">Status: <span class="font-semibold text-purple-100">Open for Collaboration</span></span>
            <button class="bg-blue-600 hover:bg-blue-500 text-white px-3 py-1 rounded-lg shadow-md">Join Project</button>
          </div>
        </div>
        <p class="text-purple-300 mb-4">This project focuses on utilizing AI techniques to improve cancer detection accuracy. We're looking for experts in machine learning and healthcare to join...</p>
        <div class="flex items-center space-x-4 text-sm text-purple-400">
          <div>Project Lead: <span class="font-semibold text-purple-200">Dr. Sarah Lee</span></div>
          <div>Start Date: <span class="font-semibold text-purple-200">2023-09-01</span></div>
          <div>Research Area: <span class="font-semibold text-purple-200">Healthcare</span></div>
        </div>
      </div>

      <!-- Project Card 2 -->
      <div class="bg-purple-800 p-6 rounded-lg shadow-xl hover:shadow-2xl">
        <div class="flex justify-between items-center mb-4">
          <h3 class="text-lg font-semibold text-white">Ethics of AI in Autonomous Vehicles</h3>
          <div class="flex items-center space-x-2">
            <span class="text-sm text-purple-300">Status: <span class="font-semibold text-purple-100">Active</span></span>
            <button class="bg-blue-600 hover:bg-blue-500 text-white px-3 py-1 rounded-lg shadow-md">View Details</button>
          </div>
        </div>
        <p class="text-purple-300 mb-4">A research project examining the ethical implications of using AI in autonomous vehicles. We're currently in the testing phase and seeking feedback from ethicists...</p>
        <div class="flex items-center space-x-4 text-sm text-purple-400">
          <div>Project Lead: <span class="font-semibold text-purple-200">Dr. Mark Evans</span></div>
          <div>Start Date: <span class="font-semibold text-purple-200">2022-05-14</span></div>
          <div>Research Area: <span class="font-semibold text-purple-200">Ethics in AI</span></div>
        </div>
      </div>

      <!-- Project Card 3 -->
      <div class="bg-purple-800 p-6 rounded-lg shadow-xl hover:shadow-2xl">
        <div class="flex justify-between items-center mb-4">
          <h3 class="text-lg font-semibold text-white">AI-Powered Health Monitoring System</h3>
          <div class="flex items-center space-x-2">
            <span class="text-sm text-purple-300">Status: <span class="font-semibold text-purple-100">Completed</span></span>
            <button class="bg-blue-600 hover:bg-blue-500 text-white px-3 py-1 rounded-lg shadow-md">View Results</button>
          </div>
        </div>
        <p class="text-purple-300 mb-4">This completed project successfully developed an AI-powered system for real-time health monitoring. You can view the research papers and results...</p>
        <div class="flex items-center space-x-4 text-sm text-purple-400">
          <div>Project Lead: <span class="font-semibold text-purple-200">Dr. Emily Brown</span></div>
          <div>Start Date: <span class="font-semibold text-purple-200">2021-10-20</span></div>
          <div>Research Area: <span class="font-semibold text-purple-200">Healthcare</span></div>
        </div>
      </div>
    </div>

    <!-- Pagination -->
    <div class="mt-12 flex justify-center">
      <button class="bg-purple-600 text-white px-4 py-2 rounded-lg hover:bg-purple-500 shadow-md">Previous</button>
      <button class="bg-purple-600 text-white px-4 py-2 rounded-lg hover:bg-purple-500 shadow-md mx-4">1</button>
      <button class="bg-purple-600 text-white px-4 py-2 rounded-lg hover:bg-purple-500 shadow-md">Next</button>
    </div>
  </div>
</section>


<?php include '../partials/_footer.php' ?>