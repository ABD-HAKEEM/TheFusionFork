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

  <section class="py-10" id="section">
    <div x-data="$store.adminAdd" class="max-w-4xl mx-auto bg-white shadow-lg rounded-lg p-8">
        <h1 class="text-4xl font-bold text-center mb-8 text-gray-800">Create Product</h1>
        <form @submit.prevent="createProduct" class="space-y-6">
            <!-- Product Name -->
            <div>
                <label for="product_name" class="block text-sm font-medium text-gray-700">Product Name</label>
                <input 
                    type="text" 
                    id="product_name" 
                    x-model="name" 
                    placeholder="Enter product name" 
                    required 
                    class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
            </div>

            <!-- Product Description -->
            <div>
                <label for="product_description" class="block text-sm font-medium text-gray-700">Product Description</label>
                <textarea 
                    id="product_description" 
                    x-model="description" 
                    placeholder="Enter product description" 
                    required 
                    rows="4" 
                    class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                </textarea>
            </div>

            <!-- Product Price -->
            <div>
                <label for="product_price" class="block text-sm font-medium text-gray-700">Product Price</label>
                <input 
                    type="number" 
                    id="product_price" 
                    x-model="price" 
                    placeholder="Enter product price" 
                    min="0" 
                    step="0.01" 
                    required 
                    class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
            </div>

            <!-- Product Category -->
            <div>
                <label for="product_category" class="block text-sm font-medium text-gray-700">Product Category</label>
                <select 
                    id="product_category" 
                    x-model="category" 
                    required 
                    class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                    <option value="" disabled>Select a category</option>
                    <option value="starter">Starter</option>
                    <option value="main_course">Main Course</option>
                    <option value="dessert">Dessert</option>
                    <option value="beverages">Beverages</option>
                    <option value="snacks">Snacks</option>
                    <option value="sides">Side Dish</option>
                    <option value="other">Other</option>
                </select>
            </div>

            <!-- Product Image -->
            <div>
                <label for="product_image" class="block text-sm font-medium text-gray-700">Product Image URL</label>
                <input 
                    type="text" 
                    id="product_image" 
                    x-model="image" 
                    placeholder="Enter product image URL" 
                    required 
                    class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
            </div>

            <!-- Product SKU -->
            <div>
                <label for="product_qty" class="block text-sm font-medium text-gray-700">SKU (Stock Keeping Unit)</label>
                <input 
                    type="number" 
                    id="product_qty" 
                    x-model="stock_quantity" 
                    placeholder="Enter product SKU" 
                    min="0" 
                    required 
                    class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
            </div>

            <!-- Submit Button -->
            <div>
                <button 
                    type="submit" 
                    class="w-full bg-indigo-600 text-white py-2 px-4 rounded-lg shadow-lg hover:bg-indigo-700 focus:ring-4 focus:ring-indigo-500">
                    Create Product
                </button>
            </div>
        </form>
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
  <script src="js/store/Add_productpage.js"></script>
</body>

</html>