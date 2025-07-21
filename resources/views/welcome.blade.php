<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Coconutnesia - The Best Coconut Product Supplier</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss @2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js "></script>
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css " />
  @vite('resources/css/app.css')
</head>
<body class="bg-white text-gray-800 font-sans leading-normal tracking-normal">

  <!-- Header -->
  <header class="bg-gray-800 text-white py-4 shadow-md sticky top-0 z-50">
    <div class="container mx-auto flex justify-between items-center">
      <a href="#" class="text-xl font-bold">Coconutnesia</a>
      <nav>
        <ul class="flex space-x-4">
          <li><a href="#hero" class="hover:text-yellow-500">Home</a></li>
          <li><a href="#why-choose-us" class="hover:text-yellow-500">Why Choose Us</a></li>
          <li><a href="#products" class="hover:text-yellow-500">Products</a></li>
          <li><a href="#about" class="hover:text-yellow-500">About Us</a></li>
          <li><a href="#contact" class="hover:text-yellow-500">Contact</a></li>
        </ul>
      </nav>
    </div>
  </header>

  <!-- Hero Section -->
  <section id="hero" class="py-20 bg-cover bg-center" style="background-image: url('https://source.unsplash.com/random/1600x900/?coconut')">
    <div class="container mx-auto text-center">
      <h1 class="text-4xl md:text-5xl font-bold mb-4 text-black">Get Your Coconut Products Now</h1>
      <p class="text-lg mb-8 text-black">Our coconut products offer a range of benefits, from high-quality and fresh taste to natural nutrients. Our sustainable and ethical practices guarantee that you're supporting a responsible supplier. Choose us for the best coconut charcoal briquette, virgin coconut oil, and more.</p>
      <button class="bg-blue-500 hover:bg-blue-700 text-white px-6 py-3 rounded-lg shadow transition">Ask For Offer</button>
    </div>
  </section>

  <!-- Why Choose Us -->
  <section id="why-choose-us" class="py-20 bg-gray-100">
    <div class="container mx-auto text-center">
      <h2 class="text-3xl font-bold mb-12">Why Choose Us</h2>
      <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
        <div class="flex flex-col items-center">
          <img src=" https://source.unsplash.com/random/200x200/?integrity" alt="Integrity" class="w-16 h-16 mb-4">
          <h3 class="text-xl font-semibold mb-2">Integrity</h3>
          <p class="text-gray-600">Telling the truth, keeping our word, and treating others fairly and politely are all examples of having integrity. One of our most prized possessions is integrity. It must not be put at risk.</p>
        </div>
        <div class="flex flex-col items-center">
          <img src=" https://source.unsplash.com/random/200x200/?quality" alt="Quality" class="w-16 h-16 mb-4">
          <h3 class="text-xl font-semibold mb-2">Quality</h3>
          <p class="text-gray-600">Selling and supporting goods and services that satisfy customers, fostering a positive workplace culture, and achieving financial targets are just a few examples of how quality is demonstrated.</p>
        </div>
        <div class="flex flex-col items-center">
          <img src=" https://source.unsplash.com/random/200x200/?innovation" alt="Innovation" class="w-16 h-16 mb-4">
          <h3 class="text-xl font-semibold mb-2">Innovation</h3>
          <p class="text-gray-600">Innovation is the process of creating goods and services that are very appealing to consumers and will increase their support for the Coconutnesia initiative.</p>
        </div>
        <div class="flex flex-col items-center">
          <img src=" https://source.unsplash.com/random/200x200/?commitment" alt="Commitment" class="w-16 h-16 mb-4">
          <h3 class="text-xl font-semibold mb-2">Commitment</h3>
          <p class="text-gray-600">We understand the value of commitment and will consistently give our consumers the best. We should consider the opportunity to serve as a privilege and not take it for granted.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Our Products -->
  <section id="products" class="py-20">
    <div class="container mx-auto text-center">
      <h2 class="text-3xl font-bold mb-12">Our Products</h2>
      <p class="text-lg mb-8">Discover our premier coconut products as a top supplier.</p>
      <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
        <div class="bg-white p-6 rounded-lg shadow hover:shadow-xl transition">
          <img src=" https://source.unsplash.com/random/300x200/?charcoal" alt="Coconut Charcoal Briquette" class="w-full h-48 object-cover mb-4">
          <h3 class="text-xl font-semibold mb-2">Coconut Charcoal Briquette</h3>
          <p class="text-gray-600">Premium coconut charcoal for flavorful shisha and BBQ grilling.</p>
        </div>
        <div class="bg-white p-6 rounded-lg shadow hover:shadow-xl transition">
          <img src=" https://source.unsplash.com/random/300x200/?oil" alt="Virgin Coconut Oil" class="w-full h-48 object-cover mb-4">
          <h3 class="text-xl font-semibold mb-2">Virgin Coconut Oil</h3>
          <p class="text-gray-600">Pure and natural virgin coconut oil for healthy living.</p>
        </div>
        <div class="bg-white p-6 rounded-lg shadow hover:shadow-xl transition">
          <img src=" https://source.unsplash.com/random/300x200/?desiccated" alt="Desiccated Coconut" class="w-full h-48 object-cover mb-4">
          <h3 class="text-xl font-semibold mb-2">Desiccated Coconut</h3>
          <p class="text-gray-600">Premium quality desiccated coconut for versatile use.</p>
        </div>
        <div class="bg-white p-6 rounded-lg shadow hover:shadow-xl transition">
          <img src=" https://source.unsplash.com/random/300x200/?sugar" alt="Coconut Sugar" class="w-full h-48 object-cover mb-4">
          <h3 class="text-xl font-semibold mb-2">Coconut Sugar</h3>
          <p class="text-gray-600">Organic and delicious coconut sugar for healthy sweetening.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- About Us -->
  <section id="about" class="py-20">
    <div class="container mx-auto">
      <div class="flex flex-col md:flex-row items-center">
        <div class="md:w-1/2">
          <img src=" https://source.unsplash.com/random/600x400/?coconut" alt="Coconut Image" class="w-full h-64 object-cover mb-4 md:mb-0">
        </div>
        <div class="md:w-1/2">
          <h2 class="text-3xl font-bold mb-4">About Us</h2>
          <p class="text-gray-600 mb-8">Welcome to Coconutnesia, the brand name of PT. Coconut Indonesia Utama. We are a leading supplier of coconut-based products, including charcoal briquettes, virgin coconut oil, desiccated coconut, and coconut sugar. Based in Indonesia, our company takes pride in sourcing only the best coconuts from ethical and sustainable suppliers. Our products are of the highest quality and are sold to businesses and individuals worldwide. Trust us to be your best supplier of coconut products!</p>
          <button class="bg-blue-500 hover:bg-blue-700 text-white px-6 py-3 rounded-lg shadow transition">Learn More</button>
        </div>
      </div>
    </div>
  </section>

  <!-- Team Members Section -->
<section id="team" class="py-20 bg-white">
  <div class="container mx-auto text-center">
    <h2 class="text-3xl font-bold mb-12">Executive Team</h2>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
      <!-- Team Member 1 -->
      <div class="bg-white p-6 rounded-lg shadow hover:shadow-xl transition">
        <img src=" https://source.unsplash.com/random/300x300/?person" alt="Team Member" class="w-full h-48 object-cover mb-4 rounded-t-lg">
        <h3 class="text-xl font-semibold mb-2">Azizah Ludiana</h3>
        <p class="text-gray-600">CFO</p>
        <div class="flex space-x-2 mt-4">
          <a href="#" class="text-white hover:text-yellow-500"><i class="fab fa-instagram"></i></a>
          <a href="#" class="text-white hover:text-yellow-500"><i class="fab fa-linkedin"></i></a>
        </div>
      </div>

      <!-- Team Member 2 -->
      <div class="bg-white p-6 rounded-lg shadow hover:shadow-xl transition">
        <img src=" https://source.unsplash.com/random/300x300/?person" alt="Team Member" class="w-full h-48 object-cover mb-4 rounded-t-lg">
        <h3 class="text-xl font-semibold mb-2">Muchamad Fatihurrahman</h3>
        <p class="text-gray-600">CEO & Founder</p>
        <div class="flex space-x-2 mt-4">
          <a href="#" class="text-white hover:text-yellow-500"><i class="fab fa-instagram"></i></a>
          <a href="#" class="text-white hover:text-yellow-500"><i class="fab fa-linkedin"></i></a>
        </div>
      </div>

      <!-- Team Member 3 -->
      <div class="bg-white p-6 rounded-lg shadow hover:shadow-xl transition">
        <img src=" https://source.unsplash.com/random/300x300/?person" alt="Team Member" class="w-full h-48 object-cover mb-4 rounded-t-lg">
        <h3 class="text-xl font-semibold mb-2">Nur Muchamad</h3>
        <p class="text-gray-600">COO</p>
        <div class="flex space-x-2 mt-4">
          <a href="#" class="text-white hover:text-yellow-500"><i class="fab fa-instagram"></i></a>
          <a href="#" class="text-white hover:text-yellow-500"><i class="fab fa-linkedin"></i></a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Blog Section -->
<section id="blog" class="py-20 bg-gray-100">
  <div class="container mx-auto text-center">
    <h2 class="text-3xl font-bold mb-12">Our Blog</h2>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
      <!-- Blog Post 1 -->
      <div class="bg-white p-6 rounded-lg shadow hover:shadow-xl transition">
        <img src=" https://source.unsplash.com/random/300x200/?coconut" alt="Blog Post" class="w-full h-48 object-cover mb-4">
        <h3 class="text-xl font-semibold mb-2"><a href="#" class="hover:text-yellow-500">Unlocking the Sweet Secrets: Exploring the Wonders of Coconut Sugar</a></h3>
        <button class="bg-blue-500 hover:bg-blue-700 text-white px-6 py-3 rounded-lg mt-4">Learn more</button>
      </div>

      <!-- Blog Post 2 -->
      <div class="bg-white p-6 rounded-lg shadow hover:shadow-xl transition">
        <img src=" https://source.unsplash.com/random/300x200/?coconut" alt="Blog Post" class="w-full h-48 object-cover mb-4">
        <h3 class="text-xl font-semibold mb-2"><a href="#" class="hover:text-yellow-500">Unveiling the Wonders of Desiccated Coconut</a></h3>
        <button class="bg-blue-500 hover:bg-blue-700 text-white px-6 py-3 rounded-lg mt-4">Learn more</button>
      </div>

      <!-- Blog Post 3 -->
      <div class="bg-white p-6 rounded-lg shadow hover:shadow-xl transition">
        <img src=" https://source.unsplash.com/random/300x200/?coconut" alt="Blog Post" class="w-full h-48 object-cover mb-4">
        <h3 class="text-xl font-semibold mb-2"><a href="#" class="hover:text-yellow-500">Top 10 Reasons Why Coconut Briquettes are the Best Fuel for Grilling</a></h3>
        <button class="bg-blue-500 hover:bg-blue-700 text-white px-6 py-3 rounded-lg mt-4">Learn more</button>
      </div>
    </div>
  </div>
</section>

<!-- Footer -->
<footer class="bg-gray-800 text-white py-16">
  <div class="container mx-auto px-4 md:px-0 flex flex-col md:flex-row justify-between items-center">
    <!-- Logo & Address -->
    <div class="mb-8 md:mb-0">
      <img src="https://source.unsplash.com/random/100x50/?logo" alt="Logo" class="w-40 mb-4">
      <p class="text-sm">
        PT. Coconut Indonesia Utama<br />
        Tulusrejo Dusun II, Butuh, Purworejo,<br />
        Central Java, Indonesia
      </p>
      <p class="mt-4">
        <strong>Email:</strong> mail@coconutnesia.com<br />
        <strong>Phone:</strong> +62 8517978 8645
      </p>
    </div>

    <!-- Useful Links -->
    <div class="mb-8 md:mb-0">
      <h3 class="text-xl font-bold mb-4">Useful Links</h3>
      <ul class="space-y-2 text-sm">
        <li><a href="#" class="hover:text-yellow-500">About Us</a></li>
        <li><a href="#" class="hover:text-yellow-500">Contact Us</a></li>
        <li><a href="#" class="hover:text-yellow-500">Product</a></li>
        <li><a href="#" class="hover:text-yellow-500">Blog</a></li>
        <li><a href="#" class="hover:text-yellow-500">FAQ</a></li>
        <li><a href="#" class="hover:text-yellow-500">Privacy Policy</a></li>
        <li><a href="#" class="hover:text-yellow-500">Terms of Service</a></li>
      </ul>
    </div>

    <!-- Working Hours -->
    <div class="mb-8 md:mb-0">
      <h3 class="text-xl font-bold mb-4">Working Hours</h3>
      <p class="text-sm">
        Monday - Saturday:<br />
        9 AM - 5 PM (GMT+7)
      </p>
    </div>

    <!-- Follow Us -->
    <div>
      <h3 class="text-xl font-bold mb-4">Follow Us</h3>
      <p class="text-sm mb-4">
        You can follow us on social media to get the most recent information as we continue to refresh the company's information there.
      </p>
      <div class="flex space-x-4">
        <a href="#" class="text-white hover:text-yellow-500"><i class="fab fa-facebook"></i></a>
        <a href="#" class="text-white hover:text-yellow-500"><i class="fab fa-linkedin"></i></a>
        <a href="#" class="text-white hover:text-yellow-500"><i class="fab fa-instagram"></i></a>
      </div>
    </div>
  </div>
  <!-- Copyright -->
  <div class="bg-gray-900 text-center py-4 mt-8">
    <p class="text-sm">©2022-2023. Coconutnesia. All Rights Reserved.</p>
  </div>
</footer>

</body>
</html>