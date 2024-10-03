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
      <h1 class="text-4xl font-bold">Resource Discovery</h1>
      <a href="/researchhub_project/app/views/resource/uploadResource.php" class="bg-gradient-to-r from-green-500 to-teal-500 text-white px-6 py-3 rounded-lg shadow-md hover:from-green-600 hover:to-teal-600">Upload Resource</a>
    </div>

    <!-- Search Bar -->
    <div class="mb-8">
      <div class="flex items-center bg-purple-800 p-4 rounded-lg shadow-lg">
        <input type="text" class="bg-gray-800 text-white w-full px-4 py-2 rounded-lg outline-none" placeholder="Search for research papers, datasets, or articles...">
        <button class="ml-4 bg-green-500 hover:bg-green-600 text-white px-6 py-2 rounded-lg shadow-md">Search</button>
      </div>
    </div>

    <!-- Filters -->
    <div class="bg-purple-800 p-6 rounded-lg shadow-lg mb-12">
      <h2 class="text-2xl font-bold text-white mb-4">Filter by</h2>
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
        <!-- Filter 1: Category -->
        <div>
          <label for="category" class="text-sm text-purple-300">Category</label>
          <select id="category" class="mt-2 w-full px-4 py-2 bg-gray-800 text-white rounded-lg outline-none">
            <option value="">All Categories</option>
            <option value="ml">Machine Learning</option>
            <option value="ai">Artificial Intelligence</option>
            <option value="data-science">Data Science</option>
            <option value="ethics">Ethics in AI</option>
            <option value="healthcare">Healthcare</option>
          </select>
        </div>
        <!-- Filter 2: Author -->
        <div>
          <label for="author" class="text-sm text-purple-300">Author</label>
          <input type="text" id="author" class="mt-2 w-full px-4 py-2 bg-gray-800 text-white rounded-lg outline-none" placeholder="Author name">
        </div>
        <!-- Filter 3: Publication Date -->
        <div>
          <label for="date" class="text-sm text-purple-300">Publication Date</label>
          <input type="date" id="date" class="mt-2 w-full px-4 py-2 bg-gray-800 text-white rounded-lg outline-none">
        </div>
        <!-- Filter 4: Citation Metrics -->
        <div>
          <label for="citations" class="text-sm text-purple-300">Citations</label>
          <input type="number" id="citations" class="mt-2 w-full px-4 py-2 bg-gray-800 text-white rounded-lg outline-none" placeholder="Min citations">
        </div>
      </div>
      <!-- Apply Filters Button -->
      <div class="mt-6 text-right">
        <button class="bg-green-500 hover:bg-green-600 text-white px-6 py-2 rounded-lg shadow-md">Apply Filters</button>
      </div>
    </div>

    <!-- Resource Results -->
    <div class="space-y-6">
      <!-- Single Resource Card -->
      <div class="bg-purple-800 p-6 rounded-lg shadow-xl hover:shadow-2xl">
        <div class="flex justify-between items-center mb-4">
          <h3 class="text-lg font-semibold text-white">Deep Learning for Image Classification</h3>
          <div class="flex items-center space-x-2">
            <span class="text-sm text-purple-300">Citations: <span class="font-semibold text-purple-100">120</span></span>
            <button class="bg-blue-600 hover:bg-blue-500 text-white px-3 py-1 rounded-lg shadow-md">Download</button>
          </div>
        </div>
        <p class="text-purple-300 mb-4">This research paper explores advanced deep learning techniques for image classification. We propose new models and training methods...</p>
        <div class="flex items-center space-x-4 text-sm text-purple-400">
          <div>Author: <span class="font-semibold text-purple-200">Jane Doe</span></div>
          <div>Published: <span class="font-semibold text-purple-200">2023-05-15</span></div>
          <div>Category: <span class="font-semibold text-purple-200">Machine Learning</span></div>
        </div>
      </div>

      <!-- Second Resource Card -->
      <div class="bg-purple-800 p-6 rounded-lg shadow-xl hover:shadow-2xl">
        <div class="flex justify-between items-center mb-4">
          <h3 class="text-lg font-semibold text-white">Ethical Considerations in AI</h3>
          <div class="flex items-center space-x-2">
            <span class="text-sm text-purple-300">Citations: <span class="font-semibold text-purple-100">86</span></span>
            <button class="bg-blue-600 hover:bg-blue-500 text-white px-3 py-1 rounded-lg shadow-md">Download</button>
          </div>
        </div>
        <p class="text-purple-300 mb-4">This article delves into the ethical challenges posed by the rapid development of AI technologies and their application in various fields...</p>
        <div class="flex items-center space-x-4 text-sm text-purple-400">
          <div>Author: <span class="font-semibold text-purple-200">John Smith</span></div>
          <div>Published: <span class="font-semibold text-purple-200">2022-11-08</span></div>
          <div>Category: <span class="font-semibold text-purple-200">Ethics in AI</span></div>
        </div>
      </div>

      <!-- Third Resource Card -->
      <div class="bg-purple-800 p-6 rounded-lg shadow-xl hover:shadow-2xl">
        <div class="flex justify-between items-center mb-4">
          <h3 class="text-lg font-semibold text-white">AI in Healthcare: A Review</h3>
          <div class="flex items-center space-x-2">
            <span class="text-sm text-purple-300">Citations: <span class="font-semibold text-purple-100">65</span></span>
            <button class="bg-blue-600 hover:bg-blue-500 text-white px-3 py-1 rounded-lg shadow-md">Download</button>
          </div>
        </div>
        <p class="text-purple-300 mb-4">A comprehensive review of how artificial intelligence is being used in healthcare, from diagnostics to treatment and beyond...</p>
        <div class="flex items-center space-x-4 text-sm text-purple-400">
          <div>Author: <span class="font-semibold text-purple-200">Emily Williams</span></div>
          <div>Published: <span class="font-semibold text-purple-200">2021-07-22</span></div>
          <div>Category: <span class="font-semibold text-purple-200">Healthcare</span></div>
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