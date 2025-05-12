<!DOCTYPE html>
<html lang="en">
<head>

    @include('layouts.head')
    <title>Joo-Store</title>

</head>
<body style="font-family: Viga, sans-serif;">

    @include('layouts.header')

    <div class="flex justify-center content-center mt-25">
        <swiper-container class="mySwiper w-full 2xl:w-[95%] h-90 md:h-160 2xl:h-180" loop="true" scrollbar-hide="true"   centered-slides="false" autoplay-delay="2000" autoplay-disable-on-interaction="false">
            <swiper-slide>
                <img src="{{asset("img/slider/slide1.jpg")}}" alt="">
            </swiper-slide>
            <swiper-slide>
                <img src="{{asset("img/slider/slide2.jpg")}}" alt="">
            </swiper-slide>
            <swiper-slide>
                <img src="{{asset("img/slider/slide3.png")}}" alt="">
            </swiper-slide>
            <swiper-slide>
                <img src="{{asset("img/slider/slide4.png")}}" alt="">
            </swiper-slide>
          </swiper-container>
    </div>
    <div class="BestSelles mt-20">
        <div class="flex flex-col justify-center text-center">
            <h2 class="text-3xl text-green-900">
                Best Sellers
            </h2>
            <span class="mt-2 text-gray-500">
                Maillots, accessoires, passion, exclusifs, dynamiques
            </span>
        </div>
        <div class="my-10 px-4 w-[95%] 2xl:w-[80%] mx-auto">
            <section id="splide-best-sellers" class="splide">
                <div class="splide__track">
                  <ul class="splide__list">
                    <li class="splide__slide flex justify-center">
                      <a href="/Product-Details" class="max-w-sm w-75">
                        <article class="bg-white shadow-lg overflow-hidden border border-gray-300 text-left">
                          <div>
                            <img class="object-cover !h-75 w-full" src="{{ asset('img/Product/product1.jpg') }}" alt="Converse sneakers" />
                          </div>
                          <h2 class="flex flex-col gap-1 mt-4 px-4 text-gray-400">Type</h2>
                          <div class="flex flex-col gap-1 mt-4 px-4">
                            <h2 class="text-lg font-semibold text-black-800">Converse Sneakers</h2>
                            <span class="font-normal text-black-800">High Top (Lemon Yellow)</span>
                            <span class="font-semibold text-black-800 my-2 text-green-900">000 DH</span>
                          </div>
                        </article>
                      </a>
                    </li>
                    <li class="splide__slide flex justify-center">
                      <a href="/Product-Details" class="max-w-sm w-75">
                        <article class="bg-white shadow-lg overflow-hidden border border-gray-300 text-left">
                          <div>
                            <img class="object-cover !h-75 w-full" src="{{ asset('img/Product/product2.png') }}" alt="Converse sneakers" />
                          </div>
                          <h2 class="flex flex-col gap-1 mt-4 px-4 text-gray-400">Type</h2>
                          <div class="flex flex-col gap-1 mt-4 px-4">
                            <h2 class="text-lg font-semibold text-black-800">Converse Sneakers</h2>
                            <span class="font-normal text-black-800">High Top (Lemon Yellow)</span>
                            <span class="font-semibold text-black-800 my-2 text-green-900">000 DH</span>
                          </div>
                        </article>
                      </a>
                    </li>
                    <li class="splide__slide flex justify-center">
                      <a href="/Product-Details" class="max-w-sm w-75">
                        <article class="bg-white shadow-lg overflow-hidden border border-gray-300 text-left">
                          <div>
                            <img class="object-cover !h-75 w-full" src="{{ asset('img/Product/product3.png') }}" alt="Converse sneakers" />
                          </div>
                          <h2 class="flex flex-col gap-1 mt-4 px-4 text-gray-400">Type</h2>
                          <div class="flex flex-col gap-1 mt-4 px-4">
                            <h2 class="text-lg font-semibold text-black-800">Converse Sneakers</h2>
                            <span class="font-normal text-black-800">High Top (Lemon Yellow)</span>
                            <span class="font-semibold text-black-800 my-2 text-green-900">000 DH</span>
                          </div>
                        </article>
                      </a>
                    </li>
                    <li class="splide__slide flex justify-center">
                      <a href="/Product-Details" class="max-w-sm w-75">
                        <article class="bg-white shadow-lg overflow-hidden border border-gray-300 text-left">
                          <div>
                            <img class="object-cover !h-75 w-full" src="{{ asset('img/Product/product4.png') }}" alt="Converse sneakers" />
                          </div>
                          <h2 class="flex flex-col gap-1 mt-4 px-4 text-gray-400">Type</h2>
                          <div class="flex flex-col gap-1 mt-4 px-4">
                            <h2 class="text-lg font-semibold text-black-800">Converse Sneakers</h2>
                            <span class="font-normal text-black-800">High Top (Lemon Yellow)</span>
                            <span class="font-semibold text-black-800 my-2 text-green-900">000 DH</span>
                          </div>
                        </article>
                      </a>
                    </li>
                    <li class="splide__slide flex justify-center">
                      <a href="/Product-Details" class="max-w-sm w-75">
                        <article class="bg-white shadow-lg overflow-hidden border border-gray-300 text-left">
                          <div>
                            <img class="object-cover !h-75 w-full" src="{{ asset('img/Product/product5.png') }}" alt="Converse sneakers" />
                          </div>
                          <h2 class="flex flex-col gap-1 mt-4 px-4 text-gray-400">Type</h2>
                          <div class="flex flex-col gap-1 mt-4 px-4">
                            <h2 class="text-lg font-semibold text-black-800">Converse Sneakers</h2>
                            <span class="font-normal text-black-800">High Top (Lemon Yellow)</span>
                            <span class="font-semibold text-black-800 my-2 text-green-900">000 DH</span>
                          </div>
                        </article>
                      </a>
                    </li>
                    <li class="splide__slide flex justify-center">
                      <a href="/Product-Details" class="max-w-sm w-75">
                        <article class="bg-white shadow-lg overflow-hidden border border-gray-300 text-left">
                          <div>
                            <img class="object-cover !h-75 w-full" src="{{ asset('img/Product/product6.png') }}" alt="Converse sneakers" />
                          </div>
                          <h2 class="flex flex-col gap-1 mt-4 px-4 text-gray-400">Type</h2>
                          <div class="flex flex-col gap-1 mt-4 px-4">
                            <h2 class="text-lg font-semibold text-black-800">Converse Sneakers</h2>
                            <span class="font-normal text-black-800">High Top (Lemon Yellow)</span>
                            <span class="font-semibold text-black-800 my-2 text-green-900">000 DH</span>
                          </div>
                        </article>
                      </a>
                    </li>
                    <li class="splide__slide flex justify-center">
                      <a href="/Product-Details" class="max-w-sm w-75">
                        <article class="bg-white shadow-lg overflow-hidden border border-gray-300 text-left">
                          <div>
                            <img class="object-cover !h-75 w-full" src="{{ asset('img/Product/product7.png') }}" alt="Converse sneakers" />
                          </div>
                          <h2 class="flex flex-col gap-1 mt-4 px-4 text-gray-400">Type</h2>
                          <div class="flex flex-col gap-1 mt-4 px-4">
                            <h2 class="text-lg font-semibold text-black-800">Converse Sneakers</h2>
                            <span class="font-normal text-black-800">High Top (Lemon Yellow)</span>
                            <span class="font-semibold text-black-800 my-2 text-green-900">000 DH</span>
                          </div>
                        </article>
                      </a>
                    </li>
                  </ul>
                </div>
              </section>

          </div>

    </div>




    <div>
        <img src="{{asset("img/banner/banner1.png")}}" class="w-full h-35 md:h-120" alt="">
    </div>





    <div class="flex flex-col justify-center text-center mt-10">
        <h2 class="text-3xl text-green-900">
            Exploration Exclusive
        </h2>
        <span class="mt-2 text-gray-500">
            Les dernières tendances du Olympique
        </span>
    </div>
    <div class="Product hidden md:block mt-10">
        <div class="flex  justify-center">
            <div class="grid gap-3 mt-10 grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 2xl:grid-cols-6">
                @for ($i = 0; $i < 12; $i++)
                  <a href="/Product-Details" class="max-w-sm w-75">
                    <article class="bg-white shadow-lg overflow-hidden border-1 border-gray-300 text-left">
                      <div>
                        <img class="object-cover !h-75 w-full" src="{{ asset('img/Product/product3.png') }}" alt="Converse sneakers" />
                      </div>
                      <h2 class="flex flex-col gap-1 mt-4 px-4 text-gray-400">Type</h2>
                      <div class="flex flex-col gap-1 mt-4 px-4">
                        <h2 class="text-lg font-semibold text-black-800">Converse Sneakers</h2>
                        <span class="font-normal text-black-800">High Top (Lemon Yellow)</span>
                        <span class="font-semibold text-black-800 my-2 text-green-900">120 DH</span>
                      </div>
                    </article>
                  </a>
              @endfor
            </div>
        </div>
    </div>

    <div id="second-slider" class="splide mt-10 md:hidden">
        <div class="splide__track">
          <ul class="splide__list">
            @for ($i = 0; $i < 4; $i++)
              <li class="splide__slide flex justify-center">
                <a href="/Product-Details" class="max-w-sm w-75">
                  <article class="bg-white shadow-lg overflow-hidden border-1 border-gray-300 text-left">
                    <div>
                      <img class="object-cover !h-75 w-full" src="{{ asset('img/Product/product3.png') }}" alt="Converse sneakers" />
                    </div>
                    <h2 class="flex flex-col gap-1 mt-4 px-4 text-gray-400">Type</h2>
                    <div class="flex flex-col gap-1 mt-4 px-4">
                      <h2 class="text-lg font-semibold text-black-800">Converse Sneakers</h2>
                      <span class="font-normal text-black-800">High Top (Lemon Yellow)</span>
                      <span class="font-semibold text-black-800 my-2 text-green-900">120 DH</span>
                    </div>
                  </article>
                </a>
              </li>
            @endfor
          </ul>
        </div>
      </div>

      <div class="m-10 flex justify-center">
        <a href="/Tenues-De-Match">
          <button class="flex items-center rounded-md border border-green-800 py-3 px-5 text-center text-sm transition-all shadow-sm hover:shadow-lg text-green-800 hover:text-white hover:bg-green-900 hover:border-slate-800 focus:text-white focus:bg-slate-800 focus:border-slate-800 active:border-slate-800 active:text-white active:bg-slate-800 disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none" type="button">
            Voir tous les produits >
          </button>
        </a>
      </div>



      <div class="banner flex flex-col gap-y-4 md:flex-row md:gap-3">
        <div class="relative w-full md:w-1/3">
          <img src="{{asset('img/banner/banner2.png')}}" class="h-100 md:h-130  w-full object-cover" alt="">

          <button class="absolute top-4 right-4 flex items-center  bg-green-800 py-2 px-4 text-sm transition-all shadow-sm hover:shadow-lg text-white hover:text-white hover:bg-green-900 hover:border-slate-800">
            Decouvrir  >
          </button>
        </div>

        <div class="relative w-full md:w-1/3">
          <img src="{{asset('img/banner/banner3.png')}}" class="h-100 md:h-130 w-full object-cover" alt="">

          <button class="absolute top-4 right-4 flex items-center  bg-green-800 py-2 px-4 text-sm transition-all shadow-sm hover:shadow-lg text-white hover:text-white hover:bg-green-900 hover:border-slate-800">
            Decouvrir  >
          </button>
        </div>

        <div class="relative w-full md:w-1/3">
          <img src="{{asset('img/banner/banner4.png')}}" class="h-100 md:h-130 w-full object-cover" alt="">

          <button class="absolute top-4 right-4 flex items-center  bg-green-800 py-2 px-4 text-sm transition-all shadow-sm hover:shadow-lg text-white hover:text-white hover:bg-green-900 hover:border-slate-800">
            Decouvrir  >
          </button>
        </div>
      </div>

      @include('layouts.footer')

</body>
</html>
