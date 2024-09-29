<?php include './app/views/partials/_navbar.php' ?>

<section class="relative text-black">
  <!-- Full-Width Background Image -->
  <img class="absolute -z-10 w-full h-full object-cover opacity-90" src="./public/assets/images/bgmain.png"/>
  
  <!-- Main Content Container -->
  <div class="max-w-7xl mx-auto flex flex-col md:flex-row justify-between items-center py-24 px-6 md:px-12">
    
    <!-- Left Side with Image and Text -->
    <div class="w-full md:w-1/2 h-full rounded-3xl overflow-hidden relative shadow-lg">
      <img src="./public/assets/images/bg.jpg" class="h-full w-full object-cover" alt="Background Image">
      <div class="absolute inset-0 bg-gradient-to-r from-blue-500 to-blue-800 opacity-30"></div>
      <div class="absolute bottom-10 left-10 text-white">
        <h2 class="text-2xl md:text-3xl font-bold HelvR">Explore Innovative Solutions</h2>
        <p class="mt-2 text-gray-200">Join the future of biotechnology.</p>
      </div>
    </div>
    
    <!-- Right Side with Text Content -->
    <div class="w-full md:w-1/2 ps-8 flex flex-col justify-center text-left mt-10 md:mt-0 md:ml-12">
      <!-- Tagline and Icons -->
      <div class="mb-6">
        <div class="flex space-x-2 mb-4 items-center">
          <span class="bg-blue-100 text-blue-600 py-1 px-3 rounded-full text-sm">We offer</span>
          <i class='bx bx-star text-blue-600 text-xl'></i>
          <i class='bx bx-check-circle text-blue-600 text-xl'></i>
        </div>
        <!-- Main Heading -->
        <h1 class="text-4xl md:text-5xl font-bold leading-tight text-gray-900">
          World Of Advanced Biotech Solutions
        </h1>
        <!-- Subtext -->
        <p class="mt-4 text-lg md:text-xl text-gray-600">
          We combine science and technology to transform the world and make it a better place for everyone.
        </p>
      </div>

      <!-- Action Buttons -->
      <div class="mt-6 flex space-x-4">
        <a href="#" class="bg-blue-600 text-white py-3 px-6 rounded-lg shadow-lg hover:bg-blue-700 hover:shadow-2xl transition duration-300 flex items-center">
          <i class='bx bx-info-circle mr-2'></i> Learn More
        </a>
        <a href="#" class="bg-white border border-gray-300 text-gray-900 py-3 px-6 rounded-lg shadow-lg hover:bg-gray-100 transition duration-300 flex items-center">
          <i class='bx bx-phone mr-2'></i> Request a Call
        </a>
      </div>

      <!-- Social Links -->
      <div class="mt-10">
        <h3 class="text-lg font-semibold">Follow Us:</h3>
        <div class="flex space-x-4 mt-2">
          <a href="#" class="text-gray-600 hover:text-blue-500 transition duration-300 hover:scale-110">
            <i class='bx bxl-facebook-square' style="font-size: 24px;"></i>
          </a>
          <a href="#" class="text-gray-600 hover:text-blue-500 transition duration-300 hover:scale-110">
            <i class='bx bxl-twitter' style="font-size: 24px;"></i>
          </a>
          <a href="#" class="text-gray-600 hover:text-blue-500 transition duration-300 hover:scale-110">
            <i class='bx bxl-linkedin' style="font-size: 24px;"></i>
          </a>
          <a href="#" class="text-gray-600 hover:text-blue-500 transition duration-300 hover:scale-110">
            <i class='bx bxl-instagram' style="font-size: 24px;"></i>
          </a>
        </div>
      </div>
    </div>
    
  </div>
</section>


<!-- Services Section -->
<section id="services" class="py-20 bg-white">
  <div class="max-w-7xl mx-auto text-center mb-10">
    <h2 class="text-4xl font-bold text-blue-600">Our Services</h2>
    <p class="text-lg text-gray-600 mt-4">Explore the wide range of features ResearchHub offers to support your academic endeavors.</p>
  </div>
  <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 px-4 max-w-7xl mx-auto">
    <!-- Service 1 -->
    <div class="relative bg-gray-100 rounded-lg p-6 border border-gray-300 shadow-lg hover:bg-gray-200 transition duration-300">
      <i class="bx bxs-book text-6xl text-blue-600"></i>
      <h3 class="text-xl font-bold mt-4">Share Research Papers</h3>
      <p class="text-gray-600 mt-2">Upload and share your research papers to collaborate with the academic community.</p>
    </div>

    <!-- Service 2 -->
    <div class="relative bg-gray-100 rounded-lg p-6 border border-gray-300 shadow-lg hover:bg-gray-200 transition duration-300">
      <i class="bx bx-search text-6xl text-cyan-500"></i>
      <h3 class="text-xl font-bold mt-4">Discover Resources</h3>
      <p class="text-gray-600 mt-2">Explore a wide collection of research articles, datasets, and scholarly works from various fields.</p>
    </div>

    <!-- Service 3 -->
    <div class="relative bg-gray-100 rounded-lg p-6 border border-gray-300 shadow-lg hover:bg-gray-200 transition duration-300">
      <i class="bx bxs-conversation text-6xl text-pink-500"></i>
      <h3 class="text-xl font-bold mt-4">Collaborate & Discuss</h3>
      <p class="text-gray-600 mt-2">Join discussions with fellow researchers, ask questions, and share your insights.</p>
    </div>

    <!-- Service 4 -->
    <div class="relative bg-gray-100 rounded-lg p-6 border border-gray-300 shadow-lg hover:bg-gray-200 transition duration-300">
      <i class="bx bx-shield-quarter text-6xl text-red-500"></i>
      <h3 class="text-xl font-bold mt-4">Secure Data Upload</h3>
      <p class="text-gray-600 mt-2">Share your research securely with encrypted file uploads and controlled access.</p>
    </div>

    <!-- Service 5 -->
    <div class="relative bg-gray-100 rounded-lg p-6 border border-gray-300 shadow-lg hover:bg-gray-200 transition duration-300">
      <i class="bx bx-line-chart text-6xl text-green-500"></i>
      <h3 class="text-xl font-bold mt-4">Track & Analyze</h3>
      <p class="text-gray-600 mt-2">Monitor the impact and reach of your research with detailed analytics and reports.</p>
    </div>

    <!-- Service 6 -->
    <div class="relative bg-gray-100 rounded-lg p-6 border border-gray-300 shadow-lg hover:bg-gray-200 transition duration-300">
      <i class="bx bx-group text-6xl text-purple-500"></i>
      <h3 class="text-xl font-bold mt-4">Connect with Experts</h3>
      <p class="text-gray-600 mt-2">Engage with professionals and leading academics in your field of research.</p>
    </div>
  </div>
</section>

<!-- FAQ Section -->
<section id="faq" class="bg-gray-100 py-20">
  <div class="max-w-7xl mx-auto px-4 text-center">
    <h2 class="text-4xl font-bold text-blue-600">Frequently Asked Questions</h2>
    <p class="text-lg text-gray-600 mt-4 mb-8">Find answers to common questions about ResearchHub.</p>
    <div class="space-y-6">
      <!-- FAQ 1 -->
      <div class="bg-white p-6 rounded-lg border border-gray-300 shadow-lg">
        <h3 class="font-semibold text-lg">How do I upload my research?</h3>
        <p class="text-gray-600 mt-2">You can easily upload research papers and datasets by creating an account and navigating to the "Upload" section in your profile.</p>
      </div>

      <!-- FAQ 2 -->
      <div class="bg-white p-6 rounded-lg border border-gray-300 shadow-lg">
        <h3 class="font-semibold text-lg">Is ResearchHub free to use?</h3>
        <p class="text-gray-600 mt-2">Yes, ResearchHub offers a free account for researchers and students. We also provide premium features for larger collaborations.</p>
      </div>

      <!-- FAQ 3 -->
      <div class="bg-white p-6 rounded-lg border border-gray-300 shadow-lg">
        <h3 class="font-semibold text-lg">How can I collaborate with others?</h3>
        <p class="text-gray-600 mt-2">You can use our discussion boards, private messaging, and project management tools to collaborate on research with your peers.</p>
      </div>
    </div>
  </div>
</section>

<!-- Call to Action Section -->
<div class="bg-blue-100 p-10 m-6 rounded-xl">
  <h1 class="text-4xl font-bold text-gray-800 mb-4">Welcome to ResearchHub!</h1>
  <p class="text-gray-700 mb-4">Explore groundbreaking research, connect with peers, and share your insights.</p>
  <a href="/researchhub_project/app/views/auth/get-started.php" class="bg-blue-500 hover:bg-blue-600 text-white px-6 py-2 rounded-lg font-semibold transition">Get Started</a>
</div>

<?php include './app/views/partials/_footer.php' ?>