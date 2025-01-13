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
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    crossorigin="anonymous" referrerpolicy="no-referrer" />

  <script src="https://kit.fontawesome.com/bd921df3a8.js" crossorigin="anonymous"></script>

</head>

<body id="_app" class="overflow-x-hidden">



  <header class="text-slate-50 ">
    <div class="relative">
      <nav class="main-nav flex justify-end items-left absolute top-0 right-44 w-full z-20 mt-10">
        <ul class="hidden lg:flex list_view space-x-8 mt-10px">
          <li class="relative group">
            <a href="/productpage.php" class="hover:text-gray-600 text-White">Menu</a>

          </li>
          <li class="hover:text-gray-600 text-White">|</li>


          <li class="relative group">
            <a href="/Unique-food-ingredients/Seasonings.html" class="hover:text-gray-600 text-White">Prenotazione tavolo</a>

          </li>
          <li class="hover:text-gray-600 text-White">|</li>

          <li class="relative group">
            <a href="/index.php" class="hover:text-gray-600 text-White">The Fusion Fork</a>

          </li>
          <li class="hover:text-gray-600 text-White">|</li>

          <li class="relative group">
            <a href="/Unique-food-ingredients/food_colors.html" class="hover:text-gray-600 text-White">
              Appartenenza</a>

          </li>
          <li class="hover:text-gray-600 text-White">|</li>
          <li class="relative group">
            <a href="/Unique-food-ingredients/Our_company.html" class="hover:text-gray-600 text-White">
              Chi siamo</a>
            <ul class="relative left-0 mt-2  shadow-lg rounded-lg hidden group-hover:block">
              <li><a href="/ChefTable.php"
                  class="block  hover:text-gray-600 text-White">
                  Tavolo dello chef</a></li>
              <li><a href="/Unique-food-ingredients/Our_company.html"
                  class="block  hover:text-gray-600 text-White">
                  Inchiesta</a></li>

            </ul>


        </ul>
        </li>


        </ul>
        <div x-data class="hidden md:block ml-10">
          <select id="languageSelect"
            @change="Alpine.store('lang').storelanguage($event.target.value)"
            class="flex items-center text-sm pe-1 font-medium text-White rounded-md hover:text-blue-600 dark:hover:text-blue-500 md:me-0 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:text-white bg-transparent">
            <option value="" disabled selected class="text-white">
              Seleziona la lingua</option>
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


        <nav class="flex flex-col items-center max-w-xs mt-16 md:mt-24 text-center justify-center mx-auto">
          <ul class="space-y-1">
            <li><a href="#!"
                class="block h-12 text-gray-400 text-lg underline-animation text-orange-400">The Fusion Fork</a></li>
            <li><a href="#section2"
                class="block h-12 text-gray-400 text-lg underline-animation text-white">Menu</a>
            </li>
            <li><a href="#section3"
                class="block h-12 text-gray-400 text-lg underline-animation text-white">
                Prenotazione tavolo
              </a>
            </li>
            <li><a href="#section4"
                class="block h-12 text-gray-400 text-lg underline-animation text-white">
                Appartenenza</a></li>

            <li><a href="#section4"
                class="block h-12 text-gray-400 text-lg underline-animation text-white">
                Chi siamo </a></li>
            <li><a href="/ChefTable.php"
                class="block h-12 text-gray-400 text-lg underline-animation text-white">
                Tavolo dello chef </a></li>

            <li><a href="#section4"
                class="block h-12 text-gray-400 text-lg underline-animation text-white">
                Inchiesta</a></li>



          </ul>
        </nav>

        <div class="md:mt-56">
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
    <!-- section1 -->
    <section>
      <div
        class="concept concept-five main-nav flex justify-center items-center absolute  w-full z-20 mt-[200px] md:mt-72 lg:mt-72 font-serif text-slate-50 sm:x-auto">
        <h2 class="text-xl md:text-2xl lg:text-3xl font-bold text-center ">
          <span class="char">I</span>
          <span class="char"> </span>
          <span class="char">s</span>
          <span class="char">a</span>
          <span class="char">p</span>
          <span class="char">o</span>
          <span class="char">r</span>
          <span class="char">i</span>
          <span class="char"> </span>
          <span class="char">s</span>
          <span class="char">o</span>
          <span class="char">n</span>
          <span class="char">o</span>
          <span class="char"> </span>
          <span class="char">l</span>
          <span class="char">a</span>
          <span class="char"> </span>
          <span class="char">n</span>
          <span class="char">o</span>
          <span class="char">s</span>
          <span class="char">t</span>
          <span class="char">r</span>
          <span class="char">a</span>
          <span class="char"> </span>
          <span class="char">p</span>
          <span class="char">a</span>
          <span class="char">s</span>
          <span class="char">s</span>
          <span class="char">i</span>
          <span class="char">o</span>
          <span class="char">n</span>
          <span class="char">e</span>
          <span class="char">.</span>

        </h2>
      </div>

      <div
        class="concept concept-five flex justify-center items-center absolute  w-full z-20 mt-[250px] md:mt-80 lg:mt-80 font-serif text-slate-50">
        <h2 class="text-xl md:text-2xl lg:text-3xl font-bold text-center">
          <span class="char">L</span>
          <span class="char">'</span>
          <span class="char">e</span>
          <span class="char">c</span>
          <span class="char">c</span>
          <span class="char">e</span>
          <span class="char">l</span>
          <span class="char">l</span>
          <span class="char">e</span>
          <span class="char">n</span>
          <span class="char">z</span>
          <span class="char">a</span>
          <span class="char ml-1 md:ml-2 lg:ml-2 mr-0 md:mr-2 lg:mr-2 "> </span>
          <span class="char">è</span>
          <span class="char ml-1 md:ml-2 lg:ml-2 mr-0 md:mr-3 lg:mr-2"> </span>
          <span class="char">l</span>
          <span class="char">a</span>
          <span class="char ml-1 md:ml-2 lg:ml-2 mr-0 md:mr-2 lg:mr-2 "> </span>
          <span class="char">n</span>
          <span class="char">o</span>
          <span class="char">s</span>
          <span class="char">t</span>
          <span class="char">r</span>
          <span class="char">a</span>
          <span class="char ml-1 md:ml-2 lg:ml-2 mr-0 md:mr-2 lg:mr-2 "> </span>
          <span class="char">p</span>
          <span class="char">r</span>
          <span class="char">o</span>
          <span class="char">m</span>
          <span class="char">e</span>
          <span class="char">s</span>
          <span class="char">s</span>
          <span class="char">a</span>
          <span class="char">.</span>

        </h2>
      </div>

      <div
        class="flex justify-center items-center absolute ml-46 w-full z-20 mt-[500px] md:mt-72 lg:mt-96 font-serif text-slate-50">
        <div class="content__container">
          <p class="content__container__text">
            EXPLORE
          </p>
          <div class="content__container__scrolling-text">
            <div class="content__container__scrolling-text__wrapper">
              <div class="content__container__scrolling-text__item">Indian !</div>
              <div class="content__container__scrolling-text__item">Italian !</div>
              <div class="content__container__scrolling-text__item">Japanese !</div>
              <div class="content__container__scrolling-text__item">Now !</div>
            </div>
          </div>
        </div>
      </div>






      <swiper-container class="mySwiper md:w-full h-screen object-cover" pagination="true" pagination-clickable="true"
        navigation="true" space-between="30" centered-slides="true" autoplay-delay="10000"
        autoplay-disable-on-interaction="false">
        <swiper-slide><img src="\image\food2.jpg" alt=""></swiper-slide>
        <swiper-slide><img src="\image\food1.jpg" alt=""></swiper-slide>
        <swiper-slide><img src="\image\food3.jpg" alt=""></swiper-slide>

        <div class="autoplay-progress" slot="container-end">
          <svg viewBox="0 0 48 48">
            <circle cx="24" cy="24" r="20"></circle>
          </svg>
          <span></span>
        </div>


      </swiper-container>

    </section>

    <!-- Section 2 -->

    <section class="container mx-auto px-6 py-20 md:flex items-center justify-between">

      <div class="w-full md:w-1/2 pr-0 md:pr-10 mb-8 md:mb-0">
        <img src="/image/pexels-cottonbro-4253312.jpg" alt="Chef Image" class="w-full h-auto rounded-lg shadow-lg">
      </div>

      <div class="w-full md:w-1/2 text-center md:text-right">

        <h1 class="text-3xl md:text-4xl font-serif font-extrabold text-gray-800 mb-4">The Fusion Fork</h1>

        <p class="text-lg text-gray-600 mb-6">
          Benvenuti a The Fusion Fork, dove l’arte culinaria incontra un’ospitalità eccezionale. Con 18 anni di esperienza, il nostro team crea con passione un menù diversificato di 100 piatti unici, serviti da 50 membri del personale dedicati. Unitevi ai nostri 15.000 clienti soddisfatti e godetevi un’esperienza gastronomica indimenticabile. Siamo aperti tutti i giorni dalle 11:00 alle 00:00. Il pasto perfetto vi aspetta!</p>

        <div class="grid grid-cols-2 md:grid-cols-4 gap-10 mb-8">
          <div class="text-center">
            <h3 class="text-3xl font-bold text-gray-800">18</h3>
            <p class="text-sm text-gray-500">YEARS OF EXPERIENCE</p>
          </div>
          <div class="text-center">
            <h3 class="text-3xl font-bold text-gray-800">50</h3>
            <p class="text-sm text-gray-500">MENUS/DISH</p>
          </div>
          <div class="text-center">
            <h3 class="text-3xl font-bold text-gray-800">40</h3>
            <p class="text-sm text-gray-500">STAFFS</p>
          </div>
          <div class="text-center">
            <h3 class="text-3xl font-bold text-gray-800">10,000</h3>
            <p class="text-sm text-gray-500">HAPPY CUSTOMERS</p>
          </div>
        </div>

        <!-- Contact Info -->
        <div>
          <p class="text-lg font-semibold text-gray-800 mb-2">Mon - Sun</p>
          <p class="text-lg font-semibold text-gray-800 mb-6">11AM - 12PM</p>
          <p class="text-2xl font-bold text-orange-500">+ 1-9781234567</p>
        </div>
      </div>
    </section>

    <section class="mt-20">
      <h2 class="text-6xl text-center mb-14">
        Servizi di ristorazione</h2>
      <div class="grid grid-cols-1 md:grid-cols-3 gap-2 justify-items-center">
        <!-- Birthday Party Card -->
        <div class="card text-center w-80 bg-gray-100 rounded-lg p-5">
          <i class="fa fa-birthday-cake text-5xl text-[#fde047] mb-5" aria-hidden="true"></i>
          <div>
            <span class="text-lg font-semibold">
              Festa di compleanno</span>
          </div>
          <p class="text-sm mt-4 text-center">Festeggia il tuo giorno speciale con i nostri servizi catering personalizzati. Cibo delizioso, perfetto per il tuo evento di compleanno!</p>
        </div>

        <!-- Business Meetings Card -->
        <div class="card text-center w-80 bg-gray-100 rounded-lg p-5">
          <i class="fa fa-users text-5xl text-[#fde047] mb-5" aria-hidden="true"></i>
          <div>
            <span class="text-lg font-semibold">
              Riunioni d'affari</span>
          </div>
          <p class="text-sm mt-4 text-center">Stupisci i tuoi clienti e colleghi con le nostre opzioni di catering professionale per riunioni di lavoro ed eventi aziendali.</p>
        </div>

        <!-- Wedding Party Card -->
        <div class="card text-center w-80 bg-gray-100 rounded-lg p-5">
          <i class="fa fa-cutlery text-5xl text-[#fde047] mb-5" aria-hidden="true"></i>
          <div>
            <span class="text-lg font-semibold">
              Festa di matrimonio</span>
          </div>
          <p class="text-sm mt-4 text-center">
            Rendi indimenticabile il giorno del tuo matrimonio con il nostro squisito menu, creato su misura per soddisfare il tuo gusto e il tuo stile.</p>
        </div>
      </div>
    </section>

    <section class="mt-20 container mx-auto py-20">
      <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        <!-- Image on the left -->
        <img src="/image/food.jpg" alt="Japanese food" class="w-full h-auto">

        <!-- Text and images with icons -->
        <div>
          <h3 class="text-3xl font-bold text-gray-800 text- md:text-start">
          Scopri il nostro cibo</h3>
          <p class="text-sm text-gray-500 mt-4 text-center md:text-start">
          Il nostro menu comprende una varietà di piatti deliziosi e squisiti, che spaziano dalla cucina italiana, indiana e giapponese
          cucine. Ogni piatto è accuratamente selezionato per offrire un'esperienza indimenticabile ai nostri ospiti.
          </p>

          <!-- Small food images with cart icons -->
          <div class="mt-5 flex gap-3">
            <!-- Food item 1 -->
            <div class="relative w-28 h-32 md:w-56 md:h-64">
              <img src="/image/smfood1 (2).jpg" alt="Food Item" class="w-full h-full rounded-xl object-cover">
              <a href="/productpage.php"><i class="fa fa-shopping-cart absolute bottom-2 right-2 text-white bg-black p-2 rounded-full animate-pulse " aria-hidden="true"></i></a>
            </div>
            <!-- Food item 2 -->
            <div class="relative w-28 h-32 md:w-56 md:h-64">
              <img src="/image/smfood1 (3).jpg" alt="Food Item" class="w-full h-full rounded-xl object-cover">
              <a href="/productpage.php"><i class="fa fa-shopping-cart absolute bottom-2 right-2 text-white bg-black p-2 rounded-full animate-pulse " aria-hidden="true"></i></a>
            </div>
            <!-- Food item 3 -->
            <div class="relative w-28 h-32 md:w-56 md:h-64">
              <img src="/image/smfood1.jpg" alt="Food Item" class="w-full h-full rounded-xl object-cover">
              <a href="/productpage.php"><i class="fa fa-shopping-cart absolute bottom-2 right-2 text-white bg-black p-2 rounded-full animate-pulse " aria-hidden="true"></i></a>
            </div>
          </div>
        </div>
      </div>
    </section>



    <section class="mt-20">
      <h2 class="text-4xl text-center mb-14">
      Incontra i nostri chef</h2>
      <div class="grid grid-cols-1 md:grid-cols-4 gap-2 justify-items-center">
        <!-- Team Member 1 -->
        <div class="text-center">
          <img class="w-80 h-80 object-cover rounded-full mb-6" src="/image/chefs (4).jpg" alt="Team Member 1">


          <span class="text-lg font-semibold">
          Lo chef Mario Rossi</span>
          <p class="text-sm text-gray-500">
          Cuoco esecutivo senior</p>
        </div>

        <!-- Team Member 2 -->
        <div class="text-center">
          <img class="w-80 h-80 object-cover rounded-full mb-6" src="/image/chefs (1).jpg" alt="Team Member 1">


          <span class="text-lg font-semibold">
          La chef Emily Carter</span>
          <p class="text-sm text-gray-500">
          Specialista della cucina italiana</p>
        </div>

        <!-- Team Member 3 -->
        <div class="text-center">
          <img class="w-80 h-80 object-cover rounded-full mb-6" src="/image/chefs (2).jpg" alt="Team Member 1">


          <span class="text-lg font-semibold">
          Lo chef Hiro Tanaka</span>
          <p class="text-sm text-gray-500">
          Specialista della cucina giapponese</p>
        </div>

        <!-- Team Member 4 -->
        <div class="text-center">
          <img class="w-80 h-80 object-cover rounded-full mb-6" src="/image/chefs (3).jpg" alt="Team Member 1">


          <span class="text-lg font-semibold">Lo chef John Doe</span>
          <p class="text-sm text-gray-500">
          Specialista della cucina indiana</p>
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
          Al The Fusion Fork, uniamo i sapori autentici della cucina italiana, indiana e giapponese per offrirvi un'esperienza culinaria indimenticabile. Siamo impegnati a servire piatti di altissima qualità a prezzi competitivi. Scoprite un menu vario, creato con passione per deliziare il vostro palato e soddisfare ogni desiderio.</p>
        <div class="mt-10">
          <input class="w-56 mx-auto sm:w-56" type="email" required name="email" placeholder="Enter your email address">
        </div>
        <button class="bg-blue-100 text-red-950 w-56 mx-auto mt-5 text-sm hover:bg-sky-700">Subscribe</button>
      </div>

      <div class="text-center sm:text-left">
        <h3 class="text-lg font-semibold text-white mb-4">
        Orari di apertura</h3>
        <ul class="text-sm">
          <li class="mb-2 hover:text-blue-400">Lunedi - 11:00 - 24:00</li>
          <li class="mb-2 hover:text-blue-400">Martedì - 11:00 - 24:00</li>
          <li class="mb-2 hover:text-blue-400">Mercoledì - 11:00 - 24:00</li>
          <li class="mb-2 hover:text-blue-400">Giovedì - 11:00 - 24:00</li>
          <li class="mb-2 hover:text-blue-400">Venerdì - 13:00 - 24:00</li>
          <li class="mb-2 hover:text-blue-400">Sabato - 11:00 - 24:00</li>
          <li class="mb-2 hover:text-blue-400">Domenica - 11:00 - 24:00</li>
        </ul>
      </div>

      <!-- Contact Information -->
      <div class="text-center sm:text-left">
        <h3 class="text-lg font-semibold text-white mb-4">Contact Us</h3>
        <p class="text-sm">
          <span class="font-semibold">Indirizzo:</span> 1234 Market Street, Suite 100<br>
          <span class="font-semibold">Telefono:</span> (123) 456-7890<br>
          <span class="font-semibold">E-mail:</span> support@example.com
        </p>
        <!-- Social Media -->
        <div>
          <h3 class="text-lg font-semibold text-white mb-4 mt-10">Seguici</h3>
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
    const progressCircle = document.querySelector(".autoplay-progress svg");
    const progressContent = document.querySelector(".autoplay-progress span");

    const swiperEl = document.querySelector("swiper-container");
    swiperEl.addEventListener("autoplaytimeleft", (e) => {
      const [swiper, time, progress] = e.detail;
      progressCircle.style.setProperty("--progress", 1 - progress);
      progressContent.textContent = `${Math.ceil(time / 1000)}s`;
    });
  </script>

  <script>
    document.addEventListener('DOMContentLoaded', () => {
      const chars = document.querySelectorAll('.char');
      chars.forEach((char, index) => {
        setTimeout(() => {
          char.style.animationDelay = `${index * 0.20}s`;
          char.classList.add('animate');
        }, index * 5);
      });
    });
  </script>


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

  

<script type="text/javascript" src="/Js/appindex.js"></script>


</body>

</html>