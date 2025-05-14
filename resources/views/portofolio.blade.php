<x-main-layout>
    <x-slot:title>Portofolio</x-slot:title>

    <div class="flex flex-col">
        <!-- Hero Section -->
        <section class="w-screen h-screen flex flex-col justify-center items-center space-y-15 bg-cover font-Montserrat" style="background-image: url({{asset('/img/portofolio/hero-background.png')}});">
            <div class="max-w-165 flex flex-col items-center text-center mt-20">
                <span class="text-white text-6xl md:text-[110px] font-extrabold">Portofolio</span>
                <span class="text-white text-xl/6 md:text-2xl/7 font-medium">Setiap karya dan proyek adalah hasil kolaborasi, eksplorasi ide, dan dedikasi untuk terus berkembang</span>
            </div>
            <a class="text-lg font-bold flex gap-2 items-center" href="/layanan">
                <div class="h-12 w-44 text-xl border rounded-full bg-white flex justify-center items-center">JELAJAHI</div>
                <div class="p-2 rounded-full bg-white w-fit">
                    <x-heroicon-s-arrow-up class="w-6 h-6 rotate-[30deg]" />
                </div>
            </a>
        </section>

        <!-- Portofolio Slider Section -->
        <section class="w-screen h-screen font-Montserrat flex items-center">
            <div class="glide overflow-hidden">
                <div class="glide__track" data-glide-el="track">
                    <ul class="glide__slides">
                        @foreach ($portofolio_list as $index => $portofolio)
                        <li class="glide__slide flex justify-center items-center">
                            <div class="h-126 w-91 bg-white dark:bg-[#383838] rounded-2xl shadow-[9px_9px_21px_3px_#00000040] dark:shadow-[9px_9px_21px_3px_#00F6FF40] transition duration-300 flex flex-col my-15">
                                <img src="{{ $portofolio['img'] }}" alt="Proyek {{ $index }}" class="w-full h-65 object-cover object-top bg-[#D9D9D9] dark:bg-[#797979] rounded-t-2xl">
                                <div class="p-4 flex flex-col">
                                    <h3 class="text-[26px] font-bold dark:text-white mb-2">{{ $portofolio['judul'] }}</h3>
                                    <p class="h-30 text-[16px] font-medium text-justify dark:text-white mb-4 overflow-hidden">
                                        {{ $portofolio['deskripsi'] }}
                                    </p>
                                    <a href="{{ $portofolio['url'] }}" class="self-end text-[16px] font-medium text-[#0063BF] hover:underline focus:outline-none focus:ring-2 focus:ring-indigo-500">Lihat Selengkapnya</a>
                                </div>
                            </div>
                        </li>
                        @endforeach
                    </ul>

                    <div class="glide__bullets flex justify-center gap-2" data-glide-el="controls[nav]">
                        @foreach ($portofolio_list as $index => $portofolio)
                        <button id="glide-bullet-{{ $index }}" class="glide__bullet w-4 h-4 rounded-full bg-[#828282]" data-glide-dir="={{ $index }}"></button>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
    </div>

</x-main-layout>