<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Eureka</title>
  <link rel="stylesheet" href="/eureka/output.css" />
  <link rel="stylesheet" href="/eureka/styles/main.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap"
    rel="stylesheet" />
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
  <script defer src="/eureka/scripts/main.js"></script>
  <script defer src="https://kit.fontawesome.com/b4b8be07f5.js" crossorigin="anonymous"></script>

  <style>
    .content {
      display: none;
    }

    .active {
      color: blue;
      font-weight: bold;
    }
  </style>

</head>

<body class="dark:bg-dark dark:text-white transition-all duration-1000">
  <header class="sticky top-0 left-0 z-50 bg-secondary dark:bg-dark transition-all duration-1000">
    <nav class="flex justify-between items-center py-5 container">
      <a class="translate-y-1" href="/">
        <img src="/eureka/images/logo.png" alt="Eureka"
          class="eurekaLogo scale-150 translate-x-5 md:scale-100 md:translate-x-0" />
      </a>

      <div class="relative flex items-center min-w-[75%] justify-between gap-20" id="nav-bar">
        <!-- Nav Items -->
        <ul class="gap-3 relative items-center text-black dark:text-white hidden md:flex justify-between lg:gap-12">
          <li class="font-sans font-bold hover:text-primary">
            <a href="./">Home</a>
          </li>
          <li class="font-sans font-bold hover:text-primary">
            <a href="event.html">Event</a>
          </li>
          <li class="font-sans font-bold hover:text-primary active">
            <a href="./blog.html">Blog</a>
          </li>
          <li class="font-sans font-bold hover:text-primary">
            <a href="./faq.html">FAQ</a>
          </li>
          <li class="font-sans font-bold hover:text-primary">
            <a href="./contact.html">Contact Us</a>
          </li>
        </ul>

        <!-- Toggle Switch formerly here-->

        <button
          class="hidden md:block bg-primary p-3 lg:px-4 xl:px-6 max-w-28 xl:max-w-none rounded-[2rem] font-lato font-bold text-white cursor-pointer hover:opacity-90 scale-105">
          <a href="register.html"> Become an Advocate </a>
        </button>
      </div>

      <!-- Toggle Switch -->
      <label
        class="flex items-center cursor-pointer absolute right-[20%] md:right-[25%] xl:right-[30%] scale-75 lg:scale-90">
        <div class="relative">
          <input id="theme-toggle" type="checkbox" class="sr-only" />
          <!-- Switch Background -->
          <div class="block bg-black w-[70px] h-9 rounded-full dark:bg-blue-200 transition-all duration-700"></div>
          <div class="block bg-black w-[70px] h-9 rounded-full dark:hidden absolute top-0 left-0">
            <div class="w-full h-full rounded-full relative">
              <div class="bg-white absolute top-4 left-0 w-[3px] h-[3px] rounded-full"></div>
              <div class="bg-white absolute top-1/3 left-4 w-[1px] h-[1px] rounded-full"></div>
              <div class="bg-white absolute bottom-1/3 left-4 w-[1px] h-[1px] rounded-full"></div>
              <div class="bg-white absolute top-[12%] left-[30%] w-[1px] h-[1px] rounded-full"></div>
              <!-- <div class="bg-red-400 absolute top-[78%] left-[35%] w-[2px] h-[2px] rounded-full"></div> -->
              <!-- <div class="bg-red-400 absolute top-[34%] left-[42%] w-[1px] h-[1px] rounded-full"></div> -->
              <!-- <div class="bg-red-400 absolute top-[5%] left-[40%] w-[1px] h-[1px] rounded-full"></div> -->
              <!-- <div class="bg-red-400 absolute top-[83%] left-[25%] w-[1px] h-[1px] rounded-full"></div> -->
              <div class="bg-white absolute top-[29%] left-[20%] w-[1px] h-[1px] rounded-full"></div>
              <div class="bg-white absolute top-[8%] left-[23%] w-[1px] h-[1px] rounded-full"></div>
              <div class="bg-white absolute top-[76%] left-[37%] w-[2px] h-[2px] rounded-full"></div>
              <div class="bg-white absolute bottom-[80%] right-[45%] w-[1.5px] h-[1.5px] rounded-full"></div>
              <div class="bg-white absolute top-[80%] right-[45%] w-[1.5px] h-[1.5px] rounded-full"></div>
              <div class="bg-white absolute top-[20%] left-[40%] w-[2px] h-[2px] rounded-full"></div>
              <div class="bg-white absolute bottom-[80%] right-[45%] w-[1.5px] h-[1.5px] rounded-full"></div>
              <div class="bg-white absolute bottom-[30%] left-[35%] w-[1px] h-[1px] rounded-full"></div>
              <div class="bg-white absolute top-[80%] right-[45%] w-[1.5px] h-[1.5px] rounded-full"></div>
            </div>
          </div>
        </div>
        <!-- Switch Icon -->
        <div class="switchIcon absolute right-1 top-1 rounded-full transition-all ease-in-out h-7 w-7">
          <div id="lightIcon" class="relative">
            <img src="/eureka/images/icons/Toggle.png" alt=" ">
            <img src="/eureka/images/icons/clouds.png" alt=""
              class="absolute scale-75 -right-2 top-1/2 -translate-y-1/2 cloud-in" id="cloud">
          </div>
          <div id="darkIcon" class="bg-white w-full h-full rounded-full hidden transition-all duration-500">
            <div class="bg-dark w-full h-full rounded-full -translate-x-2 relative">
              <div class="bg-white absolute top-[29%] left-[20%] w-[1.5px] h-[1.5px] rounded-full"></div>
              <div class="bg-white absolute top-[8%] left-[23%] w-[1.5px] h-[1.5px] rounded-full"></div>
              <div class="bg-white absolute top-[76%] left-[37%] w-[2px] h-[2px] rounded-full"></div>
              <div class="bg-white absolute bottom-[80%] right-[45%] w-[1.5px] h-[1.5px] rounded-full"></div>
              <div class="bg-white absolute top-[80%] right-[45%] w-[1.5px] h-[1.5px] rounded-full"></div>
            </div>
          </div>
        </div>
        </div>
      </label>

      <!-- Mobile Nav Bar -->
      <div
        class="container absolute top-24 left-0 w-full py-10 hidden flex-col items-start justify-center gap-6 rounded-lg bg-secondary dark:bg-dark md:hidden"
        id="mobileNav">
        <ul class="flex flex-col gap-12 md:relative md:flex-row md:items-center text-black dark:text-white">
          <li class="font-sans font-bold hover:text-primary">
            <a href="/">Home</a>
          </li>

          <li class="font-sans font-bold hover:text-primary">
            <a href="./event.html">Event</a>
          </li>

          <li class="font-sans font-bold hover:text-primary">
            <a href="./contact.html">Contact Us</a>
          </li>
          <li class="font-sans font-bold hover:text-primary">
            <a href="./faq.html">FAQ</a>
          </li>
          <li class="font-sans font-bold hover:text-primary">
            <a href="./blog.html">Blog</a>
          </li>
        </ul>
        <button
          class="bg-primary mt-3 p-3 px-6 rounded-[2rem] font-lato font-bold text-white cursor-pointer hover:opacity-90 scale-105">
          <a href="register.html"> Become an Advocate </a>
        </button>
      </div>

      <div class="block md:hidden text-black dark:text-white">
        <span class="material-symbols-outlined" id="openMenu">
          &#xe5d2;
        </span>
      </div>
    </nav>
  </header>

  <div id="mini-nav-header"
    class="container flex flex-col items-start justify-between py-10 gap-10 lg:flex-row lg:gap-20 lg:items-center">
    <div
      class="relative w-full p-1 rounded-xl bg-gray-300 max-w-80 focus-within:border-primary focus-within:border-2 dark:text-dark">
      <span class="absolute left-4 top-1/2 -translate-y-1/2">
        <i class="fa-solid fa-magnifying-glass opacity-60"></i>
      </span>
      <input type="text" name="search" id="search"
        class="w-full p-1 pl-10 text-sm font-semibold outline-none bg-transparent" placeholder="Search a topic" />
    </div>
    <ul class="flex items-start justify-start w-full gap-3 overflow-x-scroll md:w-10/12 md:gap-10 md:justify-between md:items-center hide-scrollbar">
      <li class="mini-nav cursor-pointer font-bold capitalize hover:text-primary opacity-80 whitespace-nowrap">
        <a href="#tech" class="tab">Trending Now</a>
      </li>
      <li class="mini-nav cursor-pointer font-bold capitalize hover:text-primary opacity-80">
        <a href="#dev" class="tab">Technology</a>
      </li>
    </ul>
  </div>


  <div id="programContent" class="container flex flex-wrap gap-8 items-center justify-between mb-8 md:items-start">
  </div>

  <div id="tech" class="content">
    <div class="row flex">
      <div class="col-lg-3 m-5 p-5">
        <div class="card w-full max-w-[350px] space-y-4 text-[15px]">
          <div class="image-container w-full h-[240px]">
            <img src="/eureka/images/programs/man.png" alt="" class="w-full h-full object-cover" />
          </div>
          <div class="cardContent space-y-3">
            <h4 class="font-bold">The revolution Ai Training library for NodeJS</h4>
            <p class="opacity-50 text-[13px]">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Illum tempore,
              numquam unde natus quidem tenetur aliquam cum dolore ex iste.</p>
            <h6 class="font-bold text-[11px]">11 Npvember, 2023</h6>
            <a href="https://mistech.io"
              class="bg-primary rounded-[5px] p-2 font-bold text-white text-[12px] inline-flex items-center justify-between gap-x-2 hover:bg-opacity-85 readArticle">
              <span>Read article </span>
              <span class="border-2 border-white rounded-full inline-flex items-center w-4 h-4"><i
                  class="fa-solid fa-arrow-right text-[9px]"></i></span></a>
          </div>
        </div>
      </div>
      <div class="col-lg-3 m-5 p-5">
        <div class="card w-full max-w-[350px] space-y-4 text-[15px]">
          <div class="image-container w-full h-[240px]">
            <img src="/eureka/images/programs/man.png" alt="" class="w-full h-full object-cover" />
          </div>
          <div class="cardContent space-y-3">
            <h4 class="font-bold">The revolution Ai Training library for NodeJS</h4>
            <p class="opacity-50 text-[13px]">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Illum tempore,
              numquam unde natus quidem tenetur aliquam cum dolore ex iste.</p>
            <h6 class="font-bold text-[11px]">11 Npvember, 2023</h6>
            <a href="https://mistech.io"
              class="bg-primary rounded-[5px] p-2 font-bold text-white text-[12px] inline-flex items-center justify-between gap-x-2 hover:bg-opacity-85 readArticle">
              <span>Read article </span>
              <span class="border-2 border-white rounded-full inline-flex items-center w-4 h-4"><i
                  class="fa-solid fa-arrow-right text-[9px]"></i></span></a>
          </div>
        </div>
      </div>
      <div class="col-lg-3 m-5 p-5">
        <div class="card w-full max-w-[350px] space-y-4 text-[15px]">
          <div class="image-container w-full h-[240px]">
            <img src="/eureka/images/programs/man.png" alt="" class="w-full h-full object-cover" />
          </div>
          <div class="cardContent space-y-3">
            <h4 class="font-bold">The revolution Ai Training library for NodeJS</h4>
            <p class="opacity-50 text-[13px]">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Illum tempore,
              numquam unde natus quidem tenetur aliquam cum dolore ex iste.</p>
            <h6 class="font-bold text-[11px]">11 Npvember, 2023</h6>
            <a href="https://mistech.io"
              class="bg-primary rounded-[5px] p-2 font-bold text-white text-[12px] inline-flex items-center justify-between gap-x-2 hover:bg-opacity-85 readArticle">
              <span>Read article </span>
              <span class="border-2 border-white rounded-full inline-flex items-center w-4 h-4"><i
                  class="fa-solid fa-arrow-right text-[9px]"></i></span></a>
          </div>
        </div>
      </div>
      <div class="col-lg-3 m-5 p-5">
        <div class="card w-full max-w-[350px] space-y-4 text-[15px]">
          <div class="image-container w-full h-[240px]">
            <img src="/eureka/images/programs/man.png" alt="" class="w-full h-full object-cover" />
          </div>
          <div class="cardContent space-y-3">
            <h4 class="font-bold">The revolution Ai Training library for NodeJS</h4>
            <p class="opacity-50 text-[13px]">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Illum tempore,
              numquam unde natus quidem tenetur aliquam cum dolore ex iste.</p>
            <h6 class="font-bold text-[11px]">11 Npvember, 2023</h6>
            <a href="https://mistech.io"
              class="bg-primary rounded-[5px] p-2 font-bold text-white text-[12px] inline-flex items-center justify-between gap-x-2 hover:bg-opacity-85 readArticle">
              <span>Read article </span>
              <span class="border-2 border-white rounded-full inline-flex items-center w-4 h-4"><i
                  class="fa-solid fa-arrow-right text-[9px]"></i></span></a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="dev" class="content">
    <div class="row flex">
      <div class="col-lg-3 m-5 p-5">
        <div class="card w-full max-w-[350px] space-y-4 text-[15px]">
          <div class="image-container w-full h-[240px]">
            <img src="" alt="" class="w-full h-full object-cover" />
          </div>
          <div class="cardContent space-y-3">
            <h4 class="font-bold">The revolution Ai Training library for NodeJS</h4>
            <p class="opacity-50 text-[13px]">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Illum tempore,
              numquam unde natus quidem tenetur aliquam cum dolore ex iste.</p>
            <h6 class="font-bold text-[11px]">11 Npvember, 2023</h6>
            <a href="https://mistech.io"
              class="bg-primary rounded-[5px] p-2 font-bold text-white text-[12px] inline-flex items-center justify-between gap-x-2 hover:bg-opacity-85 readArticle">
              <span>Read article </span>
              <span class="border-2 border-white rounded-full inline-flex items-center w-4 h-4"><i
                  class="fa-solid fa-arrow-right text-[9px]"></i></span></a>
          </div>
        </div>
      </div>
      <div class="col-lg-3 m-5 p-5">
        <div class="card w-full max-w-[350px] space-y-4 text-[15px]">
          <div class="image-container w-full h-[240px]">
            <img src="/eureka/images/programs/man.png" alt="" class="w-full h-full object-cover" />
          </div>
          <div class="cardContent space-y-3">
            <h4 class="font-bold">The revolution Ai Training library for NodeJS</h4>
            <p class="opacity-50 text-[13px]">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Illum tempore,
              numquam unde natus quidem tenetur aliquam cum dolore ex iste.</p>
            <h6 class="font-bold text-[11px]">11 Npvember, 2023</h6>
            <a href="https://mistech.io"
              class="bg-primary rounded-[5px] p-2 font-bold text-white text-[12px] inline-flex items-center justify-between gap-x-2 hover:bg-opacity-85 readArticle">
              <span>Read article </span>
              <span class="border-2 border-white rounded-full inline-flex items-center w-4 h-4"><i
                  class="fa-solid fa-arrow-right text-[9px]"></i></span></a>
          </div>
        </div>
      </div>
      <div class="col-lg-3 m-5 p-5">
        <div class="card w-full max-w-[350px] space-y-4 text-[15px]">
          <div class="image-container w-full h-[240px]">
            <img src="/eureka/images/programs/man.png" alt="" class="w-full h-full object-cover" />
          </div>
          <div class="cardContent space-y-3">
            <h4 class="font-bold">The revolution Ai Training library for NodeJS</h4>
            <p class="opacity-50 text-[13px]">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Illum tempore,
              numquam unde natus quidem tenetur aliquam cum dolore ex iste.</p>
            <h6 class="font-bold text-[11px]">11 Npvember, 2023</h6>
            <a href="https://mistech.io"
              class="bg-primary rounded-[5px] p-2 font-bold text-white text-[12px] inline-flex items-center justify-between gap-x-2 hover:bg-opacity-85 readArticle">
              <span>Read article </span>
              <span class="border-2 border-white rounded-full inline-flex items-center w-4 h-4"><i
                  class="fa-solid fa-arrow-right text-[9px]"></i></span></a>
          </div>
        </div>
      </div>
      <div class="col-lg-3 m-5 p-5">
        <div class="card w-full max-w-[350px] space-y-4 text-[15px]">
          <div class="image-container w-full h-[240px]">
            <img src="/eureka/images/programs/man.png" alt="" class="w-full h-full object-cover" />
          </div>
          <div class="cardContent space-y-3">
            <h4 class="font-bold">The revolution Ai Training library for NodeJS</h4>
            <p class="opacity-50 text-[13px]">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Illum tempore,
              numquam unde natus quidem tenetur aliquam cum dolore ex iste.</p>
            <h6 class="font-bold text-[11px]">11 Npvember, 2023</h6>
            <a href="https://mistech.io"
              class="bg-primary rounded-[5px] p-2 font-bold text-white text-[12px] inline-flex items-center justify-between gap-x-2 hover:bg-opacity-85 readArticle">
              <span>Read article </span>
              <span class="border-2 border-white rounded-full inline-flex items-center w-4 h-4"><i
                  class="fa-solid fa-arrow-right text-[9px]"></i></span></a>
          </div>
        </div>
      </div>
    </div>
  </div>


  <script>
    document.addEventListener("DOMContentLoaded", function () {
      const tabs = document.querySelectorAll(".tab");
      const sections = document.querySelectorAll(".content");

      function showSection(id) {
        sections.forEach(section => {
          section.style.display = section.id === id ? "block" : "none";
        });

        tabs.forEach(tab => {
          tab.classList.toggle("active", tab.getAttribute("href") === `#${id}`);
        });
      }

      const currentHash = window.location.hash.substring(1);
      showSection(currentHash || "tech");

      tabs.forEach(tab => {
        tab.addEventListener("click", function (event) {
          const targetId = this.getAttribute("href").substring(1);
          showSection(targetId);
        });
      });
    });
  </script>


</body>

</html>
