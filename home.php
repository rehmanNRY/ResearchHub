<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Landing Page</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <style>
    .hero {
      background-image: url('your-background-image.jpg'); /* replace with actual background image path */
      background-size: cover;
      background-position: center;
      height: 100vh;
    }
  </style>
</head>
<body class="bg-black text-white">

  <!-- Hero Section -->
  <section class="hero flex flex-col justify-center items-center text-center">
    <div class="mb-8">
      <h1 class="text-4xl md:text-6xl font-bold">Tech Pioneers Transforming Ideas Faster with Tallis</h1>
      <p class="mt-4 text-lg">Tallis is a web app development framework for Java that includes a large library of UI components. It helps you build reliable web apps and a great UX faster than before.</p>
    </div>
    <div class="flex space-x-4 mt-6">
      <button class="bg-white text-black px-6 py-3 font-semibold rounded">Get Started</button>
      <button class="border border-white text-white px-6 py-3 font-semibold rounded">Book a Demo</button>
    </div>
  </section>

  <!-- Cards Section -->
  <section class="flex justify-center items-center space-x-4 p-12">
    <!-- Card 1 -->
    <div class="bg-gray-800 p-6 rounded-lg text-center w-1/3">
      <img src="atom-icon.png" alt="Atoms" class="mx-auto mb-4" /> <!-- Replace with actual icon -->
      <h2 class="text-xl font-semibold mb-2">Atoms</h2>
      <p class="text-sm mb-4">Explore essential UI elements, from buttons to color palettes, designed for precision and ease of use.</p>
      <button class="bg-indigo-600 px-4 py-2 rounded text-white">Get Started</button>
    </div>

    <!-- Card 2 -->
    <div class="bg-gray-800 p-6 rounded-lg text-center w-1/3">
      <img src="molecules-icon.png" alt="Molecules" class="mx-auto mb-4" /> <!-- Replace with actual icon -->
      <h2 class="text-xl font-semibold mb-2">Molecules</h2>
      <p class="text-sm mb-4">Delve into groups of combined elements that bring functionality and efficiency to your UI.</p>
      <button class="bg-indigo-600 px-4 py-2 rounded text-white">Explore</button>
    </div>

    <!-- Card 3 -->
    <div class="bg-gray-800 p-6 rounded-lg text-center w-1/3">
      <img src="components-icon.png" alt="Components" class="mx-auto mb-4" /> <!-- Replace with actual icon -->
      <h2 class="text-xl font-semibold mb-2">Components</h2>
      <p class="text-sm mb-4">Uncover complex UI constructs, integrating multiple elements for advanced interface needs.</p>
      <button class="bg-indigo-600 px-4 py-2 rounded text-white">See More</button>
    </div>
  </section>

</body>
</html>
