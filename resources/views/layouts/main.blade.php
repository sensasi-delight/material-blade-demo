<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="author" content="Zain Adam">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

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
    @yield('main')
  </main>
</body>
</html>