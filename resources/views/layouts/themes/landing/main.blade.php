<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<head>
    @include('layouts.partials.landing.head')
   
</head>

<body class="bg-maria-gradient">
    @yield('content')
    @include('layouts.partials.landing.script')
</body>

</html>F