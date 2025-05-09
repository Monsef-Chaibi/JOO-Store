<!DOCTYPE html>
<html lang="en">
<head>
    <title>About-JOO</title>
    @include('layouts.head')
</head>
<body  style="font-family: Viga, sans-serif;">
    @include('layouts.header')

    <div class="bg-cover bg-center h-screen" style="background-image: url('{{ asset('img/banner/banner5.jpg') }}');" >
        <div class="pt-25 flex flex-col justify-center items-center text-black">
            <h1 class="text-xl mt-70 bg-white opacity-75 p-2">
                Welcome To Our Website
            </h1>
            <h1 class="mt-5 text-2xl md:!text-4xl bg-white opacity-75 p-2">
                Jeunesse Olympique Ouazzane
            </h1>
        </div>
        <div class="flex flex-col justify-center items-center text-white">
            <h1 class="text-lg md:text-xl mt-20 bg-black opacity-75 p-2">
                Amateur Division Two – North-East Group
            </h1>
            <h1 class="mt-5 text-md bg-black opacity-75 p-2">
                🏟️ Stade Municipal d´Ouezzane
            </h1>
        </div>
        <a href="#next-section" class="absolute bottom-4 right-4">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="w-10 animate-bounce">
              <path fill="#000000" d="M246.6 470.6c-12.5 12.5-32.8 12.5-45.3 0l-160-160c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L224 402.7 361.4 265.4c12.5-12.5 32.8-12.5 45.3 0s12.5 32.8 0 45.3l-160 160zm160-352l-160 160c-12.5 12.5-32.8 12.5-45.3 0l-160-160c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L224 210.7 361.4 73.4c12.5-12.5 32.8-12.5 45.3 0s12.5 32.8 0 45.3z"/>
            </svg>
        </a>
    </div>
    <div id="next-section" class="flex flex-col justify-center items-center mt-20 space-y-5">
        <h2 class="text-2xl text-green-700 font-bold mb-4">
            DERNIER MATCH
        </h2>
        <p class="text-sm ">
            Amateur Division Two
        </p>
        <p class="text-4xl">
          JOO <span class="text-green-700 mx-5">1 - 1</span> CRA
        </p>
    </div>
    <div class="mt-20 flex flex-col justify-center items-center space-y-5 px-4">
        <h2 class="text-2xl text-green-700 font-bold mb-4 text-center">
          Prochaine Match
        </h2>
        <div class="cards flex flex-wrap justify-center gap-4">
          <div class="card red">
            <p class="tip">Hover Me</p>
            <p class="second-text">Lorem Ipsum</p>
          </div>
          <div class="card blue">
            <p class="tip">Hover Me</p>
            <p class="second-text">Lorem Ipsum</p>
          </div>
          <div class="card green">
            <p class="tip">Hover Me</p>
            <p class="second-text">Lorem Ipsum</p>
          </div>
        </div>
      </div>

    <div class="flex flex-col justify-center items-center mt-20 space-y-5">
        <h2 class="text-2xl text-green-700 font-bold mb-4">
            Classement
        </h2>
        <div class="p-6 w-full flex flex-col justify-center items-center">
            <div class="bg-white shadow-lg overflow-hidden ">
              <div class="overflow-x-auto">
                <table class="w-full md:!w-[1000px]  max-w-6xl text-sm text-left">
                    <thead class="bg-gray-100 text-gray-700 uppercase text-xs">
                      <tr>
                        <th class="px-2 py-3 ">#</th>
                        <th class="px-2 py-3 ">Club</th>
                        <th class="px-2 py-3">MP</th>
                        <th class="px-2 py-3">W</th>
                        <th class="px-2 py-3">D</th>
                        <th class="px-2 py-3">L</th>
                        <th class="px-2 py-3">Pts</th>
                      </tr>
                    </thead>
                    <tbody class="text-gray-800">
                      <tr class="bg-yellow-100 font-bold">
                        <td class="px-2 py-4">1</td>
                        <td class="px-2 py-4 ">وداد شباب طنجة WJT</td>
                        <td class="px-2 py-4">27</td>
                        <td class="px-2 py-4">14</td>
                        <td class="px-2 py-4">7</td>
                        <td class="px-2 py-4">6</td>
                        <td class="px-2 py-4">49</td>
                      </tr>
                      <tr class="hover:bg-gray-50">
                        <td class="px-2 py-4 ">2</td>
                        <td class="px-2 py-4 ">شباب الريف الحسيمي CRA</td>
                        <td class="px-2 py-4">27</td>
                        <td class="px-2 py-4">11</td>
                        <td class="px-2 py-4">14</td>
                        <td class="px-2 py-4">2</td>
                        <td class="px-2 py-4">47</td>
                      </tr>
                      <tr class="hover:bg-gray-50">
                        <td class="px-2 py-4">3</td>
                        <td class="px-2 py-4">نادي نجم ميضار CNM</td>
                        <td class="px-2 py-4">27</td>
                        <td class="px-2 py-4">13</td>
                        <td class="px-2 py-4">7</td>
                        <td class="px-2 py-4">7</td>
                        <td class="px-2 py-4">46</td>
                      </tr>
                      <tr class="hover:bg-gray-50">
                        <td class="px-2 py-4">4</td>
                        <td class="px-2 py-4">شباب أولمبيك وزان JOO</td>
                        <td class="px-2 py-4">27</td>
                        <td class="px-2 py-4">11</td>
                        <td class="px-2 py-4">11</td>
                        <td class="px-2 py-4">5</td>
                        <td class="px-2 py-4">44</td>
                      </tr>
                    </tbody>
                  </table>

              </div>
            </div>
          </div>
    </div>

    <div>
        <h2 class="uppercase text-center text-2xl text-green-700 font-bold mb-4 mt-20">
            jeunesse olympique ouazzane
        </h2>
        <p class="text-left text-lg text-gray-700 max-w-6xl mx-auto px-4 my-10">
            La Jeunesse Olympique Ouezzane (JOO), également connue sous le nom d'Olympique Ouezzane, est un club sportif marocain basé dans la ville de Ouezzane. Fondé en 1936, il possède une riche histoire dans le paysage sportif national. Le club évolue actuellement dans la division GNFA 1 Nord, qui correspond au troisième niveau du championnat marocain de football . Ses matchs à domicile se déroulent au Stade Municipal d'Ouezzane, qui peut accueillir jusqu'à 5 000 spectateurs.
            <br><br>
            En plus du football, la JOO dispose d'une section de basketball active, qui a remporté la Coupe du Maroc féminine en 2022 et 2023 . Le club est reconnu pour son engagement dans le développement du sport local et la promotion des jeunes talents de la région.
        </p>
    </div>

    @include('layouts.footer')
</body>
</html>
