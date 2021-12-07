@include('layouts.head')

<body>
    @include('layouts.nav')


    <div class="flex-col md:flex-row justify-center items-center p-2 sm:p-10">
        <h1 class="italic font-bold ml-4 sm:ml-0 text-2xl sm:text-3xl mb-10 mt-4 sm:mt-2 text-indigo-500">Latest News</h1>
        @foreach($latestNews as $singlelatestNews)
        <div class="flex flex-col md:flex-row justify-center items-center w-full mb-5 ">
            <div class="w-full bg-white rounded-xl p-5 shadow-2xl">
                <h1 class="text-base sm:text-xl font-bold mb-2 text-lg break-words"> {{$singlelatestNews->title}}
                </h1>
                <p class="text-base sm:text-xl text-md break-words mb-4"> {{$singlelatestNews->content}}
                </p>
                <img class="sm:w-4/5 md:max-w-md lg:max-w-md" src="{{ asset('storage/LatestImg/'.$singlelatestNews->file) }}"
                    alt="storyImg">
                <div class='mt-5 mb-5 flex items-center'>
                    <div class="ml-3">
                        <h3 class="text-sm sm:text-base font-semibold"> {{$singlelatestNews->user->name}} </h2>
                            {{-- toDateString() removes the time--}}
                            <p class="text-sm sm:text-base text-gray-500"> updated at {{$singlelatestNews->updated_at->toDateString()}} </p>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>


    @if(session('success'))
    @include('modules.succesPopup')
    @endif

    @error('error')
    @include('modules.errorPopup')
    @endif

    @include('layouts.footer')
    <script src="{{ '../js/nav.js' }}"></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.0.1/dist/alpine.js" defer></script>
