<?php 
if (session_status() === PHP_SESSION_NONE) {
  session_start();
}

if (isset($_SESSION['user'])) {
    header('Location: ./app/views/app.php');
    exit();
}

include './app/views/partials/_navbar.php';

?>


<section class="relative text-black py-28 bg-[#181028]">

  <div class="flex items-center justify-between gap-10 container mx-auto bg-gradient-to-r from-[#0e0a1f] via-[#2a1a4d] to-[#0e0a1f] p-8 rounded-lg shadow-lg">
    <!-- Text Section -->
    <div class="w-1/2 space-y-6">
      <h1 class="font-bold text-5xl leading-snug text-white">Unleashing Individual Potential: <span class="text-yellow-400">From Tools to Partners</span></h1>
      <p class="mt-5 text-gray-400 text-lg">Discover how AI can enhance your creative ventures and career with powerful tools built to unlock human potential.</p>

      <div class="flex mt-5 gap-3">
        <button class="rounded-lg px-6 py-3 bg-yellow-400 text-black font-semibold hover:bg-yellow-500 transition duration-300">Get Started</button>
        <button class="rounded-lg px-6 py-3 bg-transparent border border-gray-500 text-white font-semibold hover:bg-gray-800 transition duration-300">Post Blog</button>
      </div>

      <!-- Additional Text Below Buttons -->
      <p class="text-gray-500 text-sm mt-3">No credit card required • Free setup • Easy to use</p>
    </div>

    <!-- Image Section -->
    <div class="w-1/2 flex justify-center relative">
      <img src="https://hub-apac-1.lobeobjects.space/landing/overview/f4.webp" class="w-full rounded-lg object-cover shadow-lg transform hover:scale-105 transition duration-500" alt="AI Blog">
      <div class="absolute -bottom-5 left-5 bg-yellow-400 text-black px-3 py-1 rounded-lg shadow-md">#AIRevolution</div>
    </div>
  </div>
</section>

<!-- Services Section -->
<section id="services" class="py-20 bg-white text-center">
  <div class="container mx-auto text-center mb-10">
    <h2 class="text-5xl font-extrabold text-purple-950">Our Services</h2>
    <p class="text-lg text-gray-600 mt-4">Explore the wide range of features ResearchHub offers to support your academic endeavors.</p>
  </div>
  <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 px-4 container mx-auto">
    <!-- Service 1 -->
    <div class="relative bg-purple-50 rounded-lg p-6 border border-gray-200 hover:bg-gray-200 transition duration-300">
      <i class="bx bxs-book text-6xl text-blue-600"></i>
      <h3 class="text-xl font-bold mt-4">Share Research Papers</h3>
      <p class="text-gray-600 mt-2">Upload and share your research papers to collaborate with the academic community.</p>
    </div>

    <!-- Service 2 -->
    <div class="relative bg-purple-50 rounded-lg p-6 border border-gray-200 hover:bg-gray-200 transition duration-300">
      <i class="bx bx-search text-6xl text-cyan-500"></i>
      <h3 class="text-xl font-bold mt-4">Discover Resources</h3>
      <p class="text-gray-600 mt-2">Explore a wide collection of research articles, datasets, and scholarly works from various fields.</p>
    </div>

    <!-- Service 3 -->
    <div class="relative bg-purple-50 rounded-lg p-6 border border-gray-200 hover:bg-gray-200 transition duration-300">
      <i class="bx bxs-conversation text-6xl text-pink-500"></i>
      <h3 class="text-xl font-bold mt-4">Collaborate & Discuss</h3>
      <p class="text-gray-600 mt-2">Join discussions with fellow researchers, ask questions, and share your insights.</p>
    </div>

    <!-- Service 4 -->
    <div class="relative bg-purple-50 rounded-lg p-6 border border-gray-200 hover:bg-gray-200 transition duration-300">
      <i class="bx bx-shield-quarter text-6xl text-red-500"></i>
      <h3 class="text-xl font-bold mt-4">Secure Data Upload</h3>
      <p class="text-gray-600 mt-2">Share your research securely with encrypted file uploads and controlled access.</p>
    </div>

    <!-- Service 5 -->
    <div class="relative bg-purple-50 rounded-lg p-6 border border-gray-200 hover:bg-gray-200 transition duration-300">
      <i class="bx bx-line-chart text-6xl text-green-500"></i>
      <h3 class="text-xl font-bold mt-4">Track & Analyze</h3>
      <p class="text-gray-600 mt-2">Monitor the impact and reach of your research with detailed analytics and reports.</p>
    </div>

    <!-- Service 6 -->
    <div class="relative bg-purple-50 rounded-lg p-6 border border-gray-200 hover:bg-gray-200 transition duration-300">
      <i class="bx bx-group text-6xl text-purple-500"></i>
      <h3 class="text-xl font-bold mt-4">Connect with Experts</h3>
      <p class="text-gray-600 mt-2">Engage with professionals and leading academics in your field of research.</p>
    </div>
  </div>
</section>

<div class="container mb-24 mx-auto">
  <div class="w-full lg:w-2/3 mx-auto px-6 py-24 lg:px-8">
    <div class="mx-auto divide-y divide-white/10">
      <h2 class="text-4xl md:text-5xl font-bold leading-10 tracking-tight text-white text-center">Frequently asked questions</h2>
      <dl class="mt-10 space-y-6 divide-y divide-white/10">
        <div class="pt-6" data-headlessui-state="">
          <dt><button class="flex w-full items-start justify-between text-left text-white" id="headlessui-disclosure-button-:Rb78m:" type="button" aria-expanded="false" data-headlessui-state=""><span class="text-xl font-semibold leading-7">What can I expect from iCodeThis?</span><span class="ml-6 flex h-7 items-center"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                  <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                  <path d="M12 5l0 14"></path>
                  <path d="M5 12l14 0"></path>
                </svg></span></button></dt>
        </div>
        <div class="pt-6" data-headlessui-state="">
          <dt><button class="flex w-full items-start justify-between text-left text-white" id="headlessui-disclosure-button-:Rd78m:" type="button" aria-expanded="false" data-headlessui-state=""><span class="text-xl font-semibold leading-7">What level of experience do I need to participate in the challenges?</span><span class="ml-6 flex h-7 items-center"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                  <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                  <path d="M12 5l0 14"></path>
                  <path d="M5 12l14 0"></path>
                </svg></span></button></dt>
        </div>
        <div class="pt-6" data-headlessui-state="">
          <dt><button class="flex w-full items-start justify-between text-left text-white" id="headlessui-disclosure-button-:Rf78m:" type="button" aria-expanded="false" data-headlessui-state=""><span class="text-xl font-semibold leading-7">Can I access more challenges and resources?</span><span class="ml-6 flex h-7 items-center"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                  <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                  <path d="M12 5l0 14"></path>
                  <path d="M5 12l14 0"></path>
                </svg></span></button></dt>
        </div>
      </dl>
    </div>
  </div>
</div>

<div class="bg-white text-purple-900 flex flex-col items-center justify-center pt-24 pb-12 p-4 w-full"><small class="uppercase font-bold">testimonials</small>
  <h2 class="text-4xl text-center font-bold mt-2">What others have said</h2>
  <div class="responsive max-w-4xl mx-auto overflow-hidden w-full z-20">
    <ul class="relative flex flex-col w-full md:w-2/3 h-[400px] md:h-72 items-center justify-center mx-auto">
      <li class="absolute  flex flex-col items-center justify-center w-full cursor-pointer" style="left: -647.328px; opacity: 0.5; transform: none; transform-origin: 50% 50% 0px;">
        <p class="text-xl font-medium leading-normal text-center">"<!-- -->So glad I found @iCodeThis! Looking forward to sharpening some skills and learning!<!-- -->"</p><img class="w-12 h-12 rounded-full mt-6 mb-2" src="https://pbs.twimg.com/profile_images/1611490389164437505/neOEoqFu_400x400.jpg" alt="Toni Dodd">
        <p class="font-bold">Toni Dodd</p>
      </li>
      <li class="absolute  flex flex-col items-center justify-center w-full cursor-pointer" style="left: 0px; opacity: 1; transform: none; transform-origin: 50% 50% 0px;">
        <p class="text-xl font-medium leading-normal text-center">"<!-- -->I like that every time I complete a project from @iCodeThis I learn something new. The time constraints will also give you an extra push to actually complete projects while adding quality, additional features, and functionality!<!-- -->"</p><img class="w-12 h-12 rounded-full mt-6 mb-2" src="https://shismqklzntzxworibfn.supabase.co/storage/v1/object/public/avatars/e3d46e56-9490-4720-ae1d-3116a4f1814d.jpeg" alt="Karelle Hofler">
        <p class="font-bold">Karelle Hofler</p>
      </li>
      <li class="absolute  flex flex-col items-center justify-center w-full cursor-pointer" style="left: 647.328px; opacity: 0.5; transform: none; transform-origin: 50% 50% 0px;">
        <p class="text-xl font-medium leading-normal text-center">"<!-- -->Finding out about @iCodeThis was the best thing that happened to my programming journey and my skills skyrocketed since I joined. I have been doing these challenges for the past 100+ days and now I am a lot more confident tackling new projects.<!-- -->"</p><img class="w-12 h-12 rounded-full mt-6 mb-2" src="https://shismqklzntzxworibfn.supabase.co/storage/v1/object/public/avatars/6d9761f7-21fd-49dc-b8d6-f7e17c2b6234.jpg" alt="Adrian Lica">
        <p class="font-bold">Adrian Lica</p>
      </li>
      <li class="absolute  flex flex-col items-center justify-center w-full cursor-pointer" style="left: 1294.66px; opacity: 0.5; transform: none; transform-origin: 50% 50% 0px;">
        <p class="text-xl font-medium leading-normal text-center">"<!-- -->As someone who started from scratch, @iCodeThis has been a real help! The challenges are fun and well thought. Beyond this, I am most grateful for the community! I could not believe how much support, and appreciation I have received from people that I did not know before.<!-- -->"</p><img class="w-12 h-12 rounded-full mt-6 mb-2" src="https://shismqklzntzxworibfn.supabase.co/storage/v1/object/public/avatars/af81e0a3-abdf-4cbd-8a06-2ba64904fc8c.jpg" alt="Clarisa">
        <p class="font-bold">Clarisa</p>
      </li>
      <li class="absolute  flex flex-col items-center justify-center w-full cursor-pointer" style="left: 1941.98px; opacity: 0.5; transform: none; transform-origin: 50% 50% 0px;">
        <p class="text-xl font-medium leading-normal text-center">"<!-- -->As a new frontend developer student, @iCodeThis has given me the opportunity to practice my skills with ready-made design files and within a helpful community that encourages growth in a playful yet competitive way!<!-- -->"</p><img class="w-12 h-12 rounded-full mt-6 mb-2" src="https://shismqklzntzxworibfn.supabase.co/storage/v1/object/public/avatars/8af82c1d-b1df-4771-b651-aecf5d4d28c0.jpg" alt="Kenneth Collins">
        <p class="font-bold">Kenneth Collins</p>
      </li>
      <li class="absolute  flex flex-col items-center justify-center w-full cursor-pointer" style="left: 2589.31px; opacity: 0.5; transform: none; transform-origin: 50% 50% 0px;">
        <p class="text-xl font-medium leading-normal text-center">"<!-- -->I have become significantly better and faster at HTML, CSS, JavsScript, and TailwindCSS. All thanks to @iCodeThis! 💜<!-- -->"</p><img class="w-12 h-12 rounded-full mt-6 mb-2" src="https://shismqklzntzxworibfn.supabase.co/storage/v1/object/public/avatars/e8f8bde3-f8c4-4f3c-b19f-1495128a6c47.png" alt="ArmanDev">
        <p class="font-bold">ArmanDev</p>
      </li>
      <li class="absolute  flex flex-col items-center justify-center w-full cursor-pointer" style="left: 3236.64px; opacity: 0.5; transform: none; transform-origin: 50% 50% 0px;">
        <p class="text-xl font-medium leading-normal text-center">"<!-- -->Before @iCodeThis, I was not able to have fun programming at home after programming at work all day, but they made it really easy to work on fast funny projects. Just sit, open the challenge, and have fun! It helped me love CSS again!<!-- -->"</p><img class="w-12 h-12 rounded-full mt-6 mb-2" src="https://shismqklzntzxworibfn.supabase.co/storage/v1/object/public/avatars/bc02c53d-2856-4ea4-b86a-c1168ef7a49f.jpg" alt="Aldevisign">
        <p class="font-bold">Aldevisign</p>
      </li>
    </ul>
  </div>
  <div class="flex gap-4"><button class="w-10 h-10 border border-purple-900 text-purple-900 flex items-center justify-center  rounded-full opacity-90 hover:opacity-70"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
        <path d="M15 6l-6 6l6 6"></path>
      </svg></button><button class="w-10 h-10 border border-purple-900 text-purple-900 flex items-center justify-center  rounded-full opacity-90 hover:opacity-70"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
        <path d="M9 6l6 6l-6 6"></path>
      </svg></button></div>
</div>
<section class="bg-white text-purple-900 py-12 text-center w-full">
  <h2 class="text-4xl font-bold mb-6">Join the challenge now!</h2><a class="inline-block bg-purple-600 text-white text-lg font-bold rounded-lg py-4 px-8 cursor-pointer hover:opacity-80" href="/login">Join challenge</a>
</section>


<?php include './app/views/partials/_footer.php' ?>