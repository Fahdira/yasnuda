    <aside :class"{ '-translate-x-full' : !open }"
        class="z-10 bg-gray-900 text-white w-64 p-4 absolute inset-y-0 left-0 md:relative -translate-x-full md:-translate-x-0 overflow-y-auto transition ease-in-out duration-200">
        <div class="flex items-center justify-between mb-6">
            <div class="flex-1 flex justify-center">
                <img alt="School Logo" class="h-12 w-12" height="50" src="{{ asset('images/logo/logo.png') }}"
                    width="50" />
            </div>
            <button type="button" @click="open = !open" class="md:hidden p-1 text-white hover:bg-gray-700 rounded">
                <i class="fas fa-times"></i>
            </button>
        </div>
        <nav>
            <ul>
                <li class="mb-4">
                    <a class="flex items-center p-2 text-white hover:bg-gray-700 rounded"
                        href="{{ route('dashboard') }}">
                        <i class="fas fa-tachometer-alt mr-2">
                        </i>
                        Dashboard
                    </a>
                    <a class="flex items-center p-2 text-white hover:bg-gray-700 rounded" href="{{ route('profile') }}">
                        <i class="fas fa-user mr-2">
                        </i>
                        Profile
                    </a>
                </li>
                <li class="mb-4">
                    <span class="block text-gray-400 uppercase text-xs mb-2">
                        Daftar
                    </span>
                    <a class="flex items-center p-2 text-white hover:bg-gray-700 rounded" href="{{ route('daftar1') }}">
                        <i class="fas fa-plus mr-2">
                        </i>
                        Daftar Baru
                    </a>
                    <a class="flex items-center p-2 text-white hover:bg-gray-700 rounded" href="{{ route('siswa') }}">
                        <i class="fas fa-user-graduate mr-2">
                        </i>
                        Siswa 1
                    </a>
                </li>
            </ul>
        </nav>
    </aside>
