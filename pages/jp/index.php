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

<body class="overflow-x-hidden">



  <header class="text-slate-50 ">
    <div class="relative">
      <nav class="main-nav flex justify-end items-left absolute top-0 right-44 w-full z-20 mt-10">
        <ul class="hidden lg:flex list_view space-x-8 mt-10px">
          <li class="relative group">
            <a href="/productpage.php" class="hover:text-gray-600 text-White">メニュー</a>

          </li>
          <li class="hover:text-gray-600 text-White">|</li>


          <li class="relative group">
            <a href="/Unique-food-ingredients/Seasonings.html" class="hover:text-gray-600 text-White">テーブル予約</a>

          </li>
          <li class="hover:text-gray-600 text-White">|</li>

          <li class="relative group">
            <a href="/pages/jp/index.php" class="hover:text-gray-600 text-White">The Fusion Fork</a>

          </li>
          <li class="hover:text-gray-600 text-White">|</li>

          <li class="relative group">
            <a href="/Unique-food-ingredients/food_colors.html" class="hover:text-gray-600 text-White">メンバーシップ</a>

          </li>
          <li class="hover:text-gray-600 text-White">|</li>
          <li class="relative group">
            <a href="/Unique-food-ingredients/Our_company.html" class="hover:text-gray-600 text-White">
              私たちについて</a>
            <ul class="relative left-0 mt-2  shadow-lg rounded-lg hidden group-hover:block">
              <li><a href="/ChefTable.php"
                  class="block  hover:text-gray-600 text-White">
                  シェフテーブル</a></li>
              <li><a href="/Unique-food-ingredients/Our_company.html"
                  class="block  hover:text-gray-600 text-White">
                  問い合わせ</a></li>

            </ul>


        </ul>
        </li>


        </ul>
        <div x-data class="hidden md:block ml-10">
          <select id="languageSelect"
            @change="Alpine.store('lang').storelanguage($event.target.value)"
            class="flex items-center text-sm pe-1 font-medium text-White rounded-md hover:text-blue-600 dark:hover:text-blue-500 md:me-0 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:text-white bg-transparent">
            <option value="" disabled selected class="text-white">言語を選択してください</option>
            <option value="en" class="text-black">English</option>
            <option value="it" class="text-black">Italiano</option>
            <option value="jp" class="text-black">日本語</option>
          </select>
        </div>

      </nav>
    </div>




    <div class="md:hidden absolute top-0">



      <button id="toggleButton"
        class="md:hidden p-2 bg-orange-400 text-white rounded absolute top-10 right-10 z-50 "
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
                class="block h-12 text-gray-400 text-lg underline-animation text-white">
                メニュー</a>
            </li>
            <li><a href="#section3"
                class="block h-12 text-gray-400 text-lg underline-animation text-white">
                テーブル予約</a>
            </li>
            <li><a href="#section4"
                class="block h-12 text-gray-400 text-lg underline-animation text-white">メンバーシップ</a></li>

            <li><a href="#section4"
                class="block h-12 text-gray-400 text-lg underline-animation text-white">
                私たちについて </a></li>
            <li><a href="/ChefTable.php"
                class="block h-12 text-gray-400 text-lg underline-animation text-white">
                シェフテーブル</a></li>

            <li><a href="#section4"
                class="block h-12 text-gray-400 text-lg underline-animation text-white">問い合わせ</a></li>



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
          <span class="char">風</span>
          <span class="char">味</span>
          <span class="char">に</span>
          <span class="char">情</span>
          <span class="char">熱</span>
          <span class="char">を</span>
          <span class="char">注</span>
          <span class="char">い</span>
          <span class="char">で</span>
          <span class="char">い</span>
          <span class="char">ま</span>
          <span class="char">す</span>
          <span class="char ml-1 md:ml-2 lg:ml-2 mr-0 md:mr-2 lg:mr-2 "> </span>
       
          <span class="char">。</span>
        </h2>
      </div>
  
      <div
        class="concept concept-five flex justify-center items-center absolute  w-full z-20 mt-[250px] md:mt-80 lg:mt-80 font-serif text-slate-50">
        <h2 class="text-xl md:text-2xl lg:text-3xl font-bold text-center">
          <span class="char">卓</span>
          <span class="char">越</span>
          <span class="char">性</span>
          <span class="char">は</span>
          <span class="char">私</span>
          <span class="char">た</span>
          <span class="char">ち</span>
          <span class="char">の</span>
          <span class="char">約</span>
          <span class="char">束</span>
          <span class="char">で</span>
          <span class="char">す</span>
          <span class="char ml-1 md:ml-2 lg:ml-2 mr-0 md:mr-2 lg:mr-2"></span>
          <span class="char">。</span>
         
        </h2>
      </div>

      <div
        class="flex justify-center items-center absolute ml-46 w-full z-20 mt-[500px] md:mt-72 lg:mt-96 font-serif text-slate-50">
        <div class="content__container">
          <p class="content__container__text">
            探検する

          </p>
          <div class="content__container__scrolling-text">
            <div class="content__container__scrolling-text__wrapper">
              <div class="content__container__scrolling-text__item">インド人 ！</div>
              <div class="content__container__scrolling-text__item">イタリア語 !</div>
              <div class="content__container__scrolling-text__item">日本語 !</div>
              <div class="content__container__scrolling-text__item">今 !</div>
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
          ようこそ、The Fusion Forkへ。ここでは、料理の芸術性と卓越したおもてなしが融合します。18年の経験を持つ私たちのチームが、100種類のユニークな料理を情熱を込めて作り上げ、50人の専任スタッフがご提供します。15,000人の満足したお客様に加わり、忘れられない食体験をお楽しみください。毎日午前11時から深夜0時まで営業中です。完璧な一皿があなたをお待ちしています！ </p>

        <div class="grid grid-cols-2 md:grid-cols-4 gap-10 mb-8">
          <div class="text-center">
            <h3 class="text-3xl font-bold text-gray-800">5</h3>
            <p class="text-sm text-gray-500">
            長年の経験</p>
          </div>
          <div class="text-center">
            <h3 class="text-3xl font-bold text-gray-800">50 +</h3>
            <p class="text-sm text-gray-500">メニュー・料理</p>
          </div>
          <div class="text-center">
            <h3 class="text-3xl font-bold text-gray-800">40</h3>
            <p class="text-sm text-gray-500">
スタッフ</p>
          </div>
          <div class="text-center">
            <h3 class="text-3xl font-bold text-gray-800">10,000</h3>
            <p class="text-sm text-gray-500">満足した顧客</p>
          </div>
        </div>

        <!-- Contact Info -->
        <div>
          <p class="text-lg font-semibold text-gray-800 mb-2">
          月～日</p>
          <p class="text-lg font-semibold text-gray-800 mb-6">11AM - 12PM</p>
          <p class="text-2xl font-bold text-orange-500">+94 761122226</p>
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
         The Fusion Forkでは、イタリア料理、インド料理、日本料理の豊かな風味を融合させ、忘れられない食の体験をご提供します。私たちは、最高品質の料理を競争力のある価格で提供することをお約束します。情熱を込めて作られた多彩なメニューをお楽しみいただき、心ゆくまでご満足ください。</p>
        <div class="mt-10">
          <input class="w-56 mx-auto sm:w-56" type="email" required name="email" placeholder="Enter your email address">
        </div>
        <button class="bg-blue-100 text-red-950 w-56 mx-auto mt-5 text-sm hover:bg-sky-700">Subscribe</button>
      </div>

      <div class="text-center sm:text-left">
        <h3 class="text-lg font-semibold text-white mb-4">
        営業時間</h3>
        <ul class="text-sm">
          <li class="mb-2 hover:text-blue-400">
          月曜日 - 11:00 - 24:00</li>
          <li class="mb-2 hover:text-blue-400">火曜日 - 11:00 - 24:00</li>
          <li class="mb-2 hover:text-blue-400">水曜日 - 11:00 - 24:00</li>
          <li class="mb-2 hover:text-blue-400">
          木曜日 - 11:00 - 24:00</li>
          <li class="mb-2 hover:text-blue-400">
          金曜日 - 13:00 - 24:00</li>
          <li class="mb-2 hover:text-blue-400">
          土曜日 - 11:00 - 24:00</li>
          <li class="mb-2 hover:text-blue-400">日曜日 - 11:00 - 24:00</li>
        </ul>
      </div>

      <!-- Contact Information -->
      <div class="text-center sm:text-left">
        <h3 class="text-lg font-semibold text-white mb-4">Contact Us</h3>
        <p class="text-sm">
          <span class="font-semibold">
          住所:</span> 1234 マーケット ストリート、スイート 100<br>
          <span class="font-semibold">
          電話:</span> (123) 456-7890<br>
          <span class="font-semibold">
          電子メール:</span> support@thefusionfork.com
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
        <h3 class="text-lg font-semibold text-white mb-4">
        インスタグラム</h3>
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

  <script>
    document.addEventListener('alpine:init', () => {
      Alpine.store('lang', {
        language: JSON.parse(localStorage.getItem('language')) || '',

        storelanguage(languageselector) {
          if (['en', 'it', 'jp'].includes(languageselector)) {
            localStorage.setItem('language', JSON.stringify(languageselector));
            this.language = languageselector;

            this.updatePageContent(languageselector);
          }
        },

        updatePageContent(language) {
          this.redirectToLanguagePage(language);
        },

        redirectToLanguagePage(language) {
          let url = '';
          if (language === 'it') url = '/pages/it/index.php';
          if (language === 'jp') url = '/pages/jp/index.php';
          if (language === 'en') url = '/pages/en/index.php';

          if (url) window.location.href = url;
        }
      });
    });
  </script>

  <script type="text/javascript" src="Js\store\home.js"></script>


</body>

</html>