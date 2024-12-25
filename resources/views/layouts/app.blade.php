<html lang="en">
@include('includes.head')

<body class="font-sans">
    <!-- Header -->
    @include('includes.header')
    <!-- Main Content -->
    <main class="bg-gray-100">
        @yield('content')
    </main>
    <!-- Footer -->
    @include('includes.about')
    @include('includes.footer')
</body>
</html>
