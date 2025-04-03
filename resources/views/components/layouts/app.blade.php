<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" x-data="{ darkMode: JSON.parse(localStorage.getItem('darkMode')) || false }" x-init="$watch('darkMode', value => { localStorage.setItem('darkMode', JSON.stringify(value)); document.documentElement.classList.toggle('dark', value); }); document.documentElement.classList.toggle('dark', darkMode);" :class="{ 'dark': darkMode }">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        @vite('resources/css/app.css')
        @vite('resources/js/app.js')

        <title>{{ $title ?? 'Page Title' }}</title>
    </head>
    <body>
        @include('livewire.nav', ['darkMode' => 'darkMode'])
        <main
        :class="{ 'bg-gray-900 text-white ': darkMode, ' bg-white text-gray-900': !darkMode }">
             {{ $slot }}
        </main>
        @include('livewire.footer', ['darkMode' => 'darkMode'])
    </body>
</html>
