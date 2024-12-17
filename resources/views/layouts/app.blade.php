<html lang="en">

@include('includes.head')

<body class="font-sans">
    <!-- Header -->
    @include('includes.header')
    <!-- Main Content -->
    <main class="bg-gray-100 py-16 px-6">
        @yield('content')
    </main>
    <!-- Footer -->
    @include('includes.footer')
</body>
</html>
