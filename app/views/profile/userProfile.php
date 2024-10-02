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
    <!-- Profile Header -->
    <div class="bg-gradient-to-r from-purple-700 to-purple-900 text-white p-8 rounded-lg shadow-xl flex justify-between items-center mb-12">
      <div class="flex items-center space-x-6">
        <!-- Profile Picture -->
        <img src="https://via.placeholder.com/100" alt="User Avatar" class="w-24 h-24 rounded-full shadow-lg border-4 border-purple-500">
        <div>
          <h1 class="text-4xl font-bold">John Doe</h1>
          <p class="text-sm text-purple-300">Researcher at XYZ University</p>
          <p class="text-sm">Followers: <span class="font-semibold">300</span> | Following: <span class="font-semibold">180</span></p>
        </div>
      </div>
      <button class="bg-gradient-to-r from-green-500 to-teal-500 text-white px-4 py-2 rounded-lg shadow-md hover:from-green-600 hover:to-teal-600">Edit Profile</button>
    </div>

    <!-- Profile Overview and Research Stats -->
    <div class="grid grid-cols-1 lg:grid-cols-4 gap-8">
      <!-- Bio and Research Interests -->
      <div class="lg:col-span-3 bg-purple-800 p-6 rounded-lg shadow-xl">
        <h2 class="text-2xl font-bold mb-4">Bio</h2>
        <p class="text-gray-300 mb-4">I'm a passionate researcher in the field of machine learning and data science, with a focus on building models that can process natural language effectively. Currently working on AI-based predictive analytics at XYZ University.</p>
        <h3 class="text-xl font-semibold mb-2">Research Interests</h3>
        <p class="text-purple-400 mb-2">Machine Learning, Data Science, Natural Language Processing, AI Ethics</p>
      </div>

      <!-- Research Contributions Stats -->
      <div class="bg-purple-800 p-6 rounded-lg shadow-xl">
        <h2 class="text-2xl font-bold mb-4">Research Stats</h2>
        <p class="mb-2">Research Papers Uploaded: <span class="font-semibold text-purple-300">12</span></p>
        <p class="mb-2">Citations: <span class="font-semibold text-purple-300">430</span></p>
        <p class="mb-2">Projects Involved: <span class="font-semibold text-purple-300">5</span></p>
        <p class="mb-2">Collaborators: <span class="font-semibold text-purple-300">50</span></p>
        <p class="mb-2">Total Downloads: <span class="font-semibold text-purple-300">1.2k</span></p>
      </div>
    </div>

    <!-- Research Contributions & Collaborative Projects -->
    <div class="mt-12 grid grid-cols-1 lg:grid-cols-3 gap-8">
      <!-- Research Papers -->
      <div class="bg-purple-800 p-6 rounded-lg shadow-xl lg:col-span-2">
        <h2 class="text-2xl font-bold mb-6">Research Papers</h2>
        <div class="space-y-4">
          <div class="p-4 bg-purple-700 rounded-lg shadow-md hover:shadow-lg">
            <h3 class="text-lg font-semibold mb-1">Deep Learning for NLP</h3>
            <p class="text-purple-400">Published on: <span class="font-semibold text-purple-300">March 2023</span></p>
            <p class="text-sm text-purple-300">Citations: <span class="font-semibold text-purple-300">123</span> | Downloads: <span class="font-semibold text-purple-300">450</span></p>
            <a href="#" class="text-purple-300 hover:text-purple-100 mt-2 block">View Paper</a>
          </div>
          <div class="p-4 bg-purple-700 rounded-lg shadow-md hover:shadow-lg">
            <h3 class="text-lg font-semibold mb-1">AI for Healthcare Analytics</h3>
            <p class="text-purple-400">Published on: <span class="font-semibold text-purple-300">July 2022</span></p>
            <p class="text-sm text-purple-300">Citations: <span class="font-semibold text-purple-300">97</span> | Downloads: <span class="font-semibold text-purple-300">320</span></p>
            <a href="#" class="text-purple-300 hover:text-purple-100 mt-2 block">View Paper</a>
          </div>
          <div class="p-4 bg-purple-700 rounded-lg shadow-md hover:shadow-lg">
            <h3 class="text-lg font-semibold mb-1">Ethics in AI</h3>
            <p class="text-purple-400">Published on: <span class="font-semibold text-purple-300">October 2021</span></p>
            <p class="text-sm text-purple-300">Citations: <span class="font-semibold text-purple-300">210</span> | Downloads: <span class="font-semibold text-purple-300">480</span></p>
            <a href="#" class="text-purple-300 hover:text-purple-100 mt-2 block">View Paper</a>
          </div>
        </div>
      </div>

      <!-- Collaborative Projects -->
      <div class="bg-purple-800 p-6 rounded-lg shadow-xl">
        <h2 class="text-2xl font-bold mb-6">Collaborative Projects</h2>
        <div class="space-y-4">
          <div class="p-4 bg-purple-700 rounded-lg shadow-md hover:shadow-lg">
            <h3 class="text-lg font-semibold mb-1">AI Predictive Analytics</h3>
            <p class="text-purple-400">Project Lead: <span class="font-semibold text-purple-300">Alice Johnson</span></p>
            <p class="text-sm text-purple-300">Milestones: <span class="font-semibold text-purple-300">3/5</span></p>
            <a href="#" class="text-purple-300 hover:text-purple-100 mt-2 block">View Project</a>
          </div>
          <div class="p-4 bg-purple-700 rounded-lg shadow-md hover:shadow-lg">
            <h3 class="text-lg font-semibold mb-1">Climate Change Research</h3>
            <p class="text-purple-400">Project Lead: <span class="font-semibold text-purple-300">Bob Smith</span></p>
            <p class="text-sm text-purple-300">Milestones: <span class="font-semibold text-purple-300">2/4</span></p>
            <a href="#" class="text-purple-300 hover:text-purple-100 mt-2 block">View Project</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="min-h-screen bg-gray-900 text-gray-200 font-sans py-12">
  <div class="container mx-auto px-6 lg:px-12">
    <!-- Forum Header -->
    <div class="bg-gradient-to-r from-purple-700 to-purple-900 text-white p-8 rounded-lg shadow-xl flex justify-between items-center mb-12">
      <h1 class="text-4xl font-bold">Discussion Forums</h1>
      <button class="bg-gradient-to-r from-green-500 to-teal-500 text-white px-6 py-3 rounded-lg shadow-md hover:from-green-600 hover:to-teal-600">Create New Topic</button>
    </div>

    <!-- Forum Categories -->
    <div class="mb-12">
      <h2 class="text-2xl font-bold text-purple-300 mb-6">Categories</h2>
      <div class="flex space-x-4 overflow-x-auto py-4">
        <button class="px-6 py-3 bg-purple-700 text-white rounded-lg shadow-md hover:bg-purple-600">Machine Learning</button>
        <button class="px-6 py-3 bg-purple-700 text-white rounded-lg shadow-md hover:bg-purple-600">Data Science</button>
        <button class="px-6 py-3 bg-purple-700 text-white rounded-lg shadow-md hover:bg-purple-600">Artificial Intelligence</button>
        <button class="px-6 py-3 bg-purple-700 text-white rounded-lg shadow-md hover:bg-purple-600">Ethics in AI</button>
        <button class="px-6 py-3 bg-purple-700 text-white rounded-lg shadow-md hover:bg-purple-600">Healthcare Research</button>
      </div>
    </div>

    <!-- Forum Threads -->
    <div class="space-y-6">
      <!-- Single Forum Thread -->
      <div class="bg-purple-800 p-6 rounded-lg shadow-xl hover:shadow-2xl">
        <div class="flex justify-between items-center mb-4">
          <div class="text-lg font-semibold text-white">Understanding the Ethics of AI in Healthcare</div>
          <div class="flex items-center space-x-4">
            <!-- Upvote / Downvote -->
            <div class="flex items-center space-x-1 text-purple-400">
              <button class="hover:text-purple-100"><i class="bx bx-upvote text-xl"></i></button>
              <span class="font-semibold">25</span>
              <button class="hover:text-purple-100"><i class="bx bx-downvote text-xl"></i></button>
            </div>
            <!-- Reply and Tags -->
            <div class="text-sm text-purple-300">Replies: <span class="font-semibold text-purple-100">12</span></div>
            <div class="text-xs bg-purple-600 text-purple-100 px-2 py-1 rounded-md">Ethics</div>
          </div>
        </div>
        <p class="text-purple-300 mb-2">In this thread, we are discussing the moral and ethical implications of applying AI in healthcare. What are the key considerations when developing AI systems for patient care?</p>
        <div class="flex items-center space-x-4 text-sm text-purple-400">
          <div>Posted by <span class="font-semibold text-purple-200">John Doe</span></div>
          <div>2 days ago</div>
          <div>Category: <span class="font-semibold text-purple-200">Healthcare Research</span></div>
        </div>
      </div>

      <!-- Second Forum Thread -->
      <div class="bg-purple-800 p-6 rounded-lg shadow-xl hover:shadow-2xl">
        <div class="flex justify-between items-center mb-4">
          <div class="text-lg font-semibold text-white">Best Tools for Machine Learning Model Deployment</div>
          <div class="flex items-center space-x-4">
            <!-- Upvote / Downvote -->
            <div class="flex items-center space-x-1 text-purple-400">
              <button class="hover:text-purple-100"><i class="bx bx-upvote text-xl"></i></button>
              <span class="font-semibold">48</span>
              <button class="hover:text-purple-100"><i class="bx bx-downvote text-xl"></i></button>
            </div>
            <!-- Reply and Tags -->
            <div class="text-sm text-purple-300">Replies: <span class="font-semibold text-purple-100">22</span></div>
            <div class="text-xs bg-purple-600 text-purple-100 px-2 py-1 rounded-md">Machine Learning</div>
          </div>
        </div>
        <p class="text-purple-300 mb-2">What are some of the best tools for deploying machine learning models to production? Looking for solutions that are both scalable and cost-effective.</p>
        <div class="flex items-center space-x-4 text-sm text-purple-400">
          <div>Posted by <span class="font-semibold text-purple-200">Alice Smith</span></div>
          <div>1 week ago</div>
          <div>Category: <span class="font-semibold text-purple-200">Machine Learning</span></div>
        </div>
      </div>

      <!-- Third Forum Thread -->
      <div class="bg-purple-800 p-6 rounded-lg shadow-xl hover:shadow-2xl">
        <div class="flex justify-between items-center mb-4">
          <div class="text-lg font-semibold text-white">Is Data Augmentation Still Relevant in 2024?</div>
          <div class="flex items-center space-x-4">
            <!-- Upvote / Downvote -->
            <div class="flex items-center space-x-1 text-purple-400">
              <button class="hover:text-purple-100"><i class="bx bx-upvote text-xl"></i></button>
              <span class="font-semibold">19</span>
              <button class="hover:text-purple-100"><i class="bx bx-downvote text-xl"></i></button>
            </div>
            <!-- Reply and Tags -->
            <div class="text-sm text-purple-300">Replies: <span class="font-semibold text-purple-100">9</span></div>
            <div class="text-xs bg-purple-600 text-purple-100 px-2 py-1 rounded-md">Data Science</div>
          </div>
        </div>
        <p class="text-purple-300 mb-2">Data augmentation has been used for years in image processing, but with the rise of larger datasets and synthetic data, is it still relevant in 2024? Let's discuss the trends.</p>
        <div class="flex items-center space-x-4 text-sm text-purple-400">
          <div>Posted by <span class="font-semibold text-purple-200">Mark Thompson</span></div>
          <div>3 days ago</div>
          <div>Category: <span class="font-semibold text-purple-200">Data Science</span></div>
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


<section class="min-h-screen bg-gray-900 text-gray-200 font-sans py-12">
  <div class="container mx-auto px-6 lg:px-12">
    <!-- Page Header -->
    <div class="bg-gradient-to-r from-purple-700 to-purple-900 text-white p-8 rounded-lg shadow-xl flex justify-between items-center mb-12">
      <h1 class="text-4xl font-bold">Resource Discovery</h1>
      <button class="bg-gradient-to-r from-green-500 to-teal-500 text-white px-6 py-3 rounded-lg shadow-md hover:from-green-600 hover:to-teal-600">Upload Resource</button>
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