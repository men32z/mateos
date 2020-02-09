@php
  if(!isset($settings)) $settings = [];
@endphp
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    @if (isset($settings['grecaptcha']) && $settings['grecaptcha'])
      <script src='https://www.google.com/recaptcha/api.js?render=6Lc2e3gUAAAAALTIDINpKs-UYUHrTi4kDeRzTzbF'></script>
    @endif
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div {{isset($settings['disable_app_vue']) && $settings['disable_app_vue'] ? '' : 'id=app'}}>
         @include('layouts.header')

         @if (!isset($settings['menu_web']) || $settings['menu_web'])
           @include('layouts.menu_web')
         @endif

         @if (isset($settings['menu_admin']) && $settings['menu_admin'])
           @include('layouts.menu_admin')
         @endif


        <main class="py-4">
            @yield('content')
        </main>
        @include('layouts.footer')
    </div>
    @yield('footer')
</body>
</html>
