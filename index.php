<?php include './app/views/partials/_navbar.php' ?>

<!-- Enhanced Landing Page Section -->
<section class="relative flex flex-col items-center justify-center text-center min-h-screen">
  <!-- Overlay for Background -->
  <div class="absolute inset-0 bg-black bg-opacity-70"></div>

  <!-- Main Content -->
  <div class="relative z-10 flex flex-col items-center space-y-8 py-20 px-4">
    <h1 class="text-6xl font-bold mb-4 text-yellow-400">Welcome to ResearchHub</h1>
    <p class="text-2xl mb-8 max-w-3xl mx-auto text-gray-300">A collaborative platform designed for researchers, academics, and students to share knowledge, discover resources, and advance their scholarly work.</p>

    <div class="flex space-x-4">
      <a href="#services" class="bg-yellow-400 hover:bg-yellow-500 text-black py-3 px-6 rounded-lg font-semibold transition duration-300 transform hover:scale-105">Get Started</a>
      <a href="#learn-more" class="bg-transparent border border-yellow-400 text-yellow-400 py-3 px-6 rounded-lg font-semibold transition duration-300 hover:bg-yellow-400 hover:text-black">Learn More</a>
    </div>
  </div>

  <!-- Floating Images -->
  <div class="absolute -top-10 -left-10 z-0 transform rotate-12 hover:scale-105 transition duration-500">
    <img src="https://static.vecteezy.com/system/resources/previews/009/344/818/original/3d-illustration-creative-tools-png.png" alt="Research image 1" class="w-48 h-48 rounded-lg shadow-lg object-cover">
  </div>
  <div class="absolute top-20 -right-20 z-0 transform rotate-6 hover:scale-105 transition duration-500">
    <img src="https://png.pngtree.com/png-clipart/20220908/ourmid/pngtree-search-3d-icon-render-png-image_6142351.png" alt="Research image 2" class="w-64 h-64 rounded-lg shadow-lg object-cover">
  </div>
  <div class="absolute bottom-20 right-20 z-0 transform rotate-3 hover:scale-105 transition duration-500">
    <img src="https://static.vecteezy.com/system/resources/previews/020/951/159/original/book-3d-icon-free-png.png" alt="Research image 3" class="w-40 h-40 rounded-lg shadow-lg object-cover">
  </div>
</section>


<!-- Services Section -->
<section id="services" class="py-20">
  <div class="max-w-7xl mx-auto text-center mb-10">
    <h2 class="text-4xl font-bold text-yellow-400">Our Services</h2>
    <p class="text-lg text-gray-400 mt-4">Explore the wide range of features ResearchHub offers to support your academic endeavors.</p>
  </div>
  <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 px-4 max-w-7xl mx-auto">
    <!-- Service 1 -->
    <div class="relative bg-[#111111] rounded-lg p-6 border border-[#333333] shadow-lg hover:bg-[#1b1b1b] transition duration-300">
      <i class="bx bxs-book text-6xl text-yellow-400"></i>
      <h3 class="text-xl font-bold mt-4">Share Research Papers</h3>
      <p class="text-gray-400 mt-2">Upload and share your research papers to collaborate with the academic community.</p>
    </div>

    <!-- Service 2 -->
    <div class="relative bg-[#111111] rounded-lg p-6 border border-[#333333] shadow-lg hover:bg-[#1b1b1b] transition duration-300">
      <i class="bx bx-search text-6xl text-cyan-400"></i>
      <h3 class="text-xl font-bold mt-4">Discover Resources</h3>
      <p class="text-gray-400 mt-2">Explore a wide collection of research articles, datasets, and scholarly works from various fields.</p>
    </div>

    <!-- Service 3 -->
    <div class="relative bg-[#111111] rounded-lg p-6 border border-[#333333] shadow-lg hover:bg-[#1b1b1b] transition duration-300">
      <i class="bx bxs-conversation text-6xl text-pink-400"></i>
      <h3 class="text-xl font-bold mt-4">Collaborate & Discuss</h3>
      <p class="text-gray-400 mt-2">Join discussions with fellow researchers, ask questions, and share your insights.</p>
    </div>

    <!-- Service 4 -->
    <div class="relative bg-[#111111] rounded-lg p-6 border border-[#333333] shadow-lg hover:bg-[#1b1b1b] transition duration-300">
      <i class="bx bx-shield-quarter text-6xl text-red-400"></i>
      <h3 class="text-xl font-bold mt-4">Secure Data Upload</h3>
      <p class="text-gray-400 mt-2">Share your research securely with encrypted file uploads and controlled access.</p>
    </div>

    <!-- Service 5 -->
    <div class="relative bg-[#111111] rounded-lg p-6 border border-[#333333] shadow-lg hover:bg-[#1b1b1b] transition duration-300">
      <i class="bx bx-line-chart text-6xl text-green-400"></i>
      <h3 class="text-xl font-bold mt-4">Track & Analyze</h3>
      <p class="text-gray-400 mt-2">Monitor the impact and reach of your research with detailed analytics and reports.</p>
    </div>

    <!-- Service 6 -->
    <div class="relative bg-[#111111] rounded-lg p-6 border border-[#333333] shadow-lg hover:bg-[#1b1b1b] transition duration-300">
      <i class="bx bx-group text-6xl text-purple-400"></i>
      <h3 class="text-xl font-bold mt-4">Connect with Experts</h3>
      <p class="text-gray-400 mt-2">Engage with professionals and leading academics in your field of research.</p>
    </div>
  </div>
</section>

<!-- FAQ Section -->
<section id="faq" class="bg-[#1b1b1b] py-20">
  <div class="max-w-7xl mx-auto px-4 text-center">
    <h2 class="text-4xl font-bold text-yellow-400">Frequently Asked Questions</h2>
    <p class="text-lg text-gray-400 mt-4 mb-8">Find answers to common questions about ResearchHub.</p>
    <div class="space-y-6">
      <!-- FAQ 1 -->
      <div class="bg-[#111111] p-6 rounded-lg border border-[#333333]">
        <h3 class="font-semibold text-lg">How do I upload my research?</h3>
        <p class="text-gray-400 mt-2">You can easily upload research papers and datasets by creating an account and navigating to the "Upload" section in your profile.</p>
      </div>

      <!-- FAQ 2 -->
      <div class="bg-[#111111] p-6 rounded-lg border border-[#333333]">
        <h3 class="font-semibold text-lg">Is ResearchHub free to use?</h3>
        <p class="text-gray-400 mt-2">Yes, ResearchHub offers a free account for researchers and students. We also provide premium features for larger collaborations.</p>
      </div>

      <!-- FAQ 3 -->
      <div class="bg-[#111111] p-6 rounded-lg border border-[#333333]">
        <h3 class="font-semibold text-lg">How can I collaborate with others?</h3>
        <p class="text-gray-400 mt-2">You can use our discussion boards, private messaging, and project management tools to collaborate on research with your peers.</p>
      </div>
    </div>
  </div>
</section>

<!-- Reviews Section -->
<section id="reviews" class="py-20">
  <div class="max-w-7xl mx-auto text-center mb-10">
    <h2 class="text-4xl font-bold text-yellow-400">What Our Users Say</h2>
    <p class="text-lg text-gray-400 mt-4">See what researchers and academics are saying about ResearchHub.</p>
  </div>
  <div class="flex flex-col md:flex-row justify-center gap-8 px-4">
    <!-- Review 1 -->
    <div class="bg-[#111111] rounded-lg p-6 border border-[#333333] shadow-lg">
      <p class="text-gray-400 italic">"ResearchHub has revolutionized the way I collaborate with other researchers. The ability to share and discover research is incredibly valuable."</p>
      <h4 class="mt-4 text-lg font-bold text-yellow-400">Dr. Emily Johnson</h4>
      <p class="text-gray-400 text-sm">Professor of AI, Stanford University</p>
    </div>

    <!-- Review 2 -->
    <div class="bg-[#111111] rounded-lg p-6 border border-[#333333] shadow-lg">
      <p class="text-gray-400 italic">"The user interface is intuitive and the platform makes it easy to connect with experts in my field. Highly recommend!"</p>
      <h4 class="mt-4 text-lg font-bold text-yellow-400">Dr. Mark Stevenson</h4>
      <p class="text-gray-400 text-sm">Data Scientist, MIT</p>
    </div>

    <!-- Review 3 -->
    <div class="bg-[#111111] rounded-lg p-6 border border-[#333333] shadow-lg">
      <p class="text-gray-400 italic">"As a PhD student, ResearchHub has been a great resource for discovering relevant research and sharing my own work."</p>
      <h4 class="mt-4 text-lg font-bold text-yellow-400">Sarah Lee</h4>
      <p class="text-gray-400 text-sm">PhD Candidate, University of Cambridge</p>
    </div>
  </div>
</section>

<!-- Call to Action Section -->
<section class="bg-yellow-400 py-16">
  <div class="max-w-7xl mx-auto text-center">
    <h2 class="text-4xl font-bold text-black">Ready to Join ResearchHub?</h2>
    <p class="text-xl text-black mt-4 mb-8">Start collaborating and sharing your research with the world. Sign up now and become part of the community!</p>
    <a href="/signup" class="bg-black text-yellow-400 py-3 px-6 rounded-lg font-semibold hover:bg-gray-800 transition duration-300">Sign Up Now</a>
  </div>
</section>

<!-- Additional Sections -->
<section class="py-20">
  <div class="max-w-7xl mx-auto text-center">
    <h2 class="text-4xl font-bold text-yellow-400">Research Tools & Resources</h2>
    <p class="text-lg text-gray-400 mt-4">Discover essential tools, datasets, and resources that will aid you in your academic journey.</p>
  </div>
  <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 px-4 max-w-7xl mx-auto mt-10">
    <!-- Resource 1 -->
    <div class="relative bg-[#111111] rounded-lg p-6 border border-[#333333] shadow-lg hover:bg-[#1b1b1b] transition duration-300">
      <i class="bx bx-data text-6xl text-yellow-400"></i>
      <h3 class="text-xl font-bold mt-4">Open Datasets</h3>
      <p class="text-gray-400 mt-2">Access open-source datasets across various fields of research.</p>
    </div>

    <!-- Resource 2 -->
    <div class="relative bg-[#111111] rounded-lg p-6 border border-[#333333] shadow-lg hover:bg-[#1b1b1b] transition duration-300">
      <i class="bx bx-line-chart text-6xl text-cyan-400"></i>
      <h3 class="text-xl font-bold mt-4">Research Analytics</h3>
      <p class="text-gray-400 mt-2">Track your research performance and citation statistics.</p>
    </div>

    <!-- Resource 3 -->
    <div class="relative bg-[#111111] rounded-lg p-6 border border-[#333333] shadow-lg hover:bg-[#1b1b1b] transition duration-300">
      <i class="bx bxs-flask text-6xl text-green-400"></i>
      <h3 class="text-xl font-bold mt-4">Experimental Tools</h3>
      <p class="text-gray-400 mt-2">Use a range of experimental tools for data visualization, simulations, and more.</p>
    </div>
  </div>
</section>

<?php include './app/views/partials/_footer.php' ?>