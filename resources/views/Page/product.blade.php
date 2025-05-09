<!DOCTYPE html>
<html lang="en">
<head>

    @include('layouts.head')
    <title>Tenues de Match</title>

</head>
<body  style="font-family: Viga, sans-serif;">

    @include('layouts.header')

    <div class="mt-30 w-full max-w-8xl mx-auto">
        <nav class="flex mt-20 p-2 md:p-0" aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
            <li class="inline-flex items-center">
                <a href="#" class="inline-flex items-center text-sm font-medium text-gray-400 hover:text-gray-600">
                <svg class="me-2.5 h-3 w-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z" />
                </svg>
                Home
                </a>
            </li>
            <li>
                <div class="flex items-center">
                <svg class="h-5 w-5 text-gray-400 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m9 5 7 7-7 7" />
                </svg>
                <a href="#" class="ms-1 text-sm font-medium text-gray-400 hover:text-gray-600 md:ms-2">Products</a>
                </div>
            </li>
            </ol>
        </nav>
        <div class="flex mt-0 md:!mt-10 gap-x-12">
            <div class="w-1/4 hidden md:block">
               <div class="flex flex-col gap-y-2">
                    <h2 class="text-2xl text-gray-400 font-bold mb-4">
                        Catégories
                    </h2>
                    <div class="flex items-center ps-4 border border-gray-300">
                        <input id="bordered-checkbox-1" type="checkbox" value="" name="bordered-checkbox" class="w-4 h-4 text-green-600 border-gray-300 rounded-sm focus:ring-green-500 ">
                        <label for="bordered-checkbox-1" class="w-full py-4 ms-2 text-sm font-medium text-black">
                            Domicile
                        </label>
                    </div>
                    <div class="flex items-center ps-4 border border-gray-300">
                        <input id="bordered-checkbox-2" type="checkbox" value="" name="bordered-checkbox" class="w-4 h-4 text-green-600 border-gray-300 rounded-sm focus:ring-green-500 ">
                        <label for="bordered-checkbox-2" class="w-full py-4 ms-2 text-sm font-medium text-black">
                            Exterieur
                        </label>
                    </div>
                    <div class="flex items-center ps-4 border border-gray-300">
                        <input id="bordered-checkbox-3" type="checkbox" value="" name="bordered-checkbox" class="w-4 h-4 text-green-600 border-gray-300 rounded-sm focus:ring-green-500 ">
                        <label for="bordered-checkbox-3" class="w-full py-4 ms-2 text-sm font-medium text-black">
                            Third
                        </label>
                    </div>
               </div>
               <div class="flex flex-col gap-y-2 mt-4">
                    <h2 class="text-2xl text-gray-400 font-bold mb-4">Taille</h2>

                    @foreach(['XS', 'S', 'M', 'L', 'XL', 'XXL'] as $index => $taille)
                        <div class="flex items-center ps-4 border border-gray-300">
                            <input
                                id="taille-{{ $index }}"
                                type="checkbox"
                                value="{{ $taille }}"
                                name="tailles[]"
                                class="w-4 h-4 text-green-600 border-gray-300 rounded-sm focus:ring-green-500"
                            >
                            <label for="taille-{{ $index }}" class="w-full py-4 ms-2 text-sm font-medium text-black">
                                {{ $taille }}
                            </label>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="p-4 md:p-0 w-full md:w-3/4">
                <h1 class="text-2xl mb-4 text-green-700">
                    TENUES DE MATCH
                </h1>
                <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-2 mt-4 text-green-700 p-2 ">
                    <p class="text-sm md:text-xl">
                        Page 1 / 1 pour un total de 3 résultats
                    </p>
                    <div>
                        <label for="">
                            Trier par :
                        </label>
                        <select name="" id="" class="border-none text-gray-500 outline-none ring-0 focus:ring-0 focus:outline-none text-sm w-25">
                            <option value="">Prix ↑</option>
                            <option value="">Prix ↓</option>
                            <option value="">Nom A-Z</option>
                            <option value="">Nom Z-A</option>
                        </select>
                    </div>
                </div>
                <hr class="text-gray-300 my-2">
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 justify-items-center">
                    @for ($i = 0; $i < 12; $i++)
                        <a href="/Product-Details">
                            <article class="max-w-md w-80 md:w-full bg-white  shadow-lg overflow-hidden border-1 border-gray-300 text-left">
                                <div>
                                    <img class="object-cover h-80 w-full" src="{{ asset('img/Product/product3.png') }}" alt="Converse sneakers" />
                                </div>
                                <h2 class="flex flex-col gap-1 mt-4 px-4 text-gray-400">Type</h2>
                                <div class="flex flex-col gap-1 mt-2 px-4">
                                    <h2 class="text-lg font-semibold text-black-800">Converse Sneakers</h2>
                                    <span class="text-sm text-black-800">High Top (Lemon Yellow)</span>
                                    <span class="font-semibold text-green-900 my-2 text-xl">120 DH</span>
                                </div>
                            </article>
                        </a>
                            @endfor
                        </div>
                <div class="flex justify-center items-center mt-4 text-green-700 p-4 gap-x-4">
                    <button type="button" class="hover:cursor-pointer">
                        <
                    </button>
                    <p>Page 1 sur 12</p>
                    <button type="button" class="hover:cursor-pointer">
                        >
                    </button>
                </div>
            </div>
        </div>
    </div>

    @include('layouts.footer')

</body>
</html>
