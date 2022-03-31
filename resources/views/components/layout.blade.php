<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>{{ isset($title) ? "$title | ".config('app.name') : config('app.name') }}</title>

        <livewire:styles />
        
        <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    </head>
    <body>
        <div x-data="app" :class="{ 'dark': themeColors == 'dark' }">
            {{ $slot }}

            <livewire:components.modal />
        </div>

        <livewire:scripts />
        <script src="{{ mix('js/app.js') }}"></script>
    </body>
</html>
