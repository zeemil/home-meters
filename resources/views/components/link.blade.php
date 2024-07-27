@props(['url'])


   <a href="{{ $url }}"
   class="underline text-blue-900 hover:text-blue-200">
        {{ $slot }}
    </a>
