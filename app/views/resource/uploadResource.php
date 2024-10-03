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


<div class="bg-gray-900 text-gray-200 px-8 py-20">
  <div class="bg-purple-800 rounded-lg shadow-lg p-6 max-w-3xl mx-auto">
    <h2 class="text-3xl font-semibold text-white mb-4">Upload Research Resources</h2>
    <p class="text-purple-300 mb-6">Upload research papers, articles, datasets, presentations, and other scholarly resources. Supported file formats: PDF, DOCX, PPT, CSV, TXT.</p>

    <!-- File Upload Section -->
    <form class="space-y-6" method="POST" enctype="multipart/form-data" action="../../controllers/upload_resource.php">
      <div class="flex items-center space-x-4">
        <!-- File Input -->
        <label for="file" class="flex items-center bg-green-500 text-white px-4 py-2 rounded-lg cursor-pointer hover:bg-green-600 transition ease-in-out duration-300">
          <span>Choose a File</span>
          <input type="file" id="file" name="file" class="hidden" accept=".pdf, .docx, .pptx, .csv, .txt" />
        </label>

        <!-- File Name Display -->
        <span id="file-name" class="text-purple-200">No file chosen</span>
      </div>

      <!-- File Details Section -->
      <div class="space-y-4">
        <!-- Title -->
        <div>
          <label for="title" class="text-purple-300">Title</label>
          <input type="text" id="title" name="title" placeholder="Enter title of the research" class="mt-1 w-full px-4 py-2 bg-gray-800 text-white border border-gray-600 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500">
        </div>

        <!-- Description -->
        <div>
          <label for="description" class="text-purple-300">Description</label>
          <textarea id="description" name="description" rows="4" placeholder="Provide a brief description of the research" class="mt-1 w-full px-4 py-2 bg-gray-800 text-white border border-gray-600 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500"></textarea>
        </div>

        <!-- Category -->
        <div>
          <label for="category" class="text-purple-300">Category</label>
          <select id="category" name="category" class="mt-1 w-full px-4 py-2 bg-gray-800 text-white border border-gray-600 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500">
            <option value="" selected>Select category</option>
            <option value="research-paper">Research Paper</option>
            <option value="article">Article</option>
            <option value="dataset">Dataset</option>
            <option value="presentation">Presentation</option>
            <option value="other">Other</option>
          </select>
        </div>
      </div>

      <!-- Submit Button -->
      <div class="flex justify-end">
        <button type="submit" class="bg-green-500 text-white px-6 py-2 rounded-lg hover:bg-green-600 transition ease-in-out duration-300 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-opacity-50">
          Upload Resource
        </button>
      </div>
    </form>
  </div>
</div>


<script>
    // JavaScript to handle file input and display file name
    document.getElementById('file').addEventListener('change', function(e) {
        const fileName = e.target.files[0] ? e.target.files[0].name : 'No file chosen';
        document.getElementById('file-name').textContent = fileName;
    });
</script>



<?php include '../partials/_footer.php' ?>