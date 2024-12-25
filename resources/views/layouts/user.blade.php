<html lang="en">

@include('includes.head')

<body class="bg-gray-100">
    <div x-data="{ open: true }" class="flex min-h-screen md:flex">
        <!-- Sidebar -->
        @include('includes.sidebar')
        <!-- Main Content -->
        <div class="flex-1">
            @include('includes.headeruser')
            <main class="flex-grow p-6">
                @yield('content')
            </main>
            @include('includes.footer')
        </div>
        @include('includes.scripts')
    </div>
</body>
</html>
