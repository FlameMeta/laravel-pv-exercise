@props(['active' => false])

{{-- Atribut active="active" muncul di HTML ketika menggunakan komponen navigasi.

Solusi:
Ubah active menjadi props di komponen Blade menggunakan @props(['active' => false]).
Dengan ini, atribut active hanya digunakan untuk logika, tidak tampil di HTML. --}}

<a {{ $attributes }} class="{{ $active ? 'bg-gray-950/50 text-white' : 'text-gray-300 hover:bg-white/5 hover:text-white' }} 
    rounded-md px-3 py-2 text-sm font-medium" aria-current="{{ request()->is('/') ? 'page' : false }}">{{ $slot }}</a>