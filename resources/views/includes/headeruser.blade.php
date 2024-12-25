<div class="bg-white flex justify-between items-center p-6">
    <h1 class="text-2xl font-semibold">
        PPDB Online Yayasan Nuurul Hudaa
    </h1>
    <div class="flex items-center space-x-4">
<<<<<<< HEAD
     <span>
        <b>
            {{ $users->email }}
        </b>
     </span>
     <a class="bg-teal-500 text-white px-4 py-2 rounded" id="logout-btn" href="#">
      Logout
     </a>
     <form id="logout-form" action="{{ route('logout') }}" method="GET" style="display: none;">
        @csrf
    </form>
=======
        <span>
            Email user
        </span>
        <button class="bg-teal-500 hover:bg-teal-600 text-white px-4 py-2 rounded">
            Logout
        </button>
>>>>>>> 48e8a678e2303bcfae6a64f5950a9a49c768f074
    </div>
</div>
