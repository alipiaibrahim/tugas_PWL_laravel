<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title')</title>
    @include('includes.head')
</head>
<body>
    @include('includes.sidebar')

    <header>
        @include('includes.header')
    </header>
    <nav id="navbar">
        @yield('navbar')
    </nav>

    <div id="content">
        @yield('content')
    </div>

    <footer>
        @include('includes.footer')
        @yield('foot')
    </footer>
    {{-- @yield('js') --}}
</body>
</html>