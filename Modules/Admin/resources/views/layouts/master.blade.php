<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="referrer" content="always">
    <link rel="canonical" href="">

    <meta name="description" content="">

    <title></title>

    @vite('resources/css/app.css')
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
  </head>

  <body>
    @include('admin::layouts.navbar')

    @yield('body')
  </body>

  <style>
    body, html {
      background-image: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
      height: 100%;
    }
  </style>
</html>