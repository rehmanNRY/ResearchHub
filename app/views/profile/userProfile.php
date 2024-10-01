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

<section class="py-20 text-white">
  <!-- Profile Section -->
  <div class="w-full container mx-auto p-6 bg-gray-800 rounded-lg shadow-lg">
    <div class="flex flex-col lg:flex-row items-center gap-6">
      <!-- Profile Image -->
      <div class="w-32 h-32 rounded-full overflow-hidden border-4 border-purple-600">
        <img src="profile-placeholder.jpg" alt="Profile Picture" class="w-full h-full object-cover">
      </div>
      <!-- User Info -->
      <div class="flex-1">
        <h2 class="text-3xl font-bold">Dr. John Doe</h2>
        <p class="text-sm text-gray-400">Professor of Computer Science, XYZ University</p>
        <div class="mt-2 flex items-center gap-2">
          <span class="bg-[#4B4A6F] rounded-full text-white px-4 py-1.5 text-sm">Top Contributor</span>
          <span class="bg-[#4B4A6F] rounded-full text-white px-4 py-1.5 text-sm">AI Specialist</span>
        </div>
        <div class="mt-4">
          <p>Research Interests:</p>
          <div class="flex gap-2 mt-1">
            <span class="bg-[#4B4A6F] rounded-full text-white px-4 py-1.5 text-sm">Artificial Intelligence</span>
            <span class="bg-[#4B4A6F] rounded-full text-white px-4 py-1.5 text-sm">Machine Learning</span>
            <span class="bg-[#4B4A6F] rounded-full text-white px-4 py-1.5 text-sm">Big Data</span>
          </div>
        </div>
      </div>
      <!-- Action Buttons -->
      <div class="flex flex-col gap-4">
        <button class="px-6 py-2 bg-purple-600 text-white rounded-lg hover:bg-purple-700 transition">Edit Profile</button>
        <button class="px-6 py-2 bg-purple-600 text-white rounded-lg hover:bg-purple-700 transition">Upload Research</button>
        <button class="px-6 py-2 bg-purple-600 text-white rounded-lg hover:bg-purple-700 transition">Message</button>
      </div>
    </div>
  </div>
  
  <!-- Profile Metrics Section -->
  <div class="w-full container mx-auto mt-8 grid grid-cols-2 md:grid-cols-4 gap-6">
    <div class="bg-gray-700 p-4 rounded-lg text-center">
      <p class="text-xl font-bold">12</p>
      <p class="text-sm text-gray-400">Papers Published</p>
    </div>
    <div class="bg-gray-700 p-4 rounded-lg text-center">
      <p class="text-xl font-bold">230</p>
      <p class="text-sm text-gray-400">Citations</p>
    </div>
    <div class="bg-gray-700 p-4 rounded-lg text-center">
      <p class="text-xl font-bold">15</p>
      <p class="text-sm text-gray-400">Collaborations</p>
    </div>
    <div class="bg-gray-700 p-4 rounded-lg text-center">
      <p class="text-xl font-bold">102</p>
      <p class="text-sm text-gray-400">Followers</p>
    </div>
  </div>
  
  <!-- Collaborators Section -->
  <div class="w-full container mx-auto mt-8">
    <h3 class="text-xl font-semibold text-gray-200 mb-4">Current Collaborators</h3>
    <div class="flex gap-4 overflow-x-auto">
      <!-- Collaborator Card -->
      <div class="w-48 p-4 bg-gray-800 rounded-lg hover:bg-[#3E3C5A]">
        <img src="collaborator1.jpg" alt="Collaborator" class="w-16 h-16 rounded-full mb-2 mx-auto">
        <p class="text-center font-bold">Dr. Jane Smith</p>
        <p class="text-sm text-gray-400 text-center">ABC University</p>
      </div>
      <!-- Repeat for other collaborators -->
      <div class="w-48 p-4 bg-gray-800 rounded-lg hover:bg-[#3E3C5A]">
        <img src="collaborator2.jpg" alt="Collaborator" class="w-16 h-16 rounded-full mb-2 mx-auto">
        <p class="text-center font-bold">Dr. Mark Thompson</p>
        <p class="text-sm text-gray-400 text-center">XYZ University</p>
      </div>
      <!-- Add more collaborator cards as needed -->
    </div>
  </div>
  
  <!-- Recent Activity Section -->
  <div class="w-full container mx-auto mt-8">
    <h3 class="text-xl font-semibold text-gray-200 mb-4">Recent Activity</h3>
    <div class="bg-gray-800 p-4 rounded-lg hover:bg-[#3E3C5A]">
      <p><strong>Dr. John Doe</strong> uploaded a new research paper: <a href="#" class="text-purple-600">"Exploring AI Techniques in Big Data Processing"</a></p>
      <p class="text-sm text-gray-400">2 days ago</p>
    </div>
    <div class="bg-gray-800 p-4 rounded-lg hover:bg-[#3E3C5A] mt-4">
      <p><strong>Dr. John Doe</strong> joined a collaboration on: <a href="#" class="text-purple-600">"Machine Learning Models in Health Data"</a></p>
      <p class="text-sm text-gray-400">5 days ago</p>
    </div>
    <!-- Add more activity logs -->
  </div>
</section>


<?php include '../partials/_footer.php' ?>