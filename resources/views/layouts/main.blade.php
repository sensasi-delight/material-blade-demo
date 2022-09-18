<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Zain Adam">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.6.0/styles/atom-one-dark.min.css">

    <title>
        Material Blade
        @hasSection('title')
            - @yield('title')
        @endif
    </title>

    <x-MaterialBlade::_assets />

</head>

<body>
    <nav>
        <a href="/">Home</a>
    </nav>
    <main>
        @hasSection('title')
            <h1>@yield('title')</h1>
        @endif
        @yield('main')
    </main>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.6.0/highlight.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.6.0/languages/xml.min.js"></script>

    <script>
        hljs.highlightAll();
    </script>
</body>

</html>
