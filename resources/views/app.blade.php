<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel + Vue + TypeScript</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        @vite(['resources/scss/main.scss', 'resources/js/app.ts'])
    </head>

    <body>
        <div id="app">
            <centered-layout>
                <template #content>
                    <router-view></router-view>
                </template>
            </centered-layout>
        </div>
    </body>
</html>
