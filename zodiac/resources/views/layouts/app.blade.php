<!DOCTYPE html>
<html>
    <head>
        @include('layouts.parts.header')
    </head>
    <body>
        <header>
            @include('layouts.parts.nav')
        </header>
        <main>
            @yield('content')
        </main>
        <footer>
            @include('layouts.parts.footer')
        </footer>
        @stack('scripts')
    </body>
    <script src="{{ asset('js.js') }}"></script>
</html>