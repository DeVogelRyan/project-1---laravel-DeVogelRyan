@include('layouts.head')

@include('layouts.nav')

{{ Auth::user()->name }}
You are logged in as a Admin


<script src="{{ mix('js/app.js') }}"></script>
<script src="{{ 'js/nav.js' }}"></script>
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.0.1/dist/alpine.js" defer></script>
