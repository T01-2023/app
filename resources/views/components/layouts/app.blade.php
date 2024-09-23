<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <title>{{ $title ?? 'Page Title' }}</title>
     @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="min-h-screen antialiased">

     <x-navbar/>

     <x-mediaqueries/>

     <main class="max-w-screen-xl mx-auto px-8 py-20">
          {{ $slot }}
     </main>

     <x-footer />

</body>
</html>
