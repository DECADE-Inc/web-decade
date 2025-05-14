<div class="mt-28 md:mt-42 mb-8 min-h-screen sm:relative">
    <form method="POST" action="{{ url('/kontak') }}" class="max-w-2xs md:max-w-sm mx-auto">
        @csrf
        <h2 class="text-2xl text-center mb-4 font-bold tracking-tight">
            Hubungi Kami ✈️
        </h2>
        <div class="mb-5">
            <label for="base-input"
                class="block mb-2 text-sm font-bold text-gray-900 dark:text-white font-Hammersmith-One">Nama</label>
            <input type="text" id="base-input" name="full-name"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 input-shadow"
                placeholder="Udin Maxwell">
            @error('full-name')
                <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-5">
            <label for="email"
                class="block mb-2 text-sm font-bold text-gray-900 dark:text-white font-Hammersmith-One">Email</label>
            <div class="relative">
                <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                    <x-heroicon-o-envelope class="w-4 h-4 text-gray-500 dark:text-gray-400" />
                </div>
                <input type="text" id="email" name="email"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 input-shadow"
                    placeholder="udin@example.com">
            </div>
            @error('email')
                <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
            @enderror

        </div>
        <div class="mb-5">
            <label for="phone_number"
                class="block mb-2 text-sm font-bold text-gray-900 dark:text-white font-Hammersmith-One">Nomor
                Telepon</label>
            <div class="relative">
                <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                    <x-heroicon-o-phone class="w-4 h-4 text-gray-500 dark:text-gray-400" />
                </div>
                <input type="text" id="phone_number" name="phone_number"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 input-shadow"
                    placeholder="08123xxx">
            </div>
            @error('phone_number')
                <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
            @enderror

        </div>
        <div class="mb-5">
            <label for="message"
                class="block mb-2 text-sm font-bold text-gray-900 dark:text-white font-Hammersmith-One">Pesan</label>
            <textarea id="message" rows="4" name="message"
                class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 input-shadow"
                placeholder="Masukkan Pesan..."></textarea>
            @error('message')
                <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
            @enderror
        </div>
        <button type="submit"
            class="w-full text-white bg-black hover:bg-black/80 focus:ring-4 focus:ring-blue-300 font-bold rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Kirim</button>
    </form>
    <div class="absolute -z-10 left-0 top-0">
        <img src="/img/kontak/kiri.png" class="block w-[80px] lg:w-[250px] object-contain" alt="background kontak kiri">
    </div>
    <div class="absolute -z-10 right-0 bottom-0">
        <img src="/img/kontak/kanan.png" class="block w-[80px] lg:w-[250px] object-contain" alt="background kontak kiri">
    </div>
</div>
