<html lang="en">

@include('includes.head')

<body class="bg-white">
    <div x-data="{ open: true }" class="flex min-h-screen md:flex">
        <!-- Sidebar -->
        @include('includes.sidebar')
        <!-- Main Content -->
        <div class="flex-1 flex flex-col min-h-screen">
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
