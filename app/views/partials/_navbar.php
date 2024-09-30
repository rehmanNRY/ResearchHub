<?php
session_start();
$isLoggedIn = false;
if (isset($_SESSION['user'])) {
  $user = $_SESSION['user'];
  $isLoggedIn = true;
} else {
  $isLoggedIn = false;
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ResearchHub - Collaboration & knowledge sharing</title>
  <meta name="description" content="ResearchHub is a web application designed to facilitate collaboration and knowledge sharing
among researchers, academics, and students.">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="shortcut icon" href="../../../public/favicon.ico" type="image/x-icon">
</head>

<body>

  <div class="bg-[#2C2446] text-white w-full">
    <nav class="relative flex items-center justify-between gap-2 p-4 font-medium container mx-auto lg:px-2 lg:py-3"><a class="mt-1 text-base font-bold transition-transform hover:scale-110" href="/app"><span class="inline-block"><svg width="140" height="20" viewBox="0 0 500 75" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M66.7698 0H42.0371V24.7327H66.7698V0Z" fill="#E32A77"></path>
            <path d="M42.037 24.7327H0V49.4654H42.037V24.7327Z" fill="#ffffff"></path>
            <path d="M93.4193 49.4653H41.8115V74.1981H93.4193V49.4653Z" fill="#8961DF"></path>
            <path d="M141.313 26.1125C143.714 21.7616 147.064 18.3724 151.362 15.9449C155.66 13.5173 160.528 12.3036 165.973 12.3036C172.645 12.3036 178.356 14.0678 183.105 17.5897C187.854 21.1116 191.031 25.9135 192.629 31.9956H177.58C176.459 29.6477 174.874 27.8635 172.818 26.6299C170.762 25.4028 168.427 24.786 165.814 24.786C161.596 24.786 158.18 26.2518 155.567 29.19C152.953 32.1282 151.647 36.0481 151.647 40.9561C151.647 45.8642 152.953 49.7907 155.567 52.7222C158.18 55.6605 161.596 57.1263 165.814 57.1263C168.427 57.1263 170.762 56.5161 172.818 55.2824C174.874 54.0554 176.459 52.2712 177.58 49.9167H192.629C191.031 55.9987 187.854 60.794 183.105 64.2828C178.356 67.7781 172.645 69.5291 165.973 69.5291C160.528 69.5291 155.66 68.3153 151.362 65.8878C147.064 63.4603 143.714 60.0844 141.313 55.76C138.912 51.4355 137.712 46.5009 137.712 40.9495C137.712 35.3981 138.912 30.4502 141.313 26.0993V26.1125Z" fill="#ffffff"></path>
            <path d="M207.824 66.9754C204.329 65.1051 201.583 62.4388 199.58 58.97C197.577 55.5012 196.575 51.4487 196.575 46.7993C196.575 42.1499 197.59 38.1703 199.62 34.675C201.649 31.1797 204.421 28.5001 207.943 26.6297C211.465 24.7594 215.412 23.8308 219.789 23.8308C224.167 23.8308 228.113 24.766 231.635 26.6297C235.157 28.5001 237.929 31.1797 239.959 34.675C241.988 38.1703 243.003 42.2162 243.003 46.7993C243.003 51.3824 241.975 55.4348 239.919 58.9302C237.863 62.4255 235.064 65.1051 231.515 66.9754C227.967 68.8458 224.001 69.7744 219.63 69.7744C215.259 69.7744 211.319 68.8392 207.824 66.9754ZM226.315 55.0501C228.159 53.1267 229.075 50.3808 229.075 46.8059C229.075 43.231 228.179 40.4851 226.395 38.5617C224.604 36.6382 222.402 35.6831 219.789 35.6831C217.176 35.6831 214.908 36.6316 213.143 38.5219C211.379 40.4188 210.504 43.1779 210.504 46.8059C210.504 50.4339 211.372 53.1267 213.103 55.0501C214.835 56.9736 217.01 57.9287 219.63 57.9287C222.25 57.9287 224.472 56.967 226.315 55.0501Z" fill="#ffffff"></path>
            <path d="M248.919 34.6352C250.65 31.1664 253.012 28.5001 256.003 26.6297C258.994 24.7593 262.33 23.8308 266.011 23.8308C268.943 23.8308 271.629 24.4476 274.057 25.6746C276.484 26.9017 278.394 28.5598 279.78 30.6358V9.90247H293.47V69.1376H279.78V62.7306C278.5 64.8663 276.67 66.5708 274.295 67.8509C271.921 69.131 269.155 69.7744 266.011 69.7744C262.33 69.7744 258.994 68.8259 256.003 66.9356C253.012 65.0387 250.65 62.3459 248.919 58.8506C247.182 55.3552 246.319 51.316 246.319 46.7197C246.319 42.1233 247.188 38.104 248.919 34.6352ZM276.935 38.7208C275.038 36.7443 272.73 35.7561 270.011 35.7561C267.291 35.7561 264.983 36.7311 263.086 38.681C261.189 40.631 260.248 43.3105 260.248 46.7263C260.248 50.142 261.196 52.8481 263.086 54.8511C264.977 56.8542 267.291 57.8557 270.011 57.8557C272.73 57.8557 275.038 56.8674 276.935 54.8909C278.832 52.9145 279.774 50.2216 279.774 46.8059C279.774 43.3901 278.825 40.6973 276.935 38.7208Z" fill="#ffffff"></path>
            <path d="M344.044 50.089H313.063C313.276 52.8614 314.171 54.9838 315.743 56.4496C317.315 57.9154 319.251 58.6516 321.546 58.6516C324.962 58.6516 327.337 57.2124 328.67 54.3272H343.241C342.492 57.2654 341.145 59.9052 339.202 62.2531C337.252 64.601 334.811 66.4448 331.88 67.778C328.942 69.1111 325.665 69.781 322.03 69.781C317.653 69.781 313.76 68.8458 310.344 66.9821C306.928 65.1117 304.262 62.4454 302.338 58.9766C300.415 55.5078 299.46 51.4553 299.46 46.8059C299.46 42.1565 300.408 38.1107 302.299 34.6352C304.189 31.1664 306.849 28.5001 310.264 26.6297C313.68 24.7594 317.6 23.8308 322.03 23.8308C326.461 23.8308 330.195 24.7395 333.558 26.5501C336.921 28.3675 339.547 30.9542 341.444 34.3168C343.334 37.6795 344.283 41.5994 344.283 46.083C344.283 47.363 344.203 48.6962 344.044 50.0824V50.089ZM330.275 42.4815C330.275 40.1336 329.472 38.2632 327.874 36.877C326.275 35.4908 324.272 34.7944 321.871 34.7944C319.47 34.7944 317.64 35.4643 316.068 36.7974C314.496 38.1306 313.521 40.0275 313.143 42.4815H330.275Z" fill="#ffffff"></path>
            <path d="M384.9 12.9468V23.917H370.01V69.1443H356.321V23.9104H341.431V12.9402H384.9V12.9468Z" fill="#ffffff"></path>
            <path d="M429.225 29.0771C432.323 32.4663 433.868 37.1224 433.868 43.0452V69.1443H420.258V44.8891C420.258 41.8978 419.482 39.5764 417.937 37.9249C416.391 36.2734 414.309 35.4444 411.696 35.4444C409.082 35.4444 407 36.2734 405.454 37.9249C403.909 39.5764 403.133 41.8978 403.133 44.8891V69.1443H389.443V9.90247H403.133V30.4766C404.519 28.5001 406.416 26.9282 408.817 25.7542C411.218 24.5803 413.911 23.99 416.902 23.99C422.022 23.99 426.135 25.6879 429.232 29.0705L429.225 29.0771Z" fill="#ffffff"></path>
            <path d="M455.569 29.4768V69.1442H441.88V29.4768H455.569Z" fill="#ffffff"></path>
            <path d="M471.514 67.778C468.47 66.4448 466.069 64.6143 464.311 62.2929C462.554 59.9715 461.559 57.3715 461.347 54.4864H474.877C475.036 56.0318 475.759 57.2853 477.039 58.247C478.319 59.2087 479.891 59.6863 481.762 59.6863C483.466 59.6863 484.793 59.3547 485.721 58.6848C486.656 58.0215 487.121 57.1527 487.121 56.0848C487.121 54.8047 486.451 53.8563 485.118 53.2461C483.785 52.6359 481.622 51.9528 478.631 51.2033C475.428 50.4538 472.761 49.6712 470.626 48.8421C468.49 48.013 466.653 46.7064 465.101 44.9223C463.555 43.1381 462.779 40.7172 462.779 37.6795C462.779 35.1194 463.489 32.7847 464.902 30.6756C466.314 28.5664 468.397 26.9017 471.143 25.6747C473.889 24.4476 477.159 23.8308 480.946 23.8308C486.55 23.8308 490.968 25.217 494.191 27.996C497.421 30.7684 499.271 34.4561 499.756 39.0458H487.107C486.895 37.5005 486.212 36.2734 485.065 35.3648C483.917 34.4561 482.412 34.0051 480.541 34.0051C478.943 34.0051 477.709 34.3102 476.86 34.927C476.005 35.5439 475.58 36.3796 475.58 37.4474C475.58 38.7275 476.263 39.6892 477.623 40.3259C478.983 40.9626 481.105 41.606 483.99 42.2494C487.3 43.105 489.993 43.9473 492.075 44.7697C494.158 45.5988 495.982 46.9319 497.56 48.7691C499.132 50.613 499.948 53.0803 500.001 56.171C500.001 58.7843 499.265 61.1189 497.799 63.175C496.333 65.2311 494.224 66.8428 491.478 68.0168C488.726 69.1907 485.542 69.7744 481.914 69.7744C478.021 69.7744 474.552 69.1111 471.508 67.7714L471.514 67.778Z" fill="#ffffff"></path>
            <path d="M455.569 9.90234H441.88V23.5919H455.569V9.90234Z" fill="#ffffff"></path>
            <path d="M131.053 29.4768V69.1442H117.363V29.4768H131.053Z" fill="#ffffff"></path>
            <path d="M131.053 9.90234H117.363V23.5919H131.053V9.90234Z" fill="#ffffff"></path>
          </svg></span></a>
      <div class="block ml-auto mb-2 lg:hidden">
        <div class="relative lg:mr-2"><button class="bg-purple-800 text-white flex items-center justify-center w-10 h-10 rounded-full relative mt-2 lg:mt-0 hover:opacity-75"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
              <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
              <path d="M14.235 19c.865 0 1.322 1.024 .745 1.668a3.992 3.992 0 0 1 -2.98 1.332a3.992 3.992 0 0 1 -2.98 -1.332c-.552 -.616 -.158 -1.579 .634 -1.661l.11 -.006h4.471z" stroke-width="0" fill="currentColor"></path>
              <path d="M12 2c1.358 0 2.506 .903 2.875 2.141l.046 .171l.008 .043a8.013 8.013 0 0 1 4.024 6.069l.028 .287l.019 .289v2.931l.021 .136a3 3 0 0 0 1.143 1.847l.167 .117l.162 .099c.86 .487 .56 1.766 -.377 1.864l-.116 .006h-16c-1.028 0 -1.387 -1.364 -.493 -1.87a3 3 0 0 0 1.472 -2.063l.021 -.143l.001 -2.97a8 8 0 0 1 3.821 -6.454l.248 -.146l.01 -.043a3.003 3.003 0 0 1 2.562 -2.29l.182 -.017l.176 -.004z" stroke-width="0" fill="currentColor"></path>
            </svg></button>
          <div class="bg-white text-purple-900 top-14 -right-10 absolute w-[calc(100vw-1.5rem)] max-w-[24rem] transition origin-top-right rounded-lg shadow-xl overflow-hidden z-10 lg:right-0 scale-0">
            <div class="flex bg-purple-700 p-4 justify-between">
              <h3 class="text-white font-bold text-xl">Notifications</h3>
            </div>
            <ul class="max-h-[34rem] overflow-auto">
              <li class="font-bold text-center p-2">No new notifications</li>
            </ul>
          </div>
        </div>
      </div><button class="w-7 space-y-2 lg:hidden" id="mobile-menu-button">
        <div class="w-full h-0.5 rounded-full origin-top-right bg-white transition rotate-0"></div>
        <div class="w-full h-0.5 rounded-full bg-white transition opacity-100"></div>
        <div class="w-full h-0.5 rounded-full origin-bottom-right bg-white transition rotate-0"></div>
      </button>
      <div class="absolute top-14 right-2 bg-[#2C2446] z-50 w-44 shadow-[2px_5px_10px_#18102866] rounded-xl px-2 py-4 flex flex-col-reverse items-center origin-top-right transition lg:shadow-none lg:static lg:w-auto lg:p-0 lg:flex-row lg:scale-100 scale-0" id="navbar-menu">
        <ul class="flex flex-col gap-3 items-center mt-4 lg:flex-row lg:gap-2 mr-2 lg:mt-0">
          <li><a class="p-2 hover:text-purple-300 lg:px-3 relative" href="/modes">Modes</a></li>
          <li><a class="p-2 hover:text-purple-300 lg:px-3 relative" href="/courses">Courses</a></li>
          <li><a class="p-2 hover:text-purple-300 lg:px-3 relative" href="/blog">Blog</a></li>
          <li><a class="p-2 hover:text-purple-300 lg:px-3 relative" href="/leaderboard">Leaderboard</a></li>
          <li><a class="p-2 hover:text-purple-300 lg:px-3 relative" href="/roadmap">Roadmap</a></li>
        </ul>
      <?php if (!$isLoggedIn): ?>
        <a class="bg-yellow-500 text-black font-semibold px-4 py-2 rounded-md hover:bg-opacity-75" href="/researchhub_project/app/views/auth/login.php">Login</a>
        <a class="rounded-lg bg-purple-600 py-2 px-4 text-white hover:opacity-80 ml-3" href="/researchhub_project/app/views/auth/signup.php">Signup</a>
      <?php else: ?>
        <div class="hidden lg:block">
          <div class="relative lg:mr-2"><button class="bg-[#2C2446] text-white flex items-center justify-center w-10 h-10 rounded-full relative mt-2 lg:mt-0 hover:opacity-75"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                <path d="M14.235 19c.865 0 1.322 1.024 .745 1.668a3.992 3.992 0 0 1 -2.98 1.332a3.992 3.992 0 0 1 -2.98 -1.332c-.552 -.616 -.158 -1.579 .634 -1.661l.11 -.006h4.471z" stroke-width="0" fill="currentColor"></path>
                <path d="M12 2c1.358 0 2.506 .903 2.875 2.141l.046 .171l.008 .043a8.013 8.013 0 0 1 4.024 6.069l.028 .287l.019 .289v2.931l.021 .136a3 3 0 0 0 1.143 1.847l.167 .117l.162 .099c.86 .487 .56 1.766 -.377 1.864l-.116 .006h-16c-1.028 0 -1.387 -1.364 -.493 -1.87a3 3 0 0 0 1.472 -2.063l.021 -.143l.001 -2.97a8 8 0 0 1 3.821 -6.454l.248 -.146l.01 -.043a3.003 3.003 0 0 1 2.562 -2.29l.182 -.017l.176 -.004z" stroke-width="0" fill="currentColor"></path>
              </svg></button>
            <div class="bg-white text-purple-900 top-14 -right-10 absolute w-[calc(100vw-1.5rem)] max-w-[24rem] transition origin-top-right rounded-lg shadow-xl overflow-hidden z-10 lg:right-0 scale-0">
              <div class="flex bg-purple-700 p-4 justify-between">
                <h3 class="text-white font-bold text-xl">Notifications</h3>
              </div>
              <ul class="max-h-[34rem] overflow-auto">
                <li class="font-bold text-center p-2">No new notifications</li>
              </ul>
            </div>
          </div>
        </div>
        <a class="bg-yellow-500 text-black font-semibold px-4 py-2 rounded-md hover:bg-opacity-75 mr-4" href="/researchhub_project/app/views/auth/logout.php">logout</a>
        <a class="h-10 text-center" href="/user6c4298f0"><img class="h-10 w-10 rounded-full object-cover scale-110 lg:mr-2 hover:ring hover:ring-purple-700" src="https://lh3.googleusercontent.com/a/ACg8ocKCAYmMcwVhDp7ZrneUw-H0m-pftFUMeA6a7fvw0j5WSDiaRtIh=s96-c" alt="user6c4298f0"></a>
      </div>
      <?php endif; ?>
    </nav>
    <?php if ($isLoggedIn): ?>
    <a class="block bg-purple-600 text-white text-center font-medium p-3 transition hover:opacity-90" href="/account">Welcome 🤗 You can change your username on the account page<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon" class="inline-block w-4 h-4 ml-2">
        <path fill-rule="evenodd" d="M3 10a.75.75 0 0 1 .75-.75h10.638L10.23 5.29a.75.75 0 1 1 1.04-1.08l5.5 5.25a.75.75 0 0 1 0 1.08l-5.5 5.25a.75.75 0 1 1-1.04-1.08l4.158-3.96H3.75A.75.75 0 0 1 3 10Z" clip-rule="evenodd"></path>
      </svg></a>
    <?php endif; ?>
  </div>

  <main class="min-h-96 overflow-x-hidden bg-[#181028]">