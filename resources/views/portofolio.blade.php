<x-main-layout>
    <x-slot:title>Portofolio</x-slot:title>

    <section id="portofolio" class="py-16 lg:px-20 md:px-10 sm:px-5 bg-gray-100 dark:bg-gray-900">
        <div class="container mx-auto px-4">
            <div class="mb-12 text-center" font-Hammersmith-One>
                <h2 class="text-5xl font-bold text-gray-800 dark:text-gray-100 mb-4">Portofolio Kami</h2>
                <p class="text-xl text-gray-600 dark:text-gray-400">
                    Jelajahi proyek-proyek terbaru kami yang menampilkan keahlian dan semangat kami dalam menciptakan solusi perangkat lunak yang luar biasa.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach ($portofolio_list as $index => $p)

                <div class="bg-white dark:bg-gray-700 rounded-lg shadow-md overflow-hidden hover:shadow-lg transition duration-300">
                    <img src="{{$p['img']}}" alt="Proyek {{$index}}" class="w-full h-48 object-cover object-top">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-gray-800 dark:text-gray-100 mb-2">{{$p['judul']}}</h3>
                        <p class="text-gray-600 dark:text-gray-400 text-sm mb-4">
                            {{$p['deskripsi']}}
                        </p>
                        <div class="flex items-center justify-between">
                            <span class="text-gray-500 dark:text-gray-300 text-xs">{{$p['tag']}}</span>
                            <a href="{{$p['url']}}" class="text-indigo-600 dark:text-indigo-400 hover:underline focus:outline-none focus:ring-2 focus:ring-indigo-500">Lihat Detail</a>
                        </div>
                    </div>
                </div>

                @endforeach
            </div>

            <div class="mt-12 text-center">
                <p class="text-lg text-gray-600 dark:text-gray-400 mb-4">
                    Siap mendiskusikan proyek Anda?
                </p>
                <a href="#" class="inline-block bg-indigo-600 dark:bg-indigo-500 text-white font-semibold py-3 px-8 rounded-full hover:bg-indigo-700 dark:hover:bg-indigo-600 transition duration-300">
                    Hubungi Kami
                </a>
            </div>
        </div>
    </section>

</x-main-layout>