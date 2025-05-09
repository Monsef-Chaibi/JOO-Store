<!DOCTYPE html>
<html lang="en">
<head>
    <title>
        Product Details
    </title>
    @include('layouts.head')
    <style>
        .nav-for-slider .swiper-slide {
            height: auto;
            width: auto;
            cursor: pointer;

        }
        .swiper-wrapper{
            height: auto;
        }
        .nav-for-slider .swiper-slide img{
            border:2px solid transparent;
            border-radius: 10px;

        }
        .nav-for-slider .swiper-slide-thumb-active img{

            border-color: rgb(79 70 229 );
        }
    </style>
</head>
<body>

    @include('layouts.header')

 <section class="py-24">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2">
                <div class="slider-box w-full h-full max-lg:mx-auto mx-0">
                    <div class="swiper main-slide-carousel swiper-container relative mb-6">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="block">
                                    <img src="{{ asset('img/Product/product3.png') }}"
                                        alt="Summer Travel Bag image" class="max-lg:mx-auto rounded-2xl object-cover">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="block">
                                    <img src="{{ asset('img/Product/product3.png') }}"
                                        alt="Summer Travel Bag image" class="max-lg:mx-auto rounded-2xl object-cover">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="block">
                                    <img src="{{ asset('img/Product/product3.png') }}"
                                        alt="Summer Travel Bag image" class="max-lg:mx-auto rounded-2xl object-cover">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="block">
                                    <img src="{{ asset('img/Product/product3.png') }}"
                                        alt="Summer Travel Bag image" class="max-lg:mx-auto rounded-2xl object-cover">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="block">
                                    <img src="{{ asset('img/Product/product3.png') }}"
                                        alt="Summer Travel Bag image" class="max-lg:mx-auto rounded-2xl object-cover">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="nav-for-slider ">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide thumbs-slide">
                                <img src="{{ asset('img/Product/product3.png') }}"
                                    alt="Summer Travel Bag image"
                                    class="cursor-pointer rounded-xl transition-all duration-500 object-cover">
                            </div>
                            <div class="swiper-slide thumbs-slide">
                                <img src="{{ asset('img/Product/product3.png') }}"
                                    alt="Summer Travel Bag image"
                                    class="cursor-pointer rounded-xl transition-all duration-500 border hover:border-indigo-600 object-cover">
                            </div>
                            <div class="swiper-slide thumbs-slide">
                                <img src="{{ asset('img/Product/product3.png') }}"
                                    alt="Summer Travel Bag image"
                                    class="cursor-pointer rounded-xl transition-all duration-500 border hover:border-indigo-600 object-cover">
                            </div>
                            <div class="swiper-slide thumbs-slide">
                                <img src="{{ asset('img/Product/product3.png') }}"
                                    alt="Summer Travel Bag image"
                                    class="cursor-pointer rounded-xl transition-all duration-500 border hover:border-indigo-600 object-cover">
                            </div>
                            <div class="swiper-slide thumbs-slide">
                                <img src="{{ asset('img/Product/product3.png') }}"
                                    alt="Summer Travel Bag image"
                                    class="cursor-pointer rounded-xl transition-all duration-500 border hover:border-indigo-600 object-cover">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex justify-center items-center">
                    <div class="pro-detail w-full max-lg:max-w-[608px] lg:pl-8 xl:pl-16 max-lg:mx-auto max-lg:mt-8">
                        <div class="flex items-center justify-between gap-6">
                            <div class="text">
                                <h2 class="font-manrope font-bold text-3xl leading-10 text-black">
                                    Yellow Summer Travel Bag
                                </h2>
                            </div>
                        </div>
                        <div class="flex justify-between mt-4">
                            <p class="text-gray-500 text-sm font-medium ml-2">
                                Description Description Description
                            </p>
                            <p class="text-green-700 text-2xl font-medium ml-2">
                                199 DH
                            </p>
                        </div>
                        <p class="font-medium text-lg text-gray-900 mb-2 mt-2">Size</p>
                        <div class="grid grid-cols-2 min-[400px]:grid-cols-4 gap-3 mb-3 min-[400px]:mb-8">
                            <button
                                class="border border-gray-200 whitespace-nowrap text-gray-900 text-sm leading-6 py-2.5 rounded-full px-5 text-center w-full font-semibold shadow-sm shadow-transparent transition-all duration-300 hover:bg-gray-50 hover:shadow-gray-300">
                                S
                                </button>
                            <button
                                class="border border-gray-200 whitespace-nowrap text-gray-900 text-sm leading-6 py-2.5 rounded-full px-5 text-center w-full font-semibold shadow-sm shadow-transparent transition-all duration-300 hover:bg-gray-50 hover:shadow-gray-300">
                                M
                            </button>
                            <button
                                class="border border-gray-200 whitespace-nowrap text-gray-900 text-sm leading-6 py-2.5 rounded-full px-5 text-center w-full font-semibold shadow-sm shadow-transparent transition-all duration-300 hover:bg-gray-50 hover:shadow-gray-300">
                                L
                            </button>
                            <button
                                class="border border-gray-200 whitespace-nowrap text-gray-900 text-sm leading-6 py-2.5 rounded-full px-5 text-center w-full font-semibold shadow-sm shadow-transparent transition-all duration-300 hover:bg-gray-50 hover:shadow-gray-300">
                                XL
                            </button>
                        </div>
                        <p class="font-medium text-lg text-gray-900 mb-2 !mt-7">QTE</p>
                        <div class="grid grid-cols-2 min-[400px]:grid-cols-4 gap-3 mb-3 min-[400px]:mb-8">
                            <div class=" flex items-center justify-center border border-gray-400 rounded-full">
                                <button
                                    class="group py-[14px] px-3 w-full border-r border-gray-400 rounded-l-full h-full flex items-center justify-center bg-white shadow-sm shadow-transparent transition-all duration-300 hover:bg-gray-50 hover:shadow-gray-300">
                                    <svg class="stroke-black group-hover:stroke-black" width="22" height="22"
                                        viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M16.5 11H5.5" stroke="" stroke-width="1.6" stroke-linecap="round" />
                                        <path d="M16.5 11H5.5" stroke="" stroke-opacity="0.2" stroke-width="1.6"
                                            stroke-linecap="round" />
                                        <path d="M16.5 11H5.5" stroke="" stroke-opacity="0.2" stroke-width="1.6"
                                            stroke-linecap="round" />
                                    </svg>
                                </button>
                                <input type="text"
                                    class="font-semibold text-gray-900 text-lg py-3 px-2 w-full min-[400px]:min-w-[75px] border-none h-full bg-transparent placeholder:text-gray-900 text-center hover:text-indigo-600 outline-0 hover:placeholder:text-indigo-600"
                                    placeholder="1">
                                <button
                                    class="group py-[14px] px-3 w-full border-l border-gray-400 rounded-r-full h-full flex items-center justify-center bg-white shadow-sm shadow-transparent transition-all duration-300 hover:bg-gray-50 hover:shadow-gray-300">
                                    <svg class="stroke-black group-hover:stroke-black" width="22" height="22"
                                        viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M11 5.5V16.5M16.5 11H5.5" stroke="#9CA3AF" stroke-width="1.6"
                                            stroke-linecap="round" />
                                        <path d="M11 5.5V16.5M16.5 11H5.5" stroke="black" stroke-opacity="0.2"
                                            stroke-width="1.6" stroke-linecap="round" />
                                        <path d="M11 5.5V16.5M16.5 11H5.5" stroke="black" stroke-opacity="0.2"
                                            stroke-width="1.6" stroke-linecap="round" />
                                    </svg>
                                </button>
                            </div>
                            <button
                                class="group py-3 px-5 rounded-full bg-green-50 text-green-600 font-semibold text-lg w-full flex items-center justify-center gap-2 shadow-sm shadow-transparent transition-all duration-500 hover:shadow-green-300 hover:bg-green-100">
                                <svg class="stroke-green-600 transition-all duration-500 group-hover:stroke-green-600"
                                    width="22" height="22" viewBox="0 0 22 22" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M10.7394 17.875C10.7394 18.6344 10.1062 19.25 9.32511 19.25C8.54402 19.25 7.91083 18.6344 7.91083 17.875M16.3965 17.875C16.3965 18.6344 15.7633 19.25 14.9823 19.25C14.2012 19.25 13.568 18.6344 13.568 17.875M4.1394 5.5L5.46568 12.5908C5.73339 14.0221 5.86724 14.7377 6.37649 15.1605C6.88573 15.5833 7.61377 15.5833 9.06984 15.5833H15.2379C16.6941 15.5833 17.4222 15.5833 17.9314 15.1605C18.4407 14.7376 18.5745 14.0219 18.8421 12.5906L19.3564 9.84059C19.7324 7.82973 19.9203 6.8243 19.3705 6.16215C18.8207 5.5 17.7979 5.5 15.7522 5.5H4.1394ZM4.1394 5.5L3.66797 2.75"
                                        stroke="" stroke-width="1.6" stroke-linecap="round" />
                                </svg>
                                Add to cart</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="p-4 max-w-7xl mx-auto">
        <h2 class="text-2xl font-bold text-gray-800 mb-2">Tenue Officielle de Match – Team Joo</h2>
        <hr class="border-t-2 border-gray-300 mb-4">
        <p class="text-gray-700 leading-relaxed">
            Affiche ta puissance avec le style unique de la <span class="font-semibold text-green-700">Team Joo</span> !<br><br>
            Cette tenue de match allie <span class="font-medium text-gray-800">performance</span>, <span class="font-medium text-gray-800">confort</span> et <span class="font-medium text-gray-800">design moderne</span> :
            <ul class="list-disc list-inside mt-3 space-y-1 text-gray-700">
                <li><span class="font-semibold text-black">🖤 Maillot noir intense</span> avec détails rouges éclatants – symbole de force et d’agressivité.</li>
                <li><span class="font-semibold text-black">💨 Tissu technique</span> respirant, idéal pour l’effort intense.</li>
                <li><span class="font-semibold text-black">🛡️ Coupe athlétique</span> pour une liberté totale de mouvement.</li>
                <li><span class="font-semibold text-black">🧢 Badge brodé</span> "Team Joo" – fierté et appartenance.</li>
            </ul>
            <br>
            <span class="text-green-700 font-bold">Prépare-toi à dominer. Team Joo ne joue pas… elle écrase.</span>
        </p>
    </div>


    <script>
        var swiper_thumbs = new Swiper(".nav-for-slider", {
        loop: true,
        spaceBetween: 30,
        slidesPerView: 5,
        });
        var swiper = new Swiper(".main-slide-carousel", {
        slidesPerView: 1,
        thumbs: {
            swiper: swiper_thumbs,
        },
        });
    </script>

    @include('layouts.footer')

</body>
</html>
