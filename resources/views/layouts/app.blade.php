<html lang="en">
@include('includes.head')

<div id="fb-root"></div>
<script async defer crossorigin="anonymous"
    src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v18.0"
    nonce="YOUR_NONCE"></script>


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
