@include('layouts.head')

<body>
    @include('layouts.nav')
    <h1 class="italic font-bold ml-4 text-2xl sm:text-3xl mb-5 mt-4 sm:mt-5 text-indigo-500">Credits:</h1>

    <div class="p-5 flex flex-col">
        <h2 class="text-lg">This is developed by De Vogel Ryan</h2>
        <a class="text-indigo-500 font-bold hover:underline" target="_blank" href="https://github.com/DeVogelRyan">My github profile</a>
        <a class="text-indigo-500 font-bold hover:underline" target="_blank" href="https://devogelryan.github.io/">My portefolio website</a>
        <img class="w-2/6" src="../img/profile.png">
    </div>



    @include('layouts.footer')
    <script src="{{ mix('js/app.js') }}"></script>
    <script src="{{ '../js/nav.js' }}"></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.0.1/dist/alpine.js" defer></script>
