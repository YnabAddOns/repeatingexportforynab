<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <title>{{ config('app.name', 'Repeating Export (For YNAB)') }}</title>

        <link
            rel="icon"
            type="image/x-icon"
            href="{{ asset('storage/logo.png') }}"
        />

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net" />
        <link
            href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap"
            rel="stylesheet"
        />

        <!-- Styles -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Scripts -->
        <script
            src="https://js.sentry-cdn.com/4524f8afb34bedae73fb214b0e9a09e7.min.js"
            crossorigin="anonymous"
        ></script>
    </head>

    <body class="antialiased">
        <div
            class="bg-dots-darker dark:bg-dots-lighter relative flex min-h-screen flex-col items-center justify-center bg-gray-100 bg-center selection:bg-red-500 selection:text-white dark:bg-gray-900 dark:text-white"
        >
            {{ $slot }}
        </div>
        <script
            src="https://browser.sentry-cdn.com/8.47.0/bundle.min.js"
            integrity="sha384-F1SqswdlOeNYRWB3oa9RUmKftSyuOow0eg62rQ02yu79aQrHRFj4n6JMD8B1oHlO"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
