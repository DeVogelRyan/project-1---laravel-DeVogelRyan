@include('layouts.head')

<body>
    @include('layouts.nav')
    <h1 class="italic font-bold ml-4 text-2xl sm:text-3xl mb-5 mt-4 sm:mt-5 text-indigo-500">Posts</h1>
    <div class="flex-col md:flex-row justify-center items-center p-2 sm:px-10">
        @foreach($posts as $post)
        <div class="flex flex-col md:flex-row justify-center items-center w-full mb-5 ">
            <div class="w-full bg-white rounded-xl p-5 shadow-2xl">
                <h1 class="text-base sm:text-xl font-bold mb-2 text-lg break-words"> {{$post->title}}
                </h1>
                <p class="text-base sm:text-lg text-md break-words mb-4"> {{$post->content}}
                </p>
                <img class="sm:w-4/5 md:max-w-md lg:max-w-md" src="{{ asset('storage/postsImg/'.$post->file) }}"
                    alt="storyImg">
                <div class='mt-5 mb-5 flex items-center'>
                    <img src='{{$post->user->profile_img}}' class='rounded-full h-10 w-10'>
                    <div class="ml-3">
                        <h3 class="text-sm sm:text-base font-semibold"> {{$post->user->name}} </h2>
                            {{-- toDateString() removes the time--}}
                            <p class="text-sm sm:text-base text-gray-500"> updated at {{$post->updated_at->toDateString()}} </p>
                    </div>
                </div>
                @if(Auth::user()->id == $post->user->id)
                <div>
                    <a href="{{ route('editPostId', ["id" => $post->id] ) }}"
                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded">
                        edit
                    </a>
                    <a href="{{ route('deletePostId', ["id" => $post->id])}}" onclick="return confirm('Are you sure?')"
                        class="bg-red-500 ml-2 hover:bg-red-700 text-white font-bold py-2 px-4 border border-red-700 rounded">Delete</a>
                </div>
                @endif
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
