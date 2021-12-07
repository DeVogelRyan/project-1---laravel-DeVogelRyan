@include('layouts.head')

@include('layouts.nav')
<div class="flex flex-col">

    <p>{{ Auth::user()->name }}</p>

    <p>You are logged in as a user </p>



</div>


@include('layouts.footer')
<script src="{{ mix('js/app.js') }}"></script>
<script src="{{ 'js/nav.js' }}"></script>
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.0.1/dist/alpine.js" defer></script>
