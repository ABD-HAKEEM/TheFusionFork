<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>The Fusion Fork</title>
  <link rel="icon" href="/image/logo (1).webp" type="image/x-icon">


  <link rel="stylesheet" href="/CSS/style.css">

  <script src="https://cdn.tailwindcss.com"></script>

  <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
  <script src="https://aframe.io/releases/1.4.1/aframe.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    crossorigin="anonymous" referrerpolicy="no-referrer" />

  <script src="https://kit.fontawesome.com/bd921df3a8.js" crossorigin="anonymous"></script>

</head>

<body class="overflow-x-hidden">



<header class="text-slate-50 ">
    <div class="relative">
      <nav class="main-nav flex justify-end items-left absolute top-0 right-44 w-full z-20 mt-10">
        <ul class="hidden lg:flex list_view space-x-8 mt-10px">
          <li class="relative group">
            <a href="/pages/en/productpage.php" class="hover:text-gray-600 text-White">Menu</a>

          </li>
          <li class="hover:text-gray-600 text-White">|</li>


          <li class="relative group">
            <a href="/pages/en/tablereser.php" class="hover:text-gray-600 text-White">Table Reservation</a>

          </li>
          <li class="hover:text-gray-600 text-White">|</li>

          <li class="relative group">
            <a href="/pages/en/index.php" class="hover:text-gray-600 text-White">The Fusion Fork</a>

          </li>
          <li class="hover:text-gray-600 text-White">|</li>

          <li class="relative group">
            <a href="/pages/en/membership.php" class="hover:text-gray-600 text-White">Membership</a>

          </li>
          <li class="hover:text-gray-600 text-White">|</li>
          <li class="relative group">
            <a href="/pages/en/aboutus.php" class="hover:text-gray-600 text-White">About Us</a>
            <ul class="relative left-0 mt-2  shadow-lg rounded-lg hidden group-hover:block">
              <li><a href="/pages/en/ChefTable.php"
                  class="block  hover:text-gray-600 text-White">Chef Table</a></li>
              <li><a href="/pages/en/contactus.php"
                  class="block  hover:text-gray-600 text-White">Enquiry</a></li>

            </ul>


        </ul>
        </li>


        </ul>


        <div x-data class="hidden md:block ml-10">
          <select id="languageSelect"
            @change="Alpine.store('lang').storelanguage($event.target.value)"
            class="flex items-center text-sm pe-1 font-medium text-White rounded-md hover:text-blue-600 dark:hover:text-blue-500 md:me-0 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:text-white bg-transparent">
            <option value="" disabled selected class="text-white">Select The Language</option>
            <option value="en" class="text-black">English</option>
            <option value="it" class="text-black">Italiano</option>
            <option value="jp" class="text-black">日本語</option>
          </select>
        </div>


      </nav>
    </div>




    <div class="md:hidden absolute top-0">



      <button id="toggleButton"
        class="md:hidden p-2  text-white rounded absolute top-10 right-10 z-50 text-2xl"
        aria-expanded="false" aria-controls="sidebar"><i class="fa fa-bars "></i>
      </button>

      <!-- Sidebar Section -->
      <div id="sidebar"
        class="relative sticky w-screen h-screen  bg-black overflow-hidden sidebar transform -translate-x-full md:translate-x-0 z-50">
        <button id="hideSidebarButton" class="p-2 text-gray-400 top-4 right-10 md:hidden">
          <i class="fa fa-arrow-circle-o-left W-24 h-24"></i>
        </button>


        <nav class="flex flex-col items-center max-w-xs text-center justify-center mx-auto">
          <ul class="space-y-1">
            <li><a href="/pages/en/index.php"
                class="block h-12 text-gray-400 text-lg underline-animation text-orange-400">The Fusion Fork</a></li>
            <li><a href="/pages/en/productpage.php"
                class="block h-12 text-gray-400 text-lg underline-animation text-white">Menu</a>
            </li>
            <li><a href="/pages/en/tablereser.php"
                class="block h-12 text-gray-400 text-lg underline-animation text-white">Table Reservation</a>
            </li>
            <li><a href="/pages/en/membership.php"
                class="block h-12 text-gray-400 text-lg underline-animation text-white">Membership</a></li>

            <li><a href="/pages/en/aboutus.php"
                class="block h-12 text-gray-400 text-lg underline-animation text-white">About Us </a></li>
            <li><a href="/pages/en/ChefTable.php"
                class="block h-12 text-gray-400 text-lg underline-animation text-white">Chef Table </a></li>

            <li><a href="/pages/en/contactus.php"
                class="block h-12 text-gray-400 text-lg underline-animation text-white">Enquiry</a></li>

                <select id="languageSelect"
                  @change="Alpine.store('lang').storelanguage($event.target.value)"
                  class="flex items-center text-sm pe-1 font-medium text-White rounded-md hover:text-blue-600 dark:hover:text-blue-500 md:me-0 bg-transparent">
                  <option value="" disabled selected class="text-white">Select The Language</option>
                  <option value="en" class="text-black">English</option>
                  <option value="it" class="text-black">Italiano</option>
                  <option value="jp" class="text-black">日本語</option>
          </select>

          </ul>
        </nav>

        <div class="mt-36">
          <ul class="flex space-x-2 mt-5 items-center justify-center mx-auto">
            <li><a href="#" class="p-2 text-yellow-500 hover:bg-fuchsia-600 rounded-xl"><span
                  class="fab fa-twitter"></span></a></li>
            <li><a href="#" class="p-2 text-yellow-500 hover:bg-fuchsia-600 rounded-xl"><span
                  class="fab fa-facebook"></span></a></li>
            <li><a href="#" class="p-2 text-yellow-500 hover:bg-fuchsia-600 rounded-xl"><span
                  class="fab fa-linkedin"></span></a></li>
            <li><a href="#" class="p-2 text-yellow-500 hover:bg-fuchsia-600 rounded-xl"><span
                  class="fab fa-instagram"></span></a></li>
            <li><a href="https://wa.me/message/DXZDJ66XJWI6B1"
                class="p-2 text-yellow-500 hover:bg-fuchsia-600 rounded-xl"><span
                  class="fab fa-whatsapp"></span></a></li>
          </ul>

          <div class="items-center justify-center mx-auto mt-3">
            <p class="text-sm text-gray-100 text-center">
              © Copyright 2024 Go-Smart solutions. <br> All rights reserved.
            </p>
          </div>
        </div>
      </div>




    </div>

  </header>

  <main>

    <section class="relative">
      <div class="relative">
        <img src="/image/image2.webp" alt="Image" class="w-full h-auto object-cover h-screen">

        <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-center">
          <h2 class="text-3xl md:text-8xl font-bold text-white mb-5">Welcome to The Fusion Fork</h2>
          <p class="text-lg text-white mb-5">
            Our restaurant offers a variety of exquisite dishes, from traditional Indian cuisine to modern European cuisine. Our menu is always updated with the latest ingredients and flavors.
          </p>

          <button onclick="document.getElementById('section2').scrollIntoView({behavior: 'smooth'});"
            class="text-gray-50 duration-300 relative group cursor-pointer overflow-hidden h-12 w-56 rounded-md p-2 font-extrabold">
            <div class="absolute group-hover:-top-1 group-hover:-right-2 z-10 w-16 h-16 rounded-full group-hover:scale-150 duration-700 right-12 top-12 bg-yellow-500"></div>
            <div class="absolute group-hover:-top-1 group-hover:-right-2 z-10 w-12 h-12 rounded-full group-hover:scale-150 duration-700 right-20 -top-6 bg-orange-500"></div>
            <div class="absolute group-hover:-top-1 group-hover:-right-2 z-10 w-8 h-8 rounded-full group-hover:scale-150 duration-700 right-32 top-6 bg-pink-500"></div>
            <div class="absolute group-hover:-top-1 group-hover:-right-2 z-10 w-4 h-4 rounded-full group-hover:scale-150 duration-700 right-2 top-12 bg-red-600"></div>
            <p class="z-10 absolute bottom-2 left-2 text-xl font-serif text-black">Discover Our Menu</p>
          </button>



        </div>

      </div>
      </div>
    </section>

    <section class="py-10" id="section2">
      <div x-data>
        <h1 class="text-4xl font-bold text-center mt-10 text-gray-800">Menu List</h1>
        <div class="container mx-auto mt-6 px-4 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
          <!-- Product Listing -->
          <template x-for="product in $store.productpage.products" :key="product.id">
            <div class="bg-white border border-gray-200 rounded-lg shadow-md hover:shadow-lg transition duration-300">
              <img x-bind:src="product.image" alt="Product Image" class="w-full h-48 object-cover rounded-t-lg">
              <div class="p-4">
                <h2 class="text-lg font-bold text-gray-800" x-text="product.name"></h2>
                <p class="text-gray-600 mt-2" x-text="`Price: $${product.price}`"></p>
                <p class="text-gray-500 text-sm mt-1" x-text="product.description"></p>
                <p class="text-sm text-green-600 font-medium mt-2" x-text="`Stock: ${product.stock_quantity}`"></p>
                <button class="mt-4 bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 focus:outline-none">
                  Add to Cart
                </button>
              </div>
            </div>
          </template>
        </div>
      </div>
    </section>

  </main>

  <footer class="bg-gray-800 text-gray-200 py-10 mt-10">
    <div class="container mx-auto grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6 px-4">
      <!-- About Section -->
      <div class="text-center sm:text-left">
        <h3 class="text-lg font-semibold text-white mb-4">The Fusion Fork</h3>
        <p class="text-sm">
          We are committed to providing the best products at competitive prices. Discover a wide range of quality items tailored to your needs.
        </p>
        <div class="mt-10">
          <input class="w-56 mx-auto sm:w-56" type="email" required name="email" placeholder="Enter your email address">
        </div>
        <button class="bg-blue-100 text-red-950 w-56 mx-auto mt-5 text-sm hover:bg-sky-700">Subscribe</button>
      </div>

      <div class="text-center sm:text-left">
        <h3 class="text-lg font-semibold text-white mb-4">Opening Hours</h3>
        <ul class="text-sm">
          <li class="mb-2 hover:text-blue-400">Monday - 11:00 - 24:00</li>
          <li class="mb-2 hover:text-blue-400">Tuesday - 11:00 - 24:00</li>
          <li class="mb-2 hover:text-blue-400">Wednesday - 11:00 - 24:00</li>
          <li class="mb-2 hover:text-blue-400">Thursday - 11:00 - 24:00</li>
          <li class="mb-2 hover:text-blue-400">Friday - 13:00 - 24:00</li>
          <li class="mb-2 hover:text-blue-400">Saturday - 11:00 - 24:00</li>
          <li class="mb-2 hover:text-blue-400">Sunday - 11:00 - 24:00</li>
        </ul>
      </div>

      <!-- Contact Information -->
      <div class="text-center sm:text-left">
        <h3 class="text-lg font-semibold text-white mb-4">Contact Us</h3>
        <p class="text-sm">
          <span class="font-semibold">Address:</span> 1234 Market Street, Suite 100<br>
          <span class="font-semibold">Phone:</span> (123) 456-7890<br>
          <span class="font-semibold">Email:</span> support@example.com
        </p>
        <!-- Social Media -->
        <div>
          <h3 class="text-lg font-semibold text-white mb-4 mt-10">Follow Us</h3>
          <div class="flex justify-center space-x-4">
            <a href="#" class="text-gray-400 hover:text-white">
              <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                <path d="M22.675 0H1.325C.593 0 0 .593 0 1.325v21.351C0 23.406.593 24 1.325 24h21.351C23.406 24 24 23.406 24 22.676V1.325C24 .593 23.406 0 22.675 0zm-14.54 20.542H5.854v-9.157h2.28v9.157zm-1.14-10.462a1.322 1.322 0 01-1.322-1.322c0-.729.593-1.322 1.322-1.322.73 0 1.322.593 1.322 1.322 0 .729-.593 1.322-1.322 1.322zm15.453 10.462h-2.277v-4.434c0-1.113-.02-2.546-1.548-2.546-1.548 0-1.784 1.211-1.784 2.462v4.518h-2.277v-9.157h2.188v1.254h.03c.304-.575 1.047-1.183 2.156-1.183 2.301 0 2.73 1.513 2.73 3.482v5.604h-.004z" />
              </svg>
            </a>
            <a href="#" class="text-gray-400 hover:text-white">
              <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                <path d="M22.162 5.656c-.814.36-1.689.602-2.606.71.937-.562 1.658-1.45 1.994-2.507-.877.52-1.847.9-2.877 1.102-.827-.881-2.005-1.431-3.309-1.431-2.507 0-4.546 2.039-4.546 4.546 0 .356.039.704.115 1.04-3.777-.189-7.125-1.996-9.359-4.747-.392.672-.617 1.45-.617 2.277 0 1.57.798 2.958 2.008 3.77-.742-.024-1.438-.227-2.048-.565v.057c0 2.193 1.56 4.02 3.635 4.434-.38.103-.782.158-1.195.158-.292 0-.575-.029-.852-.081.575 1.796 2.24 3.105 4.212 3.14-1.543 1.21-3.489 1.933-5.604 1.933-.363 0-.721-.021-1.075-.062 1.998 1.281 4.37 2.028 6.918 2.028 8.303 0 12.842-6.879 12.842-12.841 0-.196-.004-.391-.013-.584.882-.637 1.648-1.432 2.256-2.338z" />
              </svg>
            </a>
            <a href="#" class="text-gray-400 hover:text-white">
              <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                <path d="M12 2.163c3.204 0 3.584.012 4.849.07 1.366.062 2.633.33 3.608 1.308.977.978 1.245 2.245 1.308 3.608.058 1.265.07 1.645.07 4.849s-.012 3.584-.07 4.849c-.062 1.366-.33 2.633-1.308 3.608-.978.977-2.245 1.245-3.608 1.308-1.265.058-1.645.07-4.849.07s-3.584-.012-4.849-.07c-1.366-.062-2.633-.33-3.608-1.308-.977-.978-1.245-2.245-1.308-3.608-.058-1.265-.07-1.645-.07-4.849s.012-3.584.07-4.849c.062-1.366.33-2.633 1.308-3.608.978-.977 2.245-1.245 3.608-1.308 1.265-.058 1.645-.07 4.849-.07zm0-2.163c-3.259 0-3.67.014-4.947.072-1.322.06-2.497.336-3.46 1.299-.963.962-1.239 2.137-1.299 3.459-.058 1.277-.072 1.688-.072 4.947s.014 3.67.072 4.947c.06 1.322.336 2.497 1.299 3.459.962.963 2.137 1.239 3.459 1.299 1.277.058 1.688.072 4.947.072s3.67-.014 4.947-.072c1.322-.06 2.497-.336 3.459-1.299.963-.962 1.239-2.137 1.299-3.459.058-1.277.072-1.688.072-4.947s-.014-3.67-.072-4.947c-.06-1.322-.336-2.497-1.299-3.459-.962-.963-2.137-1.239-3.459-1.299-1.277-.058-1.688-.072-4.947-.072zM12 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zm0 10.162a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100-2.881 1.44 1.44 0 000 2.881z" />
              </svg>
            </a>
          </div>
        </div>
      </div>

      <!-- Instagram Section -->
      <div class="text-center sm:text-left">
        <h3 class="text-lg font-semibold text-white mb-4">Instagram</h3>
        <img src="/image/Insta.jpg" class="w-56 h-56 rounded-sm mx-auto" alt="Instagram image">
      </div>
    </div>

    <div class="text-center text-sm text-gray-400 mt-6">
      &copy; 2024 Abdul Hakeem. All rights reserved.
    </div>
  </footer>



  <script>
    // Add script to handle sidebar toggle
    const toggleButton = document.getElementById('toggleButton');
    const hideSidebarButton = document.getElementById('hideSidebarButton');
    const sidebar = document.getElementById('sidebar');

    // Toggle sidebar visibility
    function toggleSidebar() {
      const isExpanded = toggleButton.getAttribute('aria-expanded') === 'true' || false;
      toggleButton.setAttribute('aria-expanded', !isExpanded);
      sidebar.classList.toggle('-translate-x-full');
    }

    toggleButton.addEventListener('click', toggleSidebar);
    hideSidebarButton.addEventListener('click', toggleSidebar); // Add functionality to the hide icon

    // Close sidebar on link click
    const links = sidebar.querySelectorAll('nav a');
    links.forEach(link => {
      link.addEventListener('click', () => {
        sidebar.classList.add('-translate-x-full');
        toggleButton.setAttribute('aria-expanded', 'false');
      });
    });
  </script>

  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>

  <!-- Initialize Swiper -->



  <script>
    var toTopButton = document.getElementById("to-top-button");

    if (toTopButton) {


      window.onscroll = function() {
        if (document.body.scrollTop > 500 || document.documentElement.scrollTop > 500) {
          toTopButton.classList.remove("hidden");
        } else {
          toTopButton.classList.add("hidden");
        }
      };

      window.goToTop = function() {
        window.scrollTo({
          top: 0,
          behavior: 'smooth'
        });
      };
    }
  </script>

  <script>

  </script>

  <script>

  </script>
  <!-- Link to productpage.js -->
  <script src="/js/store/productpage.js"></script>
  <script src="/js/appProduct.js"></script>






</body>

</html>