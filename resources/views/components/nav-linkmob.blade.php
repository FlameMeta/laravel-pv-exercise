@props(['active' => false])

<a {{ $attributes }} 
   class="{{ $active ? 'bg-gray-950/50 text-white' : 'block text-gray-300 hover:bg-white/5 hover:text-white' }} 
           rounded-md px-3 py-2 text-base font-medium" 
   aria-current="{{ request()->is('/') ? 'page' : false }}">
    {{ $slot }}
</a>
