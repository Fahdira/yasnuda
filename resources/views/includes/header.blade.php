<header class="bg-white shadow-md">
    <div class="container mx-auto flex justify-between items-center py-4 px-6">
        <div class="flex items-center">
            <img alt="Logo" class="mr-3" height="40" src="{{ asset('images/logo/logo.png') }}" width="40"/>
            <span class="text-lg font-semibold">Yayasan Nuurul Hudaa Al-Isma'iliyyah</span>
        </div>
        <div class="flex items-center space-x-4">
            <a class="text-gray-600 hover:text-gray-800" href="{{ route('home') }}"">Beranda</a>
            <a class="text-gray-600 hover:text-gray-800" href="{{ route('blog') }}">Blog</a>
            <a class="text-gray-600 hover:text-gray-800 cursor-pointer" id="kontak">Kontak</a>
            <a class="bg-teal-500 hover:bg-teal-600 text-white px-4 py-2 rounded" href="{{ route('register') }}">Daftar</a>
        </div>
    </div>

    <script>
        document.getElementById('kontak').addEventListener('click', function () {
            // Scroll to the bottom of the page
            window.scrollTo({
                top: document.body.scrollHeight,
                behavior: 'smooth' // Smooth scrolling
            });
        });
    </script>

</header>
