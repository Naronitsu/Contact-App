<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    </head>
    <body class="antialiased">
        <div>
                <a href="{{route('contacts.index') }}">All Contacts</a>
                <a href="{{route('contacts.create') }}">Create Contacts</a>
                <a href="{{route('contacts.show', 1) }}">Show Contact</a>
        </div>
    </body>
</html>
