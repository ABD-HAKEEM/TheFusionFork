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
<body>

<header class="text-slate-50 ">
    <div class="relative">
      <nav class="main-nav flex justify-end items-left absolute top-0 right-44 w-full z-20 mt-10">
        <ul class="hidden lg:flex list_view space-x-8 mt-10px">
          <li class="relative group">
            <a href="/pages/en/index.php" class="hover:text-black text-black">The Fusion Fork</a>

          </li>
          <li class="hover:text-black text-black">|</li>


          <li class="relative group">
            <a href="/admincreatproduct.php" class="hover:text-black text-black">Create New Products</a>

          </li>
          <li class="hover:text-black text-black">|</li>

          <li class="relative group">
            <a href="/adminupdateproduct.php" class="hover:text-black text-black">Update The Products</a>

          </li>
          <li class="hover:text-black text-black">|</li>

          <li class="relative group">
            <a href="/admindelete.php" class="hover:text-black text-black">Delete The Products</a>

          </li>
         


       
        </li>


        </ul>



      </nav>
    </div>


</header>

<main>


<section class="py-10" id="section2">
    <div x-data>
        <h1 class="text-4xl font-bold text-center mt-10 text-gray-800">Menu List</h1>
        <div class="container mx-auto mt-6 px-4 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
            <!-- Product Listing -->
            <template x-for="product in $store.productpage.products" :key="product.id">
                <div class="bg-white border border-gray-200 rounded-lg shadow-md hover:shadow-lg transition duration-300">
                    <img src="/image/food1.jpg" alt="Product Image" class="w-full h-48 object-cover rounded-t-lg">
                    <div class="p-4">
                        <h2 class="text-lg font-bold text-gray-800" x-text="product.name"></h2>
                        <p class="text-black mt-2" x-text="`Price: $${product.price}`"></p>
                        <p class="text-gray-500 text-sm mt-1" x-text="product.description"></p>
                        <p class="text-sm text-green-600 font-medium mt-2" x-text="`Stock: ${product.stock_quantity}`"></p>
                        <button @click="$store.productpage.deleteProduct(product.id)" class="mt-4 bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700 focus:outline-none">
                            Delete
                        </button>
                    </div>
                </div>
            </template>
        </div>
    </div>
</section>




</main>

<footer class="bg-gray-800 text-white py-4 mt-8">
    <div class="container mx-auto text-center">
        <p>&copy; <?php echo date("Y"); ?> Hakeem Fareedh. All rights reserved.</p>
        <p class="text-sm mr-2">Developed by Abdul Hakeem <a href="https://www.linkedin.com/in/abdul-hakeem-0168481b6?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=ios_app" class="underline" target="_blank">
        <i class="fab fa-linkedin"></i> LinkedIn
    </a> </p>
        <p class="text-sm mb-2">Contact us at <a href="mailto:hakeemfareed01@gmail.com" class="underline">hakeemfareed01@gmail.com</a></p>
    </div>
</footer>
<script src="js/store/productpage.js"></script>
</body>
</html>