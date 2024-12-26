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
                <a class="{{ Route::is('dashboard') ? 'bg-teal-700' : '' }} flex items-center p-2 text-white hover:bg-teal-900 rounded" href="{{ route('dashboard') }}">
                    <i class="fas fa-tachometer-alt mr-2"></i>Dashboard
                </a>
                <a class="{{ Route::is('informasi') ? 'bg-teal-700' : '' }} flex items-center p-2 text-white hover:bg-teal-900 rounded" href="{{ route('informasi') }}">
                    <i class="fas fa-file-alt mr-2"></i>Informasi Pendaftaran
                </a>
                <a class="{{ Route::is(['profile','edit']) ? 'bg-teal-700' : '' }} flex items-center p-2 text-white hover:bg-teal-900 rounded" href="{{ route('profile') }}">
                    <i class="fas fa-user mr-2"></i>Profile
                </a>
            </li>
          <li class="mb-4">
           <span class="block text-gray-400 uppercase text-xs mb-2">
            Daftar
           </span>
           @if ($siswa && $siswa->count() > 0)
                @php
                    $displayed = false; // Flag to track if "Daftar Baru" is shown
                @endphp
                @foreach ($siswa as $s)
                    @php
                        $rutes = [
                            'Tahap 1' => 'dashboard',
                            'Tahap 2' => 'dashboard',
                            'Tahap 3' => 'dashboard',
                            'Diperiksa' => 'daftar1',
                            'Diterima' => 'daftar1',
                        ];
            
                        $modals = [
                            'Tahap 1' => 'regist-btn',
                            'Tahap 2' => 'regist-btn',
                            'Tahap 3' => 'regist-btn',
                            'Diperiksa' => '#',
                            'Diterima' => '#', 
                        ];
            
                        $rute = $rutes[$s->status] ?? null;
                        $modal = $modals[$s->status] ?? null;
                    @endphp
                    @if ($rute && $modal && !$displayed)
                        <a class="{{ Route::is('daftar1') ? 'bg-teal-700' : '' }} flex items-center p-2 text-white hover:bg-teal-900 rounded" href="{{ route($rute) }}" id="{{ $modal }}">
                            <i class="fas fa-plus mr-2"></i> Daftar Baru
                        </a>
                        @php
                            $displayed = true; // Set the flag to true to prevent further rendering
                        @endphp
                    @endif
                @endforeach
            @else
                <a class="{{ Route::is('daftar1') ? 'bg-teal-700' : '' }} flex items-center p-2 text-white hover:bg-teal-900 rounded" href="{{ route('daftar1') }}">
                    <i class="fas fa-plus mr-2"></i> Daftar Baru
                </a>
            @endif
       

            @foreach ($siswa as $s)
                @php
                    $routes = [
                        'Tahap 1' => 'daftar2',
                        'Tahap 2' => 'daftar3',
                        'Tahap 3' => 'daftar4',
                    ];
            
                    $route = $routes[$s->status] ?? null;
                @endphp
            
                @if ($route)
                    <a class="{{ Route::is(['edit2','edit3','daftar4']) ? 'bg-teal-700' : '' }} flex items-center p-2 text-white hover:bg-teal-900 rounded" href="{{ route($route) }}">
                        <i class="fas fa-user-graduate mr-2"></i>
                        {{ $s->nama }}
                    </a>
                    @php
                        session(['id' => $s->NIK_siswa]);
                    @endphp
                @else
                    <a class="flex items-center p-2 text-white hover:bg-teal-900 rounded" href="{{ route('siswa', ['id' => $s->NISN]) }}">
                        <i class="fas fa-user-graduate mr-2"></i>
                        {{ $s->nama }}
                    </a>
                @endif
            @endforeach
          </li>
         </ul>
        </nav>
    </aside>
