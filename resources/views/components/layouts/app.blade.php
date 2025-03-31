<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        @vite('resources/css/app.css')

        <title>{{ $title ?? 'Page Title' }}</title>
        <style>
            ::-webkit-scrollbar {
                width: 8px;
            }
            ::-webkit-scrollbar-thumb {
                background-color: #7646e5;
                border-radius: 6px;
            }
            ::-webkit-scrollbar-thumb:hover {
                background-color: #6b38ca;
            }
        </style>
    </head>
    <body>
        @include('livewire.nav')

        <main class="mb-2">
            {{ $slot }}
        </main>
        @include('livewire.footer')

    </body>
</html>
