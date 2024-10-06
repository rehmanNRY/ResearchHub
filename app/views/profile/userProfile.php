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

<?php include '../partials/_footer.php' ?>