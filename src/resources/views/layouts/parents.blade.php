<!-- 親となるテンプレート -->
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    @include('components.header')
    <div class="text-main">
        @yield('content')
    </div>
    @include('components.footer')
</body>

</html>
