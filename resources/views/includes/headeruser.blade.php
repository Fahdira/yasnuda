<div class="bg-white flex justify-between items-center p-6">
    <h1 class="text-2xl font-semibold">
        PPDB Online Yayasan Nuurul Hudaa
    </h1>
    <div class="flex items-center space-x-4">
     <span>
        <b>
            {{ $users->email }}
        </b>
     </span>
     <a class="bg-teal-500 text-white px-4 py-2 rounded" id="logout-btn" href="#">Logout <i class="mx-1 fas fa-sign-out-alt"></i></a>
     <form id="logout-form" action="{{ route('logout') }}" method="GET" style="display: none;">
        @csrf
    </form>
    </div>
</div>
