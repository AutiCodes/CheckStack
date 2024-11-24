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
      @if (Session::has('success'))
        <div class="fixed bottom-0 right-0 me-2 mb-2">
          <div id="toast-success" class="flex items-center w-full max-w-xs p-4 space-x-4 rtl:space-x-reverse text-gray-500 bg-white divide-x rtl:divide-x-reverse divide-gray-200 rounded-lg shadow dark:text-gray-400 dark:divide-gray-700 dark:bg-gray-800" role="alert">
            <img src="/media/check.png" class="h-10 float-left me-2">
            <div class="ps-4 text-sm font-normal ms-2">{{ Session::get('success') ?? 'success' }}</div>
          </div>
        </div>
        <script>
          var div = document.getElementById('toast-success');
          div.style.display = 'block';

          setTimeout(() => {
              div.style.display = 'none';
          }, 5000);
        </script>
      @endif

      @if ($errors->any())
        <div class="fixed bottom-0 right-0 me-2 mb-2">
          <div id="toast-simple" class="flex items-center w-full max-w-xs p-4 space-x-4 rtl:space-x-reverse text-gray-500 bg-white divide-x rtl:divide-x-reverse divide-gray-200 rounded-lg shadow dark:text-gray-400 dark:divide-gray-700 dark:bg-gray-800" role="alert">
            <img src="/media/alert.png" class="h-10 me-2">
            @foreach ($errors->all() as $error)
              <li><div class="ps-4 text-sm font-normal">{{ Session::get('error') }} {{ $error }}</div></li><br>
            @endforeach
          </div>
        </div>

        <script>
          const div = document.getElementById('toast-danger')
          div.style.display = 'block';

          setTimeout(() => {
              div.style.display = 'none';
          }, 3000);
        </script>
      @endif
    </div>

  </body>

  <style>
    body, html {
      background-image: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
      height: 100%;
    }
  </style>
</html>