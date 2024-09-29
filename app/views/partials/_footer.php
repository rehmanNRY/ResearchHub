</main>
<footer class="bg-gray-100 py-10">
  <div class="max-w-7xl mx-auto px-4 grid grid-cols-1 md:grid-cols-4 gap-8">
    <!-- Logo and About Section -->
    <div>
      <a href="#" class="flex items-center mb-4">
        <img src="https://lobehub.com/_next/static/media/logo.98482105.png" alt="Logo" class="w-10 h-10 mr-2">
        <span class="text-gray-800 text-2xl font-semibold">YourSite</span>
      </a>
      <p class="text-gray-600 text-sm">Empowering creators and innovators with the latest AI tools and insights.</p>
    </div>

    <!-- Navigation Links -->
    <div>
      <h3 class="text-gray-800 text-lg font-semibold mb-4">Quick Links</h3>
      <ul>
        <li><a href="#" class="text-gray-600 hover:text-blue-500 transition">Home</a></li>
        <li><a href="#" class="text-gray-600 hover:text-blue-500 transition">About</a></li>
        <li><a href="#" class="text-gray-600 hover:text-blue-500 transition">Services</a></li>
        <li><a href="#" class="text-gray-600 hover:text-blue-500 transition">Blog</a></li>
        <li><a href="#" class="text-gray-600 hover:text-blue-500 transition">Contact</a></li>
      </ul>
    </div>

    <!-- Resources Links -->
    <div>
      <h3 class="text-gray-800 text-lg font-semibold mb-4">Resources</h3>
      <ul>
        <li><a href="#" class="text-gray-600 hover:text-blue-500 transition">Documentation</a></li>
        <li><a href="#" class="text-gray-600 hover:text-blue-500 transition">API Reference</a></li>
        <li><a href="#" class="text-gray-600 hover:text-blue-500 transition">Community</a></li>
        <li><a href="#" class="text-gray-600 hover:text-blue-500 transition">Support</a></li>
      </ul>
    </div>

    <!-- Social Media and Newsletter -->
    <div>
      <h3 class="text-gray-800 text-lg font-semibold mb-4">Follow Us</h3>
      <ul class="flex gap-4 mb-4">
        <li><a href="#"><i class="bx bxl-facebook text-2xl text-gray-600 hover:text-blue-500"></i></a></li>
        <li><a href="#"><i class="bx bxl-twitter text-2xl text-gray-600 hover:text-blue-500"></i></a></li>
        <li><a href="#"><i class="bx bxl-instagram text-2xl text-gray-600 hover:text-blue-500"></i></a></li>
        <li><a href="#"><i class="bx bxl-linkedin text-2xl text-gray-600 hover:text-blue-500"></i></a></li>
      </ul>
      <p class="text-gray-600 text-sm mb-2">Subscribe to our newsletter</p>
      <form class="flex gap-2">
        <input type="email" placeholder="Email address" class="px-4 py-2 rounded-lg bg-gray-200 text-gray-700 border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 transition">
        <button class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-lg font-semibold transition">Subscribe</button>
      </form>
    </div>
  </div>

  <!-- Copyright and Additional Links -->
  <div class="border-t border-gray-300 mt-8 pt-6">
    <div class="max-w-7xl mx-auto px-4 flex flex-col md:flex-row justify-between items-center text-gray-600 text-sm">
      <p>&copy; 2024 YourSite. All rights reserved.</p>
      <ul class="flex gap-4 mt-4 md:mt-0">
        <li><a href="#" class="hover:text-blue-500 transition">Privacy Policy</a></li>
        <li><a href="#" class="hover:text-blue-500 transition">Terms of Service</a></li>
        <li><a href="#" class="hover:text-blue-500 transition">Cookie Policy</a></li>
      </ul>
    </div>
  </div>
</footer>


  <script>
  // Mobile Menu Toggle
  const mobileMenuButton = document.getElementById('mobile-menu-button');
  const mobileMenu = document.getElementById('mobile-menu');
  mobileMenuButton.addEventListener('click', () => {
    mobileMenu.classList.toggle('hidden');
  });

  // Dropdown Visibility Fix
  const profileDropdown = document.querySelector('.group');
  profileDropdown.addEventListener('mouseenter', () => {
    profileDropdown.querySelector('.opacity-0').classList.add('opacity-100', 'visible');
    profileDropdown.querySelector('.opacity-0').classList.remove('opacity-0', 'invisible');
  });

  profileDropdown.addEventListener('mouseleave', () => {
    profileDropdown.querySelector('.opacity-100').classList.add('opacity-0', 'invisible');
    profileDropdown.querySelector('.opacity-100').classList.remove('opacity-100', 'visible');
  });
  </script>

</body>

</html>