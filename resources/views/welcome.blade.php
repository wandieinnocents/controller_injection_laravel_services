<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel2</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

</head>

<body class="font-sans antialiased dark:bg-black dark:text-white/50">


    <p>TRANSLATION</p>
    <h1>{{ __('messages.welcome') }}</h1>
    <h1>{{ __('messages.greeting') }}</h1>
    <p>{{ __('messages.goodbye') }}</p>
    <button>{{ __('messages.need_help') }}</button>
</body>

</html>
