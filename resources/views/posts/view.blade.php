@include('layouts.head')

<body x-data="{showDeleteModal:false}" x-bind:class="{ 'model-open': showDeleteModal }">
    @include('layouts.nav')


    <div class="flex-col md:flex-row justify-center items-center p-2 sm:p-10">
        @foreach($posts as $post)
        <div class="flex flex-col md:flex-row justify-center items-center w-full mb-5 ">
            <div class="w-full bg-white rounded-xl p-5 shadow-2xl">
                <h1 class="text-base sm:text-xl font-bold mb-2 text-xl break-words"> {{$post->title}}
                </h1>
                <p class="text-base sm:text-xl break-words mb-4"> {{$post->content}}
                </p>
                <img class="sm:w-4/5 md:max-w-md lg:max-w-md" src="{{ asset('storage/uploads/'.$post->file) }}"
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
                    <button @click.="showDeleteModal = true" type="button"
                        class="bg-red-500 ml-2 hover:bg-red-700 text-white font-bold py-2 px-4 border border-red-700 rounded">Delete</button>
                    <div x-show="showDeleteModal" tabindex="0"
                        class="z-40 overflow-auto left-0 top-0 bottom-0 right-0 w-full h-full fixed">
                        <div @click.away="showDeleteModal = false" class="z-50 relative p-3 mx-auto my-0 max-w-full"
                            style="width: 500px;">
                            <div class="bg-white rounded shadow-lg border flex flex-col overflow-hidden px-10 py-10">
                                <div class="text-center">
                                    <span
                                        class="material-icons border-4 rounded-full p-4 text-red-500 font-bold border-red-500 text-4xl">
                                        close
                                    </span>
                                </div>
                                <div class="text-center py-6 text-2xl text-gray-700">Are you sure ?
                                </div>
                                <div class="text-center font-light text-gray-700 mb-8">
                                    Do you really want to delete this?<br>
                                    This process cannot be undone.
                                </div>
                                <div class="flex justify-center">
                                    <button @click.="showDeleteModal = false"
                                        class="bg-gray-300 text-gray-900 rounded hover:bg-gray-200 px-6 py-2 focus:outline-none mx-1">Cancel</button>
                                    <a href="{{ route('deletePostId', ["id" => $post->id] ) }}"
                                        class="bg-red-500 text-gray-200 rounded hover:bg-red-400 px-6 py-2 focus:outline-none mx-1">Delete</a>
                                </div>
                            </div>
                        </div>
                    </div>
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

    <script src="{{ '../js/nav.js' }}"></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.0.1/dist/alpine.js" defer></script>
