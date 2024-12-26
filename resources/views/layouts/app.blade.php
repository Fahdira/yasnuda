<html lang="en">
@include('includes.head')

<body class="font-sans">
    <!-- Header -->
    @include('includes.header')
    <!-- Main Content -->
    <main class="bg-white">
        @yield('content')
    </main>
    <!-- Footer -->
    @include('includes.about')
    @include('includes.footer')
</body>
</html>
