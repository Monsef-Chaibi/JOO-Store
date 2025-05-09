<header class="fixed top-0 w-full flex shadow-[0px_0px_16px_rgba(17,_17,_26,_0.1)] py-2 px-2 sm:px-6 bg-white min-h-[70px] tracking-wide z-50">
    <div class="flex flex-wrap items-center justify-between gap-4 w-full max-w-screen-xl mx-auto">
      <a href="/" class="max-sm:hidden"><img src="{{asset("img/logo/joo_logo.png")}}" alt="logo" class="w-35" />
      </a>
      <a href="/" class="block sm:hidden ml-2"><img src="{{asset("img/logo/joo_logo.png")}}" alt="logo" class="w-30" />
      </a>

      <div id="collapseMenu"
      class="max-lg:transition-transform max-lg:duration-300 max-lg:ease-in-out max-lg:transform max-lg:-translate-x-full lg:!block max-lg:fixed max-lg:bg-white max-lg:w-1/2 max-lg:min-w-[300px] max-lg:top-0 max-lg:left-0 max-lg:p-6 max-lg:h-full max-lg:shadow-md max-lg:overflow-auto z-50">
        <button id="toggleClose" class="lg:hidden fixed top-2 right-4 z-[100] rounded-full bg-white w-9 h-9 flex items-center justify-center border">
          <svg xmlns="http://www.w3.org/2000/svg" class="w-3.5 h-3.5 fill-black" viewBox="0 0 320.591 320.591">
            <path
              d="M30.391 318.583a30.37 30.37 0 0 1-21.56-7.288c-11.774-11.844-11.774-30.973 0-42.817L266.643 10.665c12.246-11.459 31.462-10.822 42.921 1.424 10.362 11.074 10.966 28.095 1.414 39.875L51.647 311.295a30.366 30.366 0 0 1-21.256 7.288z"
              data-original="#000000"></path>
            <path
              d="M287.9 318.583a30.37 30.37 0 0 1-21.257-8.806L8.83 51.963C-2.078 39.225-.595 20.055 12.143 9.146c11.369-9.736 28.136-9.736 39.504 0l259.331 257.813c12.243 11.462 12.876 30.679 1.414 42.922-.456.487-.927.958-1.414 1.414a30.368 30.368 0 0 1-23.078 7.288z"
              data-original="#000000"></path>
          </svg>
        </button>

        <ul class="lg:flex gap-x-5 max-lg:space-y-3 max-lg:fixed max-lg:bg-white max-lg:w-1/2 max-lg:min-w-[300px] max-lg:top-0 max-lg:left-0 max-lg:p-6 max-lg:h-full max-lg:shadow-md max-lg:overflow-auto z-50">
          <!-- <li class="mb-6 block sm:hidden">
            <a href="javascript:void(0)"><img src="{{asset("img/logo/joo_logo.png")}}" alt="logo" class="w-25" /></a>
          </li> -->
          <li class="max-lg:border-b max-lg:py-3 px-3 mt-10 sm:mt-0">
          <li class="max-lg:border-b max-lg:py-3 px-3 mt-10 sm:mt-0">
            <a href='/' class="hover:text-green-700 text-green-900 font-medium block text-base {{ request()->is('/') ? 'active' : '' }}">Accueil</a>
          </li>
          <li class="max-lg:border-b max-lg:py-3 px-3"><a href='/Tenues-De-Match'
            class="hover:text-green-700 text-green-900 font-medium block text-base {{ request()->is('Tenues-De-Match') ? 'active' : '' }}">Tenues de Match</a>
          </li>
          <li class="max-lg:border-b max-lg:py-3 px-3"><a href='/Mode '
            class="hover:text-green-700 text-green-900 font-medium block text-base {{ request()->is('Mode ') ? 'active' : '' }}">Mode</a>
          </li>
          <li class="max-lg:border-b max-lg:py-3 px-3"><a href='/about'
            class="hover:text-green-700 text-green-900 font-medium block text-base {{ request()->is('about') ? 'active' : '' }}">About</a>
          </li>
        </ul>
      </div>

      <div class="flex items-center max-lg:ml-auto space-x-1">
        <button type="button" class="px-2.5 py-2.5 rounded-full text-[#0E4429] text-[15px] font-medium flex items-center justify-center gap-2">
            <i class="fa-solid fa-user fa-lg"></i>
        </button>
        <button type="button" class=" px-2.5 py-2.5 rounded-full text-[#0E4429] text-[15px] font-medium flex items-center justify-center gap-2">
            <i class="fa-solid fa-cart-shopping fa-lg"></i>
        </button>

        <button id="toggleOpen" class="lg:hidden">
          <svg class="w-7 h-7" fill="#000" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd"
              d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
              clip-rule="evenodd"></path>
          </svg>
        </button>
      </div>
    </div>
</header>
