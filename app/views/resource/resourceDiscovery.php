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
<section class="min-h-screen text-gray-200 font-sans pt-20 pb-16">
  <div class="container mx-auto px-4">
    <!-- Page Header -->
    <div class="bg-gradient-to-r from-purple-600 to-indigo-600 text-white p-8 rounded-lg shadow-xl flex justify-between items-center mb-12 animate-fadeIn">
      <h1 class="text-5xl font-extrabold tracking-tight">Resource Discovery</h1>
      <a href="/researchhub_project/app/views/resource/uploadResource.php" class="bg-gradient-to-r from-green-400 via-teal-400 to-blue-400 text-white px-6 py-3 rounded-full shadow-lg transition duration-300 transform hover:scale-110 hover:bg-opacity-90">Upload Resource</a>
    </div>

    <!-- Search Bar -->
    <div class="mb-8">
      <div class="flex items-center bg-gray-800 p-5 rounded-lg shadow-lg transition duration-300 transform hover:shadow-2xl">
        <input type="text" id="search" class="bg-transparent text-white w-full px-4 py-3 rounded-lg outline-none focus:ring-4 focus:ring-teal-500" placeholder="Search for research papers, datasets, or articles...">
        <button id="searchBtn" class="ml-4 bg-teal-500 hover:bg-teal-600 text-white px-6 py-3 rounded-full shadow-md transition duration-300 transform hover:scale-110">Search</button>
      </div>
    </div>

    <!-- Filters -->
    <div class="bg-gray-800 p-6 rounded-lg shadow-lg mb-12 animate-fadeInUp">
      <h2 class="text-3xl font-semibold text-white mb-6">Filter by</h2>
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
        <!-- Filter 1: Category -->
        <div>
          <label for="category" class="text-md text-teal-300">Category</label>
          <select id="category" class="mt-3 w-full px-4 py-3 bg-gray-700 text-white rounded-lg outline-none focus:ring-4 focus:ring-green-400">
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
          <label for="author" class="text-md text-teal-300">Author</label>
          <input type="text" id="author" class="mt-3 w-full px-4 py-3 bg-gray-700 text-white rounded-lg outline-none focus:ring-4 focus:ring-green-400" placeholder="Author name">
        </div>
        <!-- Filter 3: Publication Date -->
        <div>
          <label for="date" class="text-md text-teal-300">Publication Date</label>
          <input type="date" id="date" class="mt-3 w-full px-4 py-3 bg-gray-700 text-white rounded-lg outline-none focus:ring-4 focus:ring-green-400">
        </div>
        <!-- Filter 4: Citation Metrics -->
        <div>
          <label for="citations" class="text-md text-teal-300">Downloads</label>
          <input type="number" id="citations" class="mt-3 w-full px-4 py-3 bg-gray-700 text-white rounded-lg outline-none focus:ring-4 focus:ring-green-400" placeholder="Min Downloads">
        </div>
      </div>
      <!-- Apply Filters Button -->
      <div class="mt-8 text-right">
        <button id="applyFilters" class="bg-gradient-to-r from-teal-400 to-green-500 text-white px-8 py-3 rounded-full shadow-lg transition duration-300 transform hover:scale-110">Apply Filters</button>
      </div>
    </div>

    <!-- Resource Results -->
    <div class="space-y-6 resources-container animate-fadeInUp">
      <!-- Dynamic content will go here -->
    </div>

    <!-- Pagination -->
    <div class="mt-12 flex justify-center gap-4 pagination-buttons">
      <button class="bg-indigo-600 text-white px-6 py-3 rounded-full shadow-md hover:bg-indigo-500 transition duration-300 transform hover:scale-110 pagination-previous">Previous</button>
      <button class="bg-indigo-600 text-white px-6 py-3 rounded-full shadow-md hover:bg-indigo-500 transition duration-300 transform hover:scale-110 pagination-next">Next</button>
    </div>
  </div>
</section>

<style>
  @keyframes fadeIn {
    from {
      opacity: 0;
      transform: translateY(20px);
    }
    to {
      opacity: 1;
      transform: translateY(0);
    }
  }

  @keyframes fadeInUp {
    from {
      opacity: 0;
      transform: translateY(50px);
    }
    to {
      opacity: 1;
      transform: translateY(0);
    }
  }

  .animate-fadeIn {
    animation: fadeIn 0.5s ease-out;
  }

  .animate-fadeInUp {
    animation: fadeInUp 0.7s ease-out;
  }
</style>

<script>
  document.addEventListener('DOMContentLoaded', () => {
    const resourcesContainer = document.querySelector('.resources-container');
    const searchInput = document.getElementById('search');
    const searchBtn = document.getElementById('searchBtn');
    const categorySelect = document.getElementById('category');
    const authorInput = document.getElementById('author');
    const dateInput = document.getElementById('date');
    const citationsInput = document.getElementById('citations');
    const applyFiltersBtn = document.getElementById('applyFilters');

    let currentPage = 1;

    // Function to fetch resources based on filters
    async function fetchResources(page = 1) {
      const searchTerm = searchInput.value.trim();
      const category = categorySelect.value;
      const author = authorInput.value.trim();
      const date = dateInput.value;
      const citations = citationsInput.value;

      try {
        const response = await fetch(`/researchhub_project/app/controllers/resources/getResources.php?page=${page}&search=${encodeURIComponent(searchTerm)}&category=${encodeURIComponent(category)}&author=${encodeURIComponent(author)}&date=${encodeURIComponent(date)}&citations=${encodeURIComponent(citations)}`);
        const data = await response.json();
        displayResources(data);
      } catch (error) {
        console.error("Error fetching resources:", error);
      }
    }

    // Display resources on the page
    function displayResources(resources) {
      resourcesContainer.innerHTML = ''; // Clear previous resources

      if (resources.length === 0) {
        resourcesContainer.innerHTML = '<p>No resources found.</p>';
        return;
      }

      resources.forEach(resource => {
        const resourceCard = `
<div class="bg-gray-800 p-6 rounded-lg shadow-xl hover:shadow-2xl transform transition duration-300">
  <div class="flex justify-between items-center mb-4">
    <h3 class="text-xl font-bold text-white tracking-wide">${resource.title}</h3>
    <div class="flex items-center space-x-4">
      <span class="text-sm text-teal-400">Category: <span class="font-semibold text-teal-100">${resource.category}</span></span>
      <a href="/researchhub_project/public/uploads/resources/${resource.file_path}" class="download-button bg-gradient-to-r from-blue-500 to-teal-500 hover:from-teal-500 hover:to-blue-500 text-white px-4 py-2 rounded-full shadow-lg transition duration-300 transform hover:scale-110">Download</a>
    </div>
  </div>
  <p class="text-purple-300 mb-4 line-clamp-3">${resource.description}</p>
  <div class="flex items-center space-x-6 text-sm text-purple-400">
    <div>Author: <span class="font-semibold text-teal-300">${resource.full_name}</span></div>
    <div>Uploaded: <span class="font-semibold text-teal-300">${resource.uploaded_at}</span></div>
  </div>
</div>

      `;
        resourcesContainer.innerHTML += resourceCard;
      });
    }


    // Event listeners for search and filter
    searchBtn.addEventListener('click', () => {
      currentPage = 1; // Reset to first page on new search
      fetchResources(currentPage);
    });

    applyFiltersBtn.addEventListener('click', () => {
      currentPage = 1; // Reset to first page on filter apply
      fetchResources(currentPage);
    });

    // Handle pagination (previous and next buttons)
    function handlePagination() {
      const previousButton = document.querySelector('.pagination-previous');
      const nextButton = document.querySelector('.pagination-next');

      previousButton.addEventListener('click', () => {
        if (currentPage > 1) {
          currentPage--;
          fetchResources(currentPage);
        }
      });

      nextButton.addEventListener('click', () => {
        currentPage++;
        fetchResources(currentPage);
      });
    }

    // Initial fetch and setup pagination
    fetchResources(currentPage);
    handlePagination();
  });
</script>


<?php include '../partials/_footer.php' ?>