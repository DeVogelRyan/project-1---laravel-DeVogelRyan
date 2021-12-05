@include('layouts.head')

<body>
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
                <div class='mt-5 flex items-center'>
                    <img src='{{$post->user->profile_img}}' class='rounded-full h-10 w-10'>
                    <div class="ml-3">
                        <h3 class="text-sm sm:text-base font-semibold"> {{$post->user->name}} </h2>
                            {{-- toDateString() removes the time--}}
                            <p class="text-sm sm:text-base text-gray-500"> updated at {{$post->updated_at->toDateString()}} </p>
                    </div>
                </div>
            </div>
        </div>

        @endforeach
    </div>
    <script src="{{ '../js/nav.js' }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
