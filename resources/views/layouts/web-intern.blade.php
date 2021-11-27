<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @component('components.css')@endcomponent
    <title>@yield('title')</title>
</head>
<body>
    @component('components.nav-menu')@endcomponent
    @component('components.js')@endcomponent
    @yield('content')
    @yield('js')
    @component('components.validation')@endcomponent
</body>
</html>
