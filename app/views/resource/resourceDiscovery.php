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

<section class="min-h-screen text-gray-200 font-sans py-20">
  <div class="container mx-auto px-4">
    <!-- Page Header -->
    <div class="bg-gradient-to-r from-purple-700 to-purple-900 text-white p-8 rounded-lg shadow-xl flex justify-between items-center mb-12">
      <h1 class="text-4xl font-bold">Resource Discovery</h1>
      <a href="/researchhub_project/app/views/resource/uploadResource.php" class="bg-gradient-to-r from-green-500 to-teal-500 text-white px-6 py-3 rounded-lg shadow-md hover:from-green-600 hover:to-teal-600">Upload Resource</a>
    </div>

    <!-- Search Bar -->
    <div class="mb-8">
      <div class="flex items-center bg-purple-800 p-4 rounded-lg shadow-lg">
        <input type="text" id="search" class="bg-gray-800 text-white w-full px-4 py-2 rounded-lg outline-none" placeholder="Search for research papers, datasets, or articles...">
        <button id="searchBtn" class="ml-4 bg-green-500 hover:bg-green-600 text-white px-6 py-2 rounded-lg shadow-md">Search</button>
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
        <button id="applyFilters" class="bg-green-500 hover:bg-green-600 text-white px-6 py-2 rounded-lg shadow-md">Apply Filters</button>
      </div>
    </div>


    <!-- Resource Results -->
    <div class="space-y-6 resources-container"></div>

    <!-- Pagination -->
    <div class="mt-12 flex justify-center pagination-buttons gap-3">
      <button class="bg-purple-600 text-white px-4 py-2 rounded-lg hover:bg-purple-500 shadow-md pagination-previous">Previous</button>
      <button class="bg-purple-600 text-white px-4 py-2 rounded-lg hover:bg-purple-500 shadow-md pagination-next">Next</button>
    </div>
  </div>
</section>

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
        const response = await fetch(`/researchhub_project/app/controllers/getResources.php?page=${page}&search=${encodeURIComponent(searchTerm)}&category=${encodeURIComponent(category)}&author=${encodeURIComponent(author)}&date=${encodeURIComponent(date)}&citations=${encodeURIComponent(citations)}`);
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
        <div class="bg-purple-800 p-6 rounded-lg shadow-xl hover:shadow-2xl">
          <div class="flex justify-between items-center mb-4">
            <h3 class="text-lg font-semibold text-white">${resource.title}</h3>
            <div class="flex items-center space-x-2">
              <span class="text-sm text-purple-300">Citations: <span class="font-semibold text-purple-100">${resource.citations}</span></span>
              <a href="/researchhub_project/public/uploads/resources/${resource.file_path}" class="download-button bg-blue-600 hover:bg-blue-500 text-white px-3 py-1 rounded-lg shadow-md">Download</a>
            </div>
          </div>
          <p class="text-purple-300 mb-4">${resource.description}</p>
          <div class="flex items-center space-x-4 text-sm text-purple-400">
            <div>Author: <span class="font-semibold text-purple-200">${resource.full_name}</span></div>
            <div>Uploaded: <span class="font-semibold text-purple-200">${resource.uploaded_at}</span></div>
            <div>Category: <span class="font-semibold text-purple-200">${resource.category}</span></div>
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