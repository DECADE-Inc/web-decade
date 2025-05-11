@props(['active' => false])


<li>
    <a {{ $attributes }}
        class="{{ $active ? 'bg-black/40 text-black dark:bg-white/40' : 'bg-transparent text-black/70' }} block py-2 px-3 rounded-full dark:text-white"
        aria-current="page">
        {{ $slot }}
    </a>
</li>
